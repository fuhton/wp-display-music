(function() {
  /**
   * Create a new TinyMCE plugin
   */
  tinymce.create( 'tinymce.plugins.disMusShortcode', {
    init: function( editor, url ) {
      editor.addButton( 'disMusShortcode', {
        image:   url.replace("/js", "/svg/notes.svg"),
        menu:    this.get_menu( editor ),
        tooltip: disMusShortcodeTinyMCELabels.disMusFieldButtonTooltip,
        type:    'menuButton',
      });
    },

    get_menu: function( editor ) {
      return [
        {
          text: disMusShortcodeTinyMCELabels.vexFieldDisplayTitle,
          type:    'button',
          onclick: function() {
            editor.windowManager.open({
              title: disMusShortcodeTinyMCELabels.vexFieldWindowTitle,
              body: [
                {
                  autofocus: true,
                  minHeight: 400,
                  minWidth: 400,
                  multiline: true,
                  name:  'vexFieldValue',
                  size: 1000,
                  type:  'textbox',
                }
              ],
              onsubmit: function( e ) {
                vextab = new window.VexTabDiv.VexTab(
                  new window.VexTabDiv.Artist(10, 10, 600, {scale: 0.8})
                );

                try {
                  var vexFieldValue = e.data.vexFieldValue;
                  // parse to confirm it's valid content
                  vextab.parse(vexFieldValue);
                  vexFieldValue = vexFieldValue.replace(/(?:\r\n|\r|\n)/g, '\\n');
                  editor.insertContent('[display-music vextab="' + vexFieldValue + '"]');
                } catch (e) {
                  console.log(e);
                  window.alert(e.message);
                  throw Error(e.message);
                }
              }
            });
          },
        },
      ];
    },
  });
  tinymce.PluginManager.add( 'disMusShortcode', tinymce.plugins.disMusShortcode );
})();
