#!/usr/bin/env sh

# === Variables ===

BASE_PATH=$(dirname "$0")
ROOT_PATH="$BASE_PATH/../.."

# === Exports ===

export BUILD_PATH="$ROOT_PATH/.build"
export BIN_PATH="$BUILD_PATH/bin"
export VENDOR_PATH="$BUILD_PATH/vendor"
export TESTING_FRAMEWORK_BUILD_PATH="$VENDOR_PATH/typo3/testing-framework/Resources/Core/Build";

export typo3databasehost="localhost";
export typo3DatabaseUsername="root";
export typo3DatabasePassword="";
export typo3DatabaseName="t3v_base";

# === Commands ===

"$BIN_PATH/phpunit" --colors --configuration "$TESTING_FRAMEWORK_BUILD_PATH/FunctionalTests.xml" "$ROOT_PATH/Tests/Functional"

# find "Tests/Functional" -wholename "*Test.php" | parallel --gnu "$BIN_PATH/phpunit --colors --configuration $TESTING_FRAMEWORK_BUILD_PATH/FunctionalTests.xml {}"

# Try to keep environment pollution down, EPA loves us:
unset BASE_PATH ROOT_PATH
