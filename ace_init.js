;(function(alias){
"use strict";


	var $ = document.getElementById.bind(document);
		var dom = require("ace/lib/dom");

		//add command to all new editor instaces
		require("ace/commands/default_commands").commands.push({
		    name: "Toggle Fullscreen",
		    bindKey: "F11",
		    exec: function(editor_css) {
		        var fullScreen = dom.toggleCssClass(document.body, "fullScreen")
		        dom.setCssClass(editor_css.container, "fullScreen", fullScreen)
		        editor_css.setAutoScrollEditorIntoView(!fullScreen)
		        editor_css.resize()
		    }
		})
	// HTML

		// create first editor
		ace.require("ace/ext/language_tools");
		var editor_html = ace.edit("editor_html");
		editor_html.setTheme("ace/theme/monokai");
		editor_html.session.setMode("ace/mode/html");
		editor_html.renderer.setScrollMargin(10, 10);
		editor_html.$blockScrolling = Infinity;
		editor_html.setOptions({
		    // "scrollPastEnd": 0.8,
		    autoScrollEditorIntoView: true,
	        tabSize: 1,
	    	useSoftTabs: true
	        //wrap: 75
	        //maxLines: 5,
		});

		var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});

	// CSS

		// create first editor
		var editor_css = ace.edit("editor_css");
		editor_css.setTheme("ace/theme/monokai");
		editor_css.session.setMode("ace/mode/css");
		editor_css.renderer.setScrollMargin(10, 10);
		editor_css.$blockScrolling = Infinity;
		editor_css.setOptions({
		    // "scrollPastEnd": 0.8,
		    autoScrollEditorIntoView: true,
		    enableBasicAutocompletion: true,
	        enableSnippets: true,
	        enableLiveAutocompletion: true,
	        tabSize: 1,
	    	useSoftTabs: true
	        //wrap: 75
		});

		var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});

	window.editor_html = editor_html;
	window.editor_css = editor_css;
})()