# [Scrutinize WP](README.md) / Architecture

-   [Code Structure](#code-structure)

## Code Structure

### `/php/Entities`

### `/php/Gateways`

Encapsulated external dependencies, this includes WordPress itself. All of our application core should only interact with these Gateways via their interface.

### `/php/Ports/API`

https://developer.wordpress.org/rest-api/

### `/php/Ports/Blocks`

https://wordpress.org/support/article/blocks/

### `/php/Ports/CLI`

https://wp-cli.org/

### `/php/Ports/Hooks`

https://developer.wordpress.org/plugins/hooks/

### `/php/Ports/ShortCodes`

https://developer.wordpress.org/plugins/shortcodes/

### `/php/Ports/Widgets`

https://developer.wordpress.org/themes/functionality/widgets/

### `/php/Repositories`

### `/php/UseCases`
