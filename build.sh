#!/usr/bin/env bash
set -euo pipefail

SRC="$(pwd)"
DEST="$SRC/dist"

# Clean dist
rm -rf "$DEST"
mkdir -p "$DEST"

# 1) Copy static assets (adjust folders as needed)
rsync -av --delete \
  --include='css/***' \
  --include='js/***' \
  --include='images/***' \
  --include='fonts/***' \
  --exclude='*.php' \
  --exclude='*' \
  "$SRC/" "$DEST/"

# 2) Render every .php file to a mirrored .html path in dist
#    Example: components/pages/carriere.php -> dist/components/pages/carriere.html

while IFS= read -r -d '' file; do
  rel="${file#$SRC/}"              # relative path from repo root
  out="$DEST/${rel%.php}.html"
  mkdir -p "$(dirname "$out")"
  (
    cd "$(dirname "$file")"
    # Auto-prepend config.php from the repo root for every page
    php -d auto_prepend_file="$SRC/config.php" "$(basename "$file")"
  ) > "$out"
  echo "Rendered $rel -> ${rel%.php}.html"
done < <(find "$SRC" -type f -name '*.php' -print0)


# 3) Make sure no .php files end up published
find "$DEST" -type f -name '*.php' -delete

echo "Build complete. Static site in $DEST"
``