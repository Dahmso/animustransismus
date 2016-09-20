<?php 

// -------------- CSS 
/*  .ace_editor {
        position: relative !important;
        border: 1px solid lightgray;
        margin: auto;
        height: 200px;
        width: 80%;
    }

    .ace_editor.fullScreen {
        height: auto;
        width: auto;
        border: 0;
        margin: 0;
        position: fixed !important;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }

    .fullScreen {
        overflow: hidden
    }*/


 ?>


<!-- load ace -->
<script src="../lib/aceditor/src-min/ace.js"></script>
<!-- load ace themelist extension -->
<script src="../lib/aceditor/src-min/ext-themelist.js"></script>
<!-- load ace language tools -->
<script src="../lib/aceditor/src-min/ext-language_tools.js"></script>

<!--
<script>

var $ = document.getElementById.bind(document);
var dom = require("ace/lib/dom");

//add command to all new editor instaces
require("ace/commands/default_commands").commands.push({
    name: "Toggle Fullscreen",
    bindKey: "F11",
    exec: function(editor) {
        var fullScreen = dom.toggleCssClass(document.body, "fullScreen")
        dom.setCssClass(editor.container, "fullScreen", fullScreen)
        editor.setAutoScrollEditorIntoView(!fullScreen)
        editor.resize()
    }
})

// create first editor
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/css");
editor.renderer.setScrollMargin(10, 10);
editor.setOptions({
    // "scrollPastEnd": 0.8,
    autoScrollEditorIntoView: true
});

var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});

</script>
-->