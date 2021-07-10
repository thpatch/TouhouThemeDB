# Touhou Theme Database (MediaWiki extension)

Provides data on all canon Touhou music themes:

* Original Japanese titles, for deduplicated translation via the [Translate extension](https://www.mediawiki.org/wiki/Extension:Translate),
* as well as information on their arrangement and duplicate relations.

This data can either be queried though the `{{tdb}}` magic word on MediaWiki pages, or via a REST API.

## `{{tdb}}` hooks

### `{{tdb:counts|p}}`

Returns a certain theme count, depending on `p`:

| `p`              | Number                                                       |
|------------------|--------------------------------------------------------------|
| `total`          | Total number of themes including duplicates and arrangements |
| `normalized`     | `total` minus duplicates                                     |
| `unique`         | `total` minus duplicates and arrangements                    |
| (Release ID)     | Number of themes contained in the given release              |

### `{{tdb:relation|theme_id}}`

Returns the relation type of `theme_id`: `a` for arrangements, `d` for duplicates, or an empty string for unique themes.

### `{{tdb:sourcecount|theme_id}}`

Returns the number of source themes that `theme_id` is an arrangement or duplicate of.

### `{{tdb:source|theme_id|n}}`

Returns the `n`th source theme of `theme_id`. `n` must be < `{{tdb:sourcecount|theme_id}}`, and ≥0!

### `{{tdb:theme_id/language}}`

If `(language == 'ja')`, returns the original Japanese title for the given theme. For any other language, returns any existing translation for the given theme title into that language, formatted as an edit link to the Translate interface.

## API endpoints

* `api.php?action=query&list=tdbrelations`
* `api.php?action=query&list=tdbtitles`

Refer to `api.php?action=help&modules=query` for documentation on those.
