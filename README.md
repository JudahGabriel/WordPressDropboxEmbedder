# WordPressDropboxEmbedder
WordPress plugin that uses [Dropbox's Embedder](https://www.dropbox.com/developers/embedder) to preview files stored on Dropbox.

Usage:

1. Import the Dropbox embedder into your page, ideally in your `<head>`. See [Dropbox Embedded documentation](https://www.dropbox.com/developers/embedder) for the exact `<script>` tag to use.
2. Copy a link to a file on your Dropbox account.
3. In a WordPress post or page, use the shortcode `[dropbox-embed file="https://www.dropbox.com/link/to/file"]`, where the link is the value you copied in step 2.
4. Optional: by default, the width will be 100% and the height will be 600px. You can change it like this: `[dropbox-embed file="https://www.dropbox.com/link/to/file" width="300px" height="100px"]`
