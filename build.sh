#!/usr/bin/env bash
set -euo pipefail

SRC="$(pwd)"
DEST="$SRC/dist"

# Clean dist
rm -rf "$DEST"
mkdir -p "$DEST"

# 1) Copy only static assets (adjust as needed)
rsync -av --delete \
  --include='css/***' \
  --include='js/***' \
  --include='images/***' \
  --include='fonts/***' \
  --exclude='*.php' \
  --exclude='*/' \
  "$SRC/" "$DEST/" || true

# If you have other public folders (e.g., assets/), include them similarly:
# rsync -av --delete "$SRC/assets/" "$DEST/assets/"

# 2) Render every .php file to a mirrored .html path in dist
#    This preserves subdirectories like components/pages/about.php -> dist/components/pages/about.html
while IFS= read -r -d '' file; do
  rel="${file#$SRC/}"                          # path relative to repo root
  out="$DEST/${rel%.php}.html"                 # change extension
  mkdir -p "$(dirname "$out")"
  php "$file" > "$out"
  echo "Rendered $rel -> ${rel%.php}.html"
done < <(find "$SRC" -type f -name '*.php' -print0)

# 3) Optional: remove any leftover .php copied by mistake
find "$DEST" -type f -name '*.php' -delete

echo "Build complete. Static site in $DEST"