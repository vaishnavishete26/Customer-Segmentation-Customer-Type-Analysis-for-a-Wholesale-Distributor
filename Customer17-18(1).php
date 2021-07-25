<?php
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>project_customer_segmentation</title><script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>




<style type="text/css">
    pre { line-height: 125%; margin: 0; }
td.linenos pre { color: #000000; background-color: #f0f0f0; padding-left: 5px; padding-right: 5px; }
span.linenos { color: #000000; background-color: #f0f0f0; padding-left: 5px; padding-right: 5px; }
td.linenos pre.special { color: #000000; background-color: #ffffc0; padding-left: 5px; padding-right: 5px; }
span.linenos.special { color: #000000; background-color: #ffffc0; padding-left: 5px; padding-right: 5px; }
.highlight .hll { background-color: var(--jp-cell-editor-active-background) }
.highlight { background: var(--jp-cell-editor-background); color: var(--jp-mirror-editor-variable-color) }
.highlight .c { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment */
.highlight .err { color: var(--jp-mirror-editor-error-color) } /* Error */
.highlight .k { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword */
.highlight .o { color: var(--jp-mirror-editor-operator-color); font-weight: bold } /* Operator */
.highlight .p { color: var(--jp-mirror-editor-punctuation-color) } /* Punctuation */
.highlight .ch { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Multiline */
.highlight .cp { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Preproc */
.highlight .cpf { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Single */
.highlight .cs { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Special */
.highlight .kc { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Pseudo */
.highlight .kr { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Type */
.highlight .m { color: var(--jp-mirror-editor-number-color) } /* Literal.Number */
.highlight .s { color: var(--jp-mirror-editor-string-color) } /* Literal.String */
.highlight .ow { color: var(--jp-mirror-editor-operator-color); font-weight: bold } /* Operator.Word */
.highlight .w { color: var(--jp-mirror-editor-variable-color) } /* Text.Whitespace */
.highlight .mb { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Bin */
.highlight .mf { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Float */
.highlight .mh { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Hex */
.highlight .mi { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Integer */
.highlight .mo { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Oct */
.highlight .sa { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Affix */
.highlight .sb { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Backtick */
.highlight .sc { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Char */
.highlight .dl { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Delimiter */
.highlight .sd { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Doc */
.highlight .s2 { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Double */
.highlight .se { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Escape */
.highlight .sh { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Heredoc */
.highlight .si { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Interpol */
.highlight .sx { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Other */
.highlight .sr { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Regex */
.highlight .s1 { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Single */
.highlight .ss { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Symbol */
.highlight .il { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Integer.Long */
  </style>



<style type="text/css">
/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*
 * Mozilla scrollbar styling
 */

/* use standard opaque scrollbars for most nodes */
[data-jp-theme-scrollbars='true'] {
  scrollbar-color: rgb(var(--jp-scrollbar-thumb-color))
    var(--jp-scrollbar-background-color);
}

/* for code nodes, use a transparent style of scrollbar. These selectors
 * will match lower in the tree, and so will override the above */
[data-jp-theme-scrollbars='true'] .CodeMirror-hscrollbar,
[data-jp-theme-scrollbars='true'] .CodeMirror-vscrollbar {
  scrollbar-color: rgba(var(--jp-scrollbar-thumb-color), 0.5) transparent;
}

/*
 * Webkit scrollbar styling
 */

/* use standard opaque scrollbars for most nodes */

[data-jp-theme-scrollbars='true'] ::-webkit-scrollbar,
[data-jp-theme-scrollbars='true'] ::-webkit-scrollbar-corner {
  background: var(--jp-scrollbar-background-color);
}

[data-jp-theme-scrollbars='true'] ::-webkit-scrollbar-thumb {
  background: rgb(var(--jp-scrollbar-thumb-color));
  border: var(--jp-scrollbar-thumb-margin) solid transparent;
  background-clip: content-box;
  border-radius: var(--jp-scrollbar-thumb-radius);
}

[data-jp-theme-scrollbars='true'] ::-webkit-scrollbar-track:horizontal {
  border-left: var(--jp-scrollbar-endpad) solid
    var(--jp-scrollbar-background-color);
  border-right: var(--jp-scrollbar-endpad) solid
    var(--jp-scrollbar-background-color);
}

[data-jp-theme-scrollbars='true'] ::-webkit-scrollbar-track:vertical {
  border-top: var(--jp-scrollbar-endpad) solid
    var(--jp-scrollbar-background-color);
  border-bottom: var(--jp-scrollbar-endpad) solid
    var(--jp-scrollbar-background-color);
}

/* for code nodes, use a transparent style of scrollbar */

[data-jp-theme-scrollbars='true'] .CodeMirror-hscrollbar::-webkit-scrollbar,
[data-jp-theme-scrollbars='true'] .CodeMirror-vscrollbar::-webkit-scrollbar,
[data-jp-theme-scrollbars='true']
  .CodeMirror-hscrollbar::-webkit-scrollbar-corner,
[data-jp-theme-scrollbars='true']
  .CodeMirror-vscrollbar::-webkit-scrollbar-corner {
  background-color: transparent;
}

[data-jp-theme-scrollbars='true']
  .CodeMirror-hscrollbar::-webkit-scrollbar-thumb,
[data-jp-theme-scrollbars='true']
  .CodeMirror-vscrollbar::-webkit-scrollbar-thumb {
  background: rgba(var(--jp-scrollbar-thumb-color), 0.5);
  border: var(--jp-scrollbar-thumb-margin) solid transparent;
  background-clip: content-box;
  border-radius: var(--jp-scrollbar-thumb-radius);
}

[data-jp-theme-scrollbars='true']
  .CodeMirror-hscrollbar::-webkit-scrollbar-track:horizontal {
  border-left: var(--jp-scrollbar-endpad) solid transparent;
  border-right: var(--jp-scrollbar-endpad) solid transparent;
}

[data-jp-theme-scrollbars='true']
  .CodeMirror-vscrollbar::-webkit-scrollbar-track:vertical {
  border-top: var(--jp-scrollbar-endpad) solid transparent;
  border-bottom: var(--jp-scrollbar-endpad) solid transparent;
}

/*
 * Phosphor
 */

.lm-ScrollBar[data-orientation='horizontal'] {
  min-height: 16px;
  max-height: 16px;
  min-width: 45px;
  border-top: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='vertical'] {
  min-width: 16px;
  max-width: 16px;
  min-height: 45px;
  border-left: 1px solid #a0a0a0;
}

.lm-ScrollBar-button {
  background-color: #f0f0f0;
  background-position: center center;
  min-height: 15px;
  max-height: 15px;
  min-width: 15px;
  max-width: 15px;
}

.lm-ScrollBar-button:hover {
  background-color: #dadada;
}

.lm-ScrollBar-button.lm-mod-active {
  background-color: #cdcdcd;
}

.lm-ScrollBar-track {
  background: #f0f0f0;
}

.lm-ScrollBar-thumb {
  background: #cdcdcd;
}

.lm-ScrollBar-thumb:hover {
  background: #bababa;
}

.lm-ScrollBar-thumb.lm-mod-active {
  background: #a0a0a0;
}

.lm-ScrollBar[data-orientation='horizontal'] .lm-ScrollBar-thumb {
  height: 100%;
  min-width: 15px;
  border-left: 1px solid #a0a0a0;
  border-right: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='vertical'] .lm-ScrollBar-thumb {
  width: 100%;
  min-height: 15px;
  border-top: 1px solid #a0a0a0;
  border-bottom: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='horizontal']
  .lm-ScrollBar-button[data-action='decrement'] {
  background-image: var(--jp-icon-caret-left);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='horizontal']
  .lm-ScrollBar-button[data-action='increment'] {
  background-image: var(--jp-icon-caret-right);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='vertical']
  .lm-ScrollBar-button[data-action='decrement'] {
  background-image: var(--jp-icon-caret-up);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='vertical']
  .lm-ScrollBar-button[data-action='increment'] {
  background-image: var(--jp-icon-caret-down);
  background-size: 17px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-Widget, /* </DEPRECATED> */
.lm-Widget {
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
  cursor: default;
}


/* <DEPRECATED> */ .p-Widget.p-mod-hidden, /* </DEPRECATED> */
.lm-Widget.lm-mod-hidden {
  display: none !important;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-CommandPalette, /* </DEPRECATED> */
.lm-CommandPalette {
  display: flex;
  flex-direction: column;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* <DEPRECATED> */ .p-CommandPalette-search, /* </DEPRECATED> */
.lm-CommandPalette-search {
  flex: 0 0 auto;
}


/* <DEPRECATED> */ .p-CommandPalette-content, /* </DEPRECATED> */
.lm-CommandPalette-content {
  flex: 1 1 auto;
  margin: 0;
  padding: 0;
  min-height: 0;
  overflow: auto;
  list-style-type: none;
}


/* <DEPRECATED> */ .p-CommandPalette-header, /* </DEPRECATED> */
.lm-CommandPalette-header {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}


/* <DEPRECATED> */ .p-CommandPalette-item, /* </DEPRECATED> */
.lm-CommandPalette-item {
  display: flex;
  flex-direction: row;
}


/* <DEPRECATED> */ .p-CommandPalette-itemIcon, /* </DEPRECATED> */
.lm-CommandPalette-itemIcon {
  flex: 0 0 auto;
}


/* <DEPRECATED> */ .p-CommandPalette-itemContent, /* </DEPRECATED> */
.lm-CommandPalette-itemContent {
  flex: 1 1 auto;
  overflow: hidden;
}


/* <DEPRECATED> */ .p-CommandPalette-itemShortcut, /* </DEPRECATED> */
.lm-CommandPalette-itemShortcut {
  flex: 0 0 auto;
}


/* <DEPRECATED> */ .p-CommandPalette-itemLabel, /* </DEPRECATED> */
.lm-CommandPalette-itemLabel {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-DockPanel, /* </DEPRECATED> */
.lm-DockPanel {
  z-index: 0;
}


/* <DEPRECATED> */ .p-DockPanel-widget, /* </DEPRECATED> */
.lm-DockPanel-widget {
  z-index: 0;
}


/* <DEPRECATED> */ .p-DockPanel-tabBar, /* </DEPRECATED> */
.lm-DockPanel-tabBar {
  z-index: 1;
}


/* <DEPRECATED> */ .p-DockPanel-handle, /* </DEPRECATED> */
.lm-DockPanel-handle {
  z-index: 2;
}


/* <DEPRECATED> */ .p-DockPanel-handle.p-mod-hidden, /* </DEPRECATED> */
.lm-DockPanel-handle.lm-mod-hidden {
  display: none !important;
}


/* <DEPRECATED> */ .p-DockPanel-handle:after, /* </DEPRECATED> */
.lm-DockPanel-handle:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
}


/* <DEPRECATED> */
.p-DockPanel-handle[data-orientation='horizontal'],
/* </DEPRECATED> */
.lm-DockPanel-handle[data-orientation='horizontal'] {
  cursor: ew-resize;
}


/* <DEPRECATED> */
.p-DockPanel-handle[data-orientation='vertical'],
/* </DEPRECATED> */
.lm-DockPanel-handle[data-orientation='vertical'] {
  cursor: ns-resize;
}


/* <DEPRECATED> */
.p-DockPanel-handle[data-orientation='horizontal']:after,
/* </DEPRECATED> */
.lm-DockPanel-handle[data-orientation='horizontal']:after {
  left: 50%;
  min-width: 8px;
  transform: translateX(-50%);
}


/* <DEPRECATED> */
.p-DockPanel-handle[data-orientation='vertical']:after,
/* </DEPRECATED> */
.lm-DockPanel-handle[data-orientation='vertical']:after {
  top: 50%;
  min-height: 8px;
  transform: translateY(-50%);
}


/* <DEPRECATED> */ .p-DockPanel-overlay, /* </DEPRECATED> */
.lm-DockPanel-overlay {
  z-index: 3;
  box-sizing: border-box;
  pointer-events: none;
}


/* <DEPRECATED> */ .p-DockPanel-overlay.p-mod-hidden, /* </DEPRECATED> */
.lm-DockPanel-overlay.lm-mod-hidden {
  display: none !important;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-Menu, /* </DEPRECATED> */
.lm-Menu {
  z-index: 10000;
  position: absolute;
  white-space: nowrap;
  overflow-x: hidden;
  overflow-y: auto;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* <DEPRECATED> */ .p-Menu-content, /* </DEPRECATED> */
.lm-Menu-content {
  margin: 0;
  padding: 0;
  display: table;
  list-style-type: none;
}


/* <DEPRECATED> */ .p-Menu-item, /* </DEPRECATED> */
.lm-Menu-item {
  display: table-row;
}


/* <DEPRECATED> */
.p-Menu-item.p-mod-hidden,
.p-Menu-item.p-mod-collapsed,
/* </DEPRECATED> */
.lm-Menu-item.lm-mod-hidden,
.lm-Menu-item.lm-mod-collapsed {
  display: none !important;
}


/* <DEPRECATED> */
.p-Menu-itemIcon,
.p-Menu-itemSubmenuIcon,
/* </DEPRECATED> */
.lm-Menu-itemIcon,
.lm-Menu-itemSubmenuIcon {
  display: table-cell;
  text-align: center;
}


/* <DEPRECATED> */ .p-Menu-itemLabel, /* </DEPRECATED> */
.lm-Menu-itemLabel {
  display: table-cell;
  text-align: left;
}


/* <DEPRECATED> */ .p-Menu-itemShortcut, /* </DEPRECATED> */
.lm-Menu-itemShortcut {
  display: table-cell;
  text-align: right;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-MenuBar, /* </DEPRECATED> */
.lm-MenuBar {
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* <DEPRECATED> */ .p-MenuBar-content, /* </DEPRECATED> */
.lm-MenuBar-content {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
  list-style-type: none;
}


/* <DEPRECATED> */ .p--MenuBar-item, /* </DEPRECATED> */
.lm-MenuBar-item {
  box-sizing: border-box;
}


/* <DEPRECATED> */
.p-MenuBar-itemIcon,
.p-MenuBar-itemLabel,
/* </DEPRECATED> */
.lm-MenuBar-itemIcon,
.lm-MenuBar-itemLabel {
  display: inline-block;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-ScrollBar, /* </DEPRECATED> */
.lm-ScrollBar {
  display: flex;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* <DEPRECATED> */
.p-ScrollBar[data-orientation='horizontal'],
/* </DEPRECATED> */
.lm-ScrollBar[data-orientation='horizontal'] {
  flex-direction: row;
}


/* <DEPRECATED> */
.p-ScrollBar[data-orientation='vertical'],
/* </DEPRECATED> */
.lm-ScrollBar[data-orientation='vertical'] {
  flex-direction: column;
}


/* <DEPRECATED> */ .p-ScrollBar-button, /* </DEPRECATED> */
.lm-ScrollBar-button {
  box-sizing: border-box;
  flex: 0 0 auto;
}


/* <DEPRECATED> */ .p-ScrollBar-track, /* </DEPRECATED> */
.lm-ScrollBar-track {
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
  flex: 1 1 auto;
}


/* <DEPRECATED> */ .p-ScrollBar-thumb, /* </DEPRECATED> */
.lm-ScrollBar-thumb {
  box-sizing: border-box;
  position: absolute;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-SplitPanel-child, /* </DEPRECATED> */
.lm-SplitPanel-child {
  z-index: 0;
}


/* <DEPRECATED> */ .p-SplitPanel-handle, /* </DEPRECATED> */
.lm-SplitPanel-handle {
  z-index: 1;
}


/* <DEPRECATED> */ .p-SplitPanel-handle.p-mod-hidden, /* </DEPRECATED> */
.lm-SplitPanel-handle.lm-mod-hidden {
  display: none !important;
}


/* <DEPRECATED> */ .p-SplitPanel-handle:after, /* </DEPRECATED> */
.lm-SplitPanel-handle:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
}


/* <DEPRECATED> */
.p-SplitPanel[data-orientation='horizontal'] > .p-SplitPanel-handle,
/* </DEPRECATED> */
.lm-SplitPanel[data-orientation='horizontal'] > .lm-SplitPanel-handle {
  cursor: ew-resize;
}


/* <DEPRECATED> */
.p-SplitPanel[data-orientation='vertical'] > .p-SplitPanel-handle,
/* </DEPRECATED> */
.lm-SplitPanel[data-orientation='vertical'] > .lm-SplitPanel-handle {
  cursor: ns-resize;
}


/* <DEPRECATED> */
.p-SplitPanel[data-orientation='horizontal'] > .p-SplitPanel-handle:after,
/* </DEPRECATED> */
.lm-SplitPanel[data-orientation='horizontal'] > .lm-SplitPanel-handle:after {
  left: 50%;
  min-width: 8px;
  transform: translateX(-50%);
}


/* <DEPRECATED> */
.p-SplitPanel[data-orientation='vertical'] > .p-SplitPanel-handle:after,
/* </DEPRECATED> */
.lm-SplitPanel[data-orientation='vertical'] > .lm-SplitPanel-handle:after {
  top: 50%;
  min-height: 8px;
  transform: translateY(-50%);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-TabBar, /* </DEPRECATED> */
.lm-TabBar {
  display: flex;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


/* <DEPRECATED> */ .p-TabBar[data-orientation='horizontal'], /* </DEPRECATED> */
.lm-TabBar[data-orientation='horizontal'] {
  flex-direction: row;
}


/* <DEPRECATED> */ .p-TabBar[data-orientation='vertical'], /* </DEPRECATED> */
.lm-TabBar[data-orientation='vertical'] {
  flex-direction: column;
}


/* <DEPRECATED> */ .p-TabBar-content, /* </DEPRECATED> */
.lm-TabBar-content {
  margin: 0;
  padding: 0;
  display: flex;
  flex: 1 1 auto;
  list-style-type: none;
}


/* <DEPRECATED> */
.p-TabBar[data-orientation='horizontal'] > .p-TabBar-content,
/* </DEPRECATED> */
.lm-TabBar[data-orientation='horizontal'] > .lm-TabBar-content {
  flex-direction: row;
}


/* <DEPRECATED> */
.p-TabBar[data-orientation='vertical'] > .p-TabBar-content,
/* </DEPRECATED> */
.lm-TabBar[data-orientation='vertical'] > .lm-TabBar-content {
  flex-direction: column;
}


/* <DEPRECATED> */ .p-TabBar-tab, /* </DEPRECATED> */
.lm-TabBar-tab {
  display: flex;
  flex-direction: row;
  box-sizing: border-box;
  overflow: hidden;
}


/* <DEPRECATED> */
.p-TabBar-tabIcon,
.p-TabBar-tabCloseIcon,
/* </DEPRECATED> */
.lm-TabBar-tabIcon,
.lm-TabBar-tabCloseIcon {
  flex: 0 0 auto;
}


/* <DEPRECATED> */ .p-TabBar-tabLabel, /* </DEPRECATED> */
.lm-TabBar-tabLabel {
  flex: 1 1 auto;
  overflow: hidden;
  white-space: nowrap;
}


/* <DEPRECATED> */ .p-TabBar-tab.p-mod-hidden, /* </DEPRECATED> */
.lm-TabBar-tab.lm-mod-hidden {
  display: none !important;
}


/* <DEPRECATED> */ .p-TabBar.p-mod-dragging .p-TabBar-tab, /* </DEPRECATED> */
.lm-TabBar.lm-mod-dragging .lm-TabBar-tab {
  position: relative;
}


/* <DEPRECATED> */
.p-TabBar.p-mod-dragging[data-orientation='horizontal'] .p-TabBar-tab,
/* </DEPRECATED> */
.lm-TabBar.lm-mod-dragging[data-orientation='horizontal'] .lm-TabBar-tab {
  left: 0;
  transition: left 150ms ease;
}


/* <DEPRECATED> */
.p-TabBar.p-mod-dragging[data-orientation='vertical'] .p-TabBar-tab,
/* </DEPRECATED> */
.lm-TabBar.lm-mod-dragging[data-orientation='vertical'] .lm-TabBar-tab {
  top: 0;
  transition: top 150ms ease;
}


/* <DEPRECATED> */
.p-TabBar.p-mod-dragging .p-TabBar-tab.p-mod-dragging
/* </DEPRECATED> */
.lm-TabBar.lm-mod-dragging .lm-TabBar-tab.lm-mod-dragging {
  transition: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ .p-TabPanel-tabBar, /* </DEPRECATED> */
.lm-TabPanel-tabBar {
  z-index: 1;
}


/* <DEPRECATED> */ .p-TabPanel-stackedPanel, /* </DEPRECATED> */
.lm-TabPanel-stackedPanel {
  z-index: 0;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

@charset "UTF-8";
/*!

Copyright 2015-present Palantir Technologies, Inc. All rights reserved.
Licensed under the Apache License, Version 2.0.

*/
html{
  -webkit-box-sizing:border-box;
          box-sizing:border-box; }

*,
*::before,
*::after{
  -webkit-box-sizing:inherit;
          box-sizing:inherit; }

body{
  text-transform:none;
  line-height:1.28581;
  letter-spacing:0;
  font-size:14px;
  font-weight:400;
  color:#182026;
  font-family:-apple-system, "BlinkMacSystemFont", "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Open Sans", "Helvetica Neue", "Icons16", sans-serif; }

p{
  margin-top:0;
  margin-bottom:10px; }

small{
  font-size:12px; }

strong{
  font-weight:600; }

::-moz-selection{
  background:rgba(125, 188, 255, 0.6); }

::selection{
  background:rgba(125, 188, 255, 0.6); }
.bp3-heading{
  color:#182026;
  font-weight:600;
  margin:0 0 10px;
  padding:0; }
  .bp3-dark .bp3-heading{
    color:#f5f8fa; }

h1.bp3-heading, .bp3-running-text h1{
  line-height:40px;
  font-size:36px; }

h2.bp3-heading, .bp3-running-text h2{
  line-height:32px;
  font-size:28px; }

h3.bp3-heading, .bp3-running-text h3{
  line-height:25px;
  font-size:22px; }

h4.bp3-heading, .bp3-running-text h4{
  line-height:21px;
  font-size:18px; }

h5.bp3-heading, .bp3-running-text h5{
  line-height:19px;
  font-size:16px; }

h6.bp3-heading, .bp3-running-text h6{
  line-height:16px;
  font-size:14px; }
.bp3-ui-text{
  text-transform:none;
  line-height:1.28581;
  letter-spacing:0;
  font-size:14px;
  font-weight:400; }

.bp3-monospace-text{
  text-transform:none;
  font-family:monospace; }

.bp3-text-muted{
  color:#5c7080; }
  .bp3-dark .bp3-text-muted{
    color:#a7b6c2; }

.bp3-text-disabled{
  color:rgba(92, 112, 128, 0.6); }
  .bp3-dark .bp3-text-disabled{
    color:rgba(167, 182, 194, 0.6); }

.bp3-text-overflow-ellipsis{
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  word-wrap:normal; }
.bp3-running-text{
  line-height:1.5;
  font-size:14px; }
  .bp3-running-text h1{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h1{
      color:#f5f8fa; }
  .bp3-running-text h2{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h2{
      color:#f5f8fa; }
  .bp3-running-text h3{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h3{
      color:#f5f8fa; }
  .bp3-running-text h4{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h4{
      color:#f5f8fa; }
  .bp3-running-text h5{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h5{
      color:#f5f8fa; }
  .bp3-running-text h6{
    color:#182026;
    font-weight:600;
    margin-top:40px;
    margin-bottom:20px; }
    .bp3-dark .bp3-running-text h6{
      color:#f5f8fa; }
  .bp3-running-text hr{
    margin:20px 0;
    border:none;
    border-bottom:1px solid rgba(16, 22, 26, 0.15); }
    .bp3-dark .bp3-running-text hr{
      border-color:rgba(255, 255, 255, 0.15); }
  .bp3-running-text p{
    margin:0 0 10px;
    padding:0; }

.bp3-text-large{
  font-size:16px; }

.bp3-text-small{
  font-size:12px; }
a{
  text-decoration:none;
  color:#106ba3; }
  a:hover{
    cursor:pointer;
    text-decoration:underline;
    color:#106ba3; }
  a .bp3-icon, a .bp3-icon-standard, a .bp3-icon-large{
    color:inherit; }
  a code,
  .bp3-dark a code{
    color:inherit; }
  .bp3-dark a,
  .bp3-dark a:hover{
    color:#48aff0; }
    .bp3-dark a .bp3-icon, .bp3-dark a .bp3-icon-standard, .bp3-dark a .bp3-icon-large,
    .bp3-dark a:hover .bp3-icon,
    .bp3-dark a:hover .bp3-icon-standard,
    .bp3-dark a:hover .bp3-icon-large{
      color:inherit; }
.bp3-running-text code, .bp3-code{
  text-transform:none;
  font-family:monospace;
  border-radius:3px;
  -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2);
          box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2);
  background:rgba(255, 255, 255, 0.7);
  padding:2px 5px;
  color:#5c7080;
  font-size:smaller; }
  .bp3-dark .bp3-running-text code, .bp3-running-text .bp3-dark code, .bp3-dark .bp3-code{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
    background:rgba(16, 22, 26, 0.3);
    color:#a7b6c2; }
  .bp3-running-text a > code, a > .bp3-code{
    color:#137cbd; }
    .bp3-dark .bp3-running-text a > code, .bp3-running-text .bp3-dark a > code, .bp3-dark a > .bp3-code{
      color:inherit; }

.bp3-running-text pre, .bp3-code-block{
  text-transform:none;
  font-family:monospace;
  display:block;
  margin:10px 0;
  border-radius:3px;
  -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15);
          box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15);
  background:rgba(255, 255, 255, 0.7);
  padding:13px 15px 12px;
  line-height:1.4;
  color:#182026;
  font-size:13px;
  word-break:break-all;
  word-wrap:break-word; }
  .bp3-dark .bp3-running-text pre, .bp3-running-text .bp3-dark pre, .bp3-dark .bp3-code-block{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
    background:rgba(16, 22, 26, 0.3);
    color:#f5f8fa; }
  .bp3-running-text pre > code, .bp3-code-block > code{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:none;
    padding:0;
    color:inherit;
    font-size:inherit; }

.bp3-running-text kbd, .bp3-key{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
  background:#ffffff;
  min-width:24px;
  height:24px;
  padding:3px 6px;
  vertical-align:middle;
  line-height:24px;
  color:#5c7080;
  font-family:inherit;
  font-size:12px; }
  .bp3-running-text kbd .bp3-icon, .bp3-key .bp3-icon, .bp3-running-text kbd .bp3-icon-standard, .bp3-key .bp3-icon-standard, .bp3-running-text kbd .bp3-icon-large, .bp3-key .bp3-icon-large{
    margin-right:5px; }
  .bp3-dark .bp3-running-text kbd, .bp3-running-text .bp3-dark kbd, .bp3-dark .bp3-key{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
    background:#394b59;
    color:#a7b6c2; }
.bp3-running-text blockquote, .bp3-blockquote{
  margin:0 0 10px;
  border-left:solid 4px rgba(167, 182, 194, 0.5);
  padding:0 20px; }
  .bp3-dark .bp3-running-text blockquote, .bp3-running-text .bp3-dark blockquote, .bp3-dark .bp3-blockquote{
    border-color:rgba(115, 134, 148, 0.5); }
.bp3-running-text ul,
.bp3-running-text ol, .bp3-list{
  margin:10px 0;
  padding-left:30px; }
  .bp3-running-text ul li:not(:last-child), .bp3-running-text ol li:not(:last-child), .bp3-list li:not(:last-child){
    margin-bottom:5px; }
  .bp3-running-text ul ol, .bp3-running-text ol ol, .bp3-list ol,
  .bp3-running-text ul ul,
  .bp3-running-text ol ul,
  .bp3-list ul{
    margin-top:5px; }

.bp3-list-unstyled{
  margin:0;
  padding:0;
  list-style:none; }
  .bp3-list-unstyled li{
    padding:0; }
.bp3-rtl{
  text-align:right; }

.bp3-dark{
  color:#f5f8fa; }

:focus{
  outline:rgba(19, 124, 189, 0.6) auto 2px;
  outline-offset:2px;
  -moz-outline-radius:6px; }

.bp3-focus-disabled :focus{
  outline:none !important; }
  .bp3-focus-disabled :focus ~ .bp3-control-indicator{
    outline:none !important; }

.bp3-alert{
  max-width:400px;
  padding:20px; }

.bp3-alert-body{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex; }
  .bp3-alert-body .bp3-icon{
    margin-top:0;
    margin-right:20px;
    font-size:40px; }

.bp3-alert-footer{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:reverse;
      -ms-flex-direction:row-reverse;
          flex-direction:row-reverse;
  margin-top:10px; }
  .bp3-alert-footer .bp3-button{
    margin-left:10px; }
.bp3-breadcrumbs{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -ms-flex-wrap:wrap;
      flex-wrap:wrap;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  margin:0;
  cursor:default;
  height:30px;
  padding:0;
  list-style:none; }
  .bp3-breadcrumbs > li{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-align:center;
        -ms-flex-align:center;
            align-items:center; }
    .bp3-breadcrumbs > li::after{
      display:block;
      margin:0 5px;
      background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M10.71 7.29l-4-4a1.003 1.003 0 0 0-1.42 1.42L8.59 8 5.3 11.29c-.19.18-.3.43-.3.71a1.003 1.003 0 0 0 1.71.71l4-4c.18-.18.29-.43.29-.71 0-.28-.11-.53-.29-.71z' fill='%235C7080'/%3e%3c/svg%3e");
      width:16px;
      height:16px;
      content:""; }
    .bp3-breadcrumbs > li:last-of-type::after{
      display:none; }

.bp3-breadcrumb,
.bp3-breadcrumb-current,
.bp3-breadcrumbs-collapsed{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  font-size:16px; }

.bp3-breadcrumb,
.bp3-breadcrumbs-collapsed{
  color:#5c7080; }

.bp3-breadcrumb:hover{
  text-decoration:none; }

.bp3-breadcrumb.bp3-disabled{
  cursor:not-allowed;
  color:rgba(92, 112, 128, 0.6); }

.bp3-breadcrumb .bp3-icon{
  margin-right:5px; }

.bp3-breadcrumb-current{
  color:inherit;
  font-weight:600; }
  .bp3-breadcrumb-current .bp3-input{
    vertical-align:baseline;
    font-size:inherit;
    font-weight:inherit; }

.bp3-breadcrumbs-collapsed{
  margin-right:2px;
  border:none;
  border-radius:3px;
  background:#ced9e0;
  cursor:pointer;
  padding:1px 5px;
  vertical-align:text-bottom; }
  .bp3-breadcrumbs-collapsed::before{
    display:block;
    background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cg fill='%235C7080'%3e%3ccircle cx='2' cy='8.03' r='2'/%3e%3ccircle cx='14' cy='8.03' r='2'/%3e%3ccircle cx='8' cy='8.03' r='2'/%3e%3c/g%3e%3c/svg%3e") center no-repeat;
    width:16px;
    height:16px;
    content:""; }
  .bp3-breadcrumbs-collapsed:hover{
    background:#bfccd6;
    text-decoration:none;
    color:#182026; }

.bp3-dark .bp3-breadcrumb,
.bp3-dark .bp3-breadcrumbs-collapsed{
  color:#a7b6c2; }

.bp3-dark .bp3-breadcrumbs > li::after{
  color:#a7b6c2; }

.bp3-dark .bp3-breadcrumb.bp3-disabled{
  color:rgba(167, 182, 194, 0.6); }

.bp3-dark .bp3-breadcrumb-current{
  color:#f5f8fa; }

.bp3-dark .bp3-breadcrumbs-collapsed{
  background:rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-breadcrumbs-collapsed:hover{
    background:rgba(16, 22, 26, 0.6);
    color:#f5f8fa; }
.bp3-button{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  border:none;
  border-radius:3px;
  cursor:pointer;
  padding:5px 10px;
  vertical-align:middle;
  text-align:left;
  font-size:14px;
  min-width:30px;
  min-height:30px; }
  .bp3-button > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-button > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-button::before,
  .bp3-button > *{
    margin-right:7px; }
  .bp3-button:empty::before,
  .bp3-button > :last-child{
    margin-right:0; }
  .bp3-button:empty{
    padding:0 !important; }
  .bp3-button:disabled, .bp3-button.bp3-disabled{
    cursor:not-allowed; }
  .bp3-button.bp3-fill{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    width:100%; }
  .bp3-button.bp3-align-right,
  .bp3-align-right .bp3-button{
    text-align:right; }
  .bp3-button.bp3-align-left,
  .bp3-align-left .bp3-button{
    text-align:left; }
  .bp3-button:not([class*="bp3-intent-"]){
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-color:#f5f8fa;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
    color:#182026; }
    .bp3-button:not([class*="bp3-intent-"]):hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
      background-clip:padding-box;
      background-color:#ebf1f5; }
    .bp3-button:not([class*="bp3-intent-"]):active, .bp3-button:not([class*="bp3-intent-"]).bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#d8e1e8;
      background-image:none; }
    .bp3-button:not([class*="bp3-intent-"]):disabled, .bp3-button:not([class*="bp3-intent-"]).bp3-disabled{
      outline:none;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(206, 217, 224, 0.5);
      background-image:none;
      cursor:not-allowed;
      color:rgba(92, 112, 128, 0.6); }
      .bp3-button:not([class*="bp3-intent-"]):disabled.bp3-active, .bp3-button:not([class*="bp3-intent-"]):disabled.bp3-active:hover, .bp3-button:not([class*="bp3-intent-"]).bp3-disabled.bp3-active, .bp3-button:not([class*="bp3-intent-"]).bp3-disabled.bp3-active:hover{
        background:rgba(206, 217, 224, 0.7); }
  .bp3-button.bp3-intent-primary{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#137cbd;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
    .bp3-button.bp3-intent-primary:hover, .bp3-button.bp3-intent-primary:active, .bp3-button.bp3-intent-primary.bp3-active{
      color:#ffffff; }
    .bp3-button.bp3-intent-primary:hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
      background-color:#106ba3; }
    .bp3-button.bp3-intent-primary:active, .bp3-button.bp3-intent-primary.bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#0e5a8a;
      background-image:none; }
    .bp3-button.bp3-intent-primary:disabled, .bp3-button.bp3-intent-primary.bp3-disabled{
      border-color:transparent;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(19, 124, 189, 0.5);
      background-image:none;
      color:rgba(255, 255, 255, 0.6); }
  .bp3-button.bp3-intent-success{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#0f9960;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
    .bp3-button.bp3-intent-success:hover, .bp3-button.bp3-intent-success:active, .bp3-button.bp3-intent-success.bp3-active{
      color:#ffffff; }
    .bp3-button.bp3-intent-success:hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
      background-color:#0d8050; }
    .bp3-button.bp3-intent-success:active, .bp3-button.bp3-intent-success.bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#0a6640;
      background-image:none; }
    .bp3-button.bp3-intent-success:disabled, .bp3-button.bp3-intent-success.bp3-disabled{
      border-color:transparent;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(15, 153, 96, 0.5);
      background-image:none;
      color:rgba(255, 255, 255, 0.6); }
  .bp3-button.bp3-intent-warning{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#d9822b;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
    .bp3-button.bp3-intent-warning:hover, .bp3-button.bp3-intent-warning:active, .bp3-button.bp3-intent-warning.bp3-active{
      color:#ffffff; }
    .bp3-button.bp3-intent-warning:hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
      background-color:#bf7326; }
    .bp3-button.bp3-intent-warning:active, .bp3-button.bp3-intent-warning.bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#a66321;
      background-image:none; }
    .bp3-button.bp3-intent-warning:disabled, .bp3-button.bp3-intent-warning.bp3-disabled{
      border-color:transparent;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(217, 130, 43, 0.5);
      background-image:none;
      color:rgba(255, 255, 255, 0.6); }
  .bp3-button.bp3-intent-danger{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#db3737;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
    .bp3-button.bp3-intent-danger:hover, .bp3-button.bp3-intent-danger:active, .bp3-button.bp3-intent-danger.bp3-active{
      color:#ffffff; }
    .bp3-button.bp3-intent-danger:hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
      background-color:#c23030; }
    .bp3-button.bp3-intent-danger:active, .bp3-button.bp3-intent-danger.bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#a82a2a;
      background-image:none; }
    .bp3-button.bp3-intent-danger:disabled, .bp3-button.bp3-intent-danger.bp3-disabled{
      border-color:transparent;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(219, 55, 55, 0.5);
      background-image:none;
      color:rgba(255, 255, 255, 0.6); }
  .bp3-button[class*="bp3-intent-"] .bp3-button-spinner .bp3-spinner-head{
    stroke:#ffffff; }
  .bp3-button.bp3-large,
  .bp3-large .bp3-button{
    min-width:40px;
    min-height:40px;
    padding:5px 15px;
    font-size:16px; }
    .bp3-button.bp3-large::before,
    .bp3-button.bp3-large > *,
    .bp3-large .bp3-button::before,
    .bp3-large .bp3-button > *{
      margin-right:10px; }
    .bp3-button.bp3-large:empty::before,
    .bp3-button.bp3-large > :last-child,
    .bp3-large .bp3-button:empty::before,
    .bp3-large .bp3-button > :last-child{
      margin-right:0; }
  .bp3-button.bp3-small,
  .bp3-small .bp3-button{
    min-width:24px;
    min-height:24px;
    padding:0 7px; }
  .bp3-button.bp3-loading{
    position:relative; }
    .bp3-button.bp3-loading[class*="bp3-icon-"]::before{
      visibility:hidden; }
    .bp3-button.bp3-loading .bp3-button-spinner{
      position:absolute;
      margin:0; }
    .bp3-button.bp3-loading > :not(.bp3-button-spinner){
      visibility:hidden; }
  .bp3-button[class*="bp3-icon-"]::before{
    line-height:1;
    font-family:"Icons16", sans-serif;
    font-size:16px;
    font-weight:400;
    font-style:normal;
    -moz-osx-font-smoothing:grayscale;
    -webkit-font-smoothing:antialiased;
    color:#5c7080; }
  .bp3-button .bp3-icon, .bp3-button .bp3-icon-standard, .bp3-button .bp3-icon-large{
    color:#5c7080; }
    .bp3-button .bp3-icon.bp3-align-right, .bp3-button .bp3-icon-standard.bp3-align-right, .bp3-button .bp3-icon-large.bp3-align-right{
      margin-left:7px; }
  .bp3-button .bp3-icon:first-child:last-child,
  .bp3-button .bp3-spinner + .bp3-icon:last-child{
    margin:0 -7px; }
  .bp3-dark .bp3-button:not([class*="bp3-intent-"]){
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background-color:#394b59;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
    color:#f5f8fa; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]):hover, .bp3-dark .bp3-button:not([class*="bp3-intent-"]):active, .bp3-dark .bp3-button:not([class*="bp3-intent-"]).bp3-active{
      color:#f5f8fa; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]):hover{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
      background-color:#30404d; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]):active, .bp3-dark .bp3-button:not([class*="bp3-intent-"]).bp3-active{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#202b33;
      background-image:none; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]):disabled, .bp3-dark .bp3-button:not([class*="bp3-intent-"]).bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(57, 75, 89, 0.5);
      background-image:none;
      color:rgba(167, 182, 194, 0.6); }
      .bp3-dark .bp3-button:not([class*="bp3-intent-"]):disabled.bp3-active, .bp3-dark .bp3-button:not([class*="bp3-intent-"]).bp3-disabled.bp3-active{
        background:rgba(57, 75, 89, 0.7); }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]) .bp3-button-spinner .bp3-spinner-head{
      background:rgba(16, 22, 26, 0.5);
      stroke:#8a9ba8; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"])[class*="bp3-icon-"]::before{
      color:#a7b6c2; }
    .bp3-dark .bp3-button:not([class*="bp3-intent-"]) .bp3-icon, .bp3-dark .bp3-button:not([class*="bp3-intent-"]) .bp3-icon-standard, .bp3-dark .bp3-button:not([class*="bp3-intent-"]) .bp3-icon-large{
      color:#a7b6c2; }
  .bp3-dark .bp3-button[class*="bp3-intent-"]{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-button[class*="bp3-intent-"]:hover{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-button[class*="bp3-intent-"]:active, .bp3-dark .bp3-button[class*="bp3-intent-"].bp3-active{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2); }
    .bp3-dark .bp3-button[class*="bp3-intent-"]:disabled, .bp3-dark .bp3-button[class*="bp3-intent-"].bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background-image:none;
      color:rgba(255, 255, 255, 0.3); }
    .bp3-dark .bp3-button[class*="bp3-intent-"] .bp3-button-spinner .bp3-spinner-head{
      stroke:#8a9ba8; }
  .bp3-button:disabled::before,
  .bp3-button:disabled .bp3-icon, .bp3-button:disabled .bp3-icon-standard, .bp3-button:disabled .bp3-icon-large, .bp3-button.bp3-disabled::before,
  .bp3-button.bp3-disabled .bp3-icon, .bp3-button.bp3-disabled .bp3-icon-standard, .bp3-button.bp3-disabled .bp3-icon-large, .bp3-button[class*="bp3-intent-"]::before,
  .bp3-button[class*="bp3-intent-"] .bp3-icon, .bp3-button[class*="bp3-intent-"] .bp3-icon-standard, .bp3-button[class*="bp3-intent-"] .bp3-icon-large{
    color:inherit !important; }
  .bp3-button.bp3-minimal{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:none; }
    .bp3-button.bp3-minimal:hover{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(167, 182, 194, 0.3);
      text-decoration:none;
      color:#182026; }
    .bp3-button.bp3-minimal:active, .bp3-button.bp3-minimal.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(115, 134, 148, 0.3);
      color:#182026; }
    .bp3-button.bp3-minimal:disabled, .bp3-button.bp3-minimal:disabled:hover, .bp3-button.bp3-minimal.bp3-disabled, .bp3-button.bp3-minimal.bp3-disabled:hover{
      background:none;
      cursor:not-allowed;
      color:rgba(92, 112, 128, 0.6); }
      .bp3-button.bp3-minimal:disabled.bp3-active, .bp3-button.bp3-minimal:disabled:hover.bp3-active, .bp3-button.bp3-minimal.bp3-disabled.bp3-active, .bp3-button.bp3-minimal.bp3-disabled:hover.bp3-active{
        background:rgba(115, 134, 148, 0.3); }
    .bp3-dark .bp3-button.bp3-minimal{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:inherit; }
      .bp3-dark .bp3-button.bp3-minimal:hover, .bp3-dark .bp3-button.bp3-minimal:active, .bp3-dark .bp3-button.bp3-minimal.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none; }
      .bp3-dark .bp3-button.bp3-minimal:hover{
        background:rgba(138, 155, 168, 0.15); }
      .bp3-dark .bp3-button.bp3-minimal:active, .bp3-dark .bp3-button.bp3-minimal.bp3-active{
        background:rgba(138, 155, 168, 0.3);
        color:#f5f8fa; }
      .bp3-dark .bp3-button.bp3-minimal:disabled, .bp3-dark .bp3-button.bp3-minimal:disabled:hover, .bp3-dark .bp3-button.bp3-minimal.bp3-disabled, .bp3-dark .bp3-button.bp3-minimal.bp3-disabled:hover{
        background:none;
        cursor:not-allowed;
        color:rgba(167, 182, 194, 0.6); }
        .bp3-dark .bp3-button.bp3-minimal:disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal:disabled:hover.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-disabled:hover.bp3-active{
          background:rgba(138, 155, 168, 0.3); }
    .bp3-button.bp3-minimal.bp3-intent-primary{
      color:#106ba3; }
      .bp3-button.bp3-minimal.bp3-intent-primary:hover, .bp3-button.bp3-minimal.bp3-intent-primary:active, .bp3-button.bp3-minimal.bp3-intent-primary.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#106ba3; }
      .bp3-button.bp3-minimal.bp3-intent-primary:hover{
        background:rgba(19, 124, 189, 0.15);
        color:#106ba3; }
      .bp3-button.bp3-minimal.bp3-intent-primary:active, .bp3-button.bp3-minimal.bp3-intent-primary.bp3-active{
        background:rgba(19, 124, 189, 0.3);
        color:#106ba3; }
      .bp3-button.bp3-minimal.bp3-intent-primary:disabled, .bp3-button.bp3-minimal.bp3-intent-primary.bp3-disabled{
        background:none;
        color:rgba(16, 107, 163, 0.5); }
        .bp3-button.bp3-minimal.bp3-intent-primary:disabled.bp3-active, .bp3-button.bp3-minimal.bp3-intent-primary.bp3-disabled.bp3-active{
          background:rgba(19, 124, 189, 0.3); }
      .bp3-button.bp3-minimal.bp3-intent-primary .bp3-button-spinner .bp3-spinner-head{
        stroke:#106ba3; }
      .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary{
        color:#48aff0; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary:hover{
          background:rgba(19, 124, 189, 0.2);
          color:#48aff0; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary:active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary.bp3-active{
          background:rgba(19, 124, 189, 0.3);
          color:#48aff0; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary:disabled, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary.bp3-disabled{
          background:none;
          color:rgba(72, 175, 240, 0.5); }
          .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary:disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-primary.bp3-disabled.bp3-active{
            background:rgba(19, 124, 189, 0.3); }
    .bp3-button.bp3-minimal.bp3-intent-success{
      color:#0d8050; }
      .bp3-button.bp3-minimal.bp3-intent-success:hover, .bp3-button.bp3-minimal.bp3-intent-success:active, .bp3-button.bp3-minimal.bp3-intent-success.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#0d8050; }
      .bp3-button.bp3-minimal.bp3-intent-success:hover{
        background:rgba(15, 153, 96, 0.15);
        color:#0d8050; }
      .bp3-button.bp3-minimal.bp3-intent-success:active, .bp3-button.bp3-minimal.bp3-intent-success.bp3-active{
        background:rgba(15, 153, 96, 0.3);
        color:#0d8050; }
      .bp3-button.bp3-minimal.bp3-intent-success:disabled, .bp3-button.bp3-minimal.bp3-intent-success.bp3-disabled{
        background:none;
        color:rgba(13, 128, 80, 0.5); }
        .bp3-button.bp3-minimal.bp3-intent-success:disabled.bp3-active, .bp3-button.bp3-minimal.bp3-intent-success.bp3-disabled.bp3-active{
          background:rgba(15, 153, 96, 0.3); }
      .bp3-button.bp3-minimal.bp3-intent-success .bp3-button-spinner .bp3-spinner-head{
        stroke:#0d8050; }
      .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success{
        color:#3dcc91; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success:hover{
          background:rgba(15, 153, 96, 0.2);
          color:#3dcc91; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success:active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success.bp3-active{
          background:rgba(15, 153, 96, 0.3);
          color:#3dcc91; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success:disabled, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success.bp3-disabled{
          background:none;
          color:rgba(61, 204, 145, 0.5); }
          .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success:disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-success.bp3-disabled.bp3-active{
            background:rgba(15, 153, 96, 0.3); }
    .bp3-button.bp3-minimal.bp3-intent-warning{
      color:#bf7326; }
      .bp3-button.bp3-minimal.bp3-intent-warning:hover, .bp3-button.bp3-minimal.bp3-intent-warning:active, .bp3-button.bp3-minimal.bp3-intent-warning.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#bf7326; }
      .bp3-button.bp3-minimal.bp3-intent-warning:hover{
        background:rgba(217, 130, 43, 0.15);
        color:#bf7326; }
      .bp3-button.bp3-minimal.bp3-intent-warning:active, .bp3-button.bp3-minimal.bp3-intent-warning.bp3-active{
        background:rgba(217, 130, 43, 0.3);
        color:#bf7326; }
      .bp3-button.bp3-minimal.bp3-intent-warning:disabled, .bp3-button.bp3-minimal.bp3-intent-warning.bp3-disabled{
        background:none;
        color:rgba(191, 115, 38, 0.5); }
        .bp3-button.bp3-minimal.bp3-intent-warning:disabled.bp3-active, .bp3-button.bp3-minimal.bp3-intent-warning.bp3-disabled.bp3-active{
          background:rgba(217, 130, 43, 0.3); }
      .bp3-button.bp3-minimal.bp3-intent-warning .bp3-button-spinner .bp3-spinner-head{
        stroke:#bf7326; }
      .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning{
        color:#ffb366; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning:hover{
          background:rgba(217, 130, 43, 0.2);
          color:#ffb366; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning:active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning.bp3-active{
          background:rgba(217, 130, 43, 0.3);
          color:#ffb366; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning:disabled, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning.bp3-disabled{
          background:none;
          color:rgba(255, 179, 102, 0.5); }
          .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning:disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-warning.bp3-disabled.bp3-active{
            background:rgba(217, 130, 43, 0.3); }
    .bp3-button.bp3-minimal.bp3-intent-danger{
      color:#c23030; }
      .bp3-button.bp3-minimal.bp3-intent-danger:hover, .bp3-button.bp3-minimal.bp3-intent-danger:active, .bp3-button.bp3-minimal.bp3-intent-danger.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#c23030; }
      .bp3-button.bp3-minimal.bp3-intent-danger:hover{
        background:rgba(219, 55, 55, 0.15);
        color:#c23030; }
      .bp3-button.bp3-minimal.bp3-intent-danger:active, .bp3-button.bp3-minimal.bp3-intent-danger.bp3-active{
        background:rgba(219, 55, 55, 0.3);
        color:#c23030; }
      .bp3-button.bp3-minimal.bp3-intent-danger:disabled, .bp3-button.bp3-minimal.bp3-intent-danger.bp3-disabled{
        background:none;
        color:rgba(194, 48, 48, 0.5); }
        .bp3-button.bp3-minimal.bp3-intent-danger:disabled.bp3-active, .bp3-button.bp3-minimal.bp3-intent-danger.bp3-disabled.bp3-active{
          background:rgba(219, 55, 55, 0.3); }
      .bp3-button.bp3-minimal.bp3-intent-danger .bp3-button-spinner .bp3-spinner-head{
        stroke:#c23030; }
      .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger{
        color:#ff7373; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger:hover{
          background:rgba(219, 55, 55, 0.2);
          color:#ff7373; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger:active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger.bp3-active{
          background:rgba(219, 55, 55, 0.3);
          color:#ff7373; }
        .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger:disabled, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger.bp3-disabled{
          background:none;
          color:rgba(255, 115, 115, 0.5); }
          .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger:disabled.bp3-active, .bp3-dark .bp3-button.bp3-minimal.bp3-intent-danger.bp3-disabled.bp3-active{
            background:rgba(219, 55, 55, 0.3); }

a.bp3-button{
  text-align:center;
  text-decoration:none;
  -webkit-transition:none;
  transition:none; }
  a.bp3-button, a.bp3-button:hover, a.bp3-button:active{
    color:#182026; }
  a.bp3-button.bp3-disabled{
    color:rgba(92, 112, 128, 0.6); }

.bp3-button-text{
  -webkit-box-flex:0;
      -ms-flex:0 1 auto;
          flex:0 1 auto; }

.bp3-button.bp3-align-left .bp3-button-text, .bp3-button.bp3-align-right .bp3-button-text,
.bp3-button-group.bp3-align-left .bp3-button-text,
.bp3-button-group.bp3-align-right .bp3-button-text{
  -webkit-box-flex:1;
      -ms-flex:1 1 auto;
          flex:1 1 auto; }
.bp3-button-group{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex; }
  .bp3-button-group .bp3-button{
    -webkit-box-flex:0;
        -ms-flex:0 0 auto;
            flex:0 0 auto;
    position:relative;
    z-index:4; }
    .bp3-button-group .bp3-button:focus{
      z-index:5; }
    .bp3-button-group .bp3-button:hover{
      z-index:6; }
    .bp3-button-group .bp3-button:active, .bp3-button-group .bp3-button.bp3-active{
      z-index:7; }
    .bp3-button-group .bp3-button:disabled, .bp3-button-group .bp3-button.bp3-disabled{
      z-index:3; }
    .bp3-button-group .bp3-button[class*="bp3-intent-"]{
      z-index:9; }
      .bp3-button-group .bp3-button[class*="bp3-intent-"]:focus{
        z-index:10; }
      .bp3-button-group .bp3-button[class*="bp3-intent-"]:hover{
        z-index:11; }
      .bp3-button-group .bp3-button[class*="bp3-intent-"]:active, .bp3-button-group .bp3-button[class*="bp3-intent-"].bp3-active{
        z-index:12; }
      .bp3-button-group .bp3-button[class*="bp3-intent-"]:disabled, .bp3-button-group .bp3-button[class*="bp3-intent-"].bp3-disabled{
        z-index:8; }
  .bp3-button-group:not(.bp3-minimal) > .bp3-popover-wrapper:not(:first-child) .bp3-button,
  .bp3-button-group:not(.bp3-minimal) > .bp3-button:not(:first-child){
    border-top-left-radius:0;
    border-bottom-left-radius:0; }
  .bp3-button-group:not(.bp3-minimal) > .bp3-popover-wrapper:not(:last-child) .bp3-button,
  .bp3-button-group:not(.bp3-minimal) > .bp3-button:not(:last-child){
    margin-right:-1px;
    border-top-right-radius:0;
    border-bottom-right-radius:0; }
  .bp3-button-group.bp3-minimal .bp3-button{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:none; }
    .bp3-button-group.bp3-minimal .bp3-button:hover{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(167, 182, 194, 0.3);
      text-decoration:none;
      color:#182026; }
    .bp3-button-group.bp3-minimal .bp3-button:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(115, 134, 148, 0.3);
      color:#182026; }
    .bp3-button-group.bp3-minimal .bp3-button:disabled, .bp3-button-group.bp3-minimal .bp3-button:disabled:hover, .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled, .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled:hover{
      background:none;
      cursor:not-allowed;
      color:rgba(92, 112, 128, 0.6); }
      .bp3-button-group.bp3-minimal .bp3-button:disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button:disabled:hover.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled:hover.bp3-active{
        background:rgba(115, 134, 148, 0.3); }
    .bp3-dark .bp3-button-group.bp3-minimal .bp3-button{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:inherit; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:hover, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:hover{
        background:rgba(138, 155, 168, 0.15); }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-active{
        background:rgba(138, 155, 168, 0.3);
        color:#f5f8fa; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:disabled:hover, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled:hover{
        background:none;
        cursor:not-allowed;
        color:rgba(167, 182, 194, 0.6); }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button:disabled:hover.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-disabled:hover.bp3-active{
          background:rgba(138, 155, 168, 0.3); }
    .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary{
      color:#106ba3; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:hover, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#106ba3; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:hover{
        background:rgba(19, 124, 189, 0.15);
        color:#106ba3; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-active{
        background:rgba(19, 124, 189, 0.3);
        color:#106ba3; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:disabled, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-disabled{
        background:none;
        color:rgba(16, 107, 163, 0.5); }
        .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-disabled.bp3-active{
          background:rgba(19, 124, 189, 0.3); }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary .bp3-button-spinner .bp3-spinner-head{
        stroke:#106ba3; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary{
        color:#48aff0; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:hover{
          background:rgba(19, 124, 189, 0.2);
          color:#48aff0; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-active{
          background:rgba(19, 124, 189, 0.3);
          color:#48aff0; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-disabled{
          background:none;
          color:rgba(72, 175, 240, 0.5); }
          .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary:disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-primary.bp3-disabled.bp3-active{
            background:rgba(19, 124, 189, 0.3); }
    .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success{
      color:#0d8050; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:hover, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#0d8050; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:hover{
        background:rgba(15, 153, 96, 0.15);
        color:#0d8050; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-active{
        background:rgba(15, 153, 96, 0.3);
        color:#0d8050; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:disabled, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-disabled{
        background:none;
        color:rgba(13, 128, 80, 0.5); }
        .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-disabled.bp3-active{
          background:rgba(15, 153, 96, 0.3); }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success .bp3-button-spinner .bp3-spinner-head{
        stroke:#0d8050; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success{
        color:#3dcc91; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:hover{
          background:rgba(15, 153, 96, 0.2);
          color:#3dcc91; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-active{
          background:rgba(15, 153, 96, 0.3);
          color:#3dcc91; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-disabled{
          background:none;
          color:rgba(61, 204, 145, 0.5); }
          .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success:disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-success.bp3-disabled.bp3-active{
            background:rgba(15, 153, 96, 0.3); }
    .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning{
      color:#bf7326; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:hover, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#bf7326; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:hover{
        background:rgba(217, 130, 43, 0.15);
        color:#bf7326; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-active{
        background:rgba(217, 130, 43, 0.3);
        color:#bf7326; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:disabled, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-disabled{
        background:none;
        color:rgba(191, 115, 38, 0.5); }
        .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-disabled.bp3-active{
          background:rgba(217, 130, 43, 0.3); }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning .bp3-button-spinner .bp3-spinner-head{
        stroke:#bf7326; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning{
        color:#ffb366; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:hover{
          background:rgba(217, 130, 43, 0.2);
          color:#ffb366; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-active{
          background:rgba(217, 130, 43, 0.3);
          color:#ffb366; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-disabled{
          background:none;
          color:rgba(255, 179, 102, 0.5); }
          .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning:disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-warning.bp3-disabled.bp3-active{
            background:rgba(217, 130, 43, 0.3); }
    .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger{
      color:#c23030; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:hover, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-active{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:none;
        color:#c23030; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:hover{
        background:rgba(219, 55, 55, 0.15);
        color:#c23030; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-active{
        background:rgba(219, 55, 55, 0.3);
        color:#c23030; }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:disabled, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-disabled{
        background:none;
        color:rgba(194, 48, 48, 0.5); }
        .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:disabled.bp3-active, .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-disabled.bp3-active{
          background:rgba(219, 55, 55, 0.3); }
      .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger .bp3-button-spinner .bp3-spinner-head{
        stroke:#c23030; }
      .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger{
        color:#ff7373; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:hover{
          background:rgba(219, 55, 55, 0.2);
          color:#ff7373; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-active{
          background:rgba(219, 55, 55, 0.3);
          color:#ff7373; }
        .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:disabled, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-disabled{
          background:none;
          color:rgba(255, 115, 115, 0.5); }
          .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger:disabled.bp3-active, .bp3-dark .bp3-button-group.bp3-minimal .bp3-button.bp3-intent-danger.bp3-disabled.bp3-active{
            background:rgba(219, 55, 55, 0.3); }
  .bp3-button-group .bp3-popover-wrapper,
  .bp3-button-group .bp3-popover-target{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto; }
  .bp3-button-group.bp3-fill{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    width:100%; }
  .bp3-button-group .bp3-button.bp3-fill,
  .bp3-button-group.bp3-fill .bp3-button:not(.bp3-fixed){
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto; }
  .bp3-button-group.bp3-vertical{
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
        -ms-flex-direction:column;
            flex-direction:column;
    -webkit-box-align:stretch;
        -ms-flex-align:stretch;
            align-items:stretch;
    vertical-align:top; }
    .bp3-button-group.bp3-vertical.bp3-fill{
      width:unset;
      height:100%; }
    .bp3-button-group.bp3-vertical .bp3-button{
      margin-right:0 !important;
      width:100%; }
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-popover-wrapper:first-child .bp3-button,
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-button:first-child{
      border-radius:3px 3px 0 0; }
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-popover-wrapper:last-child .bp3-button,
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-button:last-child{
      border-radius:0 0 3px 3px; }
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-popover-wrapper:not(:last-child) .bp3-button,
    .bp3-button-group.bp3-vertical:not(.bp3-minimal) > .bp3-button:not(:last-child){
      margin-bottom:-1px; }
  .bp3-button-group.bp3-align-left .bp3-button{
    text-align:left; }
  .bp3-dark .bp3-button-group:not(.bp3-minimal) > .bp3-popover-wrapper:not(:last-child) .bp3-button,
  .bp3-dark .bp3-button-group:not(.bp3-minimal) > .bp3-button:not(:last-child){
    margin-right:1px; }
  .bp3-dark .bp3-button-group.bp3-vertical > .bp3-popover-wrapper:not(:last-child) .bp3-button,
  .bp3-dark .bp3-button-group.bp3-vertical > .bp3-button:not(:last-child){
    margin-bottom:1px; }
.bp3-callout{
  line-height:1.5;
  font-size:14px;
  position:relative;
  border-radius:3px;
  background-color:rgba(138, 155, 168, 0.15);
  width:100%;
  padding:10px 12px 9px; }
  .bp3-callout[class*="bp3-icon-"]{
    padding-left:40px; }
    .bp3-callout[class*="bp3-icon-"]::before{
      line-height:1;
      font-family:"Icons20", sans-serif;
      font-size:20px;
      font-weight:400;
      font-style:normal;
      -moz-osx-font-smoothing:grayscale;
      -webkit-font-smoothing:antialiased;
      position:absolute;
      top:10px;
      left:10px;
      color:#5c7080; }
  .bp3-callout.bp3-callout-icon{
    padding-left:40px; }
    .bp3-callout.bp3-callout-icon > .bp3-icon:first-child{
      position:absolute;
      top:10px;
      left:10px;
      color:#5c7080; }
  .bp3-callout .bp3-heading{
    margin-top:0;
    margin-bottom:5px;
    line-height:20px; }
    .bp3-callout .bp3-heading:last-child{
      margin-bottom:0; }
  .bp3-dark .bp3-callout{
    background-color:rgba(138, 155, 168, 0.2); }
    .bp3-dark .bp3-callout[class*="bp3-icon-"]::before{
      color:#a7b6c2; }
  .bp3-callout.bp3-intent-primary{
    background-color:rgba(19, 124, 189, 0.15); }
    .bp3-callout.bp3-intent-primary[class*="bp3-icon-"]::before,
    .bp3-callout.bp3-intent-primary > .bp3-icon:first-child,
    .bp3-callout.bp3-intent-primary .bp3-heading{
      color:#106ba3; }
    .bp3-dark .bp3-callout.bp3-intent-primary{
      background-color:rgba(19, 124, 189, 0.25); }
      .bp3-dark .bp3-callout.bp3-intent-primary[class*="bp3-icon-"]::before,
      .bp3-dark .bp3-callout.bp3-intent-primary > .bp3-icon:first-child,
      .bp3-dark .bp3-callout.bp3-intent-primary .bp3-heading{
        color:#48aff0; }
  .bp3-callout.bp3-intent-success{
    background-color:rgba(15, 153, 96, 0.15); }
    .bp3-callout.bp3-intent-success[class*="bp3-icon-"]::before,
    .bp3-callout.bp3-intent-success > .bp3-icon:first-child,
    .bp3-callout.bp3-intent-success .bp3-heading{
      color:#0d8050; }
    .bp3-dark .bp3-callout.bp3-intent-success{
      background-color:rgba(15, 153, 96, 0.25); }
      .bp3-dark .bp3-callout.bp3-intent-success[class*="bp3-icon-"]::before,
      .bp3-dark .bp3-callout.bp3-intent-success > .bp3-icon:first-child,
      .bp3-dark .bp3-callout.bp3-intent-success .bp3-heading{
        color:#3dcc91; }
  .bp3-callout.bp3-intent-warning{
    background-color:rgba(217, 130, 43, 0.15); }
    .bp3-callout.bp3-intent-warning[class*="bp3-icon-"]::before,
    .bp3-callout.bp3-intent-warning > .bp3-icon:first-child,
    .bp3-callout.bp3-intent-warning .bp3-heading{
      color:#bf7326; }
    .bp3-dark .bp3-callout.bp3-intent-warning{
      background-color:rgba(217, 130, 43, 0.25); }
      .bp3-dark .bp3-callout.bp3-intent-warning[class*="bp3-icon-"]::before,
      .bp3-dark .bp3-callout.bp3-intent-warning > .bp3-icon:first-child,
      .bp3-dark .bp3-callout.bp3-intent-warning .bp3-heading{
        color:#ffb366; }
  .bp3-callout.bp3-intent-danger{
    background-color:rgba(219, 55, 55, 0.15); }
    .bp3-callout.bp3-intent-danger[class*="bp3-icon-"]::before,
    .bp3-callout.bp3-intent-danger > .bp3-icon:first-child,
    .bp3-callout.bp3-intent-danger .bp3-heading{
      color:#c23030; }
    .bp3-dark .bp3-callout.bp3-intent-danger{
      background-color:rgba(219, 55, 55, 0.25); }
      .bp3-dark .bp3-callout.bp3-intent-danger[class*="bp3-icon-"]::before,
      .bp3-dark .bp3-callout.bp3-intent-danger > .bp3-icon:first-child,
      .bp3-dark .bp3-callout.bp3-intent-danger .bp3-heading{
        color:#ff7373; }
  .bp3-running-text .bp3-callout{
    margin:20px 0; }
.bp3-card{
  border-radius:3px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.15), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.15), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
  background-color:#ffffff;
  padding:20px;
  -webkit-transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), box-shadow 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), box-shadow 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 200ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-card.bp3-dark,
  .bp3-dark .bp3-card{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
    background-color:#30404d; }

.bp3-elevation-0{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.15), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.15), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0); }
  .bp3-elevation-0.bp3-dark,
  .bp3-dark .bp3-elevation-0{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), 0 0 0 rgba(16, 22, 26, 0), 0 0 0 rgba(16, 22, 26, 0); }

.bp3-elevation-1{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-elevation-1.bp3-dark,
  .bp3-dark .bp3-elevation-1{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4); }

.bp3-elevation-2{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 1px 1px rgba(16, 22, 26, 0.2), 0 2px 6px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 1px 1px rgba(16, 22, 26, 0.2), 0 2px 6px rgba(16, 22, 26, 0.2); }
  .bp3-elevation-2.bp3-dark,
  .bp3-dark .bp3-elevation-2{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.4), 0 2px 6px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.4), 0 2px 6px rgba(16, 22, 26, 0.4); }

.bp3-elevation-3{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2); }
  .bp3-elevation-3.bp3-dark,
  .bp3-dark .bp3-elevation-3{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4); }

.bp3-elevation-4{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2); }
  .bp3-elevation-4.bp3-dark,
  .bp3-dark .bp3-elevation-4{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4); }

.bp3-card.bp3-interactive:hover{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
  cursor:pointer; }
  .bp3-card.bp3-interactive:hover.bp3-dark,
  .bp3-dark .bp3-card.bp3-interactive:hover{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4); }

.bp3-card.bp3-interactive:active{
  opacity:0.9;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
  -webkit-transition-duration:0;
          transition-duration:0; }
  .bp3-card.bp3-interactive:active.bp3-dark,
  .bp3-dark .bp3-card.bp3-interactive:active{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4); }

.bp3-collapse{
  height:0;
  overflow-y:hidden;
  -webkit-transition:height 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:height 200ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-collapse .bp3-collapse-body{
    -webkit-transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9); }
    .bp3-collapse .bp3-collapse-body[aria-hidden="true"]{
      display:none; }

.bp3-context-menu .bp3-popover-target{
  display:block; }

.bp3-context-menu-popover-target{
  position:fixed; }

.bp3-divider{
  margin:5px;
  border-right:1px solid rgba(16, 22, 26, 0.15);
  border-bottom:1px solid rgba(16, 22, 26, 0.15); }
  .bp3-dark .bp3-divider{
    border-color:rgba(16, 22, 26, 0.4); }
.bp3-dialog-container{
  opacity:1;
  -webkit-transform:scale(1);
          transform:scale(1);
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  width:100%;
  min-height:100%;
  pointer-events:none;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-dialog-container.bp3-overlay-enter > .bp3-dialog, .bp3-dialog-container.bp3-overlay-appear > .bp3-dialog{
    opacity:0;
    -webkit-transform:scale(0.5);
            transform:scale(0.5); }
  .bp3-dialog-container.bp3-overlay-enter-active > .bp3-dialog, .bp3-dialog-container.bp3-overlay-appear-active > .bp3-dialog{
    opacity:1;
    -webkit-transform:scale(1);
            transform:scale(1);
    -webkit-transition-property:opacity, -webkit-transform;
    transition-property:opacity, -webkit-transform;
    transition-property:opacity, transform;
    transition-property:opacity, transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-dialog-container.bp3-overlay-exit > .bp3-dialog{
    opacity:1;
    -webkit-transform:scale(1);
            transform:scale(1); }
  .bp3-dialog-container.bp3-overlay-exit-active > .bp3-dialog{
    opacity:0;
    -webkit-transform:scale(0.5);
            transform:scale(0.5);
    -webkit-transition-property:opacity, -webkit-transform;
    transition-property:opacity, -webkit-transform;
    transition-property:opacity, transform;
    transition-property:opacity, transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }

.bp3-dialog{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  margin:30px 0;
  border-radius:6px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
  background:#ebf1f5;
  width:500px;
  padding-bottom:20px;
  pointer-events:all;
  -webkit-user-select:text;
     -moz-user-select:text;
      -ms-user-select:text;
          user-select:text; }
  .bp3-dialog:focus{
    outline:0; }
  .bp3-dialog.bp3-dark,
  .bp3-dark .bp3-dialog{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
    background:#293742;
    color:#f5f8fa; }

.bp3-dialog-header{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  border-radius:6px 6px 0 0;
  -webkit-box-shadow:0 1px 0 rgba(16, 22, 26, 0.15);
          box-shadow:0 1px 0 rgba(16, 22, 26, 0.15);
  background:#ffffff;
  min-height:40px;
  padding-right:5px;
  padding-left:20px; }
  .bp3-dialog-header .bp3-icon-large,
  .bp3-dialog-header .bp3-icon{
    -webkit-box-flex:0;
        -ms-flex:0 0 auto;
            flex:0 0 auto;
    margin-right:10px;
    color:#5c7080; }
  .bp3-dialog-header .bp3-heading{
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:nowrap;
    word-wrap:normal;
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto;
    margin:0;
    line-height:inherit; }
    .bp3-dialog-header .bp3-heading:last-child{
      margin-right:20px; }
  .bp3-dark .bp3-dialog-header{
    -webkit-box-shadow:0 1px 0 rgba(16, 22, 26, 0.4);
            box-shadow:0 1px 0 rgba(16, 22, 26, 0.4);
    background:#30404d; }
    .bp3-dark .bp3-dialog-header .bp3-icon-large,
    .bp3-dark .bp3-dialog-header .bp3-icon{
      color:#a7b6c2; }

.bp3-dialog-body{
  -webkit-box-flex:1;
      -ms-flex:1 1 auto;
          flex:1 1 auto;
  margin:20px;
  line-height:18px; }

.bp3-dialog-footer{
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  margin:0 20px; }

.bp3-dialog-footer-actions{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:end;
      -ms-flex-pack:end;
          justify-content:flex-end; }
  .bp3-dialog-footer-actions .bp3-button{
    margin-left:10px; }
.bp3-drawer{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  margin:0;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
  background:#ffffff;
  padding:0; }
  .bp3-drawer:focus{
    outline:0; }
  .bp3-drawer.bp3-position-top{
    top:0;
    right:0;
    left:0;
    height:50%; }
    .bp3-drawer.bp3-position-top.bp3-overlay-enter, .bp3-drawer.bp3-position-top.bp3-overlay-appear{
      -webkit-transform:translateY(-100%);
              transform:translateY(-100%); }
    .bp3-drawer.bp3-position-top.bp3-overlay-enter-active, .bp3-drawer.bp3-position-top.bp3-overlay-appear-active{
      -webkit-transform:translateY(0);
              transform:translateY(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer.bp3-position-top.bp3-overlay-exit{
      -webkit-transform:translateY(0);
              transform:translateY(0); }
    .bp3-drawer.bp3-position-top.bp3-overlay-exit-active{
      -webkit-transform:translateY(-100%);
              transform:translateY(-100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer.bp3-position-bottom{
    right:0;
    bottom:0;
    left:0;
    height:50%; }
    .bp3-drawer.bp3-position-bottom.bp3-overlay-enter, .bp3-drawer.bp3-position-bottom.bp3-overlay-appear{
      -webkit-transform:translateY(100%);
              transform:translateY(100%); }
    .bp3-drawer.bp3-position-bottom.bp3-overlay-enter-active, .bp3-drawer.bp3-position-bottom.bp3-overlay-appear-active{
      -webkit-transform:translateY(0);
              transform:translateY(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer.bp3-position-bottom.bp3-overlay-exit{
      -webkit-transform:translateY(0);
              transform:translateY(0); }
    .bp3-drawer.bp3-position-bottom.bp3-overlay-exit-active{
      -webkit-transform:translateY(100%);
              transform:translateY(100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer.bp3-position-left{
    top:0;
    bottom:0;
    left:0;
    width:50%; }
    .bp3-drawer.bp3-position-left.bp3-overlay-enter, .bp3-drawer.bp3-position-left.bp3-overlay-appear{
      -webkit-transform:translateX(-100%);
              transform:translateX(-100%); }
    .bp3-drawer.bp3-position-left.bp3-overlay-enter-active, .bp3-drawer.bp3-position-left.bp3-overlay-appear-active{
      -webkit-transform:translateX(0);
              transform:translateX(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer.bp3-position-left.bp3-overlay-exit{
      -webkit-transform:translateX(0);
              transform:translateX(0); }
    .bp3-drawer.bp3-position-left.bp3-overlay-exit-active{
      -webkit-transform:translateX(-100%);
              transform:translateX(-100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer.bp3-position-right{
    top:0;
    right:0;
    bottom:0;
    width:50%; }
    .bp3-drawer.bp3-position-right.bp3-overlay-enter, .bp3-drawer.bp3-position-right.bp3-overlay-appear{
      -webkit-transform:translateX(100%);
              transform:translateX(100%); }
    .bp3-drawer.bp3-position-right.bp3-overlay-enter-active, .bp3-drawer.bp3-position-right.bp3-overlay-appear-active{
      -webkit-transform:translateX(0);
              transform:translateX(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer.bp3-position-right.bp3-overlay-exit{
      -webkit-transform:translateX(0);
              transform:translateX(0); }
    .bp3-drawer.bp3-position-right.bp3-overlay-exit-active{
      -webkit-transform:translateX(100%);
              transform:translateX(100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
  .bp3-position-right):not(.bp3-vertical){
    top:0;
    right:0;
    bottom:0;
    width:50%; }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-enter, .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-appear{
      -webkit-transform:translateX(100%);
              transform:translateX(100%); }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-enter-active, .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-appear-active{
      -webkit-transform:translateX(0);
              transform:translateX(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-exit{
      -webkit-transform:translateX(0);
              transform:translateX(0); }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right):not(.bp3-vertical).bp3-overlay-exit-active{
      -webkit-transform:translateX(100%);
              transform:translateX(100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
  .bp3-position-right).bp3-vertical{
    right:0;
    bottom:0;
    left:0;
    height:50%; }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-enter, .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-appear{
      -webkit-transform:translateY(100%);
              transform:translateY(100%); }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-enter-active, .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-appear-active{
      -webkit-transform:translateY(0);
              transform:translateY(0);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:200ms;
              transition-duration:200ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-exit{
      -webkit-transform:translateY(0);
              transform:translateY(0); }
    .bp3-drawer:not(.bp3-position-top):not(.bp3-position-bottom):not(.bp3-position-left):not(
    .bp3-position-right).bp3-vertical.bp3-overlay-exit-active{
      -webkit-transform:translateY(100%);
              transform:translateY(100%);
      -webkit-transition-property:-webkit-transform;
      transition-property:-webkit-transform;
      transition-property:transform;
      transition-property:transform, -webkit-transform;
      -webkit-transition-duration:100ms;
              transition-duration:100ms;
      -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
              transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
      -webkit-transition-delay:0;
              transition-delay:0; }
  .bp3-drawer.bp3-dark,
  .bp3-dark .bp3-drawer{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
    background:#30404d;
    color:#f5f8fa; }

.bp3-drawer-header{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  position:relative;
  border-radius:0;
  -webkit-box-shadow:0 1px 0 rgba(16, 22, 26, 0.15);
          box-shadow:0 1px 0 rgba(16, 22, 26, 0.15);
  min-height:40px;
  padding:5px;
  padding-left:20px; }
  .bp3-drawer-header .bp3-icon-large,
  .bp3-drawer-header .bp3-icon{
    -webkit-box-flex:0;
        -ms-flex:0 0 auto;
            flex:0 0 auto;
    margin-right:10px;
    color:#5c7080; }
  .bp3-drawer-header .bp3-heading{
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:nowrap;
    word-wrap:normal;
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto;
    margin:0;
    line-height:inherit; }
    .bp3-drawer-header .bp3-heading:last-child{
      margin-right:20px; }
  .bp3-dark .bp3-drawer-header{
    -webkit-box-shadow:0 1px 0 rgba(16, 22, 26, 0.4);
            box-shadow:0 1px 0 rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-drawer-header .bp3-icon-large,
    .bp3-dark .bp3-drawer-header .bp3-icon{
      color:#a7b6c2; }

.bp3-drawer-body{
  -webkit-box-flex:1;
      -ms-flex:1 1 auto;
          flex:1 1 auto;
  overflow:auto;
  line-height:18px; }

.bp3-drawer-footer{
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  position:relative;
  -webkit-box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.15);
          box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.15);
  padding:10px 20px; }
  .bp3-dark .bp3-drawer-footer{
    -webkit-box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.4);
            box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.4); }
.bp3-editable-text{
  display:inline-block;
  position:relative;
  cursor:text;
  max-width:100%;
  vertical-align:top;
  white-space:nowrap; }
  .bp3-editable-text::before{
    position:absolute;
    top:-3px;
    right:-3px;
    bottom:-3px;
    left:-3px;
    border-radius:3px;
    content:"";
    -webkit-transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9), box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9), box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-editable-text:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15); }
  .bp3-editable-text.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
    background-color:#ffffff; }
  .bp3-editable-text.bp3-disabled::before{
    -webkit-box-shadow:none;
            box-shadow:none; }
  .bp3-editable-text.bp3-intent-primary .bp3-editable-text-input,
  .bp3-editable-text.bp3-intent-primary .bp3-editable-text-content{
    color:#137cbd; }
  .bp3-editable-text.bp3-intent-primary:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(19, 124, 189, 0.4);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(19, 124, 189, 0.4); }
  .bp3-editable-text.bp3-intent-primary.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-editable-text.bp3-intent-success .bp3-editable-text-input,
  .bp3-editable-text.bp3-intent-success .bp3-editable-text-content{
    color:#0f9960; }
  .bp3-editable-text.bp3-intent-success:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px rgba(15, 153, 96, 0.4);
            box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px rgba(15, 153, 96, 0.4); }
  .bp3-editable-text.bp3-intent-success.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-editable-text.bp3-intent-warning .bp3-editable-text-input,
  .bp3-editable-text.bp3-intent-warning .bp3-editable-text-content{
    color:#d9822b; }
  .bp3-editable-text.bp3-intent-warning:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px rgba(217, 130, 43, 0.4);
            box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px rgba(217, 130, 43, 0.4); }
  .bp3-editable-text.bp3-intent-warning.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-editable-text.bp3-intent-danger .bp3-editable-text-input,
  .bp3-editable-text.bp3-intent-danger .bp3-editable-text-content{
    color:#db3737; }
  .bp3-editable-text.bp3-intent-danger:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px rgba(219, 55, 55, 0.4);
            box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px rgba(219, 55, 55, 0.4); }
  .bp3-editable-text.bp3-intent-danger.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-dark .bp3-editable-text:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(255, 255, 255, 0.15);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(255, 255, 255, 0.15); }
  .bp3-dark .bp3-editable-text.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
    background-color:rgba(16, 22, 26, 0.3); }
  .bp3-dark .bp3-editable-text.bp3-disabled::before{
    -webkit-box-shadow:none;
            box-shadow:none; }
  .bp3-dark .bp3-editable-text.bp3-intent-primary .bp3-editable-text-content{
    color:#48aff0; }
  .bp3-dark .bp3-editable-text.bp3-intent-primary:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(72, 175, 240, 0), 0 0 0 0 rgba(72, 175, 240, 0), inset 0 0 0 1px rgba(72, 175, 240, 0.4);
            box-shadow:0 0 0 0 rgba(72, 175, 240, 0), 0 0 0 0 rgba(72, 175, 240, 0), inset 0 0 0 1px rgba(72, 175, 240, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-primary.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #48aff0, 0 0 0 3px rgba(72, 175, 240, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #48aff0, 0 0 0 3px rgba(72, 175, 240, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-success .bp3-editable-text-content{
    color:#3dcc91; }
  .bp3-dark .bp3-editable-text.bp3-intent-success:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(61, 204, 145, 0), 0 0 0 0 rgba(61, 204, 145, 0), inset 0 0 0 1px rgba(61, 204, 145, 0.4);
            box-shadow:0 0 0 0 rgba(61, 204, 145, 0), 0 0 0 0 rgba(61, 204, 145, 0), inset 0 0 0 1px rgba(61, 204, 145, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-success.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #3dcc91, 0 0 0 3px rgba(61, 204, 145, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #3dcc91, 0 0 0 3px rgba(61, 204, 145, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-warning .bp3-editable-text-content{
    color:#ffb366; }
  .bp3-dark .bp3-editable-text.bp3-intent-warning:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(255, 179, 102, 0), 0 0 0 0 rgba(255, 179, 102, 0), inset 0 0 0 1px rgba(255, 179, 102, 0.4);
            box-shadow:0 0 0 0 rgba(255, 179, 102, 0), 0 0 0 0 rgba(255, 179, 102, 0), inset 0 0 0 1px rgba(255, 179, 102, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-warning.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #ffb366, 0 0 0 3px rgba(255, 179, 102, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #ffb366, 0 0 0 3px rgba(255, 179, 102, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-danger .bp3-editable-text-content{
    color:#ff7373; }
  .bp3-dark .bp3-editable-text.bp3-intent-danger:hover::before{
    -webkit-box-shadow:0 0 0 0 rgba(255, 115, 115, 0), 0 0 0 0 rgba(255, 115, 115, 0), inset 0 0 0 1px rgba(255, 115, 115, 0.4);
            box-shadow:0 0 0 0 rgba(255, 115, 115, 0), 0 0 0 0 rgba(255, 115, 115, 0), inset 0 0 0 1px rgba(255, 115, 115, 0.4); }
  .bp3-dark .bp3-editable-text.bp3-intent-danger.bp3-editable-text-editing::before{
    -webkit-box-shadow:0 0 0 1px #ff7373, 0 0 0 3px rgba(255, 115, 115, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #ff7373, 0 0 0 3px rgba(255, 115, 115, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }

.bp3-editable-text-input,
.bp3-editable-text-content{
  display:inherit;
  position:relative;
  min-width:inherit;
  max-width:inherit;
  vertical-align:top;
  text-transform:inherit;
  letter-spacing:inherit;
  color:inherit;
  font:inherit;
  resize:none; }

.bp3-editable-text-input{
  border:none;
  -webkit-box-shadow:none;
          box-shadow:none;
  background:none;
  width:100%;
  padding:0;
  white-space:pre-wrap; }
  .bp3-editable-text-input::-webkit-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-editable-text-input::-moz-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-editable-text-input:-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-editable-text-input::-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-editable-text-input::placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-editable-text-input:focus{
    outline:none; }
  .bp3-editable-text-input::-ms-clear{
    display:none; }

.bp3-editable-text-content{
  overflow:hidden;
  padding-right:2px;
  text-overflow:ellipsis;
  white-space:pre; }
  .bp3-editable-text-editing > .bp3-editable-text-content{
    position:absolute;
    left:0;
    visibility:hidden; }
  .bp3-editable-text-placeholder > .bp3-editable-text-content{
    color:rgba(92, 112, 128, 0.6); }
    .bp3-dark .bp3-editable-text-placeholder > .bp3-editable-text-content{
      color:rgba(167, 182, 194, 0.6); }

.bp3-editable-text.bp3-multiline{
  display:block; }
  .bp3-editable-text.bp3-multiline .bp3-editable-text-content{
    overflow:auto;
    white-space:pre-wrap;
    word-wrap:break-word; }
.bp3-control-group{
  -webkit-transform:translateZ(0);
          transform:translateZ(0);
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:stretch;
      -ms-flex-align:stretch;
          align-items:stretch; }
  .bp3-control-group > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-control-group > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-control-group .bp3-button,
  .bp3-control-group .bp3-html-select,
  .bp3-control-group .bp3-input,
  .bp3-control-group .bp3-select{
    position:relative; }
  .bp3-control-group .bp3-input{
    z-index:2;
    border-radius:inherit; }
    .bp3-control-group .bp3-input:focus{
      z-index:14;
      border-radius:3px; }
    .bp3-control-group .bp3-input[class*="bp3-intent"]{
      z-index:13; }
      .bp3-control-group .bp3-input[class*="bp3-intent"]:focus{
        z-index:15; }
    .bp3-control-group .bp3-input[readonly], .bp3-control-group .bp3-input:disabled, .bp3-control-group .bp3-input.bp3-disabled{
      z-index:1; }
  .bp3-control-group .bp3-input-group[class*="bp3-intent"] .bp3-input{
    z-index:13; }
    .bp3-control-group .bp3-input-group[class*="bp3-intent"] .bp3-input:focus{
      z-index:15; }
  .bp3-control-group .bp3-button,
  .bp3-control-group .bp3-html-select select,
  .bp3-control-group .bp3-select select{
    -webkit-transform:translateZ(0);
            transform:translateZ(0);
    z-index:4;
    border-radius:inherit; }
    .bp3-control-group .bp3-button:focus,
    .bp3-control-group .bp3-html-select select:focus,
    .bp3-control-group .bp3-select select:focus{
      z-index:5; }
    .bp3-control-group .bp3-button:hover,
    .bp3-control-group .bp3-html-select select:hover,
    .bp3-control-group .bp3-select select:hover{
      z-index:6; }
    .bp3-control-group .bp3-button:active,
    .bp3-control-group .bp3-html-select select:active,
    .bp3-control-group .bp3-select select:active{
      z-index:7; }
    .bp3-control-group .bp3-button[readonly], .bp3-control-group .bp3-button:disabled, .bp3-control-group .bp3-button.bp3-disabled,
    .bp3-control-group .bp3-html-select select[readonly],
    .bp3-control-group .bp3-html-select select:disabled,
    .bp3-control-group .bp3-html-select select.bp3-disabled,
    .bp3-control-group .bp3-select select[readonly],
    .bp3-control-group .bp3-select select:disabled,
    .bp3-control-group .bp3-select select.bp3-disabled{
      z-index:3; }
    .bp3-control-group .bp3-button[class*="bp3-intent"],
    .bp3-control-group .bp3-html-select select[class*="bp3-intent"],
    .bp3-control-group .bp3-select select[class*="bp3-intent"]{
      z-index:9; }
      .bp3-control-group .bp3-button[class*="bp3-intent"]:focus,
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"]:focus,
      .bp3-control-group .bp3-select select[class*="bp3-intent"]:focus{
        z-index:10; }
      .bp3-control-group .bp3-button[class*="bp3-intent"]:hover,
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"]:hover,
      .bp3-control-group .bp3-select select[class*="bp3-intent"]:hover{
        z-index:11; }
      .bp3-control-group .bp3-button[class*="bp3-intent"]:active,
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"]:active,
      .bp3-control-group .bp3-select select[class*="bp3-intent"]:active{
        z-index:12; }
      .bp3-control-group .bp3-button[class*="bp3-intent"][readonly], .bp3-control-group .bp3-button[class*="bp3-intent"]:disabled, .bp3-control-group .bp3-button[class*="bp3-intent"].bp3-disabled,
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"][readonly],
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"]:disabled,
      .bp3-control-group .bp3-html-select select[class*="bp3-intent"].bp3-disabled,
      .bp3-control-group .bp3-select select[class*="bp3-intent"][readonly],
      .bp3-control-group .bp3-select select[class*="bp3-intent"]:disabled,
      .bp3-control-group .bp3-select select[class*="bp3-intent"].bp3-disabled{
        z-index:8; }
  .bp3-control-group .bp3-input-group > .bp3-icon,
  .bp3-control-group .bp3-input-group > .bp3-button,
  .bp3-control-group .bp3-input-group > .bp3-input-action{
    z-index:16; }
  .bp3-control-group .bp3-select::after,
  .bp3-control-group .bp3-html-select::after,
  .bp3-control-group .bp3-select > .bp3-icon,
  .bp3-control-group .bp3-html-select > .bp3-icon{
    z-index:17; }
  .bp3-control-group:not(.bp3-vertical) > *{
    margin-right:-1px; }
  .bp3-dark .bp3-control-group:not(.bp3-vertical) > *{
    margin-right:0; }
  .bp3-dark .bp3-control-group:not(.bp3-vertical) > .bp3-button + .bp3-button{
    margin-left:1px; }
  .bp3-control-group .bp3-popover-wrapper,
  .bp3-control-group .bp3-popover-target{
    border-radius:inherit; }
  .bp3-control-group > :first-child{
    border-radius:3px 0 0 3px; }
  .bp3-control-group > :last-child{
    margin-right:0;
    border-radius:0 3px 3px 0; }
  .bp3-control-group > :only-child{
    margin-right:0;
    border-radius:3px; }
  .bp3-control-group .bp3-input-group .bp3-button{
    border-radius:3px; }
  .bp3-control-group > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto; }
  .bp3-control-group.bp3-fill > *:not(.bp3-fixed){
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto; }
  .bp3-control-group.bp3-vertical{
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
        -ms-flex-direction:column;
            flex-direction:column; }
    .bp3-control-group.bp3-vertical > *{
      margin-top:-1px; }
    .bp3-control-group.bp3-vertical > :first-child{
      margin-top:0;
      border-radius:3px 3px 0 0; }
    .bp3-control-group.bp3-vertical > :last-child{
      border-radius:0 0 3px 3px; }
.bp3-control{
  display:block;
  position:relative;
  margin-bottom:10px;
  cursor:pointer;
  text-transform:none; }
  .bp3-control input:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#137cbd;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
  .bp3-control:hover input:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#106ba3; }
  .bp3-control input:not(:disabled):active:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background:#0e5a8a; }
  .bp3-control input:disabled:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(19, 124, 189, 0.5); }
  .bp3-dark .bp3-control input:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-control:hover input:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background-color:#106ba3; }
  .bp3-dark .bp3-control input:not(:disabled):active:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#0e5a8a; }
  .bp3-dark .bp3-control input:disabled:checked ~ .bp3-control-indicator{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(14, 90, 138, 0.5); }
  .bp3-control:not(.bp3-align-right){
    padding-left:26px; }
    .bp3-control:not(.bp3-align-right) .bp3-control-indicator{
      margin-left:-26px; }
  .bp3-control.bp3-align-right{
    padding-right:26px; }
    .bp3-control.bp3-align-right .bp3-control-indicator{
      margin-right:-26px; }
  .bp3-control.bp3-disabled{
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-control.bp3-inline{
    display:inline-block;
    margin-right:20px; }
  .bp3-control input{
    position:absolute;
    top:0;
    left:0;
    opacity:0;
    z-index:-1; }
  .bp3-control .bp3-control-indicator{
    display:inline-block;
    position:relative;
    margin-top:-3px;
    margin-right:10px;
    border:none;
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-clip:padding-box;
    background-color:#f5f8fa;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
    cursor:pointer;
    width:1em;
    height:1em;
    vertical-align:middle;
    font-size:16px;
    -webkit-user-select:none;
       -moz-user-select:none;
        -ms-user-select:none;
            user-select:none; }
    .bp3-control .bp3-control-indicator::before{
      display:block;
      width:1em;
      height:1em;
      content:""; }
  .bp3-control:hover .bp3-control-indicator{
    background-color:#ebf1f5; }
  .bp3-control input:not(:disabled):active ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background:#d8e1e8; }
  .bp3-control input:disabled ~ .bp3-control-indicator{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(206, 217, 224, 0.5);
    cursor:not-allowed; }
  .bp3-control input:focus ~ .bp3-control-indicator{
    outline:rgba(19, 124, 189, 0.6) auto 2px;
    outline-offset:2px;
    -moz-outline-radius:6px; }
  .bp3-control.bp3-align-right .bp3-control-indicator{
    float:right;
    margin-top:1px;
    margin-left:10px; }
  .bp3-control.bp3-large{
    font-size:16px; }
    .bp3-control.bp3-large:not(.bp3-align-right){
      padding-left:30px; }
      .bp3-control.bp3-large:not(.bp3-align-right) .bp3-control-indicator{
        margin-left:-30px; }
    .bp3-control.bp3-large.bp3-align-right{
      padding-right:30px; }
      .bp3-control.bp3-large.bp3-align-right .bp3-control-indicator{
        margin-right:-30px; }
    .bp3-control.bp3-large .bp3-control-indicator{
      font-size:20px; }
    .bp3-control.bp3-large.bp3-align-right .bp3-control-indicator{
      margin-top:0; }
  .bp3-control.bp3-checkbox input:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#137cbd;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.1)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    color:#ffffff; }
  .bp3-control.bp3-checkbox:hover input:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 -1px 0 rgba(16, 22, 26, 0.2);
    background-color:#106ba3; }
  .bp3-control.bp3-checkbox input:not(:disabled):active:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background:#0e5a8a; }
  .bp3-control.bp3-checkbox input:disabled:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(19, 124, 189, 0.5); }
  .bp3-dark .bp3-control.bp3-checkbox input:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-control.bp3-checkbox:hover input:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background-color:#106ba3; }
  .bp3-dark .bp3-control.bp3-checkbox input:not(:disabled):active:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#0e5a8a; }
  .bp3-dark .bp3-control.bp3-checkbox input:disabled:indeterminate ~ .bp3-control-indicator{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(14, 90, 138, 0.5); }
  .bp3-control.bp3-checkbox .bp3-control-indicator{
    border-radius:3px; }
  .bp3-control.bp3-checkbox input:checked ~ .bp3-control-indicator::before{
    background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M12 5c-.28 0-.53.11-.71.29L7 9.59l-2.29-2.3a1.003 1.003 0 0 0-1.42 1.42l3 3c.18.18.43.29.71.29s.53-.11.71-.29l5-5A1.003 1.003 0 0 0 12 5z' fill='white'/%3e%3c/svg%3e"); }
  .bp3-control.bp3-checkbox input:indeterminate ~ .bp3-control-indicator::before{
    background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M11 7H5c-.55 0-1 .45-1 1s.45 1 1 1h6c.55 0 1-.45 1-1s-.45-1-1-1z' fill='white'/%3e%3c/svg%3e"); }
  .bp3-control.bp3-radio .bp3-control-indicator{
    border-radius:50%; }
  .bp3-control.bp3-radio input:checked ~ .bp3-control-indicator::before{
    background-image:radial-gradient(#ffffff, #ffffff 28%, transparent 32%); }
  .bp3-control.bp3-radio input:checked:disabled ~ .bp3-control-indicator::before{
    opacity:0.5; }
  .bp3-control.bp3-radio input:focus ~ .bp3-control-indicator{
    -moz-outline-radius:16px; }
  .bp3-control.bp3-switch input ~ .bp3-control-indicator{
    background:rgba(167, 182, 194, 0.5); }
  .bp3-control.bp3-switch:hover input ~ .bp3-control-indicator{
    background:rgba(115, 134, 148, 0.5); }
  .bp3-control.bp3-switch input:not(:disabled):active ~ .bp3-control-indicator{
    background:rgba(92, 112, 128, 0.5); }
  .bp3-control.bp3-switch input:disabled ~ .bp3-control-indicator{
    background:rgba(206, 217, 224, 0.5); }
    .bp3-control.bp3-switch input:disabled ~ .bp3-control-indicator::before{
      background:rgba(255, 255, 255, 0.8); }
  .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator{
    background:#137cbd; }
  .bp3-control.bp3-switch:hover input:checked ~ .bp3-control-indicator{
    background:#106ba3; }
  .bp3-control.bp3-switch input:checked:not(:disabled):active ~ .bp3-control-indicator{
    background:#0e5a8a; }
  .bp3-control.bp3-switch input:checked:disabled ~ .bp3-control-indicator{
    background:rgba(19, 124, 189, 0.5); }
    .bp3-control.bp3-switch input:checked:disabled ~ .bp3-control-indicator::before{
      background:rgba(255, 255, 255, 0.8); }
  .bp3-control.bp3-switch:not(.bp3-align-right){
    padding-left:38px; }
    .bp3-control.bp3-switch:not(.bp3-align-right) .bp3-control-indicator{
      margin-left:-38px; }
  .bp3-control.bp3-switch.bp3-align-right{
    padding-right:38px; }
    .bp3-control.bp3-switch.bp3-align-right .bp3-control-indicator{
      margin-right:-38px; }
  .bp3-control.bp3-switch .bp3-control-indicator{
    border:none;
    border-radius:1.75em;
    -webkit-box-shadow:none !important;
            box-shadow:none !important;
    width:auto;
    min-width:1.75em;
    -webkit-transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:background-color 100ms cubic-bezier(0.4, 1, 0.75, 0.9); }
    .bp3-control.bp3-switch .bp3-control-indicator::before{
      position:absolute;
      left:0;
      margin:2px;
      border-radius:50%;
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
      background:#ffffff;
      width:calc(1em - 4px);
      height:calc(1em - 4px);
      -webkit-transition:left 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
      transition:left 100ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator::before{
    left:calc(100% - 1em); }
  .bp3-control.bp3-switch.bp3-large:not(.bp3-align-right){
    padding-left:45px; }
    .bp3-control.bp3-switch.bp3-large:not(.bp3-align-right) .bp3-control-indicator{
      margin-left:-45px; }
  .bp3-control.bp3-switch.bp3-large.bp3-align-right{
    padding-right:45px; }
    .bp3-control.bp3-switch.bp3-large.bp3-align-right .bp3-control-indicator{
      margin-right:-45px; }
  .bp3-dark .bp3-control.bp3-switch input ~ .bp3-control-indicator{
    background:rgba(16, 22, 26, 0.5); }
  .bp3-dark .bp3-control.bp3-switch:hover input ~ .bp3-control-indicator{
    background:rgba(16, 22, 26, 0.7); }
  .bp3-dark .bp3-control.bp3-switch input:not(:disabled):active ~ .bp3-control-indicator{
    background:rgba(16, 22, 26, 0.9); }
  .bp3-dark .bp3-control.bp3-switch input:disabled ~ .bp3-control-indicator{
    background:rgba(57, 75, 89, 0.5); }
    .bp3-dark .bp3-control.bp3-switch input:disabled ~ .bp3-control-indicator::before{
      background:rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator{
    background:#137cbd; }
  .bp3-dark .bp3-control.bp3-switch:hover input:checked ~ .bp3-control-indicator{
    background:#106ba3; }
  .bp3-dark .bp3-control.bp3-switch input:checked:not(:disabled):active ~ .bp3-control-indicator{
    background:#0e5a8a; }
  .bp3-dark .bp3-control.bp3-switch input:checked:disabled ~ .bp3-control-indicator{
    background:rgba(14, 90, 138, 0.5); }
    .bp3-dark .bp3-control.bp3-switch input:checked:disabled ~ .bp3-control-indicator::before{
      background:rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-control.bp3-switch .bp3-control-indicator::before{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background:#394b59; }
  .bp3-dark .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator::before{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4); }
  .bp3-control.bp3-switch .bp3-switch-inner-text{
    text-align:center;
    font-size:0.7em; }
  .bp3-control.bp3-switch .bp3-control-indicator-child:first-child{
    visibility:hidden;
    margin-right:1.2em;
    margin-left:0.5em;
    line-height:0; }
  .bp3-control.bp3-switch .bp3-control-indicator-child:last-child{
    visibility:visible;
    margin-right:0.5em;
    margin-left:1.2em;
    line-height:1em; }
  .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator .bp3-control-indicator-child:first-child{
    visibility:visible;
    line-height:1em; }
  .bp3-control.bp3-switch input:checked ~ .bp3-control-indicator .bp3-control-indicator-child:last-child{
    visibility:hidden;
    line-height:0; }
  .bp3-dark .bp3-control{
    color:#f5f8fa; }
    .bp3-dark .bp3-control.bp3-disabled{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-control .bp3-control-indicator{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
      background-color:#394b59;
      background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)), to(rgba(255, 255, 255, 0)));
      background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0)); }
    .bp3-dark .bp3-control:hover .bp3-control-indicator{
      background-color:#30404d; }
    .bp3-dark .bp3-control input:not(:disabled):active ~ .bp3-control-indicator{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background:#202b33; }
    .bp3-dark .bp3-control input:disabled ~ .bp3-control-indicator{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(57, 75, 89, 0.5);
      cursor:not-allowed; }
    .bp3-dark .bp3-control.bp3-checkbox input:disabled:checked ~ .bp3-control-indicator, .bp3-dark .bp3-control.bp3-checkbox input:disabled:indeterminate ~ .bp3-control-indicator{
      color:rgba(167, 182, 194, 0.6); }
.bp3-file-input{
  display:inline-block;
  position:relative;
  cursor:pointer;
  height:30px; }
  .bp3-file-input input{
    opacity:0;
    margin:0;
    min-width:200px; }
    .bp3-file-input input:disabled + .bp3-file-upload-input,
    .bp3-file-input input.bp3-disabled + .bp3-file-upload-input{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(206, 217, 224, 0.5);
      cursor:not-allowed;
      color:rgba(92, 112, 128, 0.6);
      resize:none; }
      .bp3-file-input input:disabled + .bp3-file-upload-input::after,
      .bp3-file-input input.bp3-disabled + .bp3-file-upload-input::after{
        outline:none;
        -webkit-box-shadow:none;
                box-shadow:none;
        background-color:rgba(206, 217, 224, 0.5);
        background-image:none;
        cursor:not-allowed;
        color:rgba(92, 112, 128, 0.6); }
        .bp3-file-input input:disabled + .bp3-file-upload-input::after.bp3-active, .bp3-file-input input:disabled + .bp3-file-upload-input::after.bp3-active:hover,
        .bp3-file-input input.bp3-disabled + .bp3-file-upload-input::after.bp3-active,
        .bp3-file-input input.bp3-disabled + .bp3-file-upload-input::after.bp3-active:hover{
          background:rgba(206, 217, 224, 0.7); }
      .bp3-dark .bp3-file-input input:disabled + .bp3-file-upload-input, .bp3-dark
      .bp3-file-input input.bp3-disabled + .bp3-file-upload-input{
        -webkit-box-shadow:none;
                box-shadow:none;
        background:rgba(57, 75, 89, 0.5);
        color:rgba(167, 182, 194, 0.6); }
        .bp3-dark .bp3-file-input input:disabled + .bp3-file-upload-input::after, .bp3-dark
        .bp3-file-input input.bp3-disabled + .bp3-file-upload-input::after{
          -webkit-box-shadow:none;
                  box-shadow:none;
          background-color:rgba(57, 75, 89, 0.5);
          background-image:none;
          color:rgba(167, 182, 194, 0.6); }
          .bp3-dark .bp3-file-input input:disabled + .bp3-file-upload-input::after.bp3-active, .bp3-dark
          .bp3-file-input input.bp3-disabled + .bp3-file-upload-input::after.bp3-active{
            background:rgba(57, 75, 89, 0.7); }
  .bp3-file-input.bp3-file-input-has-selection .bp3-file-upload-input{
    color:#182026; }
  .bp3-dark .bp3-file-input.bp3-file-input-has-selection .bp3-file-upload-input{
    color:#f5f8fa; }
  .bp3-file-input.bp3-fill{
    width:100%; }
  .bp3-file-input.bp3-large,
  .bp3-large .bp3-file-input{
    height:40px; }
  .bp3-file-input .bp3-file-upload-input-custom-text::after{
    content:attr(bp3-button-text); }

.bp3-file-upload-input{
  outline:none;
  border:none;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
  background:#ffffff;
  height:30px;
  padding:0 10px;
  vertical-align:middle;
  line-height:30px;
  color:#182026;
  font-size:14px;
  font-weight:400;
  -webkit-transition:-webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:-webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  -webkit-appearance:none;
     -moz-appearance:none;
          appearance:none;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  word-wrap:normal;
  position:absolute;
  top:0;
  right:0;
  left:0;
  padding-right:80px;
  color:rgba(92, 112, 128, 0.6);
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-file-upload-input::-webkit-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-file-upload-input::-moz-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-file-upload-input:-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-file-upload-input::-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-file-upload-input::placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-file-upload-input:focus, .bp3-file-upload-input.bp3-active{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-file-upload-input[type="search"], .bp3-file-upload-input.bp3-round{
    border-radius:30px;
    -webkit-box-sizing:border-box;
            box-sizing:border-box;
    padding-left:10px; }
  .bp3-file-upload-input[readonly]{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15); }
  .bp3-file-upload-input:disabled, .bp3-file-upload-input.bp3-disabled{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(206, 217, 224, 0.5);
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6);
    resize:none; }
  .bp3-file-upload-input::after{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-color:#f5f8fa;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
    color:#182026;
    min-width:24px;
    min-height:24px;
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:nowrap;
    word-wrap:normal;
    position:absolute;
    top:0;
    right:0;
    margin:3px;
    border-radius:3px;
    width:70px;
    text-align:center;
    line-height:24px;
    content:"Browse"; }
    .bp3-file-upload-input::after:hover{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
      background-clip:padding-box;
      background-color:#ebf1f5; }
    .bp3-file-upload-input::after:active, .bp3-file-upload-input::after.bp3-active{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#d8e1e8;
      background-image:none; }
    .bp3-file-upload-input::after:disabled, .bp3-file-upload-input::after.bp3-disabled{
      outline:none;
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(206, 217, 224, 0.5);
      background-image:none;
      cursor:not-allowed;
      color:rgba(92, 112, 128, 0.6); }
      .bp3-file-upload-input::after:disabled.bp3-active, .bp3-file-upload-input::after:disabled.bp3-active:hover, .bp3-file-upload-input::after.bp3-disabled.bp3-active, .bp3-file-upload-input::after.bp3-disabled.bp3-active:hover{
        background:rgba(206, 217, 224, 0.7); }
  .bp3-file-upload-input:hover::after{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-clip:padding-box;
    background-color:#ebf1f5; }
  .bp3-file-upload-input:active::after{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#d8e1e8;
    background-image:none; }
  .bp3-large .bp3-file-upload-input{
    height:40px;
    line-height:40px;
    font-size:16px;
    padding-right:95px; }
    .bp3-large .bp3-file-upload-input[type="search"], .bp3-large .bp3-file-upload-input.bp3-round{
      padding:0 15px; }
    .bp3-large .bp3-file-upload-input::after{
      min-width:30px;
      min-height:30px;
      margin:5px;
      width:85px;
      line-height:30px; }
  .bp3-dark .bp3-file-upload-input{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
    background:rgba(16, 22, 26, 0.3);
    color:#f5f8fa;
    color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input::-webkit-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input::-moz-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input:-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input::-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input::placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input:focus{
      -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-file-upload-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-file-upload-input:disabled, .bp3-dark .bp3-file-upload-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(57, 75, 89, 0.5);
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-file-upload-input::after{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
      background-color:#394b59;
      background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)), to(rgba(255, 255, 255, 0)));
      background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
      color:#f5f8fa; }
      .bp3-dark .bp3-file-upload-input::after:hover, .bp3-dark .bp3-file-upload-input::after:active, .bp3-dark .bp3-file-upload-input::after.bp3-active{
        color:#f5f8fa; }
      .bp3-dark .bp3-file-upload-input::after:hover{
        -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
                box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
        background-color:#30404d; }
      .bp3-dark .bp3-file-upload-input::after:active, .bp3-dark .bp3-file-upload-input::after.bp3-active{
        -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
                box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
        background-color:#202b33;
        background-image:none; }
      .bp3-dark .bp3-file-upload-input::after:disabled, .bp3-dark .bp3-file-upload-input::after.bp3-disabled{
        -webkit-box-shadow:none;
                box-shadow:none;
        background-color:rgba(57, 75, 89, 0.5);
        background-image:none;
        color:rgba(167, 182, 194, 0.6); }
        .bp3-dark .bp3-file-upload-input::after:disabled.bp3-active, .bp3-dark .bp3-file-upload-input::after.bp3-disabled.bp3-active{
          background:rgba(57, 75, 89, 0.7); }
      .bp3-dark .bp3-file-upload-input::after .bp3-button-spinner .bp3-spinner-head{
        background:rgba(16, 22, 26, 0.5);
        stroke:#8a9ba8; }
    .bp3-dark .bp3-file-upload-input:hover::after{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
      background-color:#30404d; }
    .bp3-dark .bp3-file-upload-input:active::after{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#202b33;
      background-image:none; }

.bp3-file-upload-input::after{
  -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
          box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1); }
.bp3-form-group{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  margin:0 0 15px; }
  .bp3-form-group label.bp3-label{
    margin-bottom:5px; }
  .bp3-form-group .bp3-control{
    margin-top:7px; }
  .bp3-form-group .bp3-form-helper-text{
    margin-top:5px;
    color:#5c7080;
    font-size:12px; }
  .bp3-form-group.bp3-intent-primary .bp3-form-helper-text{
    color:#106ba3; }
  .bp3-form-group.bp3-intent-success .bp3-form-helper-text{
    color:#0d8050; }
  .bp3-form-group.bp3-intent-warning .bp3-form-helper-text{
    color:#bf7326; }
  .bp3-form-group.bp3-intent-danger .bp3-form-helper-text{
    color:#c23030; }
  .bp3-form-group.bp3-inline{
    -webkit-box-orient:horizontal;
    -webkit-box-direction:normal;
        -ms-flex-direction:row;
            flex-direction:row;
    -webkit-box-align:start;
        -ms-flex-align:start;
            align-items:flex-start; }
    .bp3-form-group.bp3-inline.bp3-large label.bp3-label{
      margin:0 10px 0 0;
      line-height:40px; }
    .bp3-form-group.bp3-inline label.bp3-label{
      margin:0 10px 0 0;
      line-height:30px; }
  .bp3-form-group.bp3-disabled .bp3-label,
  .bp3-form-group.bp3-disabled .bp3-text-muted,
  .bp3-form-group.bp3-disabled .bp3-form-helper-text{
    color:rgba(92, 112, 128, 0.6) !important; }
  .bp3-dark .bp3-form-group.bp3-intent-primary .bp3-form-helper-text{
    color:#48aff0; }
  .bp3-dark .bp3-form-group.bp3-intent-success .bp3-form-helper-text{
    color:#3dcc91; }
  .bp3-dark .bp3-form-group.bp3-intent-warning .bp3-form-helper-text{
    color:#ffb366; }
  .bp3-dark .bp3-form-group.bp3-intent-danger .bp3-form-helper-text{
    color:#ff7373; }
  .bp3-dark .bp3-form-group .bp3-form-helper-text{
    color:#a7b6c2; }
  .bp3-dark .bp3-form-group.bp3-disabled .bp3-label,
  .bp3-dark .bp3-form-group.bp3-disabled .bp3-text-muted,
  .bp3-dark .bp3-form-group.bp3-disabled .bp3-form-helper-text{
    color:rgba(167, 182, 194, 0.6) !important; }
.bp3-input-group{
  display:block;
  position:relative; }
  .bp3-input-group .bp3-input{
    position:relative;
    width:100%; }
    .bp3-input-group .bp3-input:not(:first-child){
      padding-left:30px; }
    .bp3-input-group .bp3-input:not(:last-child){
      padding-right:30px; }
  .bp3-input-group .bp3-input-action,
  .bp3-input-group > .bp3-button,
  .bp3-input-group > .bp3-icon{
    position:absolute;
    top:0; }
    .bp3-input-group .bp3-input-action:first-child,
    .bp3-input-group > .bp3-button:first-child,
    .bp3-input-group > .bp3-icon:first-child{
      left:0; }
    .bp3-input-group .bp3-input-action:last-child,
    .bp3-input-group > .bp3-button:last-child,
    .bp3-input-group > .bp3-icon:last-child{
      right:0; }
  .bp3-input-group .bp3-button{
    min-width:24px;
    min-height:24px;
    margin:3px;
    padding:0 7px; }
    .bp3-input-group .bp3-button:empty{
      padding:0; }
  .bp3-input-group > .bp3-icon{
    z-index:1;
    color:#5c7080; }
    .bp3-input-group > .bp3-icon:empty{
      line-height:1;
      font-family:"Icons16", sans-serif;
      font-size:16px;
      font-weight:400;
      font-style:normal;
      -moz-osx-font-smoothing:grayscale;
      -webkit-font-smoothing:antialiased; }
  .bp3-input-group > .bp3-icon,
  .bp3-input-group .bp3-input-action > .bp3-spinner{
    margin:7px; }
  .bp3-input-group .bp3-tag{
    margin:5px; }
  .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:not(:hover):not(:focus),
  .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:not(:hover):not(:focus){
    color:#5c7080; }
    .bp3-dark .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:not(:hover):not(:focus), .bp3-dark
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:not(:hover):not(:focus){
      color:#a7b6c2; }
    .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon, .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon-standard, .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon-large,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon-standard,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:not(:hover):not(:focus) .bp3-icon-large{
      color:#5c7080; }
  .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:disabled,
  .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:disabled{
    color:rgba(92, 112, 128, 0.6) !important; }
    .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:disabled .bp3-icon, .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:disabled .bp3-icon-standard, .bp3-input-group .bp3-input:not(:focus) + .bp3-button.bp3-minimal:disabled .bp3-icon-large,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:disabled .bp3-icon,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:disabled .bp3-icon-standard,
    .bp3-input-group .bp3-input:not(:focus) + .bp3-input-action .bp3-button.bp3-minimal:disabled .bp3-icon-large{
      color:rgba(92, 112, 128, 0.6) !important; }
  .bp3-input-group.bp3-disabled{
    cursor:not-allowed; }
    .bp3-input-group.bp3-disabled .bp3-icon{
      color:rgba(92, 112, 128, 0.6); }
  .bp3-input-group.bp3-large .bp3-button{
    min-width:30px;
    min-height:30px;
    margin:5px; }
  .bp3-input-group.bp3-large > .bp3-icon,
  .bp3-input-group.bp3-large .bp3-input-action > .bp3-spinner{
    margin:12px; }
  .bp3-input-group.bp3-large .bp3-input{
    height:40px;
    line-height:40px;
    font-size:16px; }
    .bp3-input-group.bp3-large .bp3-input[type="search"], .bp3-input-group.bp3-large .bp3-input.bp3-round{
      padding:0 15px; }
    .bp3-input-group.bp3-large .bp3-input:not(:first-child){
      padding-left:40px; }
    .bp3-input-group.bp3-large .bp3-input:not(:last-child){
      padding-right:40px; }
  .bp3-input-group.bp3-small .bp3-button{
    min-width:20px;
    min-height:20px;
    margin:2px; }
  .bp3-input-group.bp3-small .bp3-tag{
    min-width:20px;
    min-height:20px;
    margin:2px; }
  .bp3-input-group.bp3-small > .bp3-icon,
  .bp3-input-group.bp3-small .bp3-input-action > .bp3-spinner{
    margin:4px; }
  .bp3-input-group.bp3-small .bp3-input{
    height:24px;
    padding-right:8px;
    padding-left:8px;
    line-height:24px;
    font-size:12px; }
    .bp3-input-group.bp3-small .bp3-input[type="search"], .bp3-input-group.bp3-small .bp3-input.bp3-round{
      padding:0 12px; }
    .bp3-input-group.bp3-small .bp3-input:not(:first-child){
      padding-left:24px; }
    .bp3-input-group.bp3-small .bp3-input:not(:last-child){
      padding-right:24px; }
  .bp3-input-group.bp3-fill{
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto;
    width:100%; }
  .bp3-input-group.bp3-round .bp3-button,
  .bp3-input-group.bp3-round .bp3-input,
  .bp3-input-group.bp3-round .bp3-tag{
    border-radius:30px; }
  .bp3-dark .bp3-input-group .bp3-icon{
    color:#a7b6c2; }
  .bp3-dark .bp3-input-group.bp3-disabled .bp3-icon{
    color:rgba(167, 182, 194, 0.6); }
  .bp3-input-group.bp3-intent-primary .bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-primary .bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-primary .bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #137cbd;
              box-shadow:inset 0 0 0 1px #137cbd; }
    .bp3-input-group.bp3-intent-primary .bp3-input:disabled, .bp3-input-group.bp3-intent-primary .bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-input-group.bp3-intent-primary > .bp3-icon{
    color:#106ba3; }
    .bp3-dark .bp3-input-group.bp3-intent-primary > .bp3-icon{
      color:#48aff0; }
  .bp3-input-group.bp3-intent-success .bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-success .bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-success .bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #0f9960;
              box-shadow:inset 0 0 0 1px #0f9960; }
    .bp3-input-group.bp3-intent-success .bp3-input:disabled, .bp3-input-group.bp3-intent-success .bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-input-group.bp3-intent-success > .bp3-icon{
    color:#0d8050; }
    .bp3-dark .bp3-input-group.bp3-intent-success > .bp3-icon{
      color:#3dcc91; }
  .bp3-input-group.bp3-intent-warning .bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-warning .bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-warning .bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #d9822b;
              box-shadow:inset 0 0 0 1px #d9822b; }
    .bp3-input-group.bp3-intent-warning .bp3-input:disabled, .bp3-input-group.bp3-intent-warning .bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-input-group.bp3-intent-warning > .bp3-icon{
    color:#bf7326; }
    .bp3-dark .bp3-input-group.bp3-intent-warning > .bp3-icon{
      color:#ffb366; }
  .bp3-input-group.bp3-intent-danger .bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-danger .bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input-group.bp3-intent-danger .bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #db3737;
              box-shadow:inset 0 0 0 1px #db3737; }
    .bp3-input-group.bp3-intent-danger .bp3-input:disabled, .bp3-input-group.bp3-intent-danger .bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-input-group.bp3-intent-danger > .bp3-icon{
    color:#c23030; }
    .bp3-dark .bp3-input-group.bp3-intent-danger > .bp3-icon{
      color:#ff7373; }
.bp3-input{
  outline:none;
  border:none;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
  background:#ffffff;
  height:30px;
  padding:0 10px;
  vertical-align:middle;
  line-height:30px;
  color:#182026;
  font-size:14px;
  font-weight:400;
  -webkit-transition:-webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:-webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-box-shadow 100ms cubic-bezier(0.4, 1, 0.75, 0.9);
  -webkit-appearance:none;
     -moz-appearance:none;
          appearance:none; }
  .bp3-input::-webkit-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input::-moz-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input:-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input::-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input::placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input:focus, .bp3-input.bp3-active{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-input[type="search"], .bp3-input.bp3-round{
    border-radius:30px;
    -webkit-box-sizing:border-box;
            box-sizing:border-box;
    padding-left:10px; }
  .bp3-input[readonly]{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.15); }
  .bp3-input:disabled, .bp3-input.bp3-disabled{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(206, 217, 224, 0.5);
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6);
    resize:none; }
  .bp3-input.bp3-large{
    height:40px;
    line-height:40px;
    font-size:16px; }
    .bp3-input.bp3-large[type="search"], .bp3-input.bp3-large.bp3-round{
      padding:0 15px; }
  .bp3-input.bp3-small{
    height:24px;
    padding-right:8px;
    padding-left:8px;
    line-height:24px;
    font-size:12px; }
    .bp3-input.bp3-small[type="search"], .bp3-input.bp3-small.bp3-round{
      padding:0 12px; }
  .bp3-input.bp3-fill{
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto;
    width:100%; }
  .bp3-dark .bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
    background:rgba(16, 22, 26, 0.3);
    color:#f5f8fa; }
    .bp3-dark .bp3-input::-webkit-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-input::-moz-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-input:-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-input::-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-input::placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-input:disabled, .bp3-dark .bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(57, 75, 89, 0.5);
      color:rgba(167, 182, 194, 0.6); }
  .bp3-input.bp3-intent-primary{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-primary:focus{
      -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-primary[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #137cbd;
              box-shadow:inset 0 0 0 1px #137cbd; }
    .bp3-input.bp3-intent-primary:disabled, .bp3-input.bp3-intent-primary.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
    .bp3-dark .bp3-input.bp3-intent-primary{
      -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px #137cbd, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-primary:focus{
        -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
                box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-primary[readonly]{
        -webkit-box-shadow:inset 0 0 0 1px #137cbd;
                box-shadow:inset 0 0 0 1px #137cbd; }
      .bp3-dark .bp3-input.bp3-intent-primary:disabled, .bp3-dark .bp3-input.bp3-intent-primary.bp3-disabled{
        -webkit-box-shadow:none;
                box-shadow:none; }
  .bp3-input.bp3-intent-success{
    -webkit-box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-success:focus{
      -webkit-box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-success[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #0f9960;
              box-shadow:inset 0 0 0 1px #0f9960; }
    .bp3-input.bp3-intent-success:disabled, .bp3-input.bp3-intent-success.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
    .bp3-dark .bp3-input.bp3-intent-success{
      -webkit-box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), 0 0 0 0 rgba(15, 153, 96, 0), inset 0 0 0 1px #0f9960, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-success:focus{
        -webkit-box-shadow:0 0 0 1px #0f9960, 0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
                box-shadow:0 0 0 1px #0f9960, 0 0 0 1px #0f9960, 0 0 0 3px rgba(15, 153, 96, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-success[readonly]{
        -webkit-box-shadow:inset 0 0 0 1px #0f9960;
                box-shadow:inset 0 0 0 1px #0f9960; }
      .bp3-dark .bp3-input.bp3-intent-success:disabled, .bp3-dark .bp3-input.bp3-intent-success.bp3-disabled{
        -webkit-box-shadow:none;
                box-shadow:none; }
  .bp3-input.bp3-intent-warning{
    -webkit-box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-warning:focus{
      -webkit-box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-warning[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #d9822b;
              box-shadow:inset 0 0 0 1px #d9822b; }
    .bp3-input.bp3-intent-warning:disabled, .bp3-input.bp3-intent-warning.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
    .bp3-dark .bp3-input.bp3-intent-warning{
      -webkit-box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), 0 0 0 0 rgba(217, 130, 43, 0), inset 0 0 0 1px #d9822b, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-warning:focus{
        -webkit-box-shadow:0 0 0 1px #d9822b, 0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
                box-shadow:0 0 0 1px #d9822b, 0 0 0 1px #d9822b, 0 0 0 3px rgba(217, 130, 43, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-warning[readonly]{
        -webkit-box-shadow:inset 0 0 0 1px #d9822b;
                box-shadow:inset 0 0 0 1px #d9822b; }
      .bp3-dark .bp3-input.bp3-intent-warning:disabled, .bp3-dark .bp3-input.bp3-intent-warning.bp3-disabled{
        -webkit-box-shadow:none;
                box-shadow:none; }
  .bp3-input.bp3-intent-danger{
    -webkit-box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.15), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-danger:focus{
      -webkit-box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-input.bp3-intent-danger[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px #db3737;
              box-shadow:inset 0 0 0 1px #db3737; }
    .bp3-input.bp3-intent-danger:disabled, .bp3-input.bp3-intent-danger.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none; }
    .bp3-dark .bp3-input.bp3-intent-danger{
      -webkit-box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), 0 0 0 0 rgba(219, 55, 55, 0), inset 0 0 0 1px #db3737, inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-danger:focus{
        -webkit-box-shadow:0 0 0 1px #db3737, 0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
                box-shadow:0 0 0 1px #db3737, 0 0 0 1px #db3737, 0 0 0 3px rgba(219, 55, 55, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
      .bp3-dark .bp3-input.bp3-intent-danger[readonly]{
        -webkit-box-shadow:inset 0 0 0 1px #db3737;
                box-shadow:inset 0 0 0 1px #db3737; }
      .bp3-dark .bp3-input.bp3-intent-danger:disabled, .bp3-dark .bp3-input.bp3-intent-danger.bp3-disabled{
        -webkit-box-shadow:none;
                box-shadow:none; }
  .bp3-input::-ms-clear{
    display:none; }
textarea.bp3-input{
  max-width:100%;
  padding:10px; }
  textarea.bp3-input, textarea.bp3-input.bp3-large, textarea.bp3-input.bp3-small{
    height:auto;
    line-height:inherit; }
  textarea.bp3-input.bp3-small{
    padding:8px; }
  .bp3-dark textarea.bp3-input{
    -webkit-box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), 0 0 0 0 rgba(19, 124, 189, 0), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
    background:rgba(16, 22, 26, 0.3);
    color:#f5f8fa; }
    .bp3-dark textarea.bp3-input::-webkit-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark textarea.bp3-input::-moz-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark textarea.bp3-input:-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark textarea.bp3-input::-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark textarea.bp3-input::placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark textarea.bp3-input:focus{
      -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark textarea.bp3-input[readonly]{
      -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark textarea.bp3-input:disabled, .bp3-dark textarea.bp3-input.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:rgba(57, 75, 89, 0.5);
      color:rgba(167, 182, 194, 0.6); }
label.bp3-label{
  display:block;
  margin-top:0;
  margin-bottom:15px; }
  label.bp3-label .bp3-html-select,
  label.bp3-label .bp3-input,
  label.bp3-label .bp3-select,
  label.bp3-label .bp3-slider,
  label.bp3-label .bp3-popover-wrapper{
    display:block;
    margin-top:5px;
    text-transform:none; }
  label.bp3-label .bp3-button-group{
    margin-top:5px; }
  label.bp3-label .bp3-select select,
  label.bp3-label .bp3-html-select select{
    width:100%;
    vertical-align:top;
    font-weight:400; }
  label.bp3-label.bp3-disabled,
  label.bp3-label.bp3-disabled .bp3-text-muted{
    color:rgba(92, 112, 128, 0.6); }
  label.bp3-label.bp3-inline{
    line-height:30px; }
    label.bp3-label.bp3-inline .bp3-html-select,
    label.bp3-label.bp3-inline .bp3-input,
    label.bp3-label.bp3-inline .bp3-input-group,
    label.bp3-label.bp3-inline .bp3-select,
    label.bp3-label.bp3-inline .bp3-popover-wrapper{
      display:inline-block;
      margin:0 0 0 5px;
      vertical-align:top; }
    label.bp3-label.bp3-inline .bp3-button-group{
      margin:0 0 0 5px; }
    label.bp3-label.bp3-inline .bp3-input-group .bp3-input{
      margin-left:0; }
    label.bp3-label.bp3-inline.bp3-large{
      line-height:40px; }
  label.bp3-label:not(.bp3-inline) .bp3-popover-target{
    display:block; }
  .bp3-dark label.bp3-label{
    color:#f5f8fa; }
    .bp3-dark label.bp3-label.bp3-disabled,
    .bp3-dark label.bp3-label.bp3-disabled .bp3-text-muted{
      color:rgba(167, 182, 194, 0.6); }
.bp3-numeric-input .bp3-button-group.bp3-vertical > .bp3-button{
  -webkit-box-flex:1;
      -ms-flex:1 1 14px;
          flex:1 1 14px;
  width:30px;
  min-height:0;
  padding:0; }
  .bp3-numeric-input .bp3-button-group.bp3-vertical > .bp3-button:first-child{
    border-radius:0 3px 0 0; }
  .bp3-numeric-input .bp3-button-group.bp3-vertical > .bp3-button:last-child{
    border-radius:0 0 3px 0; }

.bp3-numeric-input .bp3-button-group.bp3-vertical:first-child > .bp3-button:first-child{
  border-radius:3px 0 0 0; }

.bp3-numeric-input .bp3-button-group.bp3-vertical:first-child > .bp3-button:last-child{
  border-radius:0 0 0 3px; }

.bp3-numeric-input.bp3-large .bp3-button-group.bp3-vertical > .bp3-button{
  width:40px; }

form{
  display:block; }
.bp3-html-select select,
.bp3-select select{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  border:none;
  border-radius:3px;
  cursor:pointer;
  padding:5px 10px;
  vertical-align:middle;
  text-align:left;
  font-size:14px;
  -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
          box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
  background-color:#f5f8fa;
  background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 0)));
  background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
  color:#182026;
  border-radius:3px;
  width:100%;
  height:30px;
  padding:0 25px 0 10px;
  -moz-appearance:none;
  -webkit-appearance:none; }
  .bp3-html-select select > *, .bp3-select select > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-html-select select > .bp3-fill, .bp3-select select > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-html-select select::before,
  .bp3-select select::before, .bp3-html-select select > *, .bp3-select select > *{
    margin-right:7px; }
  .bp3-html-select select:empty::before,
  .bp3-select select:empty::before,
  .bp3-html-select select > :last-child,
  .bp3-select select > :last-child{
    margin-right:0; }
  .bp3-html-select select:hover,
  .bp3-select select:hover{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-clip:padding-box;
    background-color:#ebf1f5; }
  .bp3-html-select select:active,
  .bp3-select select:active, .bp3-html-select select.bp3-active,
  .bp3-select select.bp3-active{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#d8e1e8;
    background-image:none; }
  .bp3-html-select select:disabled,
  .bp3-select select:disabled, .bp3-html-select select.bp3-disabled,
  .bp3-select select.bp3-disabled{
    outline:none;
    -webkit-box-shadow:none;
            box-shadow:none;
    background-color:rgba(206, 217, 224, 0.5);
    background-image:none;
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
    .bp3-html-select select:disabled.bp3-active,
    .bp3-select select:disabled.bp3-active, .bp3-html-select select:disabled.bp3-active:hover,
    .bp3-select select:disabled.bp3-active:hover, .bp3-html-select select.bp3-disabled.bp3-active,
    .bp3-select select.bp3-disabled.bp3-active, .bp3-html-select select.bp3-disabled.bp3-active:hover,
    .bp3-select select.bp3-disabled.bp3-active:hover{
      background:rgba(206, 217, 224, 0.7); }

.bp3-html-select.bp3-minimal select,
.bp3-select.bp3-minimal select{
  -webkit-box-shadow:none;
          box-shadow:none;
  background:none; }
  .bp3-html-select.bp3-minimal select:hover,
  .bp3-select.bp3-minimal select:hover{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(167, 182, 194, 0.3);
    text-decoration:none;
    color:#182026; }
  .bp3-html-select.bp3-minimal select:active,
  .bp3-select.bp3-minimal select:active, .bp3-html-select.bp3-minimal select.bp3-active,
  .bp3-select.bp3-minimal select.bp3-active{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:rgba(115, 134, 148, 0.3);
    color:#182026; }
  .bp3-html-select.bp3-minimal select:disabled,
  .bp3-select.bp3-minimal select:disabled, .bp3-html-select.bp3-minimal select:disabled:hover,
  .bp3-select.bp3-minimal select:disabled:hover, .bp3-html-select.bp3-minimal select.bp3-disabled,
  .bp3-select.bp3-minimal select.bp3-disabled, .bp3-html-select.bp3-minimal select.bp3-disabled:hover,
  .bp3-select.bp3-minimal select.bp3-disabled:hover{
    background:none;
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
    .bp3-html-select.bp3-minimal select:disabled.bp3-active,
    .bp3-select.bp3-minimal select:disabled.bp3-active, .bp3-html-select.bp3-minimal select:disabled:hover.bp3-active,
    .bp3-select.bp3-minimal select:disabled:hover.bp3-active, .bp3-html-select.bp3-minimal select.bp3-disabled.bp3-active,
    .bp3-select.bp3-minimal select.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal select.bp3-disabled:hover.bp3-active,
    .bp3-select.bp3-minimal select.bp3-disabled:hover.bp3-active{
      background:rgba(115, 134, 148, 0.3); }
  .bp3-dark .bp3-html-select.bp3-minimal select, .bp3-html-select.bp3-minimal .bp3-dark select,
  .bp3-dark .bp3-select.bp3-minimal select, .bp3-select.bp3-minimal .bp3-dark select{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:none;
    color:inherit; }
    .bp3-dark .bp3-html-select.bp3-minimal select:hover, .bp3-html-select.bp3-minimal .bp3-dark select:hover,
    .bp3-dark .bp3-select.bp3-minimal select:hover, .bp3-select.bp3-minimal .bp3-dark select:hover, .bp3-dark .bp3-html-select.bp3-minimal select:active, .bp3-html-select.bp3-minimal .bp3-dark select:active,
    .bp3-dark .bp3-select.bp3-minimal select:active, .bp3-select.bp3-minimal .bp3-dark select:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-active,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none; }
    .bp3-dark .bp3-html-select.bp3-minimal select:hover, .bp3-html-select.bp3-minimal .bp3-dark select:hover,
    .bp3-dark .bp3-select.bp3-minimal select:hover, .bp3-select.bp3-minimal .bp3-dark select:hover{
      background:rgba(138, 155, 168, 0.15); }
    .bp3-dark .bp3-html-select.bp3-minimal select:active, .bp3-html-select.bp3-minimal .bp3-dark select:active,
    .bp3-dark .bp3-select.bp3-minimal select:active, .bp3-select.bp3-minimal .bp3-dark select:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-active,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-active{
      background:rgba(138, 155, 168, 0.3);
      color:#f5f8fa; }
    .bp3-dark .bp3-html-select.bp3-minimal select:disabled, .bp3-html-select.bp3-minimal .bp3-dark select:disabled,
    .bp3-dark .bp3-select.bp3-minimal select:disabled, .bp3-select.bp3-minimal .bp3-dark select:disabled, .bp3-dark .bp3-html-select.bp3-minimal select:disabled:hover, .bp3-html-select.bp3-minimal .bp3-dark select:disabled:hover,
    .bp3-dark .bp3-select.bp3-minimal select:disabled:hover, .bp3-select.bp3-minimal .bp3-dark select:disabled:hover, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-disabled,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-disabled, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-disabled:hover, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-disabled:hover,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-disabled:hover, .bp3-select.bp3-minimal .bp3-dark select.bp3-disabled:hover{
      background:none;
      cursor:not-allowed;
      color:rgba(167, 182, 194, 0.6); }
      .bp3-dark .bp3-html-select.bp3-minimal select:disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select:disabled.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select:disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select:disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select:disabled:hover.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select:disabled:hover.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select:disabled:hover.bp3-active, .bp3-select.bp3-minimal .bp3-dark select:disabled:hover.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-disabled.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-disabled:hover.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-disabled:hover.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-disabled:hover.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-disabled:hover.bp3-active{
        background:rgba(138, 155, 168, 0.3); }
  .bp3-html-select.bp3-minimal select.bp3-intent-primary,
  .bp3-select.bp3-minimal select.bp3-intent-primary{
    color:#106ba3; }
    .bp3-html-select.bp3-minimal select.bp3-intent-primary:hover,
    .bp3-select.bp3-minimal select.bp3-intent-primary:hover, .bp3-html-select.bp3-minimal select.bp3-intent-primary:active,
    .bp3-select.bp3-minimal select.bp3-intent-primary:active, .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:#106ba3; }
    .bp3-html-select.bp3-minimal select.bp3-intent-primary:hover,
    .bp3-select.bp3-minimal select.bp3-intent-primary:hover{
      background:rgba(19, 124, 189, 0.15);
      color:#106ba3; }
    .bp3-html-select.bp3-minimal select.bp3-intent-primary:active,
    .bp3-select.bp3-minimal select.bp3-intent-primary:active, .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-active{
      background:rgba(19, 124, 189, 0.3);
      color:#106ba3; }
    .bp3-html-select.bp3-minimal select.bp3-intent-primary:disabled,
    .bp3-select.bp3-minimal select.bp3-intent-primary:disabled, .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-disabled,
    .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-disabled{
      background:none;
      color:rgba(16, 107, 163, 0.5); }
      .bp3-html-select.bp3-minimal select.bp3-intent-primary:disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-primary:disabled.bp3-active, .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-disabled.bp3-active{
        background:rgba(19, 124, 189, 0.3); }
    .bp3-html-select.bp3-minimal select.bp3-intent-primary .bp3-button-spinner .bp3-spinner-head, .bp3-select.bp3-minimal select.bp3-intent-primary .bp3-button-spinner .bp3-spinner-head{
      stroke:#106ba3; }
    .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary{
      color:#48aff0; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary:hover, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary:hover,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary:hover, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary:hover{
        background:rgba(19, 124, 189, 0.2);
        color:#48aff0; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary:active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary:active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary:active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-active{
        background:rgba(19, 124, 189, 0.3);
        color:#48aff0; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary:disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary:disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary:disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary:disabled, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-disabled{
        background:none;
        color:rgba(72, 175, 240, 0.5); }
        .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary:disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary:disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary:disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary:disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-primary.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-primary.bp3-disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-primary.bp3-disabled.bp3-active{
          background:rgba(19, 124, 189, 0.3); }
  .bp3-html-select.bp3-minimal select.bp3-intent-success,
  .bp3-select.bp3-minimal select.bp3-intent-success{
    color:#0d8050; }
    .bp3-html-select.bp3-minimal select.bp3-intent-success:hover,
    .bp3-select.bp3-minimal select.bp3-intent-success:hover, .bp3-html-select.bp3-minimal select.bp3-intent-success:active,
    .bp3-select.bp3-minimal select.bp3-intent-success:active, .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-success.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:#0d8050; }
    .bp3-html-select.bp3-minimal select.bp3-intent-success:hover,
    .bp3-select.bp3-minimal select.bp3-intent-success:hover{
      background:rgba(15, 153, 96, 0.15);
      color:#0d8050; }
    .bp3-html-select.bp3-minimal select.bp3-intent-success:active,
    .bp3-select.bp3-minimal select.bp3-intent-success:active, .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-success.bp3-active{
      background:rgba(15, 153, 96, 0.3);
      color:#0d8050; }
    .bp3-html-select.bp3-minimal select.bp3-intent-success:disabled,
    .bp3-select.bp3-minimal select.bp3-intent-success:disabled, .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-disabled,
    .bp3-select.bp3-minimal select.bp3-intent-success.bp3-disabled{
      background:none;
      color:rgba(13, 128, 80, 0.5); }
      .bp3-html-select.bp3-minimal select.bp3-intent-success:disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-success:disabled.bp3-active, .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-success.bp3-disabled.bp3-active{
        background:rgba(15, 153, 96, 0.3); }
    .bp3-html-select.bp3-minimal select.bp3-intent-success .bp3-button-spinner .bp3-spinner-head, .bp3-select.bp3-minimal select.bp3-intent-success .bp3-button-spinner .bp3-spinner-head{
      stroke:#0d8050; }
    .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success{
      color:#3dcc91; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success:hover, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success:hover,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success:hover, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success:hover{
        background:rgba(15, 153, 96, 0.2);
        color:#3dcc91; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success:active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success:active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success:active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-active{
        background:rgba(15, 153, 96, 0.3);
        color:#3dcc91; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success:disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success:disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success:disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success:disabled, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success.bp3-disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-disabled{
        background:none;
        color:rgba(61, 204, 145, 0.5); }
        .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success:disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success:disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success:disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success:disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-success.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-success.bp3-disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-success.bp3-disabled.bp3-active{
          background:rgba(15, 153, 96, 0.3); }
  .bp3-html-select.bp3-minimal select.bp3-intent-warning,
  .bp3-select.bp3-minimal select.bp3-intent-warning{
    color:#bf7326; }
    .bp3-html-select.bp3-minimal select.bp3-intent-warning:hover,
    .bp3-select.bp3-minimal select.bp3-intent-warning:hover, .bp3-html-select.bp3-minimal select.bp3-intent-warning:active,
    .bp3-select.bp3-minimal select.bp3-intent-warning:active, .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:#bf7326; }
    .bp3-html-select.bp3-minimal select.bp3-intent-warning:hover,
    .bp3-select.bp3-minimal select.bp3-intent-warning:hover{
      background:rgba(217, 130, 43, 0.15);
      color:#bf7326; }
    .bp3-html-select.bp3-minimal select.bp3-intent-warning:active,
    .bp3-select.bp3-minimal select.bp3-intent-warning:active, .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-active{
      background:rgba(217, 130, 43, 0.3);
      color:#bf7326; }
    .bp3-html-select.bp3-minimal select.bp3-intent-warning:disabled,
    .bp3-select.bp3-minimal select.bp3-intent-warning:disabled, .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-disabled,
    .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-disabled{
      background:none;
      color:rgba(191, 115, 38, 0.5); }
      .bp3-html-select.bp3-minimal select.bp3-intent-warning:disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-warning:disabled.bp3-active, .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-disabled.bp3-active{
        background:rgba(217, 130, 43, 0.3); }
    .bp3-html-select.bp3-minimal select.bp3-intent-warning .bp3-button-spinner .bp3-spinner-head, .bp3-select.bp3-minimal select.bp3-intent-warning .bp3-button-spinner .bp3-spinner-head{
      stroke:#bf7326; }
    .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning{
      color:#ffb366; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning:hover, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning:hover,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning:hover, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning:hover{
        background:rgba(217, 130, 43, 0.2);
        color:#ffb366; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning:active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning:active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning:active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-active{
        background:rgba(217, 130, 43, 0.3);
        color:#ffb366; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning:disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning:disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning:disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning:disabled, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-disabled{
        background:none;
        color:rgba(255, 179, 102, 0.5); }
        .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning:disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning:disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning:disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning:disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-warning.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-warning.bp3-disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-warning.bp3-disabled.bp3-active{
          background:rgba(217, 130, 43, 0.3); }
  .bp3-html-select.bp3-minimal select.bp3-intent-danger,
  .bp3-select.bp3-minimal select.bp3-intent-danger{
    color:#c23030; }
    .bp3-html-select.bp3-minimal select.bp3-intent-danger:hover,
    .bp3-select.bp3-minimal select.bp3-intent-danger:hover, .bp3-html-select.bp3-minimal select.bp3-intent-danger:active,
    .bp3-select.bp3-minimal select.bp3-intent-danger:active, .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-active{
      -webkit-box-shadow:none;
              box-shadow:none;
      background:none;
      color:#c23030; }
    .bp3-html-select.bp3-minimal select.bp3-intent-danger:hover,
    .bp3-select.bp3-minimal select.bp3-intent-danger:hover{
      background:rgba(219, 55, 55, 0.15);
      color:#c23030; }
    .bp3-html-select.bp3-minimal select.bp3-intent-danger:active,
    .bp3-select.bp3-minimal select.bp3-intent-danger:active, .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-active,
    .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-active{
      background:rgba(219, 55, 55, 0.3);
      color:#c23030; }
    .bp3-html-select.bp3-minimal select.bp3-intent-danger:disabled,
    .bp3-select.bp3-minimal select.bp3-intent-danger:disabled, .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-disabled,
    .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-disabled{
      background:none;
      color:rgba(194, 48, 48, 0.5); }
      .bp3-html-select.bp3-minimal select.bp3-intent-danger:disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-danger:disabled.bp3-active, .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-disabled.bp3-active,
      .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-disabled.bp3-active{
        background:rgba(219, 55, 55, 0.3); }
    .bp3-html-select.bp3-minimal select.bp3-intent-danger .bp3-button-spinner .bp3-spinner-head, .bp3-select.bp3-minimal select.bp3-intent-danger .bp3-button-spinner .bp3-spinner-head{
      stroke:#c23030; }
    .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger,
    .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger{
      color:#ff7373; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger:hover, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger:hover,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger:hover, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger:hover{
        background:rgba(219, 55, 55, 0.2);
        color:#ff7373; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger:active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger:active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger:active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger:active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-active,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-active{
        background:rgba(219, 55, 55, 0.3);
        color:#ff7373; }
      .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger:disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger:disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger:disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger:disabled, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-disabled, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-disabled,
      .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-disabled, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-disabled{
        background:none;
        color:rgba(255, 115, 115, 0.5); }
        .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger:disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger:disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger:disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger:disabled.bp3-active, .bp3-dark .bp3-html-select.bp3-minimal select.bp3-intent-danger.bp3-disabled.bp3-active, .bp3-html-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-disabled.bp3-active,
        .bp3-dark .bp3-select.bp3-minimal select.bp3-intent-danger.bp3-disabled.bp3-active, .bp3-select.bp3-minimal .bp3-dark select.bp3-intent-danger.bp3-disabled.bp3-active{
          background:rgba(219, 55, 55, 0.3); }

.bp3-html-select.bp3-large select,
.bp3-select.bp3-large select{
  height:40px;
  padding-right:35px;
  font-size:16px; }

.bp3-dark .bp3-html-select select, .bp3-dark .bp3-select select{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
  background-color:#394b59;
  background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)), to(rgba(255, 255, 255, 0)));
  background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
  color:#f5f8fa; }
  .bp3-dark .bp3-html-select select:hover, .bp3-dark .bp3-select select:hover, .bp3-dark .bp3-html-select select:active, .bp3-dark .bp3-select select:active, .bp3-dark .bp3-html-select select.bp3-active, .bp3-dark .bp3-select select.bp3-active{
    color:#f5f8fa; }
  .bp3-dark .bp3-html-select select:hover, .bp3-dark .bp3-select select:hover{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background-color:#30404d; }
  .bp3-dark .bp3-html-select select:active, .bp3-dark .bp3-select select:active, .bp3-dark .bp3-html-select select.bp3-active, .bp3-dark .bp3-select select.bp3-active{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#202b33;
    background-image:none; }
  .bp3-dark .bp3-html-select select:disabled, .bp3-dark .bp3-select select:disabled, .bp3-dark .bp3-html-select select.bp3-disabled, .bp3-dark .bp3-select select.bp3-disabled{
    -webkit-box-shadow:none;
            box-shadow:none;
    background-color:rgba(57, 75, 89, 0.5);
    background-image:none;
    color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-html-select select:disabled.bp3-active, .bp3-dark .bp3-select select:disabled.bp3-active, .bp3-dark .bp3-html-select select.bp3-disabled.bp3-active, .bp3-dark .bp3-select select.bp3-disabled.bp3-active{
      background:rgba(57, 75, 89, 0.7); }
  .bp3-dark .bp3-html-select select .bp3-button-spinner .bp3-spinner-head, .bp3-dark .bp3-select select .bp3-button-spinner .bp3-spinner-head{
    background:rgba(16, 22, 26, 0.5);
    stroke:#8a9ba8; }

.bp3-html-select select:disabled,
.bp3-select select:disabled{
  -webkit-box-shadow:none;
          box-shadow:none;
  background-color:rgba(206, 217, 224, 0.5);
  cursor:not-allowed;
  color:rgba(92, 112, 128, 0.6); }

.bp3-html-select .bp3-icon,
.bp3-select .bp3-icon, .bp3-select::after{
  position:absolute;
  top:7px;
  right:7px;
  color:#5c7080;
  pointer-events:none; }
  .bp3-html-select .bp3-disabled.bp3-icon,
  .bp3-select .bp3-disabled.bp3-icon, .bp3-disabled.bp3-select::after{
    color:rgba(92, 112, 128, 0.6); }
.bp3-html-select,
.bp3-select{
  display:inline-block;
  position:relative;
  vertical-align:middle;
  letter-spacing:normal; }
  .bp3-html-select select::-ms-expand,
  .bp3-select select::-ms-expand{
    display:none; }
  .bp3-html-select .bp3-icon,
  .bp3-select .bp3-icon{
    color:#5c7080; }
    .bp3-html-select .bp3-icon:hover,
    .bp3-select .bp3-icon:hover{
      color:#182026; }
    .bp3-dark .bp3-html-select .bp3-icon, .bp3-dark
    .bp3-select .bp3-icon{
      color:#a7b6c2; }
      .bp3-dark .bp3-html-select .bp3-icon:hover, .bp3-dark
      .bp3-select .bp3-icon:hover{
        color:#f5f8fa; }
  .bp3-html-select.bp3-large::after,
  .bp3-html-select.bp3-large .bp3-icon,
  .bp3-select.bp3-large::after,
  .bp3-select.bp3-large .bp3-icon{
    top:12px;
    right:12px; }
  .bp3-html-select.bp3-fill,
  .bp3-html-select.bp3-fill select,
  .bp3-select.bp3-fill,
  .bp3-select.bp3-fill select{
    width:100%; }
  .bp3-dark .bp3-html-select option, .bp3-dark
  .bp3-select option{
    background-color:#30404d;
    color:#f5f8fa; }
  .bp3-dark .bp3-html-select::after, .bp3-dark
  .bp3-select::after{
    color:#a7b6c2; }

.bp3-select::after{
  line-height:1;
  font-family:"Icons16", sans-serif;
  font-size:16px;
  font-weight:400;
  font-style:normal;
  -moz-osx-font-smoothing:grayscale;
  -webkit-font-smoothing:antialiased;
  content:""; }
.bp3-running-text table, table.bp3-html-table{
  border-spacing:0;
  font-size:14px; }
  .bp3-running-text table th, table.bp3-html-table th,
  .bp3-running-text table td,
  table.bp3-html-table td{
    padding:11px;
    vertical-align:top;
    text-align:left; }
  .bp3-running-text table th, table.bp3-html-table th{
    color:#182026;
    font-weight:600; }
  
  .bp3-running-text table td,
  table.bp3-html-table td{
    color:#182026; }
  .bp3-running-text table tbody tr:first-child th, table.bp3-html-table tbody tr:first-child th,
  .bp3-running-text table tbody tr:first-child td,
  table.bp3-html-table tbody tr:first-child td{
    -webkit-box-shadow:inset 0 1px 0 0 rgba(16, 22, 26, 0.15);
            box-shadow:inset 0 1px 0 0 rgba(16, 22, 26, 0.15); }
  .bp3-dark .bp3-running-text table th, .bp3-running-text .bp3-dark table th, .bp3-dark table.bp3-html-table th{
    color:#f5f8fa; }
  .bp3-dark .bp3-running-text table td, .bp3-running-text .bp3-dark table td, .bp3-dark table.bp3-html-table td{
    color:#f5f8fa; }
  .bp3-dark .bp3-running-text table tbody tr:first-child th, .bp3-running-text .bp3-dark table tbody tr:first-child th, .bp3-dark table.bp3-html-table tbody tr:first-child th,
  .bp3-dark .bp3-running-text table tbody tr:first-child td,
  .bp3-running-text .bp3-dark table tbody tr:first-child td,
  .bp3-dark table.bp3-html-table tbody tr:first-child td{
    -webkit-box-shadow:inset 0 1px 0 0 rgba(255, 255, 255, 0.15);
            box-shadow:inset 0 1px 0 0 rgba(255, 255, 255, 0.15); }

table.bp3-html-table.bp3-html-table-condensed th,
table.bp3-html-table.bp3-html-table-condensed td, table.bp3-html-table.bp3-small th,
table.bp3-html-table.bp3-small td{
  padding-top:6px;
  padding-bottom:6px; }

table.bp3-html-table.bp3-html-table-striped tbody tr:nth-child(odd) td{
  background:rgba(191, 204, 214, 0.15); }

table.bp3-html-table.bp3-html-table-bordered th:not(:first-child){
  -webkit-box-shadow:inset 1px 0 0 0 rgba(16, 22, 26, 0.15);
          box-shadow:inset 1px 0 0 0 rgba(16, 22, 26, 0.15); }

table.bp3-html-table.bp3-html-table-bordered tbody tr td{
  -webkit-box-shadow:inset 0 1px 0 0 rgba(16, 22, 26, 0.15);
          box-shadow:inset 0 1px 0 0 rgba(16, 22, 26, 0.15); }
  table.bp3-html-table.bp3-html-table-bordered tbody tr td:not(:first-child){
    -webkit-box-shadow:inset 1px 1px 0 0 rgba(16, 22, 26, 0.15);
            box-shadow:inset 1px 1px 0 0 rgba(16, 22, 26, 0.15); }

table.bp3-html-table.bp3-html-table-bordered.bp3-html-table-striped tbody tr:not(:first-child) td{
  -webkit-box-shadow:none;
          box-shadow:none; }
  table.bp3-html-table.bp3-html-table-bordered.bp3-html-table-striped tbody tr:not(:first-child) td:not(:first-child){
    -webkit-box-shadow:inset 1px 0 0 0 rgba(16, 22, 26, 0.15);
            box-shadow:inset 1px 0 0 0 rgba(16, 22, 26, 0.15); }

table.bp3-html-table.bp3-interactive tbody tr:hover td{
  background-color:rgba(191, 204, 214, 0.3);
  cursor:pointer; }

table.bp3-html-table.bp3-interactive tbody tr:active td{
  background-color:rgba(191, 204, 214, 0.4); }

.bp3-dark table.bp3-html-table.bp3-html-table-striped tbody tr:nth-child(odd) td{
  background:rgba(92, 112, 128, 0.15); }

.bp3-dark table.bp3-html-table.bp3-html-table-bordered th:not(:first-child){
  -webkit-box-shadow:inset 1px 0 0 0 rgba(255, 255, 255, 0.15);
          box-shadow:inset 1px 0 0 0 rgba(255, 255, 255, 0.15); }

.bp3-dark table.bp3-html-table.bp3-html-table-bordered tbody tr td{
  -webkit-box-shadow:inset 0 1px 0 0 rgba(255, 255, 255, 0.15);
          box-shadow:inset 0 1px 0 0 rgba(255, 255, 255, 0.15); }
  .bp3-dark table.bp3-html-table.bp3-html-table-bordered tbody tr td:not(:first-child){
    -webkit-box-shadow:inset 1px 1px 0 0 rgba(255, 255, 255, 0.15);
            box-shadow:inset 1px 1px 0 0 rgba(255, 255, 255, 0.15); }

.bp3-dark table.bp3-html-table.bp3-html-table-bordered.bp3-html-table-striped tbody tr:not(:first-child) td{
  -webkit-box-shadow:inset 1px 0 0 0 rgba(255, 255, 255, 0.15);
          box-shadow:inset 1px 0 0 0 rgba(255, 255, 255, 0.15); }
  .bp3-dark table.bp3-html-table.bp3-html-table-bordered.bp3-html-table-striped tbody tr:not(:first-child) td:first-child{
    -webkit-box-shadow:none;
            box-shadow:none; }

.bp3-dark table.bp3-html-table.bp3-interactive tbody tr:hover td{
  background-color:rgba(92, 112, 128, 0.3);
  cursor:pointer; }

.bp3-dark table.bp3-html-table.bp3-interactive tbody tr:active td{
  background-color:rgba(92, 112, 128, 0.4); }

.bp3-key-combo{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center; }
  .bp3-key-combo > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-key-combo > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-key-combo::before,
  .bp3-key-combo > *{
    margin-right:5px; }
  .bp3-key-combo:empty::before,
  .bp3-key-combo > :last-child{
    margin-right:0; }

.bp3-hotkey-dialog{
  top:40px;
  padding-bottom:0; }
  .bp3-hotkey-dialog .bp3-dialog-body{
    margin:0;
    padding:0; }
  .bp3-hotkey-dialog .bp3-hotkey-label{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1; }

.bp3-hotkey-column{
  margin:auto;
  max-height:80vh;
  overflow-y:auto;
  padding:30px; }
  .bp3-hotkey-column .bp3-heading{
    margin-bottom:20px; }
    .bp3-hotkey-column .bp3-heading:not(:first-child){
      margin-top:40px; }

.bp3-hotkey{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:justify;
      -ms-flex-pack:justify;
          justify-content:space-between;
  margin-right:0;
  margin-left:0; }
  .bp3-hotkey:not(:last-child){
    margin-bottom:10px; }
.bp3-icon{
  display:inline-block;
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  vertical-align:text-bottom; }
  .bp3-icon:not(:empty)::before{
    content:"" !important;
    content:unset !important; }
  .bp3-icon > svg{
    display:block; }
    .bp3-icon > svg:not([fill]){
      fill:currentColor; }

.bp3-icon.bp3-intent-primary, .bp3-icon-standard.bp3-intent-primary, .bp3-icon-large.bp3-intent-primary{
  color:#106ba3; }
  .bp3-dark .bp3-icon.bp3-intent-primary, .bp3-dark .bp3-icon-standard.bp3-intent-primary, .bp3-dark .bp3-icon-large.bp3-intent-primary{
    color:#48aff0; }

.bp3-icon.bp3-intent-success, .bp3-icon-standard.bp3-intent-success, .bp3-icon-large.bp3-intent-success{
  color:#0d8050; }
  .bp3-dark .bp3-icon.bp3-intent-success, .bp3-dark .bp3-icon-standard.bp3-intent-success, .bp3-dark .bp3-icon-large.bp3-intent-success{
    color:#3dcc91; }

.bp3-icon.bp3-intent-warning, .bp3-icon-standard.bp3-intent-warning, .bp3-icon-large.bp3-intent-warning{
  color:#bf7326; }
  .bp3-dark .bp3-icon.bp3-intent-warning, .bp3-dark .bp3-icon-standard.bp3-intent-warning, .bp3-dark .bp3-icon-large.bp3-intent-warning{
    color:#ffb366; }

.bp3-icon.bp3-intent-danger, .bp3-icon-standard.bp3-intent-danger, .bp3-icon-large.bp3-intent-danger{
  color:#c23030; }
  .bp3-dark .bp3-icon.bp3-intent-danger, .bp3-dark .bp3-icon-standard.bp3-intent-danger, .bp3-dark .bp3-icon-large.bp3-intent-danger{
    color:#ff7373; }

span.bp3-icon-standard{
  line-height:1;
  font-family:"Icons16", sans-serif;
  font-size:16px;
  font-weight:400;
  font-style:normal;
  -moz-osx-font-smoothing:grayscale;
  -webkit-font-smoothing:antialiased;
  display:inline-block; }

span.bp3-icon-large{
  line-height:1;
  font-family:"Icons20", sans-serif;
  font-size:20px;
  font-weight:400;
  font-style:normal;
  -moz-osx-font-smoothing:grayscale;
  -webkit-font-smoothing:antialiased;
  display:inline-block; }

span.bp3-icon:empty{
  line-height:1;
  font-family:"Icons20";
  font-size:inherit;
  font-weight:400;
  font-style:normal; }
  span.bp3-icon:empty::before{
    -moz-osx-font-smoothing:grayscale;
    -webkit-font-smoothing:antialiased; }

.bp3-icon-add::before{
  content:""; }

.bp3-icon-add-column-left::before{
  content:""; }

.bp3-icon-add-column-right::before{
  content:""; }

.bp3-icon-add-row-bottom::before{
  content:""; }

.bp3-icon-add-row-top::before{
  content:""; }

.bp3-icon-add-to-artifact::before{
  content:""; }

.bp3-icon-add-to-folder::before{
  content:""; }

.bp3-icon-airplane::before{
  content:""; }

.bp3-icon-align-center::before{
  content:""; }

.bp3-icon-align-justify::before{
  content:""; }

.bp3-icon-align-left::before{
  content:""; }

.bp3-icon-align-right::before{
  content:""; }

.bp3-icon-alignment-bottom::before{
  content:""; }

.bp3-icon-alignment-horizontal-center::before{
  content:""; }

.bp3-icon-alignment-left::before{
  content:""; }

.bp3-icon-alignment-right::before{
  content:""; }

.bp3-icon-alignment-top::before{
  content:""; }

.bp3-icon-alignment-vertical-center::before{
  content:""; }

.bp3-icon-annotation::before{
  content:""; }

.bp3-icon-application::before{
  content:""; }

.bp3-icon-applications::before{
  content:""; }

.bp3-icon-archive::before{
  content:""; }

.bp3-icon-arrow-bottom-left::before{
  content:"↙"; }

.bp3-icon-arrow-bottom-right::before{
  content:"↘"; }

.bp3-icon-arrow-down::before{
  content:"↓"; }

.bp3-icon-arrow-left::before{
  content:"←"; }

.bp3-icon-arrow-right::before{
  content:"→"; }

.bp3-icon-arrow-top-left::before{
  content:"↖"; }

.bp3-icon-arrow-top-right::before{
  content:"↗"; }

.bp3-icon-arrow-up::before{
  content:"↑"; }

.bp3-icon-arrows-horizontal::before{
  content:"↔"; }

.bp3-icon-arrows-vertical::before{
  content:"↕"; }

.bp3-icon-asterisk::before{
  content:"*"; }

.bp3-icon-automatic-updates::before{
  content:""; }

.bp3-icon-badge::before{
  content:""; }

.bp3-icon-ban-circle::before{
  content:""; }

.bp3-icon-bank-account::before{
  content:""; }

.bp3-icon-barcode::before{
  content:""; }

.bp3-icon-blank::before{
  content:""; }

.bp3-icon-blocked-person::before{
  content:""; }

.bp3-icon-bold::before{
  content:""; }

.bp3-icon-book::before{
  content:""; }

.bp3-icon-bookmark::before{
  content:""; }

.bp3-icon-box::before{
  content:""; }

.bp3-icon-briefcase::before{
  content:""; }

.bp3-icon-bring-data::before{
  content:""; }

.bp3-icon-build::before{
  content:""; }

.bp3-icon-calculator::before{
  content:""; }

.bp3-icon-calendar::before{
  content:""; }

.bp3-icon-camera::before{
  content:""; }

.bp3-icon-caret-down::before{
  content:"⌄"; }

.bp3-icon-caret-left::before{
  content:"〈"; }

.bp3-icon-caret-right::before{
  content:"〉"; }

.bp3-icon-caret-up::before{
  content:"⌃"; }

.bp3-icon-cell-tower::before{
  content:""; }

.bp3-icon-changes::before{
  content:""; }

.bp3-icon-chart::before{
  content:""; }

.bp3-icon-chat::before{
  content:""; }

.bp3-icon-chevron-backward::before{
  content:""; }

.bp3-icon-chevron-down::before{
  content:""; }

.bp3-icon-chevron-forward::before{
  content:""; }

.bp3-icon-chevron-left::before{
  content:""; }

.bp3-icon-chevron-right::before{
  content:""; }

.bp3-icon-chevron-up::before{
  content:""; }

.bp3-icon-circle::before{
  content:""; }

.bp3-icon-circle-arrow-down::before{
  content:""; }

.bp3-icon-circle-arrow-left::before{
  content:""; }

.bp3-icon-circle-arrow-right::before{
  content:""; }

.bp3-icon-circle-arrow-up::before{
  content:""; }

.bp3-icon-citation::before{
  content:""; }

.bp3-icon-clean::before{
  content:""; }

.bp3-icon-clipboard::before{
  content:""; }

.bp3-icon-cloud::before{
  content:"☁"; }

.bp3-icon-cloud-download::before{
  content:""; }

.bp3-icon-cloud-upload::before{
  content:""; }

.bp3-icon-code::before{
  content:""; }

.bp3-icon-code-block::before{
  content:""; }

.bp3-icon-cog::before{
  content:""; }

.bp3-icon-collapse-all::before{
  content:""; }

.bp3-icon-column-layout::before{
  content:""; }

.bp3-icon-comment::before{
  content:""; }

.bp3-icon-comparison::before{
  content:""; }

.bp3-icon-compass::before{
  content:""; }

.bp3-icon-compressed::before{
  content:""; }

.bp3-icon-confirm::before{
  content:""; }

.bp3-icon-console::before{
  content:""; }

.bp3-icon-contrast::before{
  content:""; }

.bp3-icon-control::before{
  content:""; }

.bp3-icon-credit-card::before{
  content:""; }

.bp3-icon-cross::before{
  content:"✗"; }

.bp3-icon-crown::before{
  content:""; }

.bp3-icon-cube::before{
  content:""; }

.bp3-icon-cube-add::before{
  content:""; }

.bp3-icon-cube-remove::before{
  content:""; }

.bp3-icon-curved-range-chart::before{
  content:""; }

.bp3-icon-cut::before{
  content:""; }

.bp3-icon-dashboard::before{
  content:""; }

.bp3-icon-data-lineage::before{
  content:""; }

.bp3-icon-database::before{
  content:""; }

.bp3-icon-delete::before{
  content:""; }

.bp3-icon-delta::before{
  content:"Δ"; }

.bp3-icon-derive-column::before{
  content:""; }

.bp3-icon-desktop::before{
  content:""; }

.bp3-icon-diagram-tree::before{
  content:""; }

.bp3-icon-direction-left::before{
  content:""; }

.bp3-icon-direction-right::before{
  content:""; }

.bp3-icon-disable::before{
  content:""; }

.bp3-icon-document::before{
  content:""; }

.bp3-icon-document-open::before{
  content:""; }

.bp3-icon-document-share::before{
  content:""; }

.bp3-icon-dollar::before{
  content:"$"; }

.bp3-icon-dot::before{
  content:"•"; }

.bp3-icon-double-caret-horizontal::before{
  content:""; }

.bp3-icon-double-caret-vertical::before{
  content:""; }

.bp3-icon-double-chevron-down::before{
  content:""; }

.bp3-icon-double-chevron-left::before{
  content:""; }

.bp3-icon-double-chevron-right::before{
  content:""; }

.bp3-icon-double-chevron-up::before{
  content:""; }

.bp3-icon-doughnut-chart::before{
  content:""; }

.bp3-icon-download::before{
  content:""; }

.bp3-icon-drag-handle-horizontal::before{
  content:""; }

.bp3-icon-drag-handle-vertical::before{
  content:""; }

.bp3-icon-draw::before{
  content:""; }

.bp3-icon-drive-time::before{
  content:""; }

.bp3-icon-duplicate::before{
  content:""; }

.bp3-icon-edit::before{
  content:"✎"; }

.bp3-icon-eject::before{
  content:"⏏"; }

.bp3-icon-endorsed::before{
  content:""; }

.bp3-icon-envelope::before{
  content:"✉"; }

.bp3-icon-equals::before{
  content:""; }

.bp3-icon-eraser::before{
  content:""; }

.bp3-icon-error::before{
  content:""; }

.bp3-icon-euro::before{
  content:"€"; }

.bp3-icon-exchange::before{
  content:""; }

.bp3-icon-exclude-row::before{
  content:""; }

.bp3-icon-expand-all::before{
  content:""; }

.bp3-icon-export::before{
  content:""; }

.bp3-icon-eye-off::before{
  content:""; }

.bp3-icon-eye-on::before{
  content:""; }

.bp3-icon-eye-open::before{
  content:""; }

.bp3-icon-fast-backward::before{
  content:""; }

.bp3-icon-fast-forward::before{
  content:""; }

.bp3-icon-feed::before{
  content:""; }

.bp3-icon-feed-subscribed::before{
  content:""; }

.bp3-icon-film::before{
  content:""; }

.bp3-icon-filter::before{
  content:""; }

.bp3-icon-filter-keep::before{
  content:""; }

.bp3-icon-filter-list::before{
  content:""; }

.bp3-icon-filter-open::before{
  content:""; }

.bp3-icon-filter-remove::before{
  content:""; }

.bp3-icon-flag::before{
  content:"⚑"; }

.bp3-icon-flame::before{
  content:""; }

.bp3-icon-flash::before{
  content:""; }

.bp3-icon-floppy-disk::before{
  content:""; }

.bp3-icon-flow-branch::before{
  content:""; }

.bp3-icon-flow-end::before{
  content:""; }

.bp3-icon-flow-linear::before{
  content:""; }

.bp3-icon-flow-review::before{
  content:""; }

.bp3-icon-flow-review-branch::before{
  content:""; }

.bp3-icon-flows::before{
  content:""; }

.bp3-icon-folder-close::before{
  content:""; }

.bp3-icon-folder-new::before{
  content:""; }

.bp3-icon-folder-open::before{
  content:""; }

.bp3-icon-folder-shared::before{
  content:""; }

.bp3-icon-folder-shared-open::before{
  content:""; }

.bp3-icon-follower::before{
  content:""; }

.bp3-icon-following::before{
  content:""; }

.bp3-icon-font::before{
  content:""; }

.bp3-icon-fork::before{
  content:""; }

.bp3-icon-form::before{
  content:""; }

.bp3-icon-full-circle::before{
  content:""; }

.bp3-icon-full-stacked-chart::before{
  content:""; }

.bp3-icon-fullscreen::before{
  content:""; }

.bp3-icon-function::before{
  content:""; }

.bp3-icon-gantt-chart::before{
  content:""; }

.bp3-icon-geolocation::before{
  content:""; }

.bp3-icon-geosearch::before{
  content:""; }

.bp3-icon-git-branch::before{
  content:""; }

.bp3-icon-git-commit::before{
  content:""; }

.bp3-icon-git-merge::before{
  content:""; }

.bp3-icon-git-new-branch::before{
  content:""; }

.bp3-icon-git-pull::before{
  content:""; }

.bp3-icon-git-push::before{
  content:""; }

.bp3-icon-git-repo::before{
  content:""; }

.bp3-icon-glass::before{
  content:""; }

.bp3-icon-globe::before{
  content:""; }

.bp3-icon-globe-network::before{
  content:""; }

.bp3-icon-graph::before{
  content:""; }

.bp3-icon-graph-remove::before{
  content:""; }

.bp3-icon-greater-than::before{
  content:""; }

.bp3-icon-greater-than-or-equal-to::before{
  content:""; }

.bp3-icon-grid::before{
  content:""; }

.bp3-icon-grid-view::before{
  content:""; }

.bp3-icon-group-objects::before{
  content:""; }

.bp3-icon-grouped-bar-chart::before{
  content:""; }

.bp3-icon-hand::before{
  content:""; }

.bp3-icon-hand-down::before{
  content:""; }

.bp3-icon-hand-left::before{
  content:""; }

.bp3-icon-hand-right::before{
  content:""; }

.bp3-icon-hand-up::before{
  content:""; }

.bp3-icon-header::before{
  content:""; }

.bp3-icon-header-one::before{
  content:""; }

.bp3-icon-header-two::before{
  content:""; }

.bp3-icon-headset::before{
  content:""; }

.bp3-icon-heart::before{
  content:"♥"; }

.bp3-icon-heart-broken::before{
  content:""; }

.bp3-icon-heat-grid::before{
  content:""; }

.bp3-icon-heatmap::before{
  content:""; }

.bp3-icon-help::before{
  content:"?"; }

.bp3-icon-helper-management::before{
  content:""; }

.bp3-icon-highlight::before{
  content:""; }

.bp3-icon-history::before{
  content:""; }

.bp3-icon-home::before{
  content:"⌂"; }

.bp3-icon-horizontal-bar-chart::before{
  content:""; }

.bp3-icon-horizontal-bar-chart-asc::before{
  content:""; }

.bp3-icon-horizontal-bar-chart-desc::before{
  content:""; }

.bp3-icon-horizontal-distribution::before{
  content:""; }

.bp3-icon-id-number::before{
  content:""; }

.bp3-icon-image-rotate-left::before{
  content:""; }

.bp3-icon-image-rotate-right::before{
  content:""; }

.bp3-icon-import::before{
  content:""; }

.bp3-icon-inbox::before{
  content:""; }

.bp3-icon-inbox-filtered::before{
  content:""; }

.bp3-icon-inbox-geo::before{
  content:""; }

.bp3-icon-inbox-search::before{
  content:""; }

.bp3-icon-inbox-update::before{
  content:""; }

.bp3-icon-info-sign::before{
  content:"ℹ"; }

.bp3-icon-inheritance::before{
  content:""; }

.bp3-icon-inner-join::before{
  content:""; }

.bp3-icon-insert::before{
  content:""; }

.bp3-icon-intersection::before{
  content:""; }

.bp3-icon-ip-address::before{
  content:""; }

.bp3-icon-issue::before{
  content:""; }

.bp3-icon-issue-closed::before{
  content:""; }

.bp3-icon-issue-new::before{
  content:""; }

.bp3-icon-italic::before{
  content:""; }

.bp3-icon-join-table::before{
  content:""; }

.bp3-icon-key::before{
  content:""; }

.bp3-icon-key-backspace::before{
  content:""; }

.bp3-icon-key-command::before{
  content:""; }

.bp3-icon-key-control::before{
  content:""; }

.bp3-icon-key-delete::before{
  content:""; }

.bp3-icon-key-enter::before{
  content:""; }

.bp3-icon-key-escape::before{
  content:""; }

.bp3-icon-key-option::before{
  content:""; }

.bp3-icon-key-shift::before{
  content:""; }

.bp3-icon-key-tab::before{
  content:""; }

.bp3-icon-known-vehicle::before{
  content:""; }

.bp3-icon-label::before{
  content:""; }

.bp3-icon-layer::before{
  content:""; }

.bp3-icon-layers::before{
  content:""; }

.bp3-icon-layout::before{
  content:""; }

.bp3-icon-layout-auto::before{
  content:""; }

.bp3-icon-layout-balloon::before{
  content:""; }

.bp3-icon-layout-circle::before{
  content:""; }

.bp3-icon-layout-grid::before{
  content:""; }

.bp3-icon-layout-group-by::before{
  content:""; }

.bp3-icon-layout-hierarchy::before{
  content:""; }

.bp3-icon-layout-linear::before{
  content:""; }

.bp3-icon-layout-skew-grid::before{
  content:""; }

.bp3-icon-layout-sorted-clusters::before{
  content:""; }

.bp3-icon-learning::before{
  content:""; }

.bp3-icon-left-join::before{
  content:""; }

.bp3-icon-less-than::before{
  content:""; }

.bp3-icon-less-than-or-equal-to::before{
  content:""; }

.bp3-icon-lifesaver::before{
  content:""; }

.bp3-icon-lightbulb::before{
  content:""; }

.bp3-icon-link::before{
  content:""; }

.bp3-icon-list::before{
  content:"☰"; }

.bp3-icon-list-columns::before{
  content:""; }

.bp3-icon-list-detail-view::before{
  content:""; }

.bp3-icon-locate::before{
  content:""; }

.bp3-icon-lock::before{
  content:""; }

.bp3-icon-log-in::before{
  content:""; }

.bp3-icon-log-out::before{
  content:""; }

.bp3-icon-manual::before{
  content:""; }

.bp3-icon-manually-entered-data::before{
  content:""; }

.bp3-icon-map::before{
  content:""; }

.bp3-icon-map-create::before{
  content:""; }

.bp3-icon-map-marker::before{
  content:""; }

.bp3-icon-maximize::before{
  content:""; }

.bp3-icon-media::before{
  content:""; }

.bp3-icon-menu::before{
  content:""; }

.bp3-icon-menu-closed::before{
  content:""; }

.bp3-icon-menu-open::before{
  content:""; }

.bp3-icon-merge-columns::before{
  content:""; }

.bp3-icon-merge-links::before{
  content:""; }

.bp3-icon-minimize::before{
  content:""; }

.bp3-icon-minus::before{
  content:"−"; }

.bp3-icon-mobile-phone::before{
  content:""; }

.bp3-icon-mobile-video::before{
  content:""; }

.bp3-icon-moon::before{
  content:""; }

.bp3-icon-more::before{
  content:""; }

.bp3-icon-mountain::before{
  content:""; }

.bp3-icon-move::before{
  content:""; }

.bp3-icon-mugshot::before{
  content:""; }

.bp3-icon-multi-select::before{
  content:""; }

.bp3-icon-music::before{
  content:""; }

.bp3-icon-new-drawing::before{
  content:""; }

.bp3-icon-new-grid-item::before{
  content:""; }

.bp3-icon-new-layer::before{
  content:""; }

.bp3-icon-new-layers::before{
  content:""; }

.bp3-icon-new-link::before{
  content:""; }

.bp3-icon-new-object::before{
  content:""; }

.bp3-icon-new-person::before{
  content:""; }

.bp3-icon-new-prescription::before{
  content:""; }

.bp3-icon-new-text-box::before{
  content:""; }

.bp3-icon-ninja::before{
  content:""; }

.bp3-icon-not-equal-to::before{
  content:""; }

.bp3-icon-notifications::before{
  content:""; }

.bp3-icon-notifications-updated::before{
  content:""; }

.bp3-icon-numbered-list::before{
  content:""; }

.bp3-icon-numerical::before{
  content:""; }

.bp3-icon-office::before{
  content:""; }

.bp3-icon-offline::before{
  content:""; }

.bp3-icon-oil-field::before{
  content:""; }

.bp3-icon-one-column::before{
  content:""; }

.bp3-icon-outdated::before{
  content:""; }

.bp3-icon-page-layout::before{
  content:""; }

.bp3-icon-panel-stats::before{
  content:""; }

.bp3-icon-panel-table::before{
  content:""; }

.bp3-icon-paperclip::before{
  content:""; }

.bp3-icon-paragraph::before{
  content:""; }

.bp3-icon-path::before{
  content:""; }

.bp3-icon-path-search::before{
  content:""; }

.bp3-icon-pause::before{
  content:""; }

.bp3-icon-people::before{
  content:""; }

.bp3-icon-percentage::before{
  content:""; }

.bp3-icon-person::before{
  content:""; }

.bp3-icon-phone::before{
  content:"☎"; }

.bp3-icon-pie-chart::before{
  content:""; }

.bp3-icon-pin::before{
  content:""; }

.bp3-icon-pivot::before{
  content:""; }

.bp3-icon-pivot-table::before{
  content:""; }

.bp3-icon-play::before{
  content:""; }

.bp3-icon-plus::before{
  content:"+"; }

.bp3-icon-polygon-filter::before{
  content:""; }

.bp3-icon-power::before{
  content:""; }

.bp3-icon-predictive-analysis::before{
  content:""; }

.bp3-icon-prescription::before{
  content:""; }

.bp3-icon-presentation::before{
  content:""; }

.bp3-icon-print::before{
  content:"⎙"; }

.bp3-icon-projects::before{
  content:""; }

.bp3-icon-properties::before{
  content:""; }

.bp3-icon-property::before{
  content:""; }

.bp3-icon-publish-function::before{
  content:""; }

.bp3-icon-pulse::before{
  content:""; }

.bp3-icon-random::before{
  content:""; }

.bp3-icon-record::before{
  content:""; }

.bp3-icon-redo::before{
  content:""; }

.bp3-icon-refresh::before{
  content:""; }

.bp3-icon-regression-chart::before{
  content:""; }

.bp3-icon-remove::before{
  content:""; }

.bp3-icon-remove-column::before{
  content:""; }

.bp3-icon-remove-column-left::before{
  content:""; }

.bp3-icon-remove-column-right::before{
  content:""; }

.bp3-icon-remove-row-bottom::before{
  content:""; }

.bp3-icon-remove-row-top::before{
  content:""; }

.bp3-icon-repeat::before{
  content:""; }

.bp3-icon-reset::before{
  content:""; }

.bp3-icon-resolve::before{
  content:""; }

.bp3-icon-rig::before{
  content:""; }

.bp3-icon-right-join::before{
  content:""; }

.bp3-icon-ring::before{
  content:""; }

.bp3-icon-rotate-document::before{
  content:""; }

.bp3-icon-rotate-page::before{
  content:""; }

.bp3-icon-satellite::before{
  content:""; }

.bp3-icon-saved::before{
  content:""; }

.bp3-icon-scatter-plot::before{
  content:""; }

.bp3-icon-search::before{
  content:""; }

.bp3-icon-search-around::before{
  content:""; }

.bp3-icon-search-template::before{
  content:""; }

.bp3-icon-search-text::before{
  content:""; }

.bp3-icon-segmented-control::before{
  content:""; }

.bp3-icon-select::before{
  content:""; }

.bp3-icon-selection::before{
  content:"⦿"; }

.bp3-icon-send-to::before{
  content:""; }

.bp3-icon-send-to-graph::before{
  content:""; }

.bp3-icon-send-to-map::before{
  content:""; }

.bp3-icon-series-add::before{
  content:""; }

.bp3-icon-series-configuration::before{
  content:""; }

.bp3-icon-series-derived::before{
  content:""; }

.bp3-icon-series-filtered::before{
  content:""; }

.bp3-icon-series-search::before{
  content:""; }

.bp3-icon-settings::before{
  content:""; }

.bp3-icon-share::before{
  content:""; }

.bp3-icon-shield::before{
  content:""; }

.bp3-icon-shop::before{
  content:""; }

.bp3-icon-shopping-cart::before{
  content:""; }

.bp3-icon-signal-search::before{
  content:""; }

.bp3-icon-sim-card::before{
  content:""; }

.bp3-icon-slash::before{
  content:""; }

.bp3-icon-small-cross::before{
  content:""; }

.bp3-icon-small-minus::before{
  content:""; }

.bp3-icon-small-plus::before{
  content:""; }

.bp3-icon-small-tick::before{
  content:""; }

.bp3-icon-snowflake::before{
  content:""; }

.bp3-icon-social-media::before{
  content:""; }

.bp3-icon-sort::before{
  content:""; }

.bp3-icon-sort-alphabetical::before{
  content:""; }

.bp3-icon-sort-alphabetical-desc::before{
  content:""; }

.bp3-icon-sort-asc::before{
  content:""; }

.bp3-icon-sort-desc::before{
  content:""; }

.bp3-icon-sort-numerical::before{
  content:""; }

.bp3-icon-sort-numerical-desc::before{
  content:""; }

.bp3-icon-split-columns::before{
  content:""; }

.bp3-icon-square::before{
  content:""; }

.bp3-icon-stacked-chart::before{
  content:""; }

.bp3-icon-star::before{
  content:"★"; }

.bp3-icon-star-empty::before{
  content:"☆"; }

.bp3-icon-step-backward::before{
  content:""; }

.bp3-icon-step-chart::before{
  content:""; }

.bp3-icon-step-forward::before{
  content:""; }

.bp3-icon-stop::before{
  content:""; }

.bp3-icon-stopwatch::before{
  content:""; }

.bp3-icon-strikethrough::before{
  content:""; }

.bp3-icon-style::before{
  content:""; }

.bp3-icon-swap-horizontal::before{
  content:""; }

.bp3-icon-swap-vertical::before{
  content:""; }

.bp3-icon-symbol-circle::before{
  content:""; }

.bp3-icon-symbol-cross::before{
  content:""; }

.bp3-icon-symbol-diamond::before{
  content:""; }

.bp3-icon-symbol-square::before{
  content:""; }

.bp3-icon-symbol-triangle-down::before{
  content:""; }

.bp3-icon-symbol-triangle-up::before{
  content:""; }

.bp3-icon-tag::before{
  content:""; }

.bp3-icon-take-action::before{
  content:""; }

.bp3-icon-taxi::before{
  content:""; }

.bp3-icon-text-highlight::before{
  content:""; }

.bp3-icon-th::before{
  content:""; }

.bp3-icon-th-derived::before{
  content:""; }

.bp3-icon-th-disconnect::before{
  content:""; }

.bp3-icon-th-filtered::before{
  content:""; }

.bp3-icon-th-list::before{
  content:""; }

.bp3-icon-thumbs-down::before{
  content:""; }

.bp3-icon-thumbs-up::before{
  content:""; }

.bp3-icon-tick::before{
  content:"✓"; }

.bp3-icon-tick-circle::before{
  content:""; }

.bp3-icon-time::before{
  content:"⏲"; }

.bp3-icon-timeline-area-chart::before{
  content:""; }

.bp3-icon-timeline-bar-chart::before{
  content:""; }

.bp3-icon-timeline-events::before{
  content:""; }

.bp3-icon-timeline-line-chart::before{
  content:""; }

.bp3-icon-tint::before{
  content:""; }

.bp3-icon-torch::before{
  content:""; }

.bp3-icon-tractor::before{
  content:""; }

.bp3-icon-train::before{
  content:""; }

.bp3-icon-translate::before{
  content:""; }

.bp3-icon-trash::before{
  content:""; }

.bp3-icon-tree::before{
  content:""; }

.bp3-icon-trending-down::before{
  content:""; }

.bp3-icon-trending-up::before{
  content:""; }

.bp3-icon-truck::before{
  content:""; }

.bp3-icon-two-columns::before{
  content:""; }

.bp3-icon-unarchive::before{
  content:""; }

.bp3-icon-underline::before{
  content:"⎁"; }

.bp3-icon-undo::before{
  content:"⎌"; }

.bp3-icon-ungroup-objects::before{
  content:""; }

.bp3-icon-unknown-vehicle::before{
  content:""; }

.bp3-icon-unlock::before{
  content:""; }

.bp3-icon-unpin::before{
  content:""; }

.bp3-icon-unresolve::before{
  content:""; }

.bp3-icon-updated::before{
  content:""; }

.bp3-icon-upload::before{
  content:""; }

.bp3-icon-user::before{
  content:""; }

.bp3-icon-variable::before{
  content:""; }

.bp3-icon-vertical-bar-chart-asc::before{
  content:""; }

.bp3-icon-vertical-bar-chart-desc::before{
  content:""; }

.bp3-icon-vertical-distribution::before{
  content:""; }

.bp3-icon-video::before{
  content:""; }

.bp3-icon-volume-down::before{
  content:""; }

.bp3-icon-volume-off::before{
  content:""; }

.bp3-icon-volume-up::before{
  content:""; }

.bp3-icon-walk::before{
  content:""; }

.bp3-icon-warning-sign::before{
  content:""; }

.bp3-icon-waterfall-chart::before{
  content:""; }

.bp3-icon-widget::before{
  content:""; }

.bp3-icon-widget-button::before{
  content:""; }

.bp3-icon-widget-footer::before{
  content:""; }

.bp3-icon-widget-header::before{
  content:""; }

.bp3-icon-wrench::before{
  content:""; }

.bp3-icon-zoom-in::before{
  content:""; }

.bp3-icon-zoom-out::before{
  content:""; }

.bp3-icon-zoom-to-fit::before{
  content:""; }
.bp3-submenu > .bp3-popover-wrapper{
  display:block; }

.bp3-submenu .bp3-popover-target{
  display:block; }

.bp3-submenu.bp3-popover{
  -webkit-box-shadow:none;
          box-shadow:none;
  padding:0 5px; }
  .bp3-submenu.bp3-popover > .bp3-popover-content{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2); }
  .bp3-dark .bp3-submenu.bp3-popover, .bp3-submenu.bp3-popover.bp3-dark{
    -webkit-box-shadow:none;
            box-shadow:none; }
    .bp3-dark .bp3-submenu.bp3-popover > .bp3-popover-content, .bp3-submenu.bp3-popover.bp3-dark > .bp3-popover-content{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4); }
.bp3-menu{
  margin:0;
  border-radius:3px;
  background:#ffffff;
  min-width:180px;
  padding:5px;
  list-style:none;
  text-align:left;
  color:#182026; }

.bp3-menu-divider{
  display:block;
  margin:5px;
  border-top:1px solid rgba(16, 22, 26, 0.15); }
  .bp3-dark .bp3-menu-divider{
    border-top-color:rgba(255, 255, 255, 0.15); }

.bp3-menu-item{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:start;
      -ms-flex-align:start;
          align-items:flex-start;
  border-radius:2px;
  padding:5px 7px;
  text-decoration:none;
  line-height:20px;
  color:inherit;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-menu-item > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-menu-item > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-menu-item::before,
  .bp3-menu-item > *{
    margin-right:7px; }
  .bp3-menu-item:empty::before,
  .bp3-menu-item > :last-child{
    margin-right:0; }
  .bp3-menu-item > .bp3-fill{
    word-break:break-word; }
  .bp3-menu-item:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-menu-item{
    background-color:rgba(167, 182, 194, 0.3);
    cursor:pointer;
    text-decoration:none; }
  .bp3-menu-item.bp3-disabled{
    background-color:inherit;
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-dark .bp3-menu-item{
    color:inherit; }
    .bp3-dark .bp3-menu-item:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-menu-item{
      background-color:rgba(138, 155, 168, 0.15);
      color:inherit; }
    .bp3-dark .bp3-menu-item.bp3-disabled{
      background-color:inherit;
      color:rgba(167, 182, 194, 0.6); }
  .bp3-menu-item.bp3-intent-primary{
    color:#106ba3; }
    .bp3-menu-item.bp3-intent-primary .bp3-icon{
      color:inherit; }
    .bp3-menu-item.bp3-intent-primary::before, .bp3-menu-item.bp3-intent-primary::after,
    .bp3-menu-item.bp3-intent-primary .bp3-menu-item-label{
      color:#106ba3; }
    .bp3-menu-item.bp3-intent-primary:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-menu-item.bp3-intent-primary.bp3-active{
      background-color:#137cbd; }
    .bp3-menu-item.bp3-intent-primary:active{
      background-color:#106ba3; }
    .bp3-menu-item.bp3-intent-primary:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-menu-item.bp3-intent-primary:hover::before, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::before, .bp3-menu-item.bp3-intent-primary:hover::after, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::after,
    .bp3-menu-item.bp3-intent-primary:hover .bp3-menu-item-label,
    .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item .bp3-menu-item-label, .bp3-menu-item.bp3-intent-primary:active, .bp3-menu-item.bp3-intent-primary:active::before, .bp3-menu-item.bp3-intent-primary:active::after,
    .bp3-menu-item.bp3-intent-primary:active .bp3-menu-item-label, .bp3-menu-item.bp3-intent-primary.bp3-active, .bp3-menu-item.bp3-intent-primary.bp3-active::before, .bp3-menu-item.bp3-intent-primary.bp3-active::after,
    .bp3-menu-item.bp3-intent-primary.bp3-active .bp3-menu-item-label{
      color:#ffffff; }
  .bp3-menu-item.bp3-intent-success{
    color:#0d8050; }
    .bp3-menu-item.bp3-intent-success .bp3-icon{
      color:inherit; }
    .bp3-menu-item.bp3-intent-success::before, .bp3-menu-item.bp3-intent-success::after,
    .bp3-menu-item.bp3-intent-success .bp3-menu-item-label{
      color:#0d8050; }
    .bp3-menu-item.bp3-intent-success:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-menu-item.bp3-intent-success.bp3-active{
      background-color:#0f9960; }
    .bp3-menu-item.bp3-intent-success:active{
      background-color:#0d8050; }
    .bp3-menu-item.bp3-intent-success:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-menu-item.bp3-intent-success:hover::before, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::before, .bp3-menu-item.bp3-intent-success:hover::after, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::after,
    .bp3-menu-item.bp3-intent-success:hover .bp3-menu-item-label,
    .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item .bp3-menu-item-label, .bp3-menu-item.bp3-intent-success:active, .bp3-menu-item.bp3-intent-success:active::before, .bp3-menu-item.bp3-intent-success:active::after,
    .bp3-menu-item.bp3-intent-success:active .bp3-menu-item-label, .bp3-menu-item.bp3-intent-success.bp3-active, .bp3-menu-item.bp3-intent-success.bp3-active::before, .bp3-menu-item.bp3-intent-success.bp3-active::after,
    .bp3-menu-item.bp3-intent-success.bp3-active .bp3-menu-item-label{
      color:#ffffff; }
  .bp3-menu-item.bp3-intent-warning{
    color:#bf7326; }
    .bp3-menu-item.bp3-intent-warning .bp3-icon{
      color:inherit; }
    .bp3-menu-item.bp3-intent-warning::before, .bp3-menu-item.bp3-intent-warning::after,
    .bp3-menu-item.bp3-intent-warning .bp3-menu-item-label{
      color:#bf7326; }
    .bp3-menu-item.bp3-intent-warning:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-menu-item.bp3-intent-warning.bp3-active{
      background-color:#d9822b; }
    .bp3-menu-item.bp3-intent-warning:active{
      background-color:#bf7326; }
    .bp3-menu-item.bp3-intent-warning:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-menu-item.bp3-intent-warning:hover::before, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::before, .bp3-menu-item.bp3-intent-warning:hover::after, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::after,
    .bp3-menu-item.bp3-intent-warning:hover .bp3-menu-item-label,
    .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item .bp3-menu-item-label, .bp3-menu-item.bp3-intent-warning:active, .bp3-menu-item.bp3-intent-warning:active::before, .bp3-menu-item.bp3-intent-warning:active::after,
    .bp3-menu-item.bp3-intent-warning:active .bp3-menu-item-label, .bp3-menu-item.bp3-intent-warning.bp3-active, .bp3-menu-item.bp3-intent-warning.bp3-active::before, .bp3-menu-item.bp3-intent-warning.bp3-active::after,
    .bp3-menu-item.bp3-intent-warning.bp3-active .bp3-menu-item-label{
      color:#ffffff; }
  .bp3-menu-item.bp3-intent-danger{
    color:#c23030; }
    .bp3-menu-item.bp3-intent-danger .bp3-icon{
      color:inherit; }
    .bp3-menu-item.bp3-intent-danger::before, .bp3-menu-item.bp3-intent-danger::after,
    .bp3-menu-item.bp3-intent-danger .bp3-menu-item-label{
      color:#c23030; }
    .bp3-menu-item.bp3-intent-danger:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-menu-item.bp3-intent-danger.bp3-active{
      background-color:#db3737; }
    .bp3-menu-item.bp3-intent-danger:active{
      background-color:#c23030; }
    .bp3-menu-item.bp3-intent-danger:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-menu-item.bp3-intent-danger:hover::before, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::before, .bp3-menu-item.bp3-intent-danger:hover::after, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::after,
    .bp3-menu-item.bp3-intent-danger:hover .bp3-menu-item-label,
    .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item .bp3-menu-item-label, .bp3-menu-item.bp3-intent-danger:active, .bp3-menu-item.bp3-intent-danger:active::before, .bp3-menu-item.bp3-intent-danger:active::after,
    .bp3-menu-item.bp3-intent-danger:active .bp3-menu-item-label, .bp3-menu-item.bp3-intent-danger.bp3-active, .bp3-menu-item.bp3-intent-danger.bp3-active::before, .bp3-menu-item.bp3-intent-danger.bp3-active::after,
    .bp3-menu-item.bp3-intent-danger.bp3-active .bp3-menu-item-label{
      color:#ffffff; }
  .bp3-menu-item::before{
    line-height:1;
    font-family:"Icons16", sans-serif;
    font-size:16px;
    font-weight:400;
    font-style:normal;
    -moz-osx-font-smoothing:grayscale;
    -webkit-font-smoothing:antialiased;
    margin-right:7px; }
  .bp3-menu-item::before,
  .bp3-menu-item > .bp3-icon{
    margin-top:2px;
    color:#5c7080; }
  .bp3-menu-item .bp3-menu-item-label{
    color:#5c7080; }
  .bp3-menu-item:hover, .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-menu-item{
    color:inherit; }
  .bp3-menu-item.bp3-active, .bp3-menu-item:active{
    background-color:rgba(115, 134, 148, 0.3); }
  .bp3-menu-item.bp3-disabled{
    outline:none !important;
    background-color:inherit !important;
    cursor:not-allowed !important;
    color:rgba(92, 112, 128, 0.6) !important; }
    .bp3-menu-item.bp3-disabled::before,
    .bp3-menu-item.bp3-disabled > .bp3-icon,
    .bp3-menu-item.bp3-disabled .bp3-menu-item-label{
      color:rgba(92, 112, 128, 0.6) !important; }
  .bp3-large .bp3-menu-item{
    padding:9px 7px;
    line-height:22px;
    font-size:16px; }
    .bp3-large .bp3-menu-item .bp3-icon{
      margin-top:3px; }
    .bp3-large .bp3-menu-item::before{
      line-height:1;
      font-family:"Icons20", sans-serif;
      font-size:20px;
      font-weight:400;
      font-style:normal;
      -moz-osx-font-smoothing:grayscale;
      -webkit-font-smoothing:antialiased;
      margin-top:1px;
      margin-right:10px; }

button.bp3-menu-item{
  border:none;
  background:none;
  width:100%;
  text-align:left; }
.bp3-menu-header{
  display:block;
  margin:5px;
  border-top:1px solid rgba(16, 22, 26, 0.15);
  cursor:default;
  padding-left:2px; }
  .bp3-dark .bp3-menu-header{
    border-top-color:rgba(255, 255, 255, 0.15); }
  .bp3-menu-header:first-of-type{
    border-top:none; }
  .bp3-menu-header > h6{
    color:#182026;
    font-weight:600;
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:nowrap;
    word-wrap:normal;
    margin:0;
    padding:10px 7px 0 1px;
    line-height:17px; }
    .bp3-dark .bp3-menu-header > h6{
      color:#f5f8fa; }
  .bp3-menu-header:first-of-type > h6{
    padding-top:0; }
  .bp3-large .bp3-menu-header > h6{
    padding-top:15px;
    padding-bottom:5px;
    font-size:18px; }
  .bp3-large .bp3-menu-header:first-of-type > h6{
    padding-top:0; }

.bp3-dark .bp3-menu{
  background:#30404d;
  color:#f5f8fa; }

.bp3-dark .bp3-menu-item.bp3-intent-primary{
  color:#48aff0; }
  .bp3-dark .bp3-menu-item.bp3-intent-primary .bp3-icon{
    color:inherit; }
  .bp3-dark .bp3-menu-item.bp3-intent-primary::before, .bp3-dark .bp3-menu-item.bp3-intent-primary::after,
  .bp3-dark .bp3-menu-item.bp3-intent-primary .bp3-menu-item-label{
    color:#48aff0; }
  .bp3-dark .bp3-menu-item.bp3-intent-primary:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-primary.bp3-active{
    background-color:#137cbd; }
  .bp3-dark .bp3-menu-item.bp3-intent-primary:active{
    background-color:#106ba3; }
  .bp3-dark .bp3-menu-item.bp3-intent-primary:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-primary:hover::before, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::before, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::before, .bp3-dark .bp3-menu-item.bp3-intent-primary:hover::after, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::after, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item::after,
  .bp3-dark .bp3-menu-item.bp3-intent-primary:hover .bp3-menu-item-label,
  .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item .bp3-menu-item-label,
  .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-primary.bp3-menu-item .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-primary:active, .bp3-dark .bp3-menu-item.bp3-intent-primary:active::before, .bp3-dark .bp3-menu-item.bp3-intent-primary:active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-primary:active .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-primary.bp3-active, .bp3-dark .bp3-menu-item.bp3-intent-primary.bp3-active::before, .bp3-dark .bp3-menu-item.bp3-intent-primary.bp3-active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-primary.bp3-active .bp3-menu-item-label{
    color:#ffffff; }

.bp3-dark .bp3-menu-item.bp3-intent-success{
  color:#3dcc91; }
  .bp3-dark .bp3-menu-item.bp3-intent-success .bp3-icon{
    color:inherit; }
  .bp3-dark .bp3-menu-item.bp3-intent-success::before, .bp3-dark .bp3-menu-item.bp3-intent-success::after,
  .bp3-dark .bp3-menu-item.bp3-intent-success .bp3-menu-item-label{
    color:#3dcc91; }
  .bp3-dark .bp3-menu-item.bp3-intent-success:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-success.bp3-active{
    background-color:#0f9960; }
  .bp3-dark .bp3-menu-item.bp3-intent-success:active{
    background-color:#0d8050; }
  .bp3-dark .bp3-menu-item.bp3-intent-success:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-success:hover::before, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::before, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::before, .bp3-dark .bp3-menu-item.bp3-intent-success:hover::after, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::after, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item::after,
  .bp3-dark .bp3-menu-item.bp3-intent-success:hover .bp3-menu-item-label,
  .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item .bp3-menu-item-label,
  .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-success.bp3-menu-item .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-success:active, .bp3-dark .bp3-menu-item.bp3-intent-success:active::before, .bp3-dark .bp3-menu-item.bp3-intent-success:active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-success:active .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-success.bp3-active, .bp3-dark .bp3-menu-item.bp3-intent-success.bp3-active::before, .bp3-dark .bp3-menu-item.bp3-intent-success.bp3-active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-success.bp3-active .bp3-menu-item-label{
    color:#ffffff; }

.bp3-dark .bp3-menu-item.bp3-intent-warning{
  color:#ffb366; }
  .bp3-dark .bp3-menu-item.bp3-intent-warning .bp3-icon{
    color:inherit; }
  .bp3-dark .bp3-menu-item.bp3-intent-warning::before, .bp3-dark .bp3-menu-item.bp3-intent-warning::after,
  .bp3-dark .bp3-menu-item.bp3-intent-warning .bp3-menu-item-label{
    color:#ffb366; }
  .bp3-dark .bp3-menu-item.bp3-intent-warning:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-warning.bp3-active{
    background-color:#d9822b; }
  .bp3-dark .bp3-menu-item.bp3-intent-warning:active{
    background-color:#bf7326; }
  .bp3-dark .bp3-menu-item.bp3-intent-warning:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-warning:hover::before, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::before, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::before, .bp3-dark .bp3-menu-item.bp3-intent-warning:hover::after, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::after, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item::after,
  .bp3-dark .bp3-menu-item.bp3-intent-warning:hover .bp3-menu-item-label,
  .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item .bp3-menu-item-label,
  .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-warning.bp3-menu-item .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-warning:active, .bp3-dark .bp3-menu-item.bp3-intent-warning:active::before, .bp3-dark .bp3-menu-item.bp3-intent-warning:active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-warning:active .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-warning.bp3-active, .bp3-dark .bp3-menu-item.bp3-intent-warning.bp3-active::before, .bp3-dark .bp3-menu-item.bp3-intent-warning.bp3-active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-warning.bp3-active .bp3-menu-item-label{
    color:#ffffff; }

.bp3-dark .bp3-menu-item.bp3-intent-danger{
  color:#ff7373; }
  .bp3-dark .bp3-menu-item.bp3-intent-danger .bp3-icon{
    color:inherit; }
  .bp3-dark .bp3-menu-item.bp3-intent-danger::before, .bp3-dark .bp3-menu-item.bp3-intent-danger::after,
  .bp3-dark .bp3-menu-item.bp3-intent-danger .bp3-menu-item-label{
    color:#ff7373; }
  .bp3-dark .bp3-menu-item.bp3-intent-danger:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-danger.bp3-active{
    background-color:#db3737; }
  .bp3-dark .bp3-menu-item.bp3-intent-danger:active{
    background-color:#c23030; }
  .bp3-dark .bp3-menu-item.bp3-intent-danger:hover, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item, .bp3-dark .bp3-menu-item.bp3-intent-danger:hover::before, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::before, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::before, .bp3-dark .bp3-menu-item.bp3-intent-danger:hover::after, .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::after, .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item::after,
  .bp3-dark .bp3-menu-item.bp3-intent-danger:hover .bp3-menu-item-label,
  .bp3-dark .bp3-submenu .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item .bp3-menu-item-label,
  .bp3-submenu .bp3-dark .bp3-popover-target.bp3-popover-open > .bp3-intent-danger.bp3-menu-item .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-danger:active, .bp3-dark .bp3-menu-item.bp3-intent-danger:active::before, .bp3-dark .bp3-menu-item.bp3-intent-danger:active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-danger:active .bp3-menu-item-label, .bp3-dark .bp3-menu-item.bp3-intent-danger.bp3-active, .bp3-dark .bp3-menu-item.bp3-intent-danger.bp3-active::before, .bp3-dark .bp3-menu-item.bp3-intent-danger.bp3-active::after,
  .bp3-dark .bp3-menu-item.bp3-intent-danger.bp3-active .bp3-menu-item-label{
    color:#ffffff; }

.bp3-dark .bp3-menu-item::before,
.bp3-dark .bp3-menu-item > .bp3-icon{
  color:#a7b6c2; }

.bp3-dark .bp3-menu-item .bp3-menu-item-label{
  color:#a7b6c2; }

.bp3-dark .bp3-menu-item.bp3-active, .bp3-dark .bp3-menu-item:active{
  background-color:rgba(138, 155, 168, 0.3); }

.bp3-dark .bp3-menu-item.bp3-disabled{
  color:rgba(167, 182, 194, 0.6) !important; }
  .bp3-dark .bp3-menu-item.bp3-disabled::before,
  .bp3-dark .bp3-menu-item.bp3-disabled > .bp3-icon,
  .bp3-dark .bp3-menu-item.bp3-disabled .bp3-menu-item-label{
    color:rgba(167, 182, 194, 0.6) !important; }

.bp3-dark .bp3-menu-divider,
.bp3-dark .bp3-menu-header{
  border-color:rgba(255, 255, 255, 0.15); }

.bp3-dark .bp3-menu-header > h6{
  color:#f5f8fa; }

.bp3-label .bp3-menu{
  margin-top:5px; }
.bp3-navbar{
  position:relative;
  z-index:10;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.2);
  background-color:#ffffff;
  width:100%;
  height:50px;
  padding:0 15px; }
  .bp3-navbar.bp3-dark,
  .bp3-dark .bp3-navbar{
    background-color:#394b59; }
  .bp3-navbar.bp3-dark{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4); }
  .bp3-dark .bp3-navbar{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 0 0 rgba(16, 22, 26, 0), 0 1px 1px rgba(16, 22, 26, 0.4); }
  .bp3-navbar.bp3-fixed-top{
    position:fixed;
    top:0;
    right:0;
    left:0; }

.bp3-navbar-heading{
  margin-right:15px;
  font-size:16px; }

.bp3-navbar-group{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  height:50px; }
  .bp3-navbar-group.bp3-align-left{
    float:left; }
  .bp3-navbar-group.bp3-align-right{
    float:right; }

.bp3-navbar-divider{
  margin:0 10px;
  border-left:1px solid rgba(16, 22, 26, 0.15);
  height:20px; }
  .bp3-dark .bp3-navbar-divider{
    border-left-color:rgba(255, 255, 255, 0.15); }
.bp3-non-ideal-state{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  width:100%;
  height:100%;
  text-align:center; }
  .bp3-non-ideal-state > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-non-ideal-state > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-non-ideal-state::before,
  .bp3-non-ideal-state > *{
    margin-bottom:20px; }
  .bp3-non-ideal-state:empty::before,
  .bp3-non-ideal-state > :last-child{
    margin-bottom:0; }
  .bp3-non-ideal-state > *{
    max-width:400px; }

.bp3-non-ideal-state-visual{
  color:rgba(92, 112, 128, 0.6);
  font-size:60px; }
  .bp3-dark .bp3-non-ideal-state-visual{
    color:rgba(167, 182, 194, 0.6); }

.bp3-overflow-list{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -ms-flex-wrap:nowrap;
      flex-wrap:nowrap;
  min-width:0; }

.bp3-overflow-list-spacer{
  -ms-flex-negative:1;
      flex-shrink:1;
  width:1px; }

body.bp3-overlay-open{
  overflow:hidden; }

.bp3-overlay{
  position:static;
  top:0;
  right:0;
  bottom:0;
  left:0;
  z-index:20; }
  .bp3-overlay:not(.bp3-overlay-open){
    pointer-events:none; }
  .bp3-overlay.bp3-overlay-container{
    position:fixed;
    overflow:hidden; }
    .bp3-overlay.bp3-overlay-container.bp3-overlay-inline{
      position:absolute; }
  .bp3-overlay.bp3-overlay-scroll-container{
    position:fixed;
    overflow:auto; }
    .bp3-overlay.bp3-overlay-scroll-container.bp3-overlay-inline{
      position:absolute; }
  .bp3-overlay.bp3-overlay-inline{
    display:inline;
    overflow:visible; }

.bp3-overlay-content{
  position:fixed;
  z-index:20; }
  .bp3-overlay-inline .bp3-overlay-content,
  .bp3-overlay-scroll-container .bp3-overlay-content{
    position:absolute; }

.bp3-overlay-backdrop{
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  opacity:1;
  z-index:20;
  background-color:rgba(16, 22, 26, 0.7);
  overflow:auto;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-overlay-backdrop.bp3-overlay-enter, .bp3-overlay-backdrop.bp3-overlay-appear{
    opacity:0; }
  .bp3-overlay-backdrop.bp3-overlay-enter-active, .bp3-overlay-backdrop.bp3-overlay-appear-active{
    opacity:1;
    -webkit-transition-property:opacity;
    transition-property:opacity;
    -webkit-transition-duration:200ms;
            transition-duration:200ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-overlay-backdrop.bp3-overlay-exit{
    opacity:1; }
  .bp3-overlay-backdrop.bp3-overlay-exit-active{
    opacity:0;
    -webkit-transition-property:opacity;
    transition-property:opacity;
    -webkit-transition-duration:200ms;
            transition-duration:200ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-overlay-backdrop:focus{
    outline:none; }
  .bp3-overlay-inline .bp3-overlay-backdrop{
    position:absolute; }
.bp3-panel-stack{
  position:relative;
  overflow:hidden; }

.bp3-panel-stack-header{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -ms-flex-negative:0;
      flex-shrink:0;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  z-index:1;
  -webkit-box-shadow:0 1px rgba(16, 22, 26, 0.15);
          box-shadow:0 1px rgba(16, 22, 26, 0.15);
  height:30px; }
  .bp3-dark .bp3-panel-stack-header{
    -webkit-box-shadow:0 1px rgba(255, 255, 255, 0.15);
            box-shadow:0 1px rgba(255, 255, 255, 0.15); }
  .bp3-panel-stack-header > span{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-flex:1;
        -ms-flex:1;
            flex:1;
    -webkit-box-align:stretch;
        -ms-flex-align:stretch;
            align-items:stretch; }
  .bp3-panel-stack-header .bp3-heading{
    margin:0 5px; }

.bp3-button.bp3-panel-stack-header-back{
  margin-left:5px;
  padding-left:0;
  white-space:nowrap; }
  .bp3-button.bp3-panel-stack-header-back .bp3-icon{
    margin:0 2px; }

.bp3-panel-stack-view{
  position:absolute;
  top:0;
  right:0;
  bottom:0;
  left:0;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  margin-right:-1px;
  border-right:1px solid rgba(16, 22, 26, 0.15);
  background-color:#ffffff;
  overflow-y:auto; }
  .bp3-dark .bp3-panel-stack-view{
    background-color:#30404d; }

.bp3-panel-stack-push .bp3-panel-stack-enter, .bp3-panel-stack-push .bp3-panel-stack-appear{
  -webkit-transform:translateX(100%);
          transform:translateX(100%);
  opacity:0; }

.bp3-panel-stack-push .bp3-panel-stack-enter-active, .bp3-panel-stack-push .bp3-panel-stack-appear-active{
  -webkit-transform:translate(0%);
          transform:translate(0%);
  opacity:1;
  -webkit-transition-property:opacity, -webkit-transform;
  transition-property:opacity, -webkit-transform;
  transition-property:transform, opacity;
  transition-property:transform, opacity, -webkit-transform;
  -webkit-transition-duration:400ms;
          transition-duration:400ms;
  -webkit-transition-timing-function:ease;
          transition-timing-function:ease;
  -webkit-transition-delay:0;
          transition-delay:0; }

.bp3-panel-stack-push .bp3-panel-stack-exit{
  -webkit-transform:translate(0%);
          transform:translate(0%);
  opacity:1; }

.bp3-panel-stack-push .bp3-panel-stack-exit-active{
  -webkit-transform:translateX(-50%);
          transform:translateX(-50%);
  opacity:0;
  -webkit-transition-property:opacity, -webkit-transform;
  transition-property:opacity, -webkit-transform;
  transition-property:transform, opacity;
  transition-property:transform, opacity, -webkit-transform;
  -webkit-transition-duration:400ms;
          transition-duration:400ms;
  -webkit-transition-timing-function:ease;
          transition-timing-function:ease;
  -webkit-transition-delay:0;
          transition-delay:0; }

.bp3-panel-stack-pop .bp3-panel-stack-enter, .bp3-panel-stack-pop .bp3-panel-stack-appear{
  -webkit-transform:translateX(-50%);
          transform:translateX(-50%);
  opacity:0; }

.bp3-panel-stack-pop .bp3-panel-stack-enter-active, .bp3-panel-stack-pop .bp3-panel-stack-appear-active{
  -webkit-transform:translate(0%);
          transform:translate(0%);
  opacity:1;
  -webkit-transition-property:opacity, -webkit-transform;
  transition-property:opacity, -webkit-transform;
  transition-property:transform, opacity;
  transition-property:transform, opacity, -webkit-transform;
  -webkit-transition-duration:400ms;
          transition-duration:400ms;
  -webkit-transition-timing-function:ease;
          transition-timing-function:ease;
  -webkit-transition-delay:0;
          transition-delay:0; }

.bp3-panel-stack-pop .bp3-panel-stack-exit{
  -webkit-transform:translate(0%);
          transform:translate(0%);
  opacity:1; }

.bp3-panel-stack-pop .bp3-panel-stack-exit-active{
  -webkit-transform:translateX(100%);
          transform:translateX(100%);
  opacity:0;
  -webkit-transition-property:opacity, -webkit-transform;
  transition-property:opacity, -webkit-transform;
  transition-property:transform, opacity;
  transition-property:transform, opacity, -webkit-transform;
  -webkit-transition-duration:400ms;
          transition-duration:400ms;
  -webkit-transition-timing-function:ease;
          transition-timing-function:ease;
  -webkit-transition-delay:0;
          transition-delay:0; }
.bp3-popover{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
  -webkit-transform:scale(1);
          transform:scale(1);
  display:inline-block;
  z-index:20;
  border-radius:3px; }
  .bp3-popover .bp3-popover-arrow{
    position:absolute;
    width:30px;
    height:30px; }
    .bp3-popover .bp3-popover-arrow::before{
      margin:5px;
      width:20px;
      height:20px; }
  .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-popover{
    margin-top:-17px;
    margin-bottom:17px; }
    .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-popover > .bp3-popover-arrow{
      bottom:-11px; }
      .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-popover > .bp3-popover-arrow svg{
        -webkit-transform:rotate(-90deg);
                transform:rotate(-90deg); }
  .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-popover{
    margin-left:17px; }
    .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-popover > .bp3-popover-arrow{
      left:-11px; }
      .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-popover > .bp3-popover-arrow svg{
        -webkit-transform:rotate(0);
                transform:rotate(0); }
  .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-popover{
    margin-top:17px; }
    .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-popover > .bp3-popover-arrow{
      top:-11px; }
      .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-popover > .bp3-popover-arrow svg{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg); }
  .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-popover{
    margin-right:17px;
    margin-left:-17px; }
    .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-popover > .bp3-popover-arrow{
      right:-11px; }
      .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-popover > .bp3-popover-arrow svg{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg); }
  .bp3-tether-element-attached-middle > .bp3-popover > .bp3-popover-arrow{
    top:50%;
    -webkit-transform:translateY(-50%);
            transform:translateY(-50%); }
  .bp3-tether-element-attached-center > .bp3-popover > .bp3-popover-arrow{
    right:50%;
    -webkit-transform:translateX(50%);
            transform:translateX(50%); }
  .bp3-tether-element-attached-top.bp3-tether-target-attached-top > .bp3-popover > .bp3-popover-arrow{
    top:-0.3934px; }
  .bp3-tether-element-attached-right.bp3-tether-target-attached-right > .bp3-popover > .bp3-popover-arrow{
    right:-0.3934px; }
  .bp3-tether-element-attached-left.bp3-tether-target-attached-left > .bp3-popover > .bp3-popover-arrow{
    left:-0.3934px; }
  .bp3-tether-element-attached-bottom.bp3-tether-target-attached-bottom > .bp3-popover > .bp3-popover-arrow{
    bottom:-0.3934px; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-left > .bp3-popover{
    -webkit-transform-origin:top left;
            transform-origin:top left; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-center > .bp3-popover{
    -webkit-transform-origin:top center;
            transform-origin:top center; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-right > .bp3-popover{
    -webkit-transform-origin:top right;
            transform-origin:top right; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-left > .bp3-popover{
    -webkit-transform-origin:center left;
            transform-origin:center left; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-center > .bp3-popover{
    -webkit-transform-origin:center center;
            transform-origin:center center; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-right > .bp3-popover{
    -webkit-transform-origin:center right;
            transform-origin:center right; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-left > .bp3-popover{
    -webkit-transform-origin:bottom left;
            transform-origin:bottom left; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-center > .bp3-popover{
    -webkit-transform-origin:bottom center;
            transform-origin:bottom center; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-right > .bp3-popover{
    -webkit-transform-origin:bottom right;
            transform-origin:bottom right; }
  .bp3-popover .bp3-popover-content{
    background:#ffffff;
    color:inherit; }
  .bp3-popover .bp3-popover-arrow::before{
    -webkit-box-shadow:1px 1px 6px rgba(16, 22, 26, 0.2);
            box-shadow:1px 1px 6px rgba(16, 22, 26, 0.2); }
  .bp3-popover .bp3-popover-arrow-border{
    fill:#10161a;
    fill-opacity:0.1; }
  .bp3-popover .bp3-popover-arrow-fill{
    fill:#ffffff; }
  .bp3-popover-enter > .bp3-popover, .bp3-popover-appear > .bp3-popover{
    -webkit-transform:scale(0.3);
            transform:scale(0.3); }
  .bp3-popover-enter-active > .bp3-popover, .bp3-popover-appear-active > .bp3-popover{
    -webkit-transform:scale(1);
            transform:scale(1);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-popover-exit > .bp3-popover{
    -webkit-transform:scale(1);
            transform:scale(1); }
  .bp3-popover-exit-active > .bp3-popover{
    -webkit-transform:scale(0.3);
            transform:scale(0.3);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-popover .bp3-popover-content{
    position:relative;
    border-radius:3px; }
  .bp3-popover.bp3-popover-content-sizing .bp3-popover-content{
    max-width:350px;
    padding:20px; }
  .bp3-popover-target + .bp3-overlay .bp3-popover.bp3-popover-content-sizing{
    width:350px; }
  .bp3-popover.bp3-minimal{
    margin:0 !important; }
    .bp3-popover.bp3-minimal .bp3-popover-arrow{
      display:none; }
    .bp3-popover.bp3-minimal.bp3-popover{
      -webkit-transform:scale(1);
              transform:scale(1); }
      .bp3-popover-enter > .bp3-popover.bp3-minimal.bp3-popover, .bp3-popover-appear > .bp3-popover.bp3-minimal.bp3-popover{
        -webkit-transform:scale(1);
                transform:scale(1); }
      .bp3-popover-enter-active > .bp3-popover.bp3-minimal.bp3-popover, .bp3-popover-appear-active > .bp3-popover.bp3-minimal.bp3-popover{
        -webkit-transform:scale(1);
                transform:scale(1);
        -webkit-transition-property:-webkit-transform;
        transition-property:-webkit-transform;
        transition-property:transform;
        transition-property:transform, -webkit-transform;
        -webkit-transition-duration:100ms;
                transition-duration:100ms;
        -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
                transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
        -webkit-transition-delay:0;
                transition-delay:0; }
      .bp3-popover-exit > .bp3-popover.bp3-minimal.bp3-popover{
        -webkit-transform:scale(1);
                transform:scale(1); }
      .bp3-popover-exit-active > .bp3-popover.bp3-minimal.bp3-popover{
        -webkit-transform:scale(1);
                transform:scale(1);
        -webkit-transition-property:-webkit-transform;
        transition-property:-webkit-transform;
        transition-property:transform;
        transition-property:transform, -webkit-transform;
        -webkit-transition-duration:100ms;
                transition-duration:100ms;
        -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
                transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
        -webkit-transition-delay:0;
                transition-delay:0; }
  .bp3-popover.bp3-dark,
  .bp3-dark .bp3-popover{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4); }
    .bp3-popover.bp3-dark .bp3-popover-content,
    .bp3-dark .bp3-popover .bp3-popover-content{
      background:#30404d;
      color:inherit; }
    .bp3-popover.bp3-dark .bp3-popover-arrow::before,
    .bp3-dark .bp3-popover .bp3-popover-arrow::before{
      -webkit-box-shadow:1px 1px 6px rgba(16, 22, 26, 0.4);
              box-shadow:1px 1px 6px rgba(16, 22, 26, 0.4); }
    .bp3-popover.bp3-dark .bp3-popover-arrow-border,
    .bp3-dark .bp3-popover .bp3-popover-arrow-border{
      fill:#10161a;
      fill-opacity:0.2; }
    .bp3-popover.bp3-dark .bp3-popover-arrow-fill,
    .bp3-dark .bp3-popover .bp3-popover-arrow-fill{
      fill:#30404d; }

.bp3-popover-arrow::before{
  display:block;
  position:absolute;
  -webkit-transform:rotate(45deg);
          transform:rotate(45deg);
  border-radius:2px;
  content:""; }

.bp3-tether-pinned .bp3-popover-arrow{
  display:none; }

.bp3-popover-backdrop{
  background:rgba(255, 255, 255, 0); }

.bp3-transition-container{
  opacity:1;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  z-index:20; }
  .bp3-transition-container.bp3-popover-enter, .bp3-transition-container.bp3-popover-appear{
    opacity:0; }
  .bp3-transition-container.bp3-popover-enter-active, .bp3-transition-container.bp3-popover-appear-active{
    opacity:1;
    -webkit-transition-property:opacity;
    transition-property:opacity;
    -webkit-transition-duration:100ms;
            transition-duration:100ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-transition-container.bp3-popover-exit{
    opacity:1; }
  .bp3-transition-container.bp3-popover-exit-active{
    opacity:0;
    -webkit-transition-property:opacity;
    transition-property:opacity;
    -webkit-transition-duration:100ms;
            transition-duration:100ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-transition-container:focus{
    outline:none; }
  .bp3-transition-container.bp3-popover-leave .bp3-popover-content{
    pointer-events:none; }
  .bp3-transition-container[data-x-out-of-boundaries]{
    display:none; }

span.bp3-popover-target{
  display:inline-block; }

.bp3-popover-wrapper.bp3-fill{
  width:100%; }

.bp3-portal{
  position:absolute;
  top:0;
  right:0;
  left:0; }
@-webkit-keyframes linear-progress-bar-stripes{
  from{
    background-position:0 0; }
  to{
    background-position:30px 0; } }
@keyframes linear-progress-bar-stripes{
  from{
    background-position:0 0; }
  to{
    background-position:30px 0; } }

.bp3-progress-bar{
  display:block;
  position:relative;
  border-radius:40px;
  background:rgba(92, 112, 128, 0.2);
  width:100%;
  height:8px;
  overflow:hidden; }
  .bp3-progress-bar .bp3-progress-meter{
    position:absolute;
    border-radius:40px;
    background:linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%);
    background-color:rgba(92, 112, 128, 0.8);
    background-size:30px 30px;
    width:100%;
    height:100%;
    -webkit-transition:width 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:width 200ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-progress-bar:not(.bp3-no-animation):not(.bp3-no-stripes) .bp3-progress-meter{
    animation:linear-progress-bar-stripes 300ms linear infinite reverse; }
  .bp3-progress-bar.bp3-no-stripes .bp3-progress-meter{
    background-image:none; }

.bp3-dark .bp3-progress-bar{
  background:rgba(16, 22, 26, 0.5); }
  .bp3-dark .bp3-progress-bar .bp3-progress-meter{
    background-color:#8a9ba8; }

.bp3-progress-bar.bp3-intent-primary .bp3-progress-meter{
  background-color:#137cbd; }

.bp3-progress-bar.bp3-intent-success .bp3-progress-meter{
  background-color:#0f9960; }

.bp3-progress-bar.bp3-intent-warning .bp3-progress-meter{
  background-color:#d9822b; }

.bp3-progress-bar.bp3-intent-danger .bp3-progress-meter{
  background-color:#db3737; }
@-webkit-keyframes skeleton-glow{
  from{
    border-color:rgba(206, 217, 224, 0.2);
    background:rgba(206, 217, 224, 0.2); }
  to{
    border-color:rgba(92, 112, 128, 0.2);
    background:rgba(92, 112, 128, 0.2); } }
@keyframes skeleton-glow{
  from{
    border-color:rgba(206, 217, 224, 0.2);
    background:rgba(206, 217, 224, 0.2); }
  to{
    border-color:rgba(92, 112, 128, 0.2);
    background:rgba(92, 112, 128, 0.2); } }
.bp3-skeleton{
  border-color:rgba(206, 217, 224, 0.2) !important;
  border-radius:2px;
  -webkit-box-shadow:none !important;
          box-shadow:none !important;
  background:rgba(206, 217, 224, 0.2);
  background-clip:padding-box !important;
  cursor:default;
  color:transparent !important;
  -webkit-animation:1000ms linear infinite alternate skeleton-glow;
          animation:1000ms linear infinite alternate skeleton-glow;
  pointer-events:none;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-skeleton::before, .bp3-skeleton::after,
  .bp3-skeleton *{
    visibility:hidden !important; }
.bp3-slider{
  width:100%;
  min-width:150px;
  height:40px;
  position:relative;
  outline:none;
  cursor:default;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-slider:hover{
    cursor:pointer; }
  .bp3-slider:active{
    cursor:-webkit-grabbing;
    cursor:grabbing; }
  .bp3-slider.bp3-disabled{
    opacity:0.5;
    cursor:not-allowed; }
  .bp3-slider.bp3-slider-unlabeled{
    height:16px; }

.bp3-slider-track,
.bp3-slider-progress{
  top:5px;
  right:0;
  left:0;
  height:6px;
  position:absolute; }

.bp3-slider-track{
  border-radius:3px;
  overflow:hidden; }

.bp3-slider-progress{
  background:rgba(92, 112, 128, 0.2); }
  .bp3-dark .bp3-slider-progress{
    background:rgba(16, 22, 26, 0.5); }
  .bp3-slider-progress.bp3-intent-primary{
    background-color:#137cbd; }
  .bp3-slider-progress.bp3-intent-success{
    background-color:#0f9960; }
  .bp3-slider-progress.bp3-intent-warning{
    background-color:#d9822b; }
  .bp3-slider-progress.bp3-intent-danger{
    background-color:#db3737; }

.bp3-slider-handle{
  -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
          box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
  background-color:#f5f8fa;
  background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 0)));
  background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
  color:#182026;
  position:absolute;
  top:0;
  left:0;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
  cursor:pointer;
  width:16px;
  height:16px; }
  .bp3-slider-handle:hover{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-clip:padding-box;
    background-color:#ebf1f5; }
  .bp3-slider-handle:active, .bp3-slider-handle.bp3-active{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#d8e1e8;
    background-image:none; }
  .bp3-slider-handle:disabled, .bp3-slider-handle.bp3-disabled{
    outline:none;
    -webkit-box-shadow:none;
            box-shadow:none;
    background-color:rgba(206, 217, 224, 0.5);
    background-image:none;
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
    .bp3-slider-handle:disabled.bp3-active, .bp3-slider-handle:disabled.bp3-active:hover, .bp3-slider-handle.bp3-disabled.bp3-active, .bp3-slider-handle.bp3-disabled.bp3-active:hover{
      background:rgba(206, 217, 224, 0.7); }
  .bp3-slider-handle:focus{
    z-index:1; }
  .bp3-slider-handle:hover{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 -1px 0 rgba(16, 22, 26, 0.1);
    background-clip:padding-box;
    background-color:#ebf1f5;
    z-index:2;
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 1px 1px rgba(16, 22, 26, 0.2);
    cursor:-webkit-grab;
    cursor:grab; }
  .bp3-slider-handle.bp3-active{
    -webkit-box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
            box-shadow:inset 0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 2px rgba(16, 22, 26, 0.2);
    background-color:#d8e1e8;
    background-image:none;
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 1px rgba(16, 22, 26, 0.1);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), inset 0 1px 1px rgba(16, 22, 26, 0.1);
    cursor:-webkit-grabbing;
    cursor:grabbing; }
  .bp3-disabled .bp3-slider-handle{
    -webkit-box-shadow:none;
            box-shadow:none;
    background:#bfccd6;
    pointer-events:none; }
  .bp3-dark .bp3-slider-handle{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
    background-color:#394b59;
    background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)), to(rgba(255, 255, 255, 0)));
    background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0));
    color:#f5f8fa; }
    .bp3-dark .bp3-slider-handle:hover, .bp3-dark .bp3-slider-handle:active, .bp3-dark .bp3-slider-handle.bp3-active{
      color:#f5f8fa; }
    .bp3-dark .bp3-slider-handle:hover{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.4);
      background-color:#30404d; }
    .bp3-dark .bp3-slider-handle:active, .bp3-dark .bp3-slider-handle.bp3-active{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.6), inset 0 1px 2px rgba(16, 22, 26, 0.2);
      background-color:#202b33;
      background-image:none; }
    .bp3-dark .bp3-slider-handle:disabled, .bp3-dark .bp3-slider-handle.bp3-disabled{
      -webkit-box-shadow:none;
              box-shadow:none;
      background-color:rgba(57, 75, 89, 0.5);
      background-image:none;
      color:rgba(167, 182, 194, 0.6); }
      .bp3-dark .bp3-slider-handle:disabled.bp3-active, .bp3-dark .bp3-slider-handle.bp3-disabled.bp3-active{
        background:rgba(57, 75, 89, 0.7); }
    .bp3-dark .bp3-slider-handle .bp3-button-spinner .bp3-spinner-head{
      background:rgba(16, 22, 26, 0.5);
      stroke:#8a9ba8; }
    .bp3-dark .bp3-slider-handle, .bp3-dark .bp3-slider-handle:hover{
      background-color:#394b59; }
    .bp3-dark .bp3-slider-handle.bp3-active{
      background-color:#293742; }
  .bp3-dark .bp3-disabled .bp3-slider-handle{
    border-color:#5c7080;
    -webkit-box-shadow:none;
            box-shadow:none;
    background:#5c7080; }
  .bp3-slider-handle .bp3-slider-label{
    margin-left:8px;
    border-radius:3px;
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
    background:#394b59;
    color:#f5f8fa; }
    .bp3-dark .bp3-slider-handle .bp3-slider-label{
      -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
      background:#e1e8ed;
      color:#394b59; }
    .bp3-disabled .bp3-slider-handle .bp3-slider-label{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-slider-handle.bp3-start, .bp3-slider-handle.bp3-end{
    width:8px; }
  .bp3-slider-handle.bp3-start{
    border-top-right-radius:0;
    border-bottom-right-radius:0; }
  .bp3-slider-handle.bp3-end{
    margin-left:8px;
    border-top-left-radius:0;
    border-bottom-left-radius:0; }
    .bp3-slider-handle.bp3-end .bp3-slider-label{
      margin-left:0; }

.bp3-slider-label{
  -webkit-transform:translate(-50%, 20px);
          transform:translate(-50%, 20px);
  display:inline-block;
  position:absolute;
  padding:2px 5px;
  vertical-align:top;
  line-height:1;
  font-size:12px; }

.bp3-slider.bp3-vertical{
  width:40px;
  min-width:40px;
  height:150px; }
  .bp3-slider.bp3-vertical .bp3-slider-track,
  .bp3-slider.bp3-vertical .bp3-slider-progress{
    top:0;
    bottom:0;
    left:5px;
    width:6px;
    height:auto; }
  .bp3-slider.bp3-vertical .bp3-slider-progress{
    top:auto; }
  .bp3-slider.bp3-vertical .bp3-slider-label{
    -webkit-transform:translate(20px, 50%);
            transform:translate(20px, 50%); }
  .bp3-slider.bp3-vertical .bp3-slider-handle{
    top:auto; }
    .bp3-slider.bp3-vertical .bp3-slider-handle .bp3-slider-label{
      margin-top:-8px;
      margin-left:0; }
    .bp3-slider.bp3-vertical .bp3-slider-handle.bp3-end, .bp3-slider.bp3-vertical .bp3-slider-handle.bp3-start{
      margin-left:0;
      width:16px;
      height:8px; }
    .bp3-slider.bp3-vertical .bp3-slider-handle.bp3-start{
      border-top-left-radius:0;
      border-bottom-right-radius:3px; }
      .bp3-slider.bp3-vertical .bp3-slider-handle.bp3-start .bp3-slider-label{
        -webkit-transform:translate(20px);
                transform:translate(20px); }
    .bp3-slider.bp3-vertical .bp3-slider-handle.bp3-end{
      margin-bottom:8px;
      border-top-left-radius:3px;
      border-bottom-left-radius:0;
      border-bottom-right-radius:0; }

@-webkit-keyframes pt-spinner-animation{
  from{
    -webkit-transform:rotate(0deg);
            transform:rotate(0deg); }
  to{
    -webkit-transform:rotate(360deg);
            transform:rotate(360deg); } }

@keyframes pt-spinner-animation{
  from{
    -webkit-transform:rotate(0deg);
            transform:rotate(0deg); }
  to{
    -webkit-transform:rotate(360deg);
            transform:rotate(360deg); } }

.bp3-spinner{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  overflow:visible;
  vertical-align:middle; }
  .bp3-spinner svg{
    display:block; }
  .bp3-spinner path{
    fill-opacity:0; }
  .bp3-spinner .bp3-spinner-head{
    -webkit-transform-origin:center;
            transform-origin:center;
    -webkit-transition:stroke-dashoffset 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    transition:stroke-dashoffset 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
    stroke:rgba(92, 112, 128, 0.8);
    stroke-linecap:round; }
  .bp3-spinner .bp3-spinner-track{
    stroke:rgba(92, 112, 128, 0.2); }

.bp3-spinner-animation{
  -webkit-animation:pt-spinner-animation 500ms linear infinite;
          animation:pt-spinner-animation 500ms linear infinite; }
  .bp3-no-spin > .bp3-spinner-animation{
    -webkit-animation:none;
            animation:none; }

.bp3-dark .bp3-spinner .bp3-spinner-head{
  stroke:#8a9ba8; }

.bp3-dark .bp3-spinner .bp3-spinner-track{
  stroke:rgba(16, 22, 26, 0.5); }

.bp3-spinner.bp3-intent-primary .bp3-spinner-head{
  stroke:#137cbd; }

.bp3-spinner.bp3-intent-success .bp3-spinner-head{
  stroke:#0f9960; }

.bp3-spinner.bp3-intent-warning .bp3-spinner-head{
  stroke:#d9822b; }

.bp3-spinner.bp3-intent-danger .bp3-spinner-head{
  stroke:#db3737; }
.bp3-tabs.bp3-vertical{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex; }
  .bp3-tabs.bp3-vertical > .bp3-tab-list{
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
        -ms-flex-direction:column;
            flex-direction:column;
    -webkit-box-align:start;
        -ms-flex-align:start;
            align-items:flex-start; }
    .bp3-tabs.bp3-vertical > .bp3-tab-list .bp3-tab{
      border-radius:3px;
      width:100%;
      padding:0 10px; }
      .bp3-tabs.bp3-vertical > .bp3-tab-list .bp3-tab[aria-selected="true"]{
        -webkit-box-shadow:none;
                box-shadow:none;
        background-color:rgba(19, 124, 189, 0.2); }
    .bp3-tabs.bp3-vertical > .bp3-tab-list .bp3-tab-indicator-wrapper .bp3-tab-indicator{
      top:0;
      right:0;
      bottom:0;
      left:0;
      border-radius:3px;
      background-color:rgba(19, 124, 189, 0.2);
      height:auto; }
  .bp3-tabs.bp3-vertical > .bp3-tab-panel{
    margin-top:0;
    padding-left:20px; }

.bp3-tab-list{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  -webkit-box-align:end;
      -ms-flex-align:end;
          align-items:flex-end;
  position:relative;
  margin:0;
  border:none;
  padding:0;
  list-style:none; }
  .bp3-tab-list > *:not(:last-child){
    margin-right:20px; }

.bp3-tab{
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  word-wrap:normal;
  -webkit-box-flex:0;
      -ms-flex:0 0 auto;
          flex:0 0 auto;
  position:relative;
  cursor:pointer;
  max-width:100%;
  vertical-align:top;
  line-height:30px;
  color:#182026;
  font-size:14px; }
  .bp3-tab a{
    display:block;
    text-decoration:none;
    color:inherit; }
  .bp3-tab-indicator-wrapper ~ .bp3-tab{
    -webkit-box-shadow:none !important;
            box-shadow:none !important;
    background-color:transparent !important; }
  .bp3-tab[aria-disabled="true"]{
    cursor:not-allowed;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-tab[aria-selected="true"]{
    border-radius:0;
    -webkit-box-shadow:inset 0 -3px 0 #106ba3;
            box-shadow:inset 0 -3px 0 #106ba3; }
  .bp3-tab[aria-selected="true"], .bp3-tab:not([aria-disabled="true"]):hover{
    color:#106ba3; }
  .bp3-tab:focus{
    -moz-outline-radius:0; }
  .bp3-large > .bp3-tab{
    line-height:40px;
    font-size:16px; }

.bp3-tab-panel{
  margin-top:20px; }
  .bp3-tab-panel[aria-hidden="true"]{
    display:none; }

.bp3-tab-indicator-wrapper{
  position:absolute;
  top:0;
  left:0;
  -webkit-transform:translateX(0), translateY(0);
          transform:translateX(0), translateY(0);
  -webkit-transition:height, width, -webkit-transform;
  transition:height, width, -webkit-transform;
  transition:height, transform, width;
  transition:height, transform, width, -webkit-transform;
  -webkit-transition-duration:200ms;
          transition-duration:200ms;
  -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
          transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
  pointer-events:none; }
  .bp3-tab-indicator-wrapper .bp3-tab-indicator{
    position:absolute;
    right:0;
    bottom:0;
    left:0;
    background-color:#106ba3;
    height:3px; }
  .bp3-tab-indicator-wrapper.bp3-no-animation{
    -webkit-transition:none;
    transition:none; }

.bp3-dark .bp3-tab{
  color:#f5f8fa; }
  .bp3-dark .bp3-tab[aria-disabled="true"]{
    color:rgba(167, 182, 194, 0.6); }
  .bp3-dark .bp3-tab[aria-selected="true"]{
    -webkit-box-shadow:inset 0 -3px 0 #48aff0;
            box-shadow:inset 0 -3px 0 #48aff0; }
  .bp3-dark .bp3-tab[aria-selected="true"], .bp3-dark .bp3-tab:not([aria-disabled="true"]):hover{
    color:#48aff0; }

.bp3-dark .bp3-tab-indicator{
  background-color:#48aff0; }

.bp3-flex-expander{
  -webkit-box-flex:1;
      -ms-flex:1 1;
          flex:1 1; }
.bp3-tag{
  display:-webkit-inline-box;
  display:-ms-inline-flexbox;
  display:inline-flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  position:relative;
  border:none;
  border-radius:3px;
  -webkit-box-shadow:none;
          box-shadow:none;
  background-color:#5c7080;
  min-width:20px;
  max-width:100%;
  min-height:20px;
  padding:2px 6px;
  line-height:16px;
  color:#f5f8fa;
  font-size:12px; }
  .bp3-tag.bp3-interactive{
    cursor:pointer; }
    .bp3-tag.bp3-interactive:hover{
      background-color:rgba(92, 112, 128, 0.85); }
    .bp3-tag.bp3-interactive.bp3-active, .bp3-tag.bp3-interactive:active{
      background-color:rgba(92, 112, 128, 0.7); }
  .bp3-tag > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-tag > .bp3-fill{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-tag::before,
  .bp3-tag > *{
    margin-right:4px; }
  .bp3-tag:empty::before,
  .bp3-tag > :last-child{
    margin-right:0; }
  .bp3-tag:focus{
    outline:rgba(19, 124, 189, 0.6) auto 2px;
    outline-offset:0;
    -moz-outline-radius:6px; }
  .bp3-tag.bp3-round{
    border-radius:30px;
    padding-right:8px;
    padding-left:8px; }
  .bp3-dark .bp3-tag{
    background-color:#bfccd6;
    color:#182026; }
    .bp3-dark .bp3-tag.bp3-interactive{
      cursor:pointer; }
      .bp3-dark .bp3-tag.bp3-interactive:hover{
        background-color:rgba(191, 204, 214, 0.85); }
      .bp3-dark .bp3-tag.bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-interactive:active{
        background-color:rgba(191, 204, 214, 0.7); }
    .bp3-dark .bp3-tag > .bp3-icon, .bp3-dark .bp3-tag .bp3-icon-standard, .bp3-dark .bp3-tag .bp3-icon-large{
      fill:currentColor; }
  .bp3-tag > .bp3-icon, .bp3-tag .bp3-icon-standard, .bp3-tag .bp3-icon-large{
    fill:#ffffff; }
  .bp3-tag.bp3-large,
  .bp3-large .bp3-tag{
    min-width:30px;
    min-height:30px;
    padding:0 10px;
    line-height:20px;
    font-size:14px; }
    .bp3-tag.bp3-large::before,
    .bp3-tag.bp3-large > *,
    .bp3-large .bp3-tag::before,
    .bp3-large .bp3-tag > *{
      margin-right:7px; }
    .bp3-tag.bp3-large:empty::before,
    .bp3-tag.bp3-large > :last-child,
    .bp3-large .bp3-tag:empty::before,
    .bp3-large .bp3-tag > :last-child{
      margin-right:0; }
    .bp3-tag.bp3-large.bp3-round,
    .bp3-large .bp3-tag.bp3-round{
      padding-right:12px;
      padding-left:12px; }
  .bp3-tag.bp3-intent-primary{
    background:#137cbd;
    color:#ffffff; }
    .bp3-tag.bp3-intent-primary.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-intent-primary.bp3-interactive:hover{
        background-color:rgba(19, 124, 189, 0.85); }
      .bp3-tag.bp3-intent-primary.bp3-interactive.bp3-active, .bp3-tag.bp3-intent-primary.bp3-interactive:active{
        background-color:rgba(19, 124, 189, 0.7); }
  .bp3-tag.bp3-intent-success{
    background:#0f9960;
    color:#ffffff; }
    .bp3-tag.bp3-intent-success.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-intent-success.bp3-interactive:hover{
        background-color:rgba(15, 153, 96, 0.85); }
      .bp3-tag.bp3-intent-success.bp3-interactive.bp3-active, .bp3-tag.bp3-intent-success.bp3-interactive:active{
        background-color:rgba(15, 153, 96, 0.7); }
  .bp3-tag.bp3-intent-warning{
    background:#d9822b;
    color:#ffffff; }
    .bp3-tag.bp3-intent-warning.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-intent-warning.bp3-interactive:hover{
        background-color:rgba(217, 130, 43, 0.85); }
      .bp3-tag.bp3-intent-warning.bp3-interactive.bp3-active, .bp3-tag.bp3-intent-warning.bp3-interactive:active{
        background-color:rgba(217, 130, 43, 0.7); }
  .bp3-tag.bp3-intent-danger{
    background:#db3737;
    color:#ffffff; }
    .bp3-tag.bp3-intent-danger.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-intent-danger.bp3-interactive:hover{
        background-color:rgba(219, 55, 55, 0.85); }
      .bp3-tag.bp3-intent-danger.bp3-interactive.bp3-active, .bp3-tag.bp3-intent-danger.bp3-interactive:active{
        background-color:rgba(219, 55, 55, 0.7); }
  .bp3-tag.bp3-fill{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    width:100%; }
  .bp3-tag.bp3-minimal > .bp3-icon, .bp3-tag.bp3-minimal .bp3-icon-standard, .bp3-tag.bp3-minimal .bp3-icon-large{
    fill:#5c7080; }
  .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]){
    background-color:rgba(138, 155, 168, 0.2);
    color:#182026; }
    .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive:hover{
        background-color:rgba(92, 112, 128, 0.3); }
      .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive.bp3-active, .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive:active{
        background-color:rgba(92, 112, 128, 0.4); }
    .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]){
      color:#f5f8fa; }
      .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive{
        cursor:pointer; }
        .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive:hover{
          background-color:rgba(191, 204, 214, 0.3); }
        .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]).bp3-interactive:active{
          background-color:rgba(191, 204, 214, 0.4); }
      .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]) > .bp3-icon, .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]) .bp3-icon-standard, .bp3-dark .bp3-tag.bp3-minimal:not([class*="bp3-intent-"]) .bp3-icon-large{
        fill:#a7b6c2; }
  .bp3-tag.bp3-minimal.bp3-intent-primary{
    background-color:rgba(19, 124, 189, 0.15);
    color:#106ba3; }
    .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive:hover{
        background-color:rgba(19, 124, 189, 0.25); }
      .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive.bp3-active, .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive:active{
        background-color:rgba(19, 124, 189, 0.35); }
    .bp3-tag.bp3-minimal.bp3-intent-primary > .bp3-icon, .bp3-tag.bp3-minimal.bp3-intent-primary .bp3-icon-standard, .bp3-tag.bp3-minimal.bp3-intent-primary .bp3-icon-large{
      fill:#137cbd; }
    .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-primary{
      background-color:rgba(19, 124, 189, 0.25);
      color:#48aff0; }
      .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive{
        cursor:pointer; }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive:hover{
          background-color:rgba(19, 124, 189, 0.35); }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-primary.bp3-interactive:active{
          background-color:rgba(19, 124, 189, 0.45); }
  .bp3-tag.bp3-minimal.bp3-intent-success{
    background-color:rgba(15, 153, 96, 0.15);
    color:#0d8050; }
    .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive:hover{
        background-color:rgba(15, 153, 96, 0.25); }
      .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive.bp3-active, .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive:active{
        background-color:rgba(15, 153, 96, 0.35); }
    .bp3-tag.bp3-minimal.bp3-intent-success > .bp3-icon, .bp3-tag.bp3-minimal.bp3-intent-success .bp3-icon-standard, .bp3-tag.bp3-minimal.bp3-intent-success .bp3-icon-large{
      fill:#0f9960; }
    .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-success{
      background-color:rgba(15, 153, 96, 0.25);
      color:#3dcc91; }
      .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive{
        cursor:pointer; }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive:hover{
          background-color:rgba(15, 153, 96, 0.35); }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-success.bp3-interactive:active{
          background-color:rgba(15, 153, 96, 0.45); }
  .bp3-tag.bp3-minimal.bp3-intent-warning{
    background-color:rgba(217, 130, 43, 0.15);
    color:#bf7326; }
    .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive:hover{
        background-color:rgba(217, 130, 43, 0.25); }
      .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive.bp3-active, .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive:active{
        background-color:rgba(217, 130, 43, 0.35); }
    .bp3-tag.bp3-minimal.bp3-intent-warning > .bp3-icon, .bp3-tag.bp3-minimal.bp3-intent-warning .bp3-icon-standard, .bp3-tag.bp3-minimal.bp3-intent-warning .bp3-icon-large{
      fill:#d9822b; }
    .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-warning{
      background-color:rgba(217, 130, 43, 0.25);
      color:#ffb366; }
      .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive{
        cursor:pointer; }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive:hover{
          background-color:rgba(217, 130, 43, 0.35); }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-warning.bp3-interactive:active{
          background-color:rgba(217, 130, 43, 0.45); }
  .bp3-tag.bp3-minimal.bp3-intent-danger{
    background-color:rgba(219, 55, 55, 0.15);
    color:#c23030; }
    .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive{
      cursor:pointer; }
      .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive:hover{
        background-color:rgba(219, 55, 55, 0.25); }
      .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive.bp3-active, .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive:active{
        background-color:rgba(219, 55, 55, 0.35); }
    .bp3-tag.bp3-minimal.bp3-intent-danger > .bp3-icon, .bp3-tag.bp3-minimal.bp3-intent-danger .bp3-icon-standard, .bp3-tag.bp3-minimal.bp3-intent-danger .bp3-icon-large{
      fill:#db3737; }
    .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-danger{
      background-color:rgba(219, 55, 55, 0.25);
      color:#ff7373; }
      .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive{
        cursor:pointer; }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive:hover{
          background-color:rgba(219, 55, 55, 0.35); }
        .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive.bp3-active, .bp3-dark .bp3-tag.bp3-minimal.bp3-intent-danger.bp3-interactive:active{
          background-color:rgba(219, 55, 55, 0.45); }

.bp3-tag-remove{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  opacity:0.5;
  margin-top:-2px;
  margin-right:-6px !important;
  margin-bottom:-2px;
  border:none;
  background:none;
  cursor:pointer;
  padding:2px;
  padding-left:0;
  color:inherit; }
  .bp3-tag-remove:hover{
    opacity:0.8;
    background:none;
    text-decoration:none; }
  .bp3-tag-remove:active{
    opacity:1; }
  .bp3-tag-remove:empty::before{
    line-height:1;
    font-family:"Icons16", sans-serif;
    font-size:16px;
    font-weight:400;
    font-style:normal;
    -moz-osx-font-smoothing:grayscale;
    -webkit-font-smoothing:antialiased;
    content:""; }
  .bp3-large .bp3-tag-remove{
    margin-right:-10px !important;
    padding:5px;
    padding-left:0; }
    .bp3-large .bp3-tag-remove:empty::before{
      line-height:1;
      font-family:"Icons20", sans-serif;
      font-size:20px;
      font-weight:400;
      font-style:normal; }
.bp3-tag-input{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:horizontal;
  -webkit-box-direction:normal;
      -ms-flex-direction:row;
          flex-direction:row;
  -webkit-box-align:start;
      -ms-flex-align:start;
          align-items:flex-start;
  cursor:text;
  height:auto;
  min-height:30px;
  padding-right:0;
  padding-left:5px;
  line-height:inherit; }
  .bp3-tag-input > *{
    -webkit-box-flex:0;
        -ms-flex-positive:0;
            flex-grow:0;
    -ms-flex-negative:0;
        flex-shrink:0; }
  .bp3-tag-input > .bp3-tag-input-values{
    -webkit-box-flex:1;
        -ms-flex-positive:1;
            flex-grow:1;
    -ms-flex-negative:1;
        flex-shrink:1; }
  .bp3-tag-input .bp3-tag-input-icon{
    margin-top:7px;
    margin-right:7px;
    margin-left:2px;
    color:#5c7080; }
  .bp3-tag-input .bp3-tag-input-values{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient:horizontal;
    -webkit-box-direction:normal;
        -ms-flex-direction:row;
            flex-direction:row;
    -ms-flex-wrap:wrap;
        flex-wrap:wrap;
    -webkit-box-align:center;
        -ms-flex-align:center;
            align-items:center;
    -ms-flex-item-align:stretch;
        align-self:stretch;
    margin-top:5px;
    margin-right:7px;
    min-width:0; }
    .bp3-tag-input .bp3-tag-input-values > *{
      -webkit-box-flex:0;
          -ms-flex-positive:0;
              flex-grow:0;
      -ms-flex-negative:0;
          flex-shrink:0; }
    .bp3-tag-input .bp3-tag-input-values > .bp3-fill{
      -webkit-box-flex:1;
          -ms-flex-positive:1;
              flex-grow:1;
      -ms-flex-negative:1;
          flex-shrink:1; }
    .bp3-tag-input .bp3-tag-input-values::before,
    .bp3-tag-input .bp3-tag-input-values > *{
      margin-right:5px; }
    .bp3-tag-input .bp3-tag-input-values:empty::before,
    .bp3-tag-input .bp3-tag-input-values > :last-child{
      margin-right:0; }
    .bp3-tag-input .bp3-tag-input-values:first-child .bp3-input-ghost:first-child{
      padding-left:5px; }
    .bp3-tag-input .bp3-tag-input-values > *{
      margin-bottom:5px; }
  .bp3-tag-input .bp3-tag{
    overflow-wrap:break-word; }
    .bp3-tag-input .bp3-tag.bp3-active{
      outline:rgba(19, 124, 189, 0.6) auto 2px;
      outline-offset:0;
      -moz-outline-radius:6px; }
  .bp3-tag-input .bp3-input-ghost{
    -webkit-box-flex:1;
        -ms-flex:1 1 auto;
            flex:1 1 auto;
    width:80px;
    line-height:20px; }
    .bp3-tag-input .bp3-input-ghost:disabled, .bp3-tag-input .bp3-input-ghost.bp3-disabled{
      cursor:not-allowed; }
  .bp3-tag-input .bp3-button,
  .bp3-tag-input .bp3-spinner{
    margin:3px;
    margin-left:0; }
  .bp3-tag-input .bp3-button{
    min-width:24px;
    min-height:24px;
    padding:0 7px; }
  .bp3-tag-input.bp3-large{
    height:auto;
    min-height:40px; }
    .bp3-tag-input.bp3-large::before,
    .bp3-tag-input.bp3-large > *{
      margin-right:10px; }
    .bp3-tag-input.bp3-large:empty::before,
    .bp3-tag-input.bp3-large > :last-child{
      margin-right:0; }
    .bp3-tag-input.bp3-large .bp3-tag-input-icon{
      margin-top:10px;
      margin-left:5px; }
    .bp3-tag-input.bp3-large .bp3-input-ghost{
      line-height:30px; }
    .bp3-tag-input.bp3-large .bp3-button{
      min-width:30px;
      min-height:30px;
      padding:5px 10px;
      margin:5px;
      margin-left:0; }
    .bp3-tag-input.bp3-large .bp3-spinner{
      margin:8px;
      margin-left:0; }
  .bp3-tag-input.bp3-active{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
    background-color:#ffffff; }
    .bp3-tag-input.bp3-active.bp3-intent-primary{
      -webkit-box-shadow:0 0 0 1px #106ba3, 0 0 0 3px rgba(16, 107, 163, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #106ba3, 0 0 0 3px rgba(16, 107, 163, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-tag-input.bp3-active.bp3-intent-success{
      -webkit-box-shadow:0 0 0 1px #0d8050, 0 0 0 3px rgba(13, 128, 80, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #0d8050, 0 0 0 3px rgba(13, 128, 80, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-tag-input.bp3-active.bp3-intent-warning{
      -webkit-box-shadow:0 0 0 1px #bf7326, 0 0 0 3px rgba(191, 115, 38, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #bf7326, 0 0 0 3px rgba(191, 115, 38, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
    .bp3-tag-input.bp3-active.bp3-intent-danger{
      -webkit-box-shadow:0 0 0 1px #c23030, 0 0 0 3px rgba(194, 48, 48, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2);
              box-shadow:0 0 0 1px #c23030, 0 0 0 3px rgba(194, 48, 48, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.2); }
  .bp3-dark .bp3-tag-input .bp3-tag-input-icon, .bp3-tag-input.bp3-dark .bp3-tag-input-icon{
    color:#a7b6c2; }
  .bp3-dark .bp3-tag-input .bp3-input-ghost, .bp3-tag-input.bp3-dark .bp3-input-ghost{
    color:#f5f8fa; }
    .bp3-dark .bp3-tag-input .bp3-input-ghost::-webkit-input-placeholder, .bp3-tag-input.bp3-dark .bp3-input-ghost::-webkit-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-tag-input .bp3-input-ghost::-moz-placeholder, .bp3-tag-input.bp3-dark .bp3-input-ghost::-moz-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-tag-input .bp3-input-ghost:-ms-input-placeholder, .bp3-tag-input.bp3-dark .bp3-input-ghost:-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-tag-input .bp3-input-ghost::-ms-input-placeholder, .bp3-tag-input.bp3-dark .bp3-input-ghost::-ms-input-placeholder{
      color:rgba(167, 182, 194, 0.6); }
    .bp3-dark .bp3-tag-input .bp3-input-ghost::placeholder, .bp3-tag-input.bp3-dark .bp3-input-ghost::placeholder{
      color:rgba(167, 182, 194, 0.6); }
  .bp3-dark .bp3-tag-input.bp3-active, .bp3-tag-input.bp3-dark.bp3-active{
    -webkit-box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px #137cbd, 0 0 0 1px #137cbd, 0 0 0 3px rgba(19, 124, 189, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
    background-color:rgba(16, 22, 26, 0.3); }
    .bp3-dark .bp3-tag-input.bp3-active.bp3-intent-primary, .bp3-tag-input.bp3-dark.bp3-active.bp3-intent-primary{
      -webkit-box-shadow:0 0 0 1px #106ba3, 0 0 0 3px rgba(16, 107, 163, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #106ba3, 0 0 0 3px rgba(16, 107, 163, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-tag-input.bp3-active.bp3-intent-success, .bp3-tag-input.bp3-dark.bp3-active.bp3-intent-success{
      -webkit-box-shadow:0 0 0 1px #0d8050, 0 0 0 3px rgba(13, 128, 80, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #0d8050, 0 0 0 3px rgba(13, 128, 80, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-tag-input.bp3-active.bp3-intent-warning, .bp3-tag-input.bp3-dark.bp3-active.bp3-intent-warning{
      -webkit-box-shadow:0 0 0 1px #bf7326, 0 0 0 3px rgba(191, 115, 38, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #bf7326, 0 0 0 3px rgba(191, 115, 38, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }
    .bp3-dark .bp3-tag-input.bp3-active.bp3-intent-danger, .bp3-tag-input.bp3-dark.bp3-active.bp3-intent-danger{
      -webkit-box-shadow:0 0 0 1px #c23030, 0 0 0 3px rgba(194, 48, 48, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4);
              box-shadow:0 0 0 1px #c23030, 0 0 0 3px rgba(194, 48, 48, 0.3), inset 0 0 0 1px rgba(16, 22, 26, 0.3), inset 0 1px 1px rgba(16, 22, 26, 0.4); }

.bp3-input-ghost{
  border:none;
  -webkit-box-shadow:none;
          box-shadow:none;
  background:none;
  padding:0; }
  .bp3-input-ghost::-webkit-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input-ghost::-moz-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input-ghost:-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input-ghost::-ms-input-placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input-ghost::placeholder{
    opacity:1;
    color:rgba(92, 112, 128, 0.6); }
  .bp3-input-ghost:focus{
    outline:none !important; }
.bp3-toast{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:start;
      -ms-flex-align:start;
          align-items:flex-start;
  position:relative !important;
  margin:20px 0 0;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
  background-color:#ffffff;
  min-width:300px;
  max-width:500px;
  pointer-events:all; }
  .bp3-toast.bp3-toast-enter, .bp3-toast.bp3-toast-appear{
    -webkit-transform:translateY(-40px);
            transform:translateY(-40px); }
  .bp3-toast.bp3-toast-enter-active, .bp3-toast.bp3-toast-appear-active{
    -webkit-transform:translateY(0);
            transform:translateY(0);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-toast.bp3-toast-enter ~ .bp3-toast, .bp3-toast.bp3-toast-appear ~ .bp3-toast{
    -webkit-transform:translateY(-40px);
            transform:translateY(-40px); }
  .bp3-toast.bp3-toast-enter-active ~ .bp3-toast, .bp3-toast.bp3-toast-appear-active ~ .bp3-toast{
    -webkit-transform:translateY(0);
            transform:translateY(0);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
            transition-timing-function:cubic-bezier(0.54, 1.12, 0.38, 1.11);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-toast.bp3-toast-exit{
    opacity:1;
    -webkit-filter:blur(0);
            filter:blur(0); }
  .bp3-toast.bp3-toast-exit-active{
    opacity:0;
    -webkit-filter:blur(10px);
            filter:blur(10px);
    -webkit-transition-property:opacity, -webkit-filter;
    transition-property:opacity, -webkit-filter;
    transition-property:opacity, filter;
    transition-property:opacity, filter, -webkit-filter;
    -webkit-transition-duration:300ms;
            transition-duration:300ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-toast.bp3-toast-exit ~ .bp3-toast{
    -webkit-transform:translateY(0);
            transform:translateY(0); }
  .bp3-toast.bp3-toast-exit-active ~ .bp3-toast{
    -webkit-transform:translateY(-40px);
            transform:translateY(-40px);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:100ms;
            transition-duration:100ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:50ms;
            transition-delay:50ms; }
  .bp3-toast .bp3-button-group{
    -webkit-box-flex:0;
        -ms-flex:0 0 auto;
            flex:0 0 auto;
    padding:5px;
    padding-left:0; }
  .bp3-toast > .bp3-icon{
    margin:12px;
    margin-right:0;
    color:#5c7080; }
  .bp3-toast.bp3-dark,
  .bp3-dark .bp3-toast{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
    background-color:#394b59; }
    .bp3-toast.bp3-dark > .bp3-icon,
    .bp3-dark .bp3-toast > .bp3-icon{
      color:#a7b6c2; }
  .bp3-toast[class*="bp3-intent-"] a{
    color:rgba(255, 255, 255, 0.7); }
    .bp3-toast[class*="bp3-intent-"] a:hover{
      color:#ffffff; }
  .bp3-toast[class*="bp3-intent-"] > .bp3-icon{
    color:#ffffff; }
  .bp3-toast[class*="bp3-intent-"] .bp3-button, .bp3-toast[class*="bp3-intent-"] .bp3-button::before,
  .bp3-toast[class*="bp3-intent-"] .bp3-button .bp3-icon, .bp3-toast[class*="bp3-intent-"] .bp3-button:active{
    color:rgba(255, 255, 255, 0.7) !important; }
  .bp3-toast[class*="bp3-intent-"] .bp3-button:focus{
    outline-color:rgba(255, 255, 255, 0.5); }
  .bp3-toast[class*="bp3-intent-"] .bp3-button:hover{
    background-color:rgba(255, 255, 255, 0.15) !important;
    color:#ffffff !important; }
  .bp3-toast[class*="bp3-intent-"] .bp3-button:active{
    background-color:rgba(255, 255, 255, 0.3) !important;
    color:#ffffff !important; }
  .bp3-toast[class*="bp3-intent-"] .bp3-button::after{
    background:rgba(255, 255, 255, 0.3) !important; }
  .bp3-toast.bp3-intent-primary{
    background-color:#137cbd;
    color:#ffffff; }
  .bp3-toast.bp3-intent-success{
    background-color:#0f9960;
    color:#ffffff; }
  .bp3-toast.bp3-intent-warning{
    background-color:#d9822b;
    color:#ffffff; }
  .bp3-toast.bp3-intent-danger{
    background-color:#db3737;
    color:#ffffff; }

.bp3-toast-message{
  -webkit-box-flex:1;
      -ms-flex:1 1 auto;
          flex:1 1 auto;
  padding:11px;
  word-break:break-word; }

.bp3-toast-container{
  display:-webkit-box !important;
  display:-ms-flexbox !important;
  display:flex !important;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
      -ms-flex-direction:column;
          flex-direction:column;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  position:fixed;
  right:0;
  left:0;
  z-index:40;
  overflow:hidden;
  padding:0 20px 20px;
  pointer-events:none; }
  .bp3-toast-container.bp3-toast-container-top{
    top:0;
    bottom:auto; }
  .bp3-toast-container.bp3-toast-container-bottom{
    -webkit-box-orient:vertical;
    -webkit-box-direction:reverse;
        -ms-flex-direction:column-reverse;
            flex-direction:column-reverse;
    top:auto;
    bottom:0; }
  .bp3-toast-container.bp3-toast-container-left{
    -webkit-box-align:start;
        -ms-flex-align:start;
            align-items:flex-start; }
  .bp3-toast-container.bp3-toast-container-right{
    -webkit-box-align:end;
        -ms-flex-align:end;
            align-items:flex-end; }

.bp3-toast-container-bottom .bp3-toast.bp3-toast-enter:not(.bp3-toast-enter-active),
.bp3-toast-container-bottom .bp3-toast.bp3-toast-enter:not(.bp3-toast-enter-active) ~ .bp3-toast, .bp3-toast-container-bottom .bp3-toast.bp3-toast-appear:not(.bp3-toast-appear-active),
.bp3-toast-container-bottom .bp3-toast.bp3-toast-appear:not(.bp3-toast-appear-active) ~ .bp3-toast,
.bp3-toast-container-bottom .bp3-toast.bp3-toast-leave-active ~ .bp3-toast{
  -webkit-transform:translateY(60px);
          transform:translateY(60px); }
.bp3-tooltip{
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 2px 4px rgba(16, 22, 26, 0.2), 0 8px 24px rgba(16, 22, 26, 0.2);
  -webkit-transform:scale(1);
          transform:scale(1); }
  .bp3-tooltip .bp3-popover-arrow{
    position:absolute;
    width:22px;
    height:22px; }
    .bp3-tooltip .bp3-popover-arrow::before{
      margin:4px;
      width:14px;
      height:14px; }
  .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-tooltip{
    margin-top:-11px;
    margin-bottom:11px; }
    .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-tooltip > .bp3-popover-arrow{
      bottom:-8px; }
      .bp3-tether-element-attached-bottom.bp3-tether-target-attached-top > .bp3-tooltip > .bp3-popover-arrow svg{
        -webkit-transform:rotate(-90deg);
                transform:rotate(-90deg); }
  .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-tooltip{
    margin-left:11px; }
    .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-tooltip > .bp3-popover-arrow{
      left:-8px; }
      .bp3-tether-element-attached-left.bp3-tether-target-attached-right > .bp3-tooltip > .bp3-popover-arrow svg{
        -webkit-transform:rotate(0);
                transform:rotate(0); }
  .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-tooltip{
    margin-top:11px; }
    .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-tooltip > .bp3-popover-arrow{
      top:-8px; }
      .bp3-tether-element-attached-top.bp3-tether-target-attached-bottom > .bp3-tooltip > .bp3-popover-arrow svg{
        -webkit-transform:rotate(90deg);
                transform:rotate(90deg); }
  .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-tooltip{
    margin-right:11px;
    margin-left:-11px; }
    .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-tooltip > .bp3-popover-arrow{
      right:-8px; }
      .bp3-tether-element-attached-right.bp3-tether-target-attached-left > .bp3-tooltip > .bp3-popover-arrow svg{
        -webkit-transform:rotate(180deg);
                transform:rotate(180deg); }
  .bp3-tether-element-attached-middle > .bp3-tooltip > .bp3-popover-arrow{
    top:50%;
    -webkit-transform:translateY(-50%);
            transform:translateY(-50%); }
  .bp3-tether-element-attached-center > .bp3-tooltip > .bp3-popover-arrow{
    right:50%;
    -webkit-transform:translateX(50%);
            transform:translateX(50%); }
  .bp3-tether-element-attached-top.bp3-tether-target-attached-top > .bp3-tooltip > .bp3-popover-arrow{
    top:-0.22183px; }
  .bp3-tether-element-attached-right.bp3-tether-target-attached-right > .bp3-tooltip > .bp3-popover-arrow{
    right:-0.22183px; }
  .bp3-tether-element-attached-left.bp3-tether-target-attached-left > .bp3-tooltip > .bp3-popover-arrow{
    left:-0.22183px; }
  .bp3-tether-element-attached-bottom.bp3-tether-target-attached-bottom > .bp3-tooltip > .bp3-popover-arrow{
    bottom:-0.22183px; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-left > .bp3-tooltip{
    -webkit-transform-origin:top left;
            transform-origin:top left; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-center > .bp3-tooltip{
    -webkit-transform-origin:top center;
            transform-origin:top center; }
  .bp3-tether-element-attached-top.bp3-tether-element-attached-right > .bp3-tooltip{
    -webkit-transform-origin:top right;
            transform-origin:top right; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-left > .bp3-tooltip{
    -webkit-transform-origin:center left;
            transform-origin:center left; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-center > .bp3-tooltip{
    -webkit-transform-origin:center center;
            transform-origin:center center; }
  .bp3-tether-element-attached-middle.bp3-tether-element-attached-right > .bp3-tooltip{
    -webkit-transform-origin:center right;
            transform-origin:center right; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-left > .bp3-tooltip{
    -webkit-transform-origin:bottom left;
            transform-origin:bottom left; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-center > .bp3-tooltip{
    -webkit-transform-origin:bottom center;
            transform-origin:bottom center; }
  .bp3-tether-element-attached-bottom.bp3-tether-element-attached-right > .bp3-tooltip{
    -webkit-transform-origin:bottom right;
            transform-origin:bottom right; }
  .bp3-tooltip .bp3-popover-content{
    background:#394b59;
    color:#f5f8fa; }
  .bp3-tooltip .bp3-popover-arrow::before{
    -webkit-box-shadow:1px 1px 6px rgba(16, 22, 26, 0.2);
            box-shadow:1px 1px 6px rgba(16, 22, 26, 0.2); }
  .bp3-tooltip .bp3-popover-arrow-border{
    fill:#10161a;
    fill-opacity:0.1; }
  .bp3-tooltip .bp3-popover-arrow-fill{
    fill:#394b59; }
  .bp3-popover-enter > .bp3-tooltip, .bp3-popover-appear > .bp3-tooltip{
    -webkit-transform:scale(0.8);
            transform:scale(0.8); }
  .bp3-popover-enter-active > .bp3-tooltip, .bp3-popover-appear-active > .bp3-tooltip{
    -webkit-transform:scale(1);
            transform:scale(1);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:100ms;
            transition-duration:100ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-popover-exit > .bp3-tooltip{
    -webkit-transform:scale(1);
            transform:scale(1); }
  .bp3-popover-exit-active > .bp3-tooltip{
    -webkit-transform:scale(0.8);
            transform:scale(0.8);
    -webkit-transition-property:-webkit-transform;
    transition-property:-webkit-transform;
    transition-property:transform;
    transition-property:transform, -webkit-transform;
    -webkit-transition-duration:100ms;
            transition-duration:100ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-tooltip .bp3-popover-content{
    padding:10px 12px; }
  .bp3-tooltip.bp3-dark,
  .bp3-dark .bp3-tooltip{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 2px 4px rgba(16, 22, 26, 0.4), 0 8px 24px rgba(16, 22, 26, 0.4); }
    .bp3-tooltip.bp3-dark .bp3-popover-content,
    .bp3-dark .bp3-tooltip .bp3-popover-content{
      background:#e1e8ed;
      color:#394b59; }
    .bp3-tooltip.bp3-dark .bp3-popover-arrow::before,
    .bp3-dark .bp3-tooltip .bp3-popover-arrow::before{
      -webkit-box-shadow:1px 1px 6px rgba(16, 22, 26, 0.4);
              box-shadow:1px 1px 6px rgba(16, 22, 26, 0.4); }
    .bp3-tooltip.bp3-dark .bp3-popover-arrow-border,
    .bp3-dark .bp3-tooltip .bp3-popover-arrow-border{
      fill:#10161a;
      fill-opacity:0.2; }
    .bp3-tooltip.bp3-dark .bp3-popover-arrow-fill,
    .bp3-dark .bp3-tooltip .bp3-popover-arrow-fill{
      fill:#e1e8ed; }
  .bp3-tooltip.bp3-intent-primary .bp3-popover-content{
    background:#137cbd;
    color:#ffffff; }
  .bp3-tooltip.bp3-intent-primary .bp3-popover-arrow-fill{
    fill:#137cbd; }
  .bp3-tooltip.bp3-intent-success .bp3-popover-content{
    background:#0f9960;
    color:#ffffff; }
  .bp3-tooltip.bp3-intent-success .bp3-popover-arrow-fill{
    fill:#0f9960; }
  .bp3-tooltip.bp3-intent-warning .bp3-popover-content{
    background:#d9822b;
    color:#ffffff; }
  .bp3-tooltip.bp3-intent-warning .bp3-popover-arrow-fill{
    fill:#d9822b; }
  .bp3-tooltip.bp3-intent-danger .bp3-popover-content{
    background:#db3737;
    color:#ffffff; }
  .bp3-tooltip.bp3-intent-danger .bp3-popover-arrow-fill{
    fill:#db3737; }

.bp3-tooltip-indicator{
  border-bottom:dotted 1px;
  cursor:help; }
.bp3-tree .bp3-icon, .bp3-tree .bp3-icon-standard, .bp3-tree .bp3-icon-large{
  color:#5c7080; }
  .bp3-tree .bp3-icon.bp3-intent-primary, .bp3-tree .bp3-icon-standard.bp3-intent-primary, .bp3-tree .bp3-icon-large.bp3-intent-primary{
    color:#137cbd; }
  .bp3-tree .bp3-icon.bp3-intent-success, .bp3-tree .bp3-icon-standard.bp3-intent-success, .bp3-tree .bp3-icon-large.bp3-intent-success{
    color:#0f9960; }
  .bp3-tree .bp3-icon.bp3-intent-warning, .bp3-tree .bp3-icon-standard.bp3-intent-warning, .bp3-tree .bp3-icon-large.bp3-intent-warning{
    color:#d9822b; }
  .bp3-tree .bp3-icon.bp3-intent-danger, .bp3-tree .bp3-icon-standard.bp3-intent-danger, .bp3-tree .bp3-icon-large.bp3-intent-danger{
    color:#db3737; }

.bp3-tree-node-list{
  margin:0;
  padding-left:0;
  list-style:none; }

.bp3-tree-root{
  position:relative;
  background-color:transparent;
  cursor:default;
  padding-left:0; }

.bp3-tree-node-content-0{
  padding-left:0px; }

.bp3-tree-node-content-1{
  padding-left:23px; }

.bp3-tree-node-content-2{
  padding-left:46px; }

.bp3-tree-node-content-3{
  padding-left:69px; }

.bp3-tree-node-content-4{
  padding-left:92px; }

.bp3-tree-node-content-5{
  padding-left:115px; }

.bp3-tree-node-content-6{
  padding-left:138px; }

.bp3-tree-node-content-7{
  padding-left:161px; }

.bp3-tree-node-content-8{
  padding-left:184px; }

.bp3-tree-node-content-9{
  padding-left:207px; }

.bp3-tree-node-content-10{
  padding-left:230px; }

.bp3-tree-node-content-11{
  padding-left:253px; }

.bp3-tree-node-content-12{
  padding-left:276px; }

.bp3-tree-node-content-13{
  padding-left:299px; }

.bp3-tree-node-content-14{
  padding-left:322px; }

.bp3-tree-node-content-15{
  padding-left:345px; }

.bp3-tree-node-content-16{
  padding-left:368px; }

.bp3-tree-node-content-17{
  padding-left:391px; }

.bp3-tree-node-content-18{
  padding-left:414px; }

.bp3-tree-node-content-19{
  padding-left:437px; }

.bp3-tree-node-content-20{
  padding-left:460px; }

.bp3-tree-node-content{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  width:100%;
  height:30px;
  padding-right:5px; }
  .bp3-tree-node-content:hover{
    background-color:rgba(191, 204, 214, 0.4); }

.bp3-tree-node-caret,
.bp3-tree-node-caret-none{
  min-width:30px; }

.bp3-tree-node-caret{
  color:#5c7080;
  -webkit-transform:rotate(0deg);
          transform:rotate(0deg);
  cursor:pointer;
  padding:7px;
  -webkit-transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:-webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9);
  transition:transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9), -webkit-transform 200ms cubic-bezier(0.4, 1, 0.75, 0.9); }
  .bp3-tree-node-caret:hover{
    color:#182026; }
  .bp3-dark .bp3-tree-node-caret{
    color:#a7b6c2; }
    .bp3-dark .bp3-tree-node-caret:hover{
      color:#f5f8fa; }
  .bp3-tree-node-caret.bp3-tree-node-caret-open{
    -webkit-transform:rotate(90deg);
            transform:rotate(90deg); }
  .bp3-tree-node-caret.bp3-icon-standard::before{
    content:""; }

.bp3-tree-node-icon{
  position:relative;
  margin-right:7px; }

.bp3-tree-node-label{
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  word-wrap:normal;
  -webkit-box-flex:1;
      -ms-flex:1 1 auto;
          flex:1 1 auto;
  position:relative;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-tree-node-label span{
    display:inline; }

.bp3-tree-node-secondary-label{
  padding:0 5px;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none; }
  .bp3-tree-node-secondary-label .bp3-popover-wrapper,
  .bp3-tree-node-secondary-label .bp3-popover-target{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-align:center;
        -ms-flex-align:center;
            align-items:center; }

.bp3-tree-node.bp3-disabled .bp3-tree-node-content{
  background-color:inherit;
  cursor:not-allowed;
  color:rgba(92, 112, 128, 0.6); }

.bp3-tree-node.bp3-disabled .bp3-tree-node-caret,
.bp3-tree-node.bp3-disabled .bp3-tree-node-icon{
  cursor:not-allowed;
  color:rgba(92, 112, 128, 0.6); }

.bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content{
  background-color:#137cbd; }
  .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content,
  .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content .bp3-icon, .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content .bp3-icon-standard, .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content .bp3-icon-large{
    color:#ffffff; }
  .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content .bp3-tree-node-caret::before{
    color:rgba(255, 255, 255, 0.7); }
  .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content .bp3-tree-node-caret:hover::before{
    color:#ffffff; }

.bp3-dark .bp3-tree-node-content:hover{
  background-color:rgba(92, 112, 128, 0.3); }

.bp3-dark .bp3-tree .bp3-icon, .bp3-dark .bp3-tree .bp3-icon-standard, .bp3-dark .bp3-tree .bp3-icon-large{
  color:#a7b6c2; }
  .bp3-dark .bp3-tree .bp3-icon.bp3-intent-primary, .bp3-dark .bp3-tree .bp3-icon-standard.bp3-intent-primary, .bp3-dark .bp3-tree .bp3-icon-large.bp3-intent-primary{
    color:#137cbd; }
  .bp3-dark .bp3-tree .bp3-icon.bp3-intent-success, .bp3-dark .bp3-tree .bp3-icon-standard.bp3-intent-success, .bp3-dark .bp3-tree .bp3-icon-large.bp3-intent-success{
    color:#0f9960; }
  .bp3-dark .bp3-tree .bp3-icon.bp3-intent-warning, .bp3-dark .bp3-tree .bp3-icon-standard.bp3-intent-warning, .bp3-dark .bp3-tree .bp3-icon-large.bp3-intent-warning{
    color:#d9822b; }
  .bp3-dark .bp3-tree .bp3-icon.bp3-intent-danger, .bp3-dark .bp3-tree .bp3-icon-standard.bp3-intent-danger, .bp3-dark .bp3-tree .bp3-icon-large.bp3-intent-danger{
    color:#db3737; }

.bp3-dark .bp3-tree-node.bp3-tree-node-selected > .bp3-tree-node-content{
  background-color:#137cbd; }
/*!

Copyright 2017-present Palantir Technologies, Inc. All rights reserved.
Licensed under the Apache License, Version 2.0.

*/
.bp3-omnibar{
  -webkit-filter:blur(0);
          filter:blur(0);
  opacity:1;
  top:20vh;
  left:calc(50% - 250px);
  z-index:21;
  border-radius:3px;
  -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
          box-shadow:0 0 0 1px rgba(16, 22, 26, 0.1), 0 4px 8px rgba(16, 22, 26, 0.2), 0 18px 46px 6px rgba(16, 22, 26, 0.2);
  background-color:#ffffff;
  width:500px; }
  .bp3-omnibar.bp3-overlay-enter, .bp3-omnibar.bp3-overlay-appear{
    -webkit-filter:blur(20px);
            filter:blur(20px);
    opacity:0.2; }
  .bp3-omnibar.bp3-overlay-enter-active, .bp3-omnibar.bp3-overlay-appear-active{
    -webkit-filter:blur(0);
            filter:blur(0);
    opacity:1;
    -webkit-transition-property:opacity, -webkit-filter;
    transition-property:opacity, -webkit-filter;
    transition-property:filter, opacity;
    transition-property:filter, opacity, -webkit-filter;
    -webkit-transition-duration:200ms;
            transition-duration:200ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-omnibar.bp3-overlay-exit{
    -webkit-filter:blur(0);
            filter:blur(0);
    opacity:1; }
  .bp3-omnibar.bp3-overlay-exit-active{
    -webkit-filter:blur(20px);
            filter:blur(20px);
    opacity:0.2;
    -webkit-transition-property:opacity, -webkit-filter;
    transition-property:opacity, -webkit-filter;
    transition-property:filter, opacity;
    transition-property:filter, opacity, -webkit-filter;
    -webkit-transition-duration:200ms;
            transition-duration:200ms;
    -webkit-transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
            transition-timing-function:cubic-bezier(0.4, 1, 0.75, 0.9);
    -webkit-transition-delay:0;
            transition-delay:0; }
  .bp3-omnibar .bp3-input{
    border-radius:0;
    background-color:transparent; }
    .bp3-omnibar .bp3-input, .bp3-omnibar .bp3-input:focus{
      -webkit-box-shadow:none;
              box-shadow:none; }
  .bp3-omnibar .bp3-menu{
    border-radius:0;
    -webkit-box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.15);
            box-shadow:inset 0 1px 0 rgba(16, 22, 26, 0.15);
    background-color:transparent;
    max-height:calc(60vh - 40px);
    overflow:auto; }
    .bp3-omnibar .bp3-menu:empty{
      display:none; }
  .bp3-dark .bp3-omnibar, .bp3-omnibar.bp3-dark{
    -webkit-box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
            box-shadow:0 0 0 1px rgba(16, 22, 26, 0.2), 0 4px 8px rgba(16, 22, 26, 0.4), 0 18px 46px 6px rgba(16, 22, 26, 0.4);
    background-color:#30404d; }

.bp3-omnibar-overlay .bp3-overlay-backdrop{
  background-color:rgba(16, 22, 26, 0.2); }

.bp3-select-popover .bp3-popover-content{
  padding:5px; }

.bp3-select-popover .bp3-input-group{
  margin-bottom:0; }

.bp3-select-popover .bp3-menu{
  max-width:400px;
  max-height:300px;
  overflow:auto;
  padding:0; }
  .bp3-select-popover .bp3-menu:not(:first-child){
    padding-top:5px; }

.bp3-multi-select{
  min-width:150px; }

.bp3-multi-select-popover .bp3-menu{
  max-width:400px;
  max-height:300px;
  overflow:auto; }

.bp3-select-popover .bp3-popover-content{
  padding:5px; }

.bp3-select-popover .bp3-input-group{
  margin-bottom:0; }

.bp3-select-popover .bp3-menu{
  max-width:400px;
  max-height:300px;
  overflow:auto;
  padding:0; }
  .bp3-select-popover .bp3-menu:not(:first-child){
    padding-top:5px; }
/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensureUiComponents() in @jupyterlab/buildutils */

/**
 * (DEPRECATED) Support for consuming icons as CSS background images
 */

/* Icons urls */

:root {
  --jp-icon-add: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE5IDEzaC02djZoLTJ2LTZINXYtMmg2VjVoMnY2aDZ2MnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-bug: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIwIDhoLTIuODFjLS40NS0uNzgtMS4wNy0xLjQ1LTEuODItMS45NkwxNyA0LjQxIDE1LjU5IDNsLTIuMTcgMi4xN0MxMi45NiA1LjA2IDEyLjQ5IDUgMTIgNWMtLjQ5IDAtLjk2LjA2LTEuNDEuMTdMOC40MSAzIDcgNC40MWwxLjYyIDEuNjNDNy44OCA2LjU1IDcuMjYgNy4yMiA2LjgxIDhINHYyaDIuMDljLS4wNS4zMy0uMDkuNjYtLjA5IDF2MUg0djJoMnYxYzAgLjM0LjA0LjY3LjA5IDFINHYyaDIuODFjMS4wNCAxLjc5IDIuOTcgMyA1LjE5IDNzNC4xNS0xLjIxIDUuMTktM0gyMHYtMmgtMi4wOWMuMDUtLjMzLjA5LS42Ni4wOS0xdi0xaDJ2LTJoLTJ2LTFjMC0uMzQtLjA0LS42Ny0uMDktMUgyMFY4em0tNiA4aC00di0yaDR2MnptMC00aC00di0yaDR2MnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-build: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE0LjkgMTcuNDVDMTYuMjUgMTcuNDUgMTcuMzUgMTYuMzUgMTcuMzUgMTVDMTcuMzUgMTMuNjUgMTYuMjUgMTIuNTUgMTQuOSAxMi41NUMxMy41NCAxMi41NSAxMi40NSAxMy42NSAxMi40NSAxNUMxMi40NSAxNi4zNSAxMy41NCAxNy40NSAxNC45IDE3LjQ1Wk0yMC4xIDE1LjY4TDIxLjU4IDE2Ljg0QzIxLjcxIDE2Ljk1IDIxLjc1IDE3LjEzIDIxLjY2IDE3LjI5TDIwLjI2IDE5LjcxQzIwLjE3IDE5Ljg2IDIwIDE5LjkyIDE5LjgzIDE5Ljg2TDE4LjA5IDE5LjE2QzE3LjczIDE5LjQ0IDE3LjMzIDE5LjY3IDE2LjkxIDE5Ljg1TDE2LjY0IDIxLjdDMTYuNjIgMjEuODcgMTYuNDcgMjIgMTYuMyAyMkgxMy41QzEzLjMyIDIyIDEzLjE4IDIxLjg3IDEzLjE1IDIxLjdMMTIuODkgMTkuODVDMTIuNDYgMTkuNjcgMTIuMDcgMTkuNDQgMTEuNzEgMTkuMTZMOS45NjAwMiAxOS44NkM5LjgxMDAyIDE5LjkyIDkuNjIwMDIgMTkuODYgOS41NDAwMiAxOS43MUw4LjE0MDAyIDE3LjI5QzguMDUwMDIgMTcuMTMgOC4wOTAwMiAxNi45NSA4LjIyMDAyIDE2Ljg0TDkuNzAwMDIgMTUuNjhMOS42NTAwMSAxNUw5LjcwMDAyIDE0LjMxTDguMjIwMDIgMTMuMTZDOC4wOTAwMiAxMy4wNSA4LjA1MDAyIDEyLjg2IDguMTQwMDIgMTIuNzFMOS41NDAwMiAxMC4yOUM5LjYyMDAyIDEwLjEzIDkuODEwMDIgMTAuMDcgOS45NjAwMiAxMC4xM0wxMS43MSAxMC44NEMxMi4wNyAxMC41NiAxMi40NiAxMC4zMiAxMi44OSAxMC4xNUwxMy4xNSA4LjI4OTk4QzEzLjE4IDguMTI5OTggMTMuMzIgNy45OTk5OCAxMy41IDcuOTk5OThIMTYuM0MxNi40NyA3Ljk5OTk4IDE2LjYyIDguMTI5OTggMTYuNjQgOC4yODk5OEwxNi45MSAxMC4xNUMxNy4zMyAxMC4zMiAxNy43MyAxMC41NiAxOC4wOSAxMC44NEwxOS44MyAxMC4xM0MyMCAxMC4wNyAyMC4xNyAxMC4xMyAyMC4yNiAxMC4yOUwyMS42NiAxMi43MUMyMS43NSAxMi44NiAyMS43MSAxMy4wNSAyMS41OCAxMy4xNkwyMC4xIDE0LjMxTDIwLjE1IDE1TDIwLjEgMTUuNjhaIi8+CiAgICA8cGF0aCBkPSJNNy4zMjk2NiA3LjQ0NDU0QzguMDgzMSA3LjAwOTU0IDguMzM5MzIgNi4wNTMzMiA3LjkwNDMyIDUuMjk5ODhDNy40NjkzMiA0LjU0NjQzIDYuNTA4MSA0LjI4MTU2IDUuNzU0NjYgNC43MTY1NkM1LjM5MTc2IDQuOTI2MDggNS4xMjY5NSA1LjI3MTE4IDUuMDE4NDkgNS42NzU5NEM0LjkxMDA0IDYuMDgwNzEgNC45NjY4MiA2LjUxMTk4IDUuMTc2MzQgNi44NzQ4OEM1LjYxMTM0IDcuNjI4MzIgNi41NzYyMiA3Ljg3OTU0IDcuMzI5NjYgNy40NDQ1NFpNOS42NTcxOCA0Ljc5NTkzTDEwLjg2NzIgNC45NTE3OUMxMC45NjI4IDQuOTc3NDEgMTEuMDQwMiA1LjA3MTMzIDExLjAzODIgNS4xODc5M0wxMS4wMzg4IDYuOTg4OTNDMTEuMDQ1NSA3LjEwMDU0IDEwLjk2MTYgNy4xOTUxOCAxMC44NTUgNy4yMTA1NEw5LjY2MDAxIDcuMzgwODNMOS4yMzkxNSA4LjEzMTg4TDkuNjY5NjEgOS4yNTc0NUM5LjcwNzI5IDkuMzYyNzEgOS42NjkzNCA5LjQ3Njk5IDkuNTc0MDggOS41MzE5OUw4LjAxNTIzIDEwLjQzMkM3LjkxMTMxIDEwLjQ5MiA3Ljc5MzM3IDEwLjQ2NzcgNy43MjEwNSAxMC4zODI0TDYuOTg3NDggOS40MzE4OEw2LjEwOTMxIDkuNDMwODNMNS4zNDcwNCAxMC4zOTA1QzUuMjg5MDkgMTAuNDcwMiA1LjE3MzgzIDEwLjQ5MDUgNS4wNzE4NyAxMC40MzM5TDMuNTEyNDUgOS41MzI5M0MzLjQxMDQ5IDkuNDc2MzMgMy4zNzY0NyA5LjM1NzQxIDMuNDEwNzUgOS4yNTY3OUwzLjg2MzQ3IDguMTQwOTNMMy42MTc0OSA3Ljc3NDg4TDMuNDIzNDcgNy4zNzg4M0wyLjIzMDc1IDcuMjEyOTdDMi4xMjY0NyA3LjE5MjM1IDIuMDQwNDkgNy4xMDM0MiAyLjA0MjQ1IDYuOTg2ODJMMi4wNDE4NyA1LjE4NTgyQzIuMDQzODMgNS4wNjkyMiAyLjExOTA5IDQuOTc5NTggMi4yMTcwNCA0Ljk2OTIyTDMuNDIwNjUgNC43OTM5M0wzLjg2NzQ5IDQuMDI3ODhMMy40MTEwNSAyLjkxNzMxQzMuMzczMzcgMi44MTIwNCAzLjQxMTMxIDIuNjk3NzYgMy41MTUyMyAyLjYzNzc2TDUuMDc0MDggMS43Mzc3NkM1LjE2OTM0IDEuNjgyNzYgNS4yODcyOSAxLjcwNzA0IDUuMzU5NjEgMS43OTIzMUw2LjExOTE1IDIuNzI3ODhMNi45ODAwMSAyLjczODkzTDcuNzI0OTYgMS43ODkyMkM3Ljc5MTU2IDEuNzA0NTggNy45MTU0OCAxLjY3OTIyIDguMDA4NzkgMS43NDA4Mkw5LjU2ODIxIDIuNjQxODJDOS42NzAxNyAyLjY5ODQyIDkuNzEyODUgMi44MTIzNCA5LjY4NzIzIDIuOTA3OTdMOS4yMTcxOCA0LjAzMzgzTDkuNDYzMTYgNC4zOTk4OEw5LjY1NzE4IDQuNzk1OTNaIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down-empty-thin: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwb2x5Z29uIGNsYXNzPSJzdDEiIHBvaW50cz0iOS45LDEzLjYgMy42LDcuNCA0LjQsNi42IDkuOSwxMi4yIDE1LjQsNi43IDE2LjEsNy40ICIvPgoJPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down-empty: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik01LjIsNS45TDksOS43bDMuOC0zLjhsMS4yLDEuMmwtNC45LDVsLTQuOS01TDUuMiw1Ljl6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik01LjIsNy41TDksMTEuMmwzLjgtMy44SDUuMnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-caret-left: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwYXRoIGQ9Ik0xMC44LDEyLjhMNy4xLDlsMy44LTMuOGwwLDcuNkgxMC44eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-caret-right: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik03LjIsNS4yTDEwLjksOWwtMy44LDMuOFY1LjJINy4yeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-caret-up-empty-thin: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwb2x5Z29uIGNsYXNzPSJzdDEiIHBvaW50cz0iMTUuNCwxMy4zIDkuOSw3LjcgNC40LDEzLjIgMy42LDEyLjUgOS45LDYuMyAxNi4xLDEyLjYgIi8+Cgk8L2c+Cjwvc3ZnPgo=);
  --jp-icon-caret-up: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwYXRoIGQ9Ik01LjIsMTAuNUw5LDYuOGwzLjgsMy44SDUuMnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-case-sensitive: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0MTQxNDEiPgogICAgPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CiAgPC9nPgogIDxnIGNsYXNzPSJqcC1pY29uLWFjY2VudDIiIGZpbGw9IiNGRkYiPgogICAgPHBhdGggZD0iTTcuNiw4aDAuOWwzLjUsOGgtMS4xTDEwLDE0SDZsLTAuOSwySDRMNy42LDh6IE04LDkuMUw2LjQsMTNoMy4yTDgsOS4xeiIvPgogICAgPHBhdGggZD0iTTE2LjYsOS44Yy0wLjIsMC4xLTAuNCwwLjEtMC43LDAuMWMtMC4yLDAtMC40LTAuMS0wLjYtMC4yYy0wLjEtMC4xLTAuMi0wLjQtMC4yLTAuNyBjLTAuMywwLjMtMC42LDAuNS0wLjksMC43Yy0wLjMsMC4xLTAuNywwLjItMS4xLDAuMmMtMC4zLDAtMC41LDAtMC43LTAuMWMtMC4yLTAuMS0wLjQtMC4yLTAuNi0wLjNjLTAuMi0wLjEtMC4zLTAuMy0wLjQtMC41IGMtMC4xLTAuMi0wLjEtMC40LTAuMS0wLjdjMC0wLjMsMC4xLTAuNiwwLjItMC44YzAuMS0wLjIsMC4zLTAuNCwwLjQtMC41QzEyLDcsMTIuMiw2LjksMTIuNSw2LjhjMC4yLTAuMSwwLjUtMC4xLDAuNy0wLjIgYzAuMy0wLjEsMC41LTAuMSwwLjctMC4xYzAuMiwwLDAuNC0wLjEsMC42LTAuMWMwLjIsMCwwLjMtMC4xLDAuNC0wLjJjMC4xLTAuMSwwLjItMC4yLDAuMi0wLjRjMC0xLTEuMS0xLTEuMy0xIGMtMC40LDAtMS40LDAtMS40LDEuMmgtMC45YzAtMC40LDAuMS0wLjcsMC4yLTFjMC4xLTAuMiwwLjMtMC40LDAuNS0wLjZjMC4yLTAuMiwwLjUtMC4zLDAuOC0wLjNDMTMuMyw0LDEzLjYsNCwxMy45LDQgYzAuMywwLDAuNSwwLDAuOCwwLjFjMC4zLDAsMC41LDAuMSwwLjcsMC4yYzAuMiwwLjEsMC40LDAuMywwLjUsMC41QzE2LDUsMTYsNS4yLDE2LDUuNnYyLjljMCwwLjIsMCwwLjQsMCwwLjUgYzAsMC4xLDAuMSwwLjIsMC4zLDAuMmMwLjEsMCwwLjIsMCwwLjMsMFY5Ljh6IE0xNS4yLDYuOWMtMS4yLDAuNi0zLjEsMC4yLTMuMSwxLjRjMCwxLjQsMy4xLDEsMy4xLTAuNVY2Ljl6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-check: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTkgMTYuMTdMNC44MyAxMmwtMS40MiAxLjQxTDkgMTkgMjEgN2wtMS40MS0xLjQxeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-circle-empty: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyIDJDNi40NyAyIDIgNi40NyAyIDEyczQuNDcgMTAgMTAgMTAgMTAtNC40NyAxMC0xMFMxNy41MyAyIDEyIDJ6bTAgMThjLTQuNDEgMC04LTMuNTktOC04czMuNTktOCA4LTggOCAzLjU5IDggOC0zLjU5IDgtOCA4eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-circle: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPGNpcmNsZSBjeD0iOSIgY3k9IjkiIHI9IjgiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-clear: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8bWFzayBpZD0iZG9udXRIb2xlIj4KICAgIDxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiIC8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSI4IiBmaWxsPSJibGFjayIvPgogIDwvbWFzaz4KCiAgPGcgY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxyZWN0IGhlaWdodD0iMTgiIHdpZHRoPSIyIiB4PSIxMSIgeT0iMyIgdHJhbnNmb3JtPSJyb3RhdGUoMzE1LCAxMiwgMTIpIi8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIxMCIgbWFzaz0idXJsKCNkb251dEhvbGUpIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-close: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbi1ub25lIGpwLWljb24tc2VsZWN0YWJsZS1pbnZlcnNlIGpwLWljb24zLWhvdmVyIiBmaWxsPSJub25lIj4KICAgIDxjaXJjbGUgY3g9IjEyIiBjeT0iMTIiIHI9IjExIi8+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIGpwLWljb24tYWNjZW50Mi1ob3ZlciIgZmlsbD0iIzYxNjE2MSI+CiAgICA8cGF0aCBkPSJNMTkgNi40MUwxNy41OSA1IDEyIDEwLjU5IDYuNDEgNSA1IDYuNDEgMTAuNTkgMTIgNSAxNy41OSA2LjQxIDE5IDEyIDEzLjQxIDE3LjU5IDE5IDE5IDE3LjU5IDEzLjQxIDEyeiIvPgogIDwvZz4KCiAgPGcgY2xhc3M9ImpwLWljb24tbm9uZSBqcC1pY29uLWJ1c3kiIGZpbGw9Im5vbmUiPgogICAgPGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iNyIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-console: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwMCAyMDAiPgogIDxnIGNsYXNzPSJqcC1pY29uLWJyYW5kMSBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiMwMjg4RDEiPgogICAgPHBhdGggZD0iTTIwIDE5LjhoMTYwdjE1OS45SDIweiIvPgogIDwvZz4KICA8ZyBjbGFzcz0ianAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGZpbGw9IiNmZmYiPgogICAgPHBhdGggZD0iTTEwNSAxMjcuM2g0MHYxMi44aC00MHpNNTEuMSA3N0w3NCA5OS45bC0yMy4zIDIzLjMgMTAuNSAxMC41IDIzLjMtMjMuM0w5NSA5OS45IDg0LjUgODkuNCA2MS42IDY2LjV6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-copy: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTExLjksMUgzLjJDMi40LDEsMS43LDEuNywxLjcsMi41djEwLjJoMS41VjIuNWg4LjdWMXogTTE0LjEsMy45aC04Yy0wLjgsMC0xLjUsMC43LTEuNSwxLjV2MTAuMmMwLDAuOCwwLjcsMS41LDEuNSwxLjVoOCBjMC44LDAsMS41LTAuNywxLjUtMS41VjUuNEMxNS41LDQuNiwxNC45LDMuOSwxNC4xLDMuOXogTTE0LjEsMTUuNWgtOFY1LjRoOFYxNS41eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-cut: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTkuNjQgNy42NGMuMjMtLjUuMzYtMS4wNS4zNi0xLjY0IDAtMi4yMS0xLjc5LTQtNC00UzIgMy43OSAyIDZzMS43OSA0IDQgNGMuNTkgMCAxLjE0LS4xMyAxLjY0LS4zNkwxMCAxMmwtMi4zNiAyLjM2QzcuMTQgMTQuMTMgNi41OSAxNCA2IDE0Yy0yLjIxIDAtNCAxLjc5LTQgNHMxLjc5IDQgNCA0IDQtMS43OSA0LTRjMC0uNTktLjEzLTEuMTQtLjM2LTEuNjRMMTIgMTRsNyA3aDN2LTFMOS42NCA3LjY0ek02IDhjLTEuMSAwLTItLjg5LTItMnMuOS0yIDItMiAyIC44OSAyIDItLjkgMi0yIDJ6bTAgMTJjLTEuMSAwLTItLjg5LTItMnMuOS0yIDItMiAyIC44OSAyIDItLjkgMi0yIDJ6bTYtNy41Yy0uMjggMC0uNS0uMjItLjUtLjVzLjIyLS41LjUtLjUuNS4yMi41LjUtLjIyLjUtLjUuNXpNMTkgM2wtNiA2IDIgMiA3LTdWM3oiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-download: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE5IDloLTRWM0g5djZINWw3IDcgNy03ek01IDE4djJoMTR2LTJINXoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-edit: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTMgMTcuMjVWMjFoMy43NUwxNy44MSA5Ljk0bC0zLjc1LTMuNzVMMyAxNy4yNXpNMjAuNzEgNy4wNGMuMzktLjM5LjM5LTEuMDIgMC0xLjQxbC0yLjM0LTIuMzRjLS4zOS0uMzktMS4wMi0uMzktMS40MSAwbC0xLjgzIDEuODMgMy43NSAzLjc1IDEuODMtMS44M3oiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-ellipses: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPGNpcmNsZSBjeD0iNSIgY3k9IjEyIiByPSIyIi8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIyIi8+CiAgICA8Y2lyY2xlIGN4PSIxOSIgY3k9IjEyIiByPSIyIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-extension: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIwLjUgMTFIMTlWN2MwLTEuMS0uOS0yLTItMmgtNFYzLjVDMTMgMi4xMiAxMS44OCAxIDEwLjUgMVM4IDIuMTIgOCAzLjVWNUg0Yy0xLjEgMC0xLjk5LjktMS45OSAydjMuOEgzLjVjMS40OSAwIDIuNyAxLjIxIDIuNyAyLjdzLTEuMjEgMi43LTIuNyAyLjdIMlYyMGMwIDEuMS45IDIgMiAyaDMuOHYtMS41YzAtMS40OSAxLjIxLTIuNyAyLjctMi43IDEuNDkgMCAyLjcgMS4yMSAyLjcgMi43VjIySDE3YzEuMSAwIDItLjkgMi0ydi00aDEuNWMxLjM4IDAgMi41LTEuMTIgMi41LTIuNVMyMS44OCAxMSAyMC41IDExeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-fast-forward: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTQgMThsOC41LTZMNCA2djEyem05LTEydjEybDguNS02TDEzIDZ6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-file-upload: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTkgMTZoNnYtNmg0bC03LTctNyA3aDR6bS00IDJoMTR2Mkg1eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-file: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkuMyA4LjJsLTUuNS01LjVjLS4zLS4zLS43LS41LTEuMi0uNUgzLjljLS44LjEtMS42LjktMS42IDEuOHYxNC4xYzAgLjkuNyAxLjYgMS42IDEuNmgxNC4yYy45IDAgMS42LS43IDEuNi0xLjZWOS40Yy4xLS41LS4xLS45LS40LTEuMnptLTUuOC0zLjNsMy40IDMuNmgtMy40VjQuOXptMy45IDEyLjdINC43Yy0uMSAwLS4yIDAtLjItLjJWNC43YzAtLjIuMS0uMy4yLS4zaDcuMnY0LjRzMCAuOC4zIDEuMWMuMy4zIDEuMS4zIDEuMS4zaDQuM3Y3LjJzLS4xLjItLjIuMnoiLz4KPC9zdmc+Cg==);
  --jp-icon-filter-list: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEwIDE4aDR2LTJoLTR2MnpNMyA2djJoMThWNkgzem0zIDdoMTJ2LTJINnYyeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-folder: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTAgNEg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMThjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY4YzAtMS4xLS45LTItMi0yaC04bC0yLTJ6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-html5: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUxMiA1MTIiPgogIDxwYXRoIGNsYXNzPSJqcC1pY29uMCBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiMwMDAiIGQ9Ik0xMDguNCAwaDIzdjIyLjhoMjEuMlYwaDIzdjY5aC0yM1Y0NmgtMjF2MjNoLTIzLjJNMjA2IDIzaC0yMC4zVjBoNjMuN3YyM0gyMjl2NDZoLTIzbTUzLjUtNjloMjQuMWwxNC44IDI0LjNMMzEzLjIgMGgyNC4xdjY5aC0yM1YzNC44bC0xNi4xIDI0LjgtMTYuMS0yNC44VjY5aC0yMi42bTg5LjItNjloMjN2NDYuMmgzMi42VjY5aC01NS42Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iI2U0NGQyNiIgZD0iTTEwNy42IDQ3MWwtMzMtMzcwLjRoMzYyLjhsLTMzIDM3MC4yTDI1NS43IDUxMiIvPgogIDxwYXRoIGNsYXNzPSJqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiNmMTY1MjkiIGQ9Ik0yNTYgNDgwLjVWMTMxaDE0OC4zTDM3NiA0NDciLz4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGZpbGw9IiNlYmViZWIiIGQ9Ik0xNDIgMTc2LjNoMTE0djQ1LjRoLTY0LjJsNC4yIDQ2LjVoNjB2NDUuM0gxNTQuNG0yIDIyLjhIMjAybDMuMiAzNi4zIDUwLjggMTMuNnY0Ny40bC05My4yLTI2Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZS1pbnZlcnNlIiBmaWxsPSIjZmZmIiBkPSJNMzY5LjYgMTc2LjNIMjU1Ljh2NDUuNGgxMDkuNm0tNC4xIDQ2LjVIMjU1Ljh2NDUuNGg1NmwtNS4zIDU5LTUwLjcgMTMuNnY0Ny4ybDkzLTI1LjgiLz4KPC9zdmc+Cg==);
  --jp-icon-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1icmFuZDQganAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGZpbGw9IiNGRkYiIGQ9Ik0yLjIgMi4yaDE3LjV2MTcuNUgyLjJ6Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tYnJhbmQwIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzNGNTFCNSIgZD0iTTIuMiAyLjJ2MTcuNWgxNy41bC4xLTE3LjVIMi4yem0xMi4xIDIuMmMxLjIgMCAyLjIgMSAyLjIgMi4ycy0xIDIuMi0yLjIgMi4yLTIuMi0xLTIuMi0yLjIgMS0yLjIgMi4yLTIuMnpNNC40IDE3LjZsMy4zLTguOCAzLjMgNi42IDIuMi0zLjIgNC40IDUuNEg0LjR6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-inspector: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMjAgNEg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMThjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY2YzAtMS4xLS45LTItMi0yem0tNSAxNEg0di00aDExdjR6bTAtNUg0VjloMTF2NHptNSA1aC00VjloNHY5eiIvPgo8L3N2Zz4K);
  --jp-icon-json: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbi13YXJuMSBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiNGOUE4MjUiPgogICAgPHBhdGggZD0iTTIwLjIgMTEuOGMtMS42IDAtMS43LjUtMS43IDEgMCAuNC4xLjkuMSAxLjMuMS41LjEuOS4xIDEuMyAwIDEuNy0xLjQgMi4zLTMuNSAyLjNoLS45di0xLjloLjVjMS4xIDAgMS40IDAgMS40LS44IDAtLjMgMC0uNi0uMS0xIDAtLjQtLjEtLjgtLjEtMS4yIDAtMS4zIDAtMS44IDEuMy0yLTEuMy0uMi0xLjMtLjctMS4zLTIgMC0uNC4xLS44LjEtMS4yLjEtLjQuMS0uNy4xLTEgMC0uOC0uNC0uNy0xLjQtLjhoLS41VjQuMWguOWMyLjIgMCAzLjUuNyAzLjUgMi4zIDAgLjQtLjEuOS0uMSAxLjMtLjEuNS0uMS45LS4xIDEuMyAwIC41LjIgMSAxLjcgMXYxLjh6TTEuOCAxMC4xYzEuNiAwIDEuNy0uNSAxLjctMSAwLS40LS4xLS45LS4xLTEuMy0uMS0uNS0uMS0uOS0uMS0xLjMgMC0xLjYgMS40LTIuMyAzLjUtMi4zaC45djEuOWgtLjVjLTEgMC0xLjQgMC0xLjQuOCAwIC4zIDAgLjYuMSAxIDAgLjIuMS42LjEgMSAwIDEuMyAwIDEuOC0xLjMgMkM2IDExLjIgNiAxMS43IDYgMTNjMCAuNC0uMS44LS4xIDEuMi0uMS4zLS4xLjctLjEgMSAwIC44LjMuOCAxLjQuOGguNXYxLjloLS45Yy0yLjEgMC0zLjUtLjYtMy41LTIuMyAwLS40LjEtLjkuMS0xLjMuMS0uNS4xLS45LjEtMS4zIDAtLjUtLjItMS0xLjctMXYtMS45eiIvPgogICAgPGNpcmNsZSBjeD0iMTEiIGN5PSIxMy44IiByPSIyLjEiLz4KICAgIDxjaXJjbGUgY3g9IjExIiBjeT0iOC4yIiByPSIyLjEiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-jupyter-favicon: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUyIiBoZWlnaHQ9IjE2NSIgdmlld0JveD0iMCAwIDE1MiAxNjUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbi13YXJuMCIgZmlsbD0iI0YzNzcyNiI+CiAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjA3ODk0NywgMTEwLjU4MjkyNykiIGQ9Ik03NS45NDIyODQyLDI5LjU4MDQ1NjEgQzQzLjMwMjM5NDcsMjkuNTgwNDU2MSAxNC43OTY3ODMyLDE3LjY1MzQ2MzQgMCwwIEM1LjUxMDgzMjExLDE1Ljg0MDY4MjkgMTUuNzgxNTM4OSwyOS41NjY3NzMyIDI5LjM5MDQ5NDcsMzkuMjc4NDE3MSBDNDIuOTk5Nyw0OC45ODk4NTM3IDU5LjI3MzcsNTQuMjA2NzgwNSA3NS45NjA1Nzg5LDU0LjIwNjc4MDUgQzkyLjY0NzQ1NzksNTQuMjA2NzgwNSAxMDguOTIxNDU4LDQ4Ljk4OTg1MzcgMTIyLjUzMDY2MywzOS4yNzg0MTcxIEMxMzYuMTM5NDUzLDI5LjU2Njc3MzIgMTQ2LjQxMDI4NCwxNS44NDA2ODI5IDE1MS45MjExNTgsMCBDMTM3LjA4Nzg2OCwxNy42NTM0NjM0IDEwOC41ODI1ODksMjkuNTgwNDU2MSA3NS45NDIyODQyLDI5LjU4MDQ1NjEgTDc1Ljk0MjI4NDIsMjkuNTgwNDU2MSBaIiAvPgogICAgPHBhdGggdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMzczNjgsIDAuNzA0ODc4KSIgZD0iTTc1Ljk3ODQ1NzksMjQuNjI2NDA3MyBDMTA4LjYxODc2MywyNC42MjY0MDczIDEzNy4xMjQ0NTgsMzYuNTUzNDQxNSAxNTEuOTIxMTU4LDU0LjIwNjc4MDUgQzE0Ni40MTAyODQsMzguMzY2MjIyIDEzNi4xMzk0NTMsMjQuNjQwMTMxNyAxMjIuNTMwNjYzLDE0LjkyODQ4NzggQzEwOC45MjE0NTgsNS4yMTY4NDM5IDkyLjY0NzQ1NzksMCA3NS45NjA1Nzg5LDAgQzU5LjI3MzcsMCA0Mi45OTk3LDUuMjE2ODQzOSAyOS4zOTA0OTQ3LDE0LjkyODQ4NzggQzE1Ljc4MTUzODksMjQuNjQwMTMxNyA1LjUxMDgzMjExLDM4LjM2NjIyMiAwLDU0LjIwNjc4MDUgQzE0LjgzMzA4MTYsMzYuNTg5OTI5MyA0My4zMzg1Njg0LDI0LjYyNjQwNzMgNzUuOTc4NDU3OSwyNC42MjY0MDczIEw3NS45Nzg0NTc5LDI0LjYyNjQwNzMgWiIgLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-jupyter: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iNTEiIHZpZXdCb3g9IjAgMCAzOSA1MSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTYzOCAtMjI4MSkiPgogICAgPGcgY2xhc3M9ImpwLWljb24td2FybjAiIGZpbGw9IiNGMzc3MjYiPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM5Ljc0IDIzMTEuOTgpIiBkPSJNIDE4LjI2NDYgNy4xMzQxMUMgMTAuNDE0NSA3LjEzNDExIDMuNTU4NzIgNC4yNTc2IDAgMEMgMS4zMjUzOSAzLjgyMDQgMy43OTU1NiA3LjEzMDgxIDcuMDY4NiA5LjQ3MzAzQyAxMC4zNDE3IDExLjgxNTIgMTQuMjU1NyAxMy4wNzM0IDE4LjI2OSAxMy4wNzM0QyAyMi4yODIzIDEzLjA3MzQgMjYuMTk2MyAxMS44MTUyIDI5LjQ2OTQgOS40NzMwM0MgMzIuNzQyNCA3LjEzMDgxIDM1LjIxMjYgMy44MjA0IDM2LjUzOCAwQyAzMi45NzA1IDQuMjU3NiAyNi4xMTQ4IDcuMTM0MTEgMTguMjY0NiA3LjEzNDExWiIvPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM5LjczIDIyODUuNDgpIiBkPSJNIDE4LjI3MzMgNS45MzkzMUMgMjYuMTIzNSA1LjkzOTMxIDMyLjk3OTMgOC44MTU4MyAzNi41MzggMTMuMDczNEMgMzUuMjEyNiA5LjI1MzAzIDMyLjc0MjQgNS45NDI2MiAyOS40Njk0IDMuNjAwNEMgMjYuMTk2MyAxLjI1ODE4IDIyLjI4MjMgMCAxOC4yNjkgMEMgMTQuMjU1NyAwIDEwLjM0MTcgMS4yNTgxOCA3LjA2ODYgMy42MDA0QyAzLjc5NTU2IDUuOTQyNjIgMS4zMjUzOSA5LjI1MzAzIDAgMTMuMDczNEMgMy41Njc0NSA4LjgyNDYzIDEwLjQyMzIgNS45MzkzMSAxOC4yNzMzIDUuOTM5MzFaIi8+CiAgICA8L2c+CiAgICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjY5LjMgMjI4MS4zMSkiIGQ9Ik0gNS44OTM1MyAyLjg0NEMgNS45MTg4OSAzLjQzMTY1IDUuNzcwODUgNC4wMTM2NyA1LjQ2ODE1IDQuNTE2NDVDIDUuMTY1NDUgNS4wMTkyMiA0LjcyMTY4IDUuNDIwMTUgNC4xOTI5OSA1LjY2ODUxQyAzLjY2NDMgNS45MTY4OCAzLjA3NDQ0IDYuMDAxNTEgMi40OTgwNSA1LjkxMTcxQyAxLjkyMTY2IDUuODIxOSAxLjM4NDYzIDUuNTYxNyAwLjk1NDg5OCA1LjE2NDAxQyAwLjUyNTE3IDQuNzY2MzMgMC4yMjIwNTYgNC4yNDkwMyAwLjA4MzkwMzcgMy42Nzc1N0MgLTAuMDU0MjQ4MyAzLjEwNjExIC0wLjAyMTIzIDIuNTA2MTcgMC4xNzg3ODEgMS45NTM2NEMgMC4zNzg3OTMgMS40MDExIDAuNzM2ODA5IDAuOTIwODE3IDEuMjA3NTQgMC41NzM1MzhDIDEuNjc4MjYgMC4yMjYyNTkgMi4yNDA1NSAwLjAyNzU5MTkgMi44MjMyNiAwLjAwMjY3MjI5QyAzLjYwMzg5IC0wLjAzMDcxMTUgNC4zNjU3MyAwLjI0OTc4OSA0Ljk0MTQyIDAuNzgyNTUxQyA1LjUxNzExIDEuMzE1MzEgNS44NTk1NiAyLjA1Njc2IDUuODkzNTMgMi44NDRaIi8+CiAgICAgIDxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MzkuOCAyMzIzLjgxKSIgZD0iTSA3LjQyNzg5IDMuNTgzMzhDIDcuNDYwMDggNC4zMjQzIDcuMjczNTUgNS4wNTgxOSA2Ljg5MTkzIDUuNjkyMTNDIDYuNTEwMzEgNi4zMjYwNyA1Ljk1MDc1IDYuODMxNTYgNS4yODQxMSA3LjE0NDZDIDQuNjE3NDcgNy40NTc2MyAzLjg3MzcxIDcuNTY0MTQgMy4xNDcwMiA3LjQ1MDYzQyAyLjQyMDMyIDcuMzM3MTIgMS43NDMzNiA3LjAwODcgMS4yMDE4NCA2LjUwNjk1QyAwLjY2MDMyOCA2LjAwNTIgMC4yNzg2MSA1LjM1MjY4IDAuMTA1MDE3IDQuNjMyMDJDIC0wLjA2ODU3NTcgMy45MTEzNSAtMC4wMjYyMzYxIDMuMTU0OTQgMC4yMjY2NzUgMi40NTg1NkMgMC40Nzk1ODcgMS43NjIxNyAwLjkzMTY5NyAxLjE1NzEzIDEuNTI1NzYgMC43MjAwMzNDIDIuMTE5ODMgMC4yODI5MzUgMi44MjkxNCAwLjAzMzQzOTUgMy41NjM4OSAwLjAwMzEzMzQ0QyA0LjU0NjY3IC0wLjAzNzQwMzMgNS41MDUyOSAwLjMxNjcwNiA2LjIyOTYxIDAuOTg3ODM1QyA2Ljk1MzkzIDEuNjU4OTYgNy4zODQ4NCAyLjU5MjM1IDcuNDI3ODkgMy41ODMzOEwgNy40Mjc4OSAzLjU4MzM4WiIvPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM4LjM2IDIyODYuMDYpIiBkPSJNIDIuMjc0NzEgNC4zOTYyOUMgMS44NDM2MyA0LjQxNTA4IDEuNDE2NzEgNC4zMDQ0NSAxLjA0Nzk5IDQuMDc4NDNDIDAuNjc5MjY4IDMuODUyNCAwLjM4NTMyOCAzLjUyMTE0IDAuMjAzMzcxIDMuMTI2NTZDIDAuMDIxNDEzNiAyLjczMTk4IC0wLjA0MDM3OTggMi4yOTE4MyAwLjAyNTgxMTYgMS44NjE4MUMgMC4wOTIwMDMxIDEuNDMxOCAwLjI4MzIwNCAxLjAzMTI2IDAuNTc1MjEzIDAuNzEwODgzQyAwLjg2NzIyMiAwLjM5MDUxIDEuMjQ2OTEgMC4xNjQ3MDggMS42NjYyMiAwLjA2MjA1OTJDIDIuMDg1NTMgLTAuMDQwNTg5NyAyLjUyNTYxIC0wLjAxNTQ3MTQgMi45MzA3NiAwLjEzNDIzNUMgMy4zMzU5MSAwLjI4Mzk0MSAzLjY4NzkyIDAuNTUxNTA1IDMuOTQyMjIgMC45MDMwNkMgNC4xOTY1MiAxLjI1NDYyIDQuMzQxNjkgMS42NzQzNiA0LjM1OTM1IDIuMTA5MTZDIDQuMzgyOTkgMi42OTEwNyA0LjE3Njc4IDMuMjU4NjkgMy43ODU5NyAzLjY4NzQ2QyAzLjM5NTE2IDQuMTE2MjQgMi44NTE2NiA0LjM3MTE2IDIuMjc0NzEgNC4zOTYyOUwgMi4yNzQ3MSA0LjM5NjI5WiIvPgogICAgPC9nPgogIDwvZz4+Cjwvc3ZnPgo=);
  --jp-icon-jupyterlab-wordmark: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIHZpZXdCb3g9IjAgMCAxODYwLjggNDc1Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0RTRFNEUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4MC4xMzY0MDEsIDY0LjI3MTQ5MykiPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDU4Ljg3NTU2NikiPgogICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjA4NzYwMywgMC4xNDAyOTQpIj4KICAgICAgICA8cGF0aCBkPSJNLTQyNi45LDE2OS44YzAsNDguNy0zLjcsNjQuNy0xMy42LDc2LjRjLTEwLjgsMTAtMjUsMTUuNS0zOS43LDE1LjVsMy43LDI5IGMyMi44LDAuMyw0NC44LTcuOSw2MS45LTIzLjFjMTcuOC0xOC41LDI0LTQ0LjEsMjQtODMuM1YwSC00Mjd2MTcwLjFMLTQyNi45LDE2OS44TC00MjYuOSwxNjkuOHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU1LjA0NTI5NiwgNTYuODM3MTA0KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNTYyNDUzLCAxLjc5OTg0MikiPgogICAgICAgIDxwYXRoIGQ9Ik0tMzEyLDE0OGMwLDIxLDAsMzkuNSwxLjcsNTUuNGgtMzEuOGwtMi4xLTMzLjNoLTAuOGMtNi43LDExLjYtMTYuNCwyMS4zLTI4LDI3LjkgYy0xMS42LDYuNi0yNC44LDEwLTM4LjIsOS44Yy0zMS40LDAtNjktMTcuNy02OS04OVYwaDM2LjR2MTEyLjdjMCwzOC43LDExLjYsNjQuNyw0NC42LDY0LjdjMTAuMy0wLjIsMjAuNC0zLjUsMjguOS05LjQgYzguNS01LjksMTUuMS0xNC4zLDE4LjktMjMuOWMyLjItNi4xLDMuMy0xMi41LDMuMy0xOC45VjAuMmgzNi40VjE0OEgtMzEyTC0zMTIsMTQ4eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzOTAuMDEzMzIyLCA1My40Nzk2MzgpIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS43MDY0NTgsIDAuMjMxNDI1KSI+CiAgICAgICAgPHBhdGggZD0iTS00NzguNiw3MS40YzAtMjYtMC44LTQ3LTEuNy02Ni43aDMyLjdsMS43LDM0LjhoMC44YzcuMS0xMi41LDE3LjUtMjIuOCwzMC4xLTI5LjcgYzEyLjUtNywyNi43LTEwLjMsNDEtOS44YzQ4LjMsMCw4NC43LDQxLjcsODQuNywxMDMuM2MwLDczLjEtNDMuNywxMDkuMi05MSwxMDkuMmMtMTIuMSwwLjUtMjQuMi0yLjItMzUtNy44IGMtMTAuOC01LjYtMTkuOS0xMy45LTI2LjYtMjQuMmgtMC44VjI5MWgtMzZ2LTIyMEwtNDc4LjYsNzEuNEwtNDc4LjYsNzEuNHogTS00NDIuNiwxMjUuNmMwLjEsNS4xLDAuNiwxMC4xLDEuNywxNS4xIGMzLDEyLjMsOS45LDIzLjMsMTkuOCwzMS4xYzkuOSw3LjgsMjIuMSwxMi4xLDM0LjcsMTIuMWMzOC41LDAsNjAuNy0zMS45LDYwLjctNzguNWMwLTQwLjctMjEuMS03NS42LTU5LjUtNzUuNiBjLTEyLjksMC40LTI1LjMsNS4xLTM1LjMsMTMuNGMtOS45LDguMy0xNi45LDE5LjctMTkuNiwzMi40Yy0xLjUsNC45LTIuMywxMC0yLjUsMTUuMVYxMjUuNkwtNDQyLjYsMTI1LjZMLTQ0Mi42LDEyNS42eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MDYuNzQwNzI2LCA1Ni44MzcxMDQpIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC43NTEyMjYsIDEuOTg5Mjk5KSI+CiAgICAgICAgPHBhdGggZD0iTS00NDAuOCwwbDQzLjcsMTIwLjFjNC41LDEzLjQsOS41LDI5LjQsMTIuOCw0MS43aDAuOGMzLjctMTIuMiw3LjktMjcuNywxMi44LTQyLjQgbDM5LjctMTE5LjJoMzguNUwtMzQ2LjksMTQ1Yy0yNiw2OS43LTQzLjcsMTA1LjQtNjguNiwxMjcuMmMtMTIuNSwxMS43LTI3LjksMjAtNDQuNiwyMy45bC05LjEtMzEuMSBjMTEuNy0zLjksMjIuNS0xMC4xLDMxLjgtMTguMWMxMy4yLTExLjEsMjMuNy0yNS4yLDMwLjYtNDEuMmMxLjUtMi44LDIuNS01LjcsMi45LTguOGMtMC4zLTMuMy0xLjItNi42LTIuNS05LjdMLTQ4MC4yLDAuMSBoMzkuN0wtNDQwLjgsMEwtNDQwLjgsMHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODIyLjc0ODEwNCwgMC4wMDAwMDApIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40NjQwNTAsIDAuMzc4OTE0KSI+CiAgICAgICAgPHBhdGggZD0iTS00MTMuNywwdjU4LjNoNTJ2MjguMmgtNTJWMTk2YzAsMjUsNywzOS41LDI3LjMsMzkuNWM3LjEsMC4xLDE0LjItMC43LDIxLjEtMi41IGwxLjcsMjcuN2MtMTAuMywzLjctMjEuMyw1LjQtMzIuMiw1Yy03LjMsMC40LTE0LjYtMC43LTIxLjMtMy40Yy02LjgtMi43LTEyLjktNi44LTE3LjktMTIuMWMtMTAuMy0xMC45LTE0LjEtMjktMTQuMS01Mi45IFY4Ni41aC0zMVY1OC4zaDMxVjkuNkwtNDEzLjcsMEwtNDEzLjcsMHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTc0LjQzMzI4NiwgNTMuNDc5NjM4KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuOTkwMDM0LCAwLjYxMDMzOSkiPgogICAgICAgIDxwYXRoIGQ9Ik0tNDQ1LjgsMTEzYzAuOCw1MCwzMi4yLDcwLjYsNjguNiw3MC42YzE5LDAuNiwzNy45LTMsNTUuMy0xMC41bDYuMiwyNi40IGMtMjAuOSw4LjktNDMuNSwxMy4xLTY2LjIsMTIuNmMtNjEuNSwwLTk4LjMtNDEuMi05OC4zLTEwMi41Qy00ODAuMiw0OC4yLTQ0NC43LDAtMzg2LjUsMGM2NS4yLDAsODIuNyw1OC4zLDgyLjcsOTUuNyBjLTAuMSw1LjgtMC41LDExLjUtMS4yLDE3LjJoLTE0MC42SC00NDUuOEwtNDQ1LjgsMTEzeiBNLTMzOS4yLDg2LjZjMC40LTIzLjUtOS41LTYwLjEtNTAuNC02MC4xIGMtMzYuOCwwLTUyLjgsMzQuNC01NS43LDYwLjFILTMzOS4yTC0zMzkuMiw4Ni42TC0zMzkuMiw4Ni42eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjAxLjk2MTA1OCwgNTMuNDc5NjM4KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuMTc5NjQwLCAwLjcwNTA2OCkiPgogICAgICAgIDxwYXRoIGQ9Ik0tNDc4LjYsNjhjMC0yMy45LTAuNC00NC41LTEuNy02My40aDMxLjhsMS4yLDM5LjloMS43YzkuMS0yNy4zLDMxLTQ0LjUsNTUuMy00NC41IGMzLjUtMC4xLDcsMC40LDEwLjMsMS4ydjM0LjhjLTQuMS0wLjktOC4yLTEuMy0xMi40LTEuMmMtMjUuNiwwLTQzLjcsMTkuNy00OC43LDQ3LjRjLTEsNS43LTEuNiwxMS41LTEuNywxNy4ydjEwOC4zaC0zNlY2OCBMLTQ3OC42LDY4eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbi13YXJuMCIgZmlsbD0iI0YzNzcyNiI+CiAgICA8cGF0aCBkPSJNMTM1Mi4zLDMyNi4yaDM3VjI4aC0zN1YzMjYuMnogTTE2MDQuOCwzMjYuMmMtMi41LTEzLjktMy40LTMxLjEtMy40LTQ4Ljd2LTc2IGMwLTQwLjctMTUuMS04My4xLTc3LjMtODMuMWMtMjUuNiwwLTUwLDcuMS02Ni44LDE4LjFsOC40LDI0LjRjMTQuMy05LjIsMzQtMTUuMSw1My0xNS4xYzQxLjYsMCw0Ni4yLDMwLjIsNDYuMiw0N3Y0LjIgYy03OC42LTAuNC0xMjIuMywyNi41LTEyMi4zLDc1LjZjMCwyOS40LDIxLDU4LjQsNjIuMiw1OC40YzI5LDAsNTAuOS0xNC4zLDYyLjItMzAuMmgxLjNsMi45LDI1LjZIMTYwNC44eiBNMTU2NS43LDI1Ny43IGMwLDMuOC0wLjgsOC0yLjEsMTEuOGMtNS45LDE3LjItMjIuNywzNC00OS4yLDM0Yy0xOC45LDAtMzQuOS0xMS4zLTM0LjktMzUuM2MwLTM5LjUsNDUuOC00Ni42LDg2LjItNDUuOFYyNTcuN3ogTTE2OTguNSwzMjYuMiBsMS43LTMzLjZoMS4zYzE1LjEsMjYuOSwzOC43LDM4LjIsNjguMSwzOC4yYzQ1LjQsMCw5MS4yLTM2LjEsOTEuMi0xMDguOGMwLjQtNjEuNy0zNS4zLTEwMy43LTg1LjctMTAzLjcgYy0zMi44LDAtNTYuMywxNC43LTY5LjMsMzcuNGgtMC44VjI4aC0zNi42djI0NS43YzAsMTguMS0wLjgsMzguNi0xLjcsNTIuNUgxNjk4LjV6IE0xNzA0LjgsMjA4LjJjMC01LjksMS4zLTEwLjksMi4xLTE1LjEgYzcuNi0yOC4xLDMxLjEtNDUuNCw1Ni4zLTQ1LjRjMzkuNSwwLDYwLjUsMzQuOSw2MC41LDc1LjZjMCw0Ni42LTIzLjEsNzguMS02MS44LDc4LjFjLTI2LjksMC00OC4zLTE3LjYtNTUuNS00My4zIGMtMC44LTQuMi0xLjctOC44LTEuNy0xMy40VjIwOC4yeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-kernel: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgZmlsbD0iIzYxNjE2MSIgZD0iTTE1IDlIOXY2aDZWOXptLTIgNGgtMnYtMmgydjJ6bTgtMlY5aC0yVjdjMC0xLjEtLjktMi0yLTJoLTJWM2gtMnYyaC0yVjNIOXYySDdjLTEuMSAwLTIgLjktMiAydjJIM3YyaDJ2MkgzdjJoMnYyYzAgMS4xLjkgMiAyIDJoMnYyaDJ2LTJoMnYyaDJ2LTJoMmMxLjEgMCAyLS45IDItMnYtMmgydi0yaC0ydi0yaDJ6bS00IDZIN1Y3aDEwdjEweiIvPgo8L3N2Zz4K);
  --jp-icon-keyboard: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMjAgNUg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMTdjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY3YzAtMS4xLS45LTItMi0yem0tOSAzaDJ2MmgtMlY4em0wIDNoMnYyaC0ydi0yek04IDhoMnYySDhWOHptMCAzaDJ2Mkg4di0yem0tMSAySDV2LTJoMnYyem0wLTNINVY4aDJ2MnptOSA3SDh2LTJoOHYyem0wLTRoLTJ2LTJoMnYyem0wLTNoLTJWOGgydjJ6bTMgM2gtMnYtMmgydjJ6bTAtM2gtMlY4aDJ2MnoiLz4KPC9zdmc+Cg==);
  --jp-icon-launcher: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkgMTlINVY1aDdWM0g1YTIgMiAwIDAwLTIgMnYxNGEyIDIgMCAwMDIgMmgxNGMxLjEgMCAyLS45IDItMnYtN2gtMnY3ek0xNCAzdjJoMy41OWwtOS44MyA5LjgzIDEuNDEgMS40MUwxOSA2LjQxVjEwaDJWM2gtN3oiLz4KPC9zdmc+Cg==);
  --jp-icon-line-form: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGZpbGw9IndoaXRlIiBkPSJNNS44OCA0LjEyTDEzLjc2IDEybC03Ljg4IDcuODhMOCAyMmwxMC0xMEw4IDJ6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-link: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTMuOSAxMmMwLTEuNzEgMS4zOS0zLjEgMy4xLTMuMWg0VjdIN2MtMi43NiAwLTUgMi4yNC01IDVzMi4yNCA1IDUgNWg0di0xLjlIN2MtMS43MSAwLTMuMS0xLjM5LTMuMS0zLjF6TTggMTNoOHYtMkg4djJ6bTktNmgtNHYxLjloNGMxLjcxIDAgMy4xIDEuMzkgMy4xIDMuMXMtMS4zOSAzLjEtMy4xIDMuMWgtNFYxN2g0YzIuNzYgMCA1LTIuMjQgNS01cy0yLjI0LTUtNS01eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-list: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiM2MTYxNjEiIGQ9Ik0xOSA1djE0SDVWNWgxNG0xLjEtMkgzLjljLS41IDAtLjkuNC0uOS45djE2LjJjMCAuNC40LjkuOS45aDE2LjJjLjQgMCAuOS0uNS45LS45VjMuOWMwLS41LS41LS45LS45LS45ek0xMSA3aDZ2MmgtNlY3em0wIDRoNnYyaC02di0yem0wIDRoNnYyaC02ek03IDdoMnYySDd6bTAgNGgydjJIN3ptMCA0aDJ2Mkg3eiIvPgo8L3N2Zz4=);
  --jp-icon-listings-info: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTAuOTc4IDUwLjk3OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTAuOTc4IDUwLjk3ODsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzAxMDAwMjsiIGQ9Ik00My41Miw3LjQ1OEMzOC43MTEsMi42NDgsMzIuMzA3LDAsMjUuNDg5LDBDMTguNjcsMCwxMi4yNjYsMi42NDgsNy40NTgsNy40NTgNCgkJCQljLTkuOTQzLDkuOTQxLTkuOTQzLDI2LjExOSwwLDM2LjA2MmM0LjgwOSw0LjgwOSwxMS4yMTIsNy40NTYsMTguMDMxLDcuNDU4YzAsMCwwLjAwMSwwLDAuMDAyLDANCgkJCQljNi44MTYsMCwxMy4yMjEtMi42NDgsMTguMDI5LTcuNDU4YzQuODA5LTQuODA5LDcuNDU3LTExLjIxMiw3LjQ1Ny0xOC4wM0M1MC45NzcsMTguNjcsNDguMzI4LDEyLjI2Niw0My41Miw3LjQ1OHoNCgkJCQkgTTQyLjEwNiw0Mi4xMDVjLTQuNDMyLDQuNDMxLTEwLjMzMiw2Ljg3Mi0xNi42MTUsNi44NzJoLTAuMDAyYy02LjI4NS0wLjAwMS0xMi4xODctMi40NDEtMTYuNjE3LTYuODcyDQoJCQkJYy05LjE2Mi05LjE2My05LjE2Mi0yNC4wNzEsMC0zMy4yMzNDMTMuMzAzLDQuNDQsMTkuMjA0LDIsMjUuNDg5LDJjNi4yODQsMCwxMi4xODYsMi40NCwxNi42MTcsNi44NzINCgkJCQljNC40MzEsNC40MzEsNi44NzEsMTAuMzMyLDYuODcxLDE2LjYxN0M0OC45NzcsMzEuNzcyLDQ2LjUzNiwzNy42NzUsNDIuMTA2LDQyLjEwNXoiLz4NCgkJPC9nPg0KCQk8Zz4NCgkJCTxwYXRoIHN0eWxlPSJmaWxsOiMwMTAwMDI7IiBkPSJNMjMuNTc4LDMyLjIxOGMtMC4wMjMtMS43MzQsMC4xNDMtMy4wNTksMC40OTYtMy45NzJjMC4zNTMtMC45MTMsMS4xMS0xLjk5NywyLjI3Mi0zLjI1Mw0KCQkJCWMwLjQ2OC0wLjUzNiwwLjkyMy0xLjA2MiwxLjM2Ny0xLjU3NWMwLjYyNi0wLjc1MywxLjEwNC0xLjQ3OCwxLjQzNi0yLjE3NWMwLjMzMS0wLjcwNywwLjQ5NS0xLjU0MSwwLjQ5NS0yLjUNCgkJCQljMC0xLjA5Ni0wLjI2LTIuMDg4LTAuNzc5LTIuOTc5Yy0wLjU2NS0wLjg3OS0xLjUwMS0xLjMzNi0yLjgwNi0xLjM2OWMtMS44MDIsMC4wNTctMi45ODUsMC42NjctMy41NSwxLjgzMg0KCQkJCWMtMC4zMDEsMC41MzUtMC41MDMsMS4xNDEtMC42MDcsMS44MTRjLTAuMTM5LDAuNzA3LTAuMjA3LDEuNDMyLTAuMjA3LDIuMTc0aC0yLjkzN2MtMC4wOTEtMi4yMDgsMC40MDctNC4xMTQsMS40OTMtNS43MTkNCgkJCQljMS4wNjItMS42NCwyLjg1NS0yLjQ4MSw1LjM3OC0yLjUyN2MyLjE2LDAuMDIzLDMuODc0LDAuNjA4LDUuMTQxLDEuNzU4YzEuMjc4LDEuMTYsMS45MjksMi43NjQsMS45NSw0LjgxMQ0KCQkJCWMwLDEuMTQyLTAuMTM3LDIuMTExLTAuNDEsMi45MTFjLTAuMzA5LDAuODQ1LTAuNzMxLDEuNTkzLTEuMjY4LDIuMjQzYy0wLjQ5MiwwLjY1LTEuMDY4LDEuMzE4LTEuNzMsMi4wMDINCgkJCQljLTAuNjUsMC42OTctMS4zMTMsMS40NzktMS45ODcsMi4zNDZjLTAuMjM5LDAuMzc3LTAuNDI5LDAuNzc3LTAuNTY1LDEuMTk5Yy0wLjE2LDAuOTU5LTAuMjE3LDEuOTUxLTAuMTcxLDIuOTc5DQoJCQkJQzI2LjU4OSwzMi4yMTgsMjMuNTc4LDMyLjIxOCwyMy41NzgsMzIuMjE4eiBNMjMuNTc4LDM4LjIydi0zLjQ4NGgzLjA3NnYzLjQ4NEgyMy41Nzh6Ii8+DQoJCTwvZz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==);
  --jp-icon-markdown: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDAganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjN0IxRkEyIiBkPSJNNSAxNC45aDEybC02LjEgNnptOS40LTYuOGMwLTEuMy0uMS0yLjktLjEtNC41LS40IDEuNC0uOSAyLjktMS4zIDQuM2wtMS4zIDQuM2gtMkw4LjUgNy45Yy0uNC0xLjMtLjctMi45LTEtNC4zLS4xIDEuNi0uMSAzLjItLjIgNC42TDcgMTIuNEg0LjhsLjctMTFoMy4zTDEwIDVjLjQgMS4yLjcgMi43IDEgMy45LjMtMS4yLjctMi42IDEtMy45bDEuMi0zLjdoMy4zbC42IDExaC0yLjRsLS4zLTQuMnoiLz4KPC9zdmc+Cg==);
  --jp-icon-new-folder: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIwIDZoLThsLTItMkg0Yy0xLjExIDAtMS45OS44OS0xLjk5IDJMMiAxOGMwIDEuMTEuODkgMiAyIDJoMTZjMS4xMSAwIDItLjg5IDItMlY4YzAtMS4xMS0uODktMi0yLTJ6bS0xIDhoLTN2M2gtMnYtM2gtM3YtMmgzVjloMnYzaDN2MnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-not-trusted: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI1IDI1Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMgMykiIGQ9Ik0xLjg2MDk0IDExLjQ0MDlDMC44MjY0NDggOC43NzAyNyAwLjg2Mzc3OSA2LjA1NzY0IDEuMjQ5MDcgNC4xOTkzMkMyLjQ4MjA2IDMuOTMzNDcgNC4wODA2OCAzLjQwMzQ3IDUuNjAxMDIgMi44NDQ5QzcuMjM1NDkgMi4yNDQ0IDguODU2NjYgMS41ODE1IDkuOTg3NiAxLjA5NTM5QzExLjA1OTcgMS41ODM0MSAxMi42MDk0IDIuMjQ0NCAxNC4yMTggMi44NDMzOUMxNS43NTAzIDMuNDEzOTQgMTcuMzk5NSAzLjk1MjU4IDE4Ljc1MzkgNC4yMTM4NUMxOS4xMzY0IDYuMDcxNzcgMTkuMTcwOSA4Ljc3NzIyIDE4LjEzOSAxMS40NDA5QzE3LjAzMDMgMTQuMzAzMiAxNC42NjY4IDE3LjE4NDQgOS45OTk5OSAxOC45MzU0QzUuMzMzMTkgMTcuMTg0NCAyLjk2OTY4IDE0LjMwMzIgMS44NjA5NCAxMS40NDA5WiIvPgogICAgPHBhdGggY2xhc3M9ImpwLWljb24yIiBzdHJva2U9IiMzMzMzMzMiIHN0cm9rZS13aWR0aD0iMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOS4zMTU5MiA5LjMyMDMxKSIgZD0iTTcuMzY4NDIgMEwwIDcuMzY0NzkiLz4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkuMzE1OTIgMTYuNjgzNikgc2NhbGUoMSAtMSkiIGQ9Ik03LjM2ODQyIDBMMCA3LjM2NDc5Ii8+Cjwvc3ZnPgo=);
  --jp-icon-notebook: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbi13YXJuMCBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiNFRjZDMDAiPgogICAgPHBhdGggZD0iTTE4LjcgMy4zdjE1LjRIMy4zVjMuM2gxNS40bTEuNS0xLjVIMS44djE4LjNoMTguM2wuMS0xOC4zeiIvPgogICAgPHBhdGggZD0iTTE2LjUgMTYuNWwtNS40LTQuMy01LjYgNC4zdi0xMWgxMXoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-palette: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE4IDEzVjIwSDRWNkg5LjAyQzkuMDcgNS4yOSA5LjI0IDQuNjIgOS41IDRINEMyLjkgNCAyIDQuOSAyIDZWMjBDMiAyMS4xIDIuOSAyMiA0IDIySDE4QzE5LjEgMjIgMjAgMjEuMSAyMCAyMFYxNUwxOCAxM1pNMTkuMyA4Ljg5QzE5Ljc0IDguMTkgMjAgNy4zOCAyMCA2LjVDMjAgNC4wMSAxNy45OSAyIDE1LjUgMkMxMy4wMSAyIDExIDQuMDEgMTEgNi41QzExIDguOTkgMTMuMDEgMTEgMTUuNDkgMTFDMTYuMzcgMTEgMTcuMTkgMTAuNzQgMTcuODggMTAuM0wyMSAxMy40MkwyMi40MiAxMkwxOS4zIDguODlaTTE1LjUgOUMxNC4xMiA5IDEzIDcuODggMTMgNi41QzEzIDUuMTIgMTQuMTIgNCAxNS41IDRDMTYuODggNCAxOCA1LjEyIDE4IDYuNUMxOCA3Ljg4IDE2Ljg4IDkgMTUuNSA5WiIvPgogICAgPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00IDZIOS4wMTg5NEM5LjAwNjM5IDYuMTY1MDIgOSA2LjMzMTc2IDkgNi41QzkgOC44MTU3NyAxMC4yMTEgMTAuODQ4NyAxMi4wMzQzIDEySDlWMTRIMTZWMTIuOTgxMUMxNi41NzAzIDEyLjkzNzcgMTcuMTIgMTIuODIwNyAxNy42Mzk2IDEyLjYzOTZMMTggMTNWMjBINFY2Wk04IDhINlYxMEg4VjhaTTYgMTJIOFYxNEg2VjEyWk04IDE2SDZWMThIOFYxNlpNOSAxNkgxNlYxOEg5VjE2WiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-paste: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTE5IDJoLTQuMThDMTQuNC44NCAxMy4zIDAgMTIgMGMtMS4zIDAtMi40Ljg0LTIuODIgMkg1Yy0xLjEgMC0yIC45LTIgMnYxNmMwIDEuMS45IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjRjMC0xLjEtLjktMi0yLTJ6bS03IDBjLjU1IDAgMSAuNDUgMSAxcy0uNDUgMS0xIDEtMS0uNDUtMS0xIC40NS0xIDEtMXptNyAxOEg1VjRoMnYzaDEwVjRoMnYxNnoiLz4KICAgIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-python: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbi1icmFuZDAganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMEQ0N0ExIj4KICAgIDxwYXRoIGQ9Ik0xMS4xIDYuOVY1LjhINi45YzAtLjUgMC0xLjMuMi0xLjYuNC0uNy44LTEuMSAxLjctMS40IDEuNy0uMyAyLjUtLjMgMy45LS4xIDEgLjEgMS45LjkgMS45IDEuOXY0LjJjMCAuNS0uOSAxLjYtMiAxLjZIOC44Yy0xLjUgMC0yLjQgMS40LTIuNCAyLjh2Mi4ySDQuN0MzLjUgMTUuMSAzIDE0IDMgMTMuMVY5Yy0uMS0xIC42LTIgMS44LTIgMS41LS4xIDYuMy0uMSA2LjMtLjF6Ii8+CiAgICA8cGF0aCBkPSJNMTAuOSAxNS4xdjEuMWg0LjJjMCAuNSAwIDEuMy0uMiAxLjYtLjQuNy0uOCAxLjEtMS43IDEuNC0xLjcuMy0yLjUuMy0zLjkuMS0xLS4xLTEuOS0uOS0xLjktMS45di00LjJjMC0uNS45LTEuNiAyLTEuNmgzLjhjMS41IDAgMi40LTEuNCAyLjQtMi44VjYuNmgxLjdDMTguNSA2LjkgMTkgOCAxOSA4LjlWMTNjMCAxLS43IDIuMS0xLjkgMi4xaC02LjJ6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-r-kernel: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMjE5NkYzIiBkPSJNNC40IDIuNWMxLjItLjEgMi45LS4zIDQuOS0uMyAyLjUgMCA0LjEuNCA1LjIgMS4zIDEgLjcgMS41IDEuOSAxLjUgMy41IDAgMi0xLjQgMy41LTIuOSA0LjEgMS4yLjQgMS43IDEuNiAyLjIgMyAuNiAxLjkgMSAzLjkgMS4zIDQuNmgtMy44Yy0uMy0uNC0uOC0xLjctMS4yLTMuN3MtMS4yLTIuNi0yLjYtMi42aC0uOXY2LjRINC40VjIuNXptMy43IDYuOWgxLjRjMS45IDAgMi45LS45IDIuOS0yLjNzLTEtMi4zLTIuOC0yLjNjLS43IDAtMS4zIDAtMS42LjJ2NC41aC4xdi0uMXoiLz4KPC9zdmc+Cg==);
  --jp-icon-react: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMTUwIDE1MCA1NDEuOSAyOTUuMyI+CiAgPGcgY2xhc3M9ImpwLWljb24tYnJhbmQyIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzYxREFGQiI+CiAgICA8cGF0aCBkPSJNNjY2LjMgMjk2LjVjMC0zMi41LTQwLjctNjMuMy0xMDMuMS04Mi40IDE0LjQtNjMuNiA4LTExNC4yLTIwLjItMTMwLjQtNi41LTMuOC0xNC4xLTUuNi0yMi40LTUuNnYyMi4zYzQuNiAwIDguMy45IDExLjQgMi42IDEzLjYgNy44IDE5LjUgMzcuNSAxNC45IDc1LjctMS4xIDkuNC0yLjkgMTkuMy01LjEgMjkuNC0xOS42LTQuOC00MS04LjUtNjMuNS0xMC45LTEzLjUtMTguNS0yNy41LTM1LjMtNDEuNi01MCAzMi42LTMwLjMgNjMuMi00Ni45IDg0LTQ2LjlWNzhjLTI3LjUgMC02My41IDE5LjYtOTkuOSA1My42LTM2LjQtMzMuOC03Mi40LTUzLjItOTkuOS01My4ydjIyLjNjMjAuNyAwIDUxLjQgMTYuNSA4NCA0Ni42LTE0IDE0LjctMjggMzEuNC00MS4zIDQ5LjktMjIuNiAyLjQtNDQgNi4xLTYzLjYgMTEtMi4zLTEwLTQtMTkuNy01LjItMjktNC43LTM4LjIgMS4xLTY3LjkgMTQuNi03NS44IDMtMS44IDYuOS0yLjYgMTEuNS0yLjZWNzguNWMtOC40IDAtMTYgMS44LTIyLjYgNS42LTI4LjEgMTYuMi0zNC40IDY2LjctMTkuOSAxMzAuMS02Mi4yIDE5LjItMTAyLjcgNDkuOS0xMDIuNyA4Mi4zIDAgMzIuNSA0MC43IDYzLjMgMTAzLjEgODIuNC0xNC40IDYzLjYtOCAxMTQuMiAyMC4yIDEzMC40IDYuNSAzLjggMTQuMSA1LjYgMjIuNSA1LjYgMjcuNSAwIDYzLjUtMTkuNiA5OS45LTUzLjYgMzYuNCAzMy44IDcyLjQgNTMuMiA5OS45IDUzLjIgOC40IDAgMTYtMS44IDIyLjYtNS42IDI4LjEtMTYuMiAzNC40LTY2LjcgMTkuOS0xMzAuMSA2Mi0xOS4xIDEwMi41LTQ5LjkgMTAyLjUtODIuM3ptLTEzMC4yLTY2LjdjLTMuNyAxMi45LTguMyAyNi4yLTEzLjUgMzkuNS00LjEtOC04LjQtMTYtMTMuMS0yNC00LjYtOC05LjUtMTUuOC0xNC40LTIzLjQgMTQuMiAyLjEgMjcuOSA0LjcgNDEgNy45em0tNDUuOCAxMDYuNWMtNy44IDEzLjUtMTUuOCAyNi4zLTI0LjEgMzguMi0xNC45IDEuMy0zMCAyLTQ1LjIgMi0xNS4xIDAtMzAuMi0uNy00NS0xLjktOC4zLTExLjktMTYuNC0yNC42LTI0LjItMzgtNy42LTEzLjEtMTQuNS0yNi40LTIwLjgtMzkuOCA2LjItMTMuNCAxMy4yLTI2LjggMjAuNy0zOS45IDcuOC0xMy41IDE1LjgtMjYuMyAyNC4xLTM4LjIgMTQuOS0xLjMgMzAtMiA0NS4yLTIgMTUuMSAwIDMwLjIuNyA0NSAxLjkgOC4zIDExLjkgMTYuNCAyNC42IDI0LjIgMzggNy42IDEzLjEgMTQuNSAyNi40IDIwLjggMzkuOC02LjMgMTMuNC0xMy4yIDI2LjgtMjAuNyAzOS45em0zMi4zLTEzYzUuNCAxMy40IDEwIDI2LjggMTMuOCAzOS44LTEzLjEgMy4yLTI2LjkgNS45LTQxLjIgOCA0LjktNy43IDkuOC0xNS42IDE0LjQtMjMuNyA0LjYtOCA4LjktMTYuMSAxMy0yNC4xek00MjEuMiA0MzBjLTkuMy05LjYtMTguNi0yMC4zLTI3LjgtMzIgOSAuNCAxOC4yLjcgMjcuNS43IDkuNCAwIDE4LjctLjIgMjcuOC0uNy05IDExLjctMTguMyAyMi40LTI3LjUgMzJ6bS03NC40LTU4LjljLTE0LjItMi4xLTI3LjktNC43LTQxLTcuOSAzLjctMTIuOSA4LjMtMjYuMiAxMy41LTM5LjUgNC4xIDggOC40IDE2IDEzLjEgMjQgNC43IDggOS41IDE1LjggMTQuNCAyMy40ek00MjAuNyAxNjNjOS4zIDkuNiAxOC42IDIwLjMgMjcuOCAzMi05LS40LTE4LjItLjctMjcuNS0uNy05LjQgMC0xOC43LjItMjcuOC43IDktMTEuNyAxOC4zLTIyLjQgMjcuNS0zMnptLTc0IDU4LjljLTQuOSA3LjctOS44IDE1LjYtMTQuNCAyMy43LTQuNiA4LTguOSAxNi0xMyAyNC01LjQtMTMuNC0xMC0yNi44LTEzLjgtMzkuOCAxMy4xLTMuMSAyNi45LTUuOCA0MS4yLTcuOXptLTkwLjUgMTI1LjJjLTM1LjQtMTUuMS01OC4zLTM0LjktNTguMy01MC42IDAtMTUuNyAyMi45LTM1LjYgNTguMy01MC42IDguNi0zLjcgMTgtNyAyNy43LTEwLjEgNS43IDE5LjYgMTMuMiA0MCAyMi41IDYwLjktOS4yIDIwLjgtMTYuNiA0MS4xLTIyLjIgNjAuNi05LjktMy4xLTE5LjMtNi41LTI4LTEwLjJ6TTMxMCA0OTBjLTEzLjYtNy44LTE5LjUtMzcuNS0xNC45LTc1LjcgMS4xLTkuNCAyLjktMTkuMyA1LjEtMjkuNCAxOS42IDQuOCA0MSA4LjUgNjMuNSAxMC45IDEzLjUgMTguNSAyNy41IDM1LjMgNDEuNiA1MC0zMi42IDMwLjMtNjMuMiA0Ni45LTg0IDQ2LjktNC41LS4xLTguMy0xLTExLjMtMi43em0yMzcuMi03Ni4yYzQuNyAzOC4yLTEuMSA2Ny45LTE0LjYgNzUuOC0zIDEuOC02LjkgMi42LTExLjUgMi42LTIwLjcgMC01MS40LTE2LjUtODQtNDYuNiAxNC0xNC43IDI4LTMxLjQgNDEuMy00OS45IDIyLjYtMi40IDQ0LTYuMSA2My42LTExIDIuMyAxMC4xIDQuMSAxOS44IDUuMiAyOS4xem0zOC41LTY2LjdjLTguNiAzLjctMTggNy0yNy43IDEwLjEtNS43LTE5LjYtMTMuMi00MC0yMi41LTYwLjkgOS4yLTIwLjggMTYuNi00MS4xIDIyLjItNjAuNiA5LjkgMy4xIDE5LjMgNi41IDI4LjEgMTAuMiAzNS40IDE1LjEgNTguMyAzNC45IDU4LjMgNTAuNi0uMSAxNS43LTIzIDM1LjYtNTguNCA1MC42ek0zMjAuOCA3OC40eiIvPgogICAgPGNpcmNsZSBjeD0iNDIwLjkiIGN5PSIyOTYuNSIgcj0iNDUuNyIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-refresh: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTkgMTMuNWMtMi40OSAwLTQuNS0yLjAxLTQuNS00LjVTNi41MSA0LjUgOSA0LjVjMS4yNCAwIDIuMzYuNTIgMy4xNyAxLjMzTDEwIDhoNVYzbC0xLjc2IDEuNzZDMTIuMTUgMy42OCAxMC42NiAzIDkgMyA1LjY5IDMgMy4wMSA1LjY5IDMuMDEgOVM1LjY5IDE1IDkgMTVjMi45NyAwIDUuNDMtMi4xNiA1LjktNWgtMS41MmMtLjQ2IDItMi4yNCAzLjUtNC4zOCAzLjV6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-regex: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0MTQxNDEiPgogICAgPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbi1hY2NlbnQyIiBmaWxsPSIjRkZGIj4KICAgIDxjaXJjbGUgY2xhc3M9InN0MiIgY3g9IjUuNSIgY3k9IjE0LjUiIHI9IjEuNSIvPgogICAgPHJlY3QgeD0iMTIiIHk9IjQiIGNsYXNzPSJzdDIiIHdpZHRoPSIxIiBoZWlnaHQ9IjgiLz4KICAgIDxyZWN0IHg9IjguNSIgeT0iNy41IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjg2NiAtMC41IDAuNSAwLjg2NiAtMi4zMjU1IDcuMzIxOSkiIGNsYXNzPSJzdDIiIHdpZHRoPSI4IiBoZWlnaHQ9IjEiLz4KICAgIDxyZWN0IHg9IjEyIiB5PSI0IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjUgLTAuODY2IDAuODY2IDAuNSAtMC42Nzc5IDE0LjgyNTIpIiBjbGFzcz0ic3QyIiB3aWR0aD0iMSIgaGVpZ2h0PSI4Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-run: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTggNXYxNGwxMS03eiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-running: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUxMiA1MTIiPgogIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICA8cGF0aCBkPSJNMjU2IDhDMTE5IDggOCAxMTkgOCAyNTZzMTExIDI0OCAyNDggMjQ4IDI0OC0xMTEgMjQ4LTI0OFMzOTMgOCAyNTYgOHptOTYgMzI4YzAgOC44LTcuMiAxNi0xNiAxNkgxNzZjLTguOCAwLTE2LTcuMi0xNi0xNlYxNzZjMC04LjggNy4yLTE2IDE2LTE2aDE2MGM4LjggMCAxNiA3LjIgMTYgMTZ2MTYweiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-save: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTE3IDNINWMtMS4xMSAwLTIgLjktMiAydjE0YzAgMS4xLjg5IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjdsLTQtNHptLTUgMTZjLTEuNjYgMC0zLTEuMzQtMy0zczEuMzQtMyAzLTMgMyAxLjM0IDMgMy0xLjM0IDMtMyAzem0zLTEwSDVWNWgxMHY0eiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-search: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyLjEsMTAuOWgtMC43bC0wLjItMC4yYzAuOC0wLjksMS4zLTIuMiwxLjMtMy41YzAtMy0yLjQtNS40LTUuNC01LjRTMS44LDQuMiwxLjgsNy4xczIuNCw1LjQsNS40LDUuNCBjMS4zLDAsMi41LTAuNSwzLjUtMS4zbDAuMiwwLjJ2MC43bDQuMSw0LjFsMS4yLTEuMkwxMi4xLDEwLjl6IE03LjEsMTAuOWMtMi4xLDAtMy43LTEuNy0zLjctMy43czEuNy0zLjcsMy43LTMuN3MzLjcsMS43LDMuNywzLjcgUzkuMiwxMC45LDcuMSwxMC45eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-settings: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkuNDMgMTIuOThjLjA0LS4zMi4wNy0uNjQuMDctLjk4cy0uMDMtLjY2LS4wNy0uOThsMi4xMS0xLjY1Yy4xOS0uMTUuMjQtLjQyLjEyLS42NGwtMi0zLjQ2Yy0uMTItLjIyLS4zOS0uMy0uNjEtLjIybC0yLjQ5IDFjLS41Mi0uNC0xLjA4LS43My0xLjY5LS45OGwtLjM4LTIuNjVBLjQ4OC40ODggMCAwMDE0IDJoLTRjLS4yNSAwLS40Ni4xOC0uNDkuNDJsLS4zOCAyLjY1Yy0uNjEuMjUtMS4xNy41OS0xLjY5Ljk4bC0yLjQ5LTFjLS4yMy0uMDktLjQ5IDAtLjYxLjIybC0yIDMuNDZjLS4xMy4yMi0uMDcuNDkuMTIuNjRsMi4xMSAxLjY1Yy0uMDQuMzItLjA3LjY1LS4wNy45OHMuMDMuNjYuMDcuOThsLTIuMTEgMS42NWMtLjE5LjE1LS4yNC40Mi0uMTIuNjRsMiAzLjQ2Yy4xMi4yMi4zOS4zLjYxLjIybDIuNDktMWMuNTIuNCAxLjA4LjczIDEuNjkuOThsLjM4IDIuNjVjLjAzLjI0LjI0LjQyLjQ5LjQyaDRjLjI1IDAgLjQ2LS4xOC40OS0uNDJsLjM4LTIuNjVjLjYxLS4yNSAxLjE3LS41OSAxLjY5LS45OGwyLjQ5IDFjLjIzLjA5LjQ5IDAgLjYxLS4yMmwyLTMuNDZjLjEyLS4yMi4wNy0uNDktLjEyLS42NGwtMi4xMS0xLjY1ek0xMiAxNS41Yy0xLjkzIDAtMy41LTEuNTctMy41LTMuNXMxLjU3LTMuNSAzLjUtMy41IDMuNSAxLjU3IDMuNSAzLjUtMS41NyAzLjUtMy41IDMuNXoiLz4KPC9zdmc+Cg==);
  --jp-icon-spreadsheet: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDEganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNENBRjUwIiBkPSJNMi4yIDIuMnYxNy42aDE3LjZWMi4ySDIuMnptMTUuNCA3LjdoLTUuNVY0LjRoNS41djUuNXpNOS45IDQuNHY1LjVINC40VjQuNGg1LjV6bS01LjUgNy43aDUuNXY1LjVINC40di01LjV6bTcuNyA1LjV2LTUuNWg1LjV2NS41aC01LjV6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-stop: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPgogICAgICAgIDxwYXRoIGQ9Ik02IDZoMTJ2MTJINnoiLz4KICAgIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-tab: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIxIDNIM2MtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxOGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yem0wIDE2SDNWNWgxMHY0aDh2MTB6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-terminal: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0IiA+CiAgICA8cmVjdCBjbGFzcz0ianAtaWNvbjIganAtaWNvbi1zZWxlY3RhYmxlIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIgMikiIGZpbGw9IiMzMzMzMzMiLz4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uLWFjY2VudDIganAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGQ9Ik01LjA1NjY0IDguNzYxNzJDNS4wNTY2NCA4LjU5NzY2IDUuMDMxMjUgOC40NTMxMiA0Ljk4MDQ3IDguMzI4MTJDNC45MzM1OSA4LjE5OTIyIDQuODU1NDcgOC4wODIwMyA0Ljc0NjA5IDcuOTc2NTZDNC42NDA2MiA3Ljg3MTA5IDQuNSA3Ljc3NTM5IDQuMzI0MjIgNy42ODk0NUM0LjE1MjM0IDcuNTk5NjEgMy45NDMzNiA3LjUxMTcyIDMuNjk3MjcgNy40MjU3OEMzLjMwMjczIDcuMjg1MTYgMi45NDMzNiA3LjEzNjcyIDIuNjE5MTQgNi45ODA0N0MyLjI5NDkyIDYuODI0MjIgMi4wMTc1OCA2LjY0MjU4IDEuNzg3MTEgNi40MzU1NUMxLjU2MDU1IDYuMjI4NTIgMS4zODQ3NyA1Ljk4ODI4IDEuMjU5NzcgNS43MTQ4NEMxLjEzNDc3IDUuNDM3NSAxLjA3MjI3IDUuMTA5MzggMS4wNzIyNyA0LjczMDQ3QzEuMDcyMjcgNC4zOTg0NCAxLjEyODkxIDQuMDk1NyAxLjI0MjE5IDMuODIyMjdDMS4zNTU0NyAzLjU0NDkyIDEuNTE1NjIgMy4zMDQ2OSAxLjcyMjY2IDMuMTAxNTZDMS45Mjk2OSAyLjg5ODQ0IDIuMTc5NjkgMi43MzQzNyAyLjQ3MjY2IDIuNjA5MzhDMi43NjU2MiAyLjQ4NDM4IDMuMDkxOCAyLjQwNDMgMy40NTExNyAyLjM2OTE0VjEuMTA5MzhINC4zODg2N1YyLjM4MDg2QzQuNzQwMjMgMi40Mjc3MyA1LjA1NjY0IDIuNTIzNDQgNS4zMzc4OSAyLjY2Nzk3QzUuNjE5MTQgMi44MTI1IDUuODU3NDIgMy4wMDE5NSA2LjA1MjczIDMuMjM2MzNDNi4yNTE5NSAzLjQ2NjggNi40MDQzIDMuNzQwMjMgNi41MDk3NyA0LjA1NjY0QzYuNjE5MTQgNC4zNjkxNCA2LjY3MzgzIDQuNzIwNyA2LjY3MzgzIDUuMTExMzNINS4wNDQ5MkM1LjA0NDkyIDQuNjM4NjcgNC45Mzc1IDQuMjgxMjUgNC43MjI2NiA0LjAzOTA2QzQuNTA3ODEgMy43OTI5NyA0LjIxNjggMy42Njk5MiAzLjg0OTYxIDMuNjY5OTJDMy42NTAzOSAzLjY2OTkyIDMuNDc2NTYgMy42OTcyNyAzLjMyODEyIDMuNzUxOTVDMy4xODM1OSAzLjgwMjczIDMuMDY0NDUgMy44NzY5NSAyLjk3MDcgMy45NzQ2MUMyLjg3Njk1IDQuMDY4MzYgMi44MDY2NCA0LjE3OTY5IDIuNzU5NzcgNC4zMDg1OUMyLjcxNjggNC40Mzc1IDIuNjk1MzEgNC41NzgxMiAyLjY5NTMxIDQuNzMwNDdDMi42OTUzMSA0Ljg4MjgxIDIuNzE2OCA1LjAxOTUzIDIuNzU5NzcgNS4xNDA2MkMyLjgwNjY0IDUuMjU3ODEgMi44ODI4MSA1LjM2NzE5IDIuOTg4MjggNS40Njg3NUMzLjA5NzY2IDUuNTcwMzEgMy4yNDAyMyA1LjY2Nzk3IDMuNDE2MDIgNS43NjE3MkMzLjU5MTggNS44NTE1NiAzLjgxMDU1IDUuOTQzMzYgNC4wNzIyNyA2LjAzNzExQzQuNDY2OCA2LjE4NTU1IDQuODI0MjIgNi4zMzk4NCA1LjE0NDUzIDYuNUM1LjQ2NDg0IDYuNjU2MjUgNS43MzgyOCA2LjgzOTg0IDUuOTY0ODQgNy4wNTA3OEM2LjE5NTMxIDcuMjU3ODEgNi4zNzEwOSA3LjUgNi40OTIxOSA3Ljc3NzM0QzYuNjE3MTkgOC4wNTA3OCA2LjY3OTY5IDguMzc1IDYuNjc5NjkgOC43NUM2LjY3OTY5IDkuMDkzNzUgNi42MjMwNSA5LjQwNDMgNi41MDk3NyA5LjY4MTY0QzYuMzk2NDggOS45NTUwOCA2LjIzNDM4IDEwLjE5MTQgNi4wMjM0NCAxMC4zOTA2QzUuODEyNSAxMC41ODk4IDUuNTU4NTkgMTAuNzUgNS4yNjE3MiAxMC44NzExQzQuOTY0ODQgMTAuOTg4MyA0LjYzMjgxIDExLjA2NDUgNC4yNjU2MiAxMS4wOTk2VjEyLjI0OEgzLjMzMzk4VjExLjA5OTZDMy4wMDE5NSAxMS4wNjg0IDIuNjc5NjkgMTAuOTk2MSAyLjM2NzE5IDEwLjg4MjhDMi4wNTQ2OSAxMC43NjU2IDEuNzc3MzQgMTAuNTk3NyAxLjUzNTE2IDEwLjM3ODlDMS4yOTY4OCAxMC4xNjAyIDEuMTA1NDcgOS44ODQ3NyAwLjk2MDkzOCA5LjU1MjczQzAuODE2NDA2IDkuMjE2OCAwLjc0NDE0MSA4LjgxNDQ1IDAuNzQ0MTQxIDguMzQ1N0gyLjM3ODkxQzIuMzc4OTEgOC42MjY5NSAyLjQxOTkyIDguODYzMjggMi41MDE5NSA5LjA1NDY5QzIuNTgzOTggOS4yNDIxOSAyLjY4OTQ1IDkuMzkyNTggMi44MTgzNiA5LjUwNTg2QzIuOTUxMTcgOS42MTUyMyAzLjEwMTU2IDkuNjkzMzYgMy4yNjk1MyA5Ljc0MDIzQzMuNDM3NSA5Ljc4NzExIDMuNjA5MzggOS44MTA1NSAzLjc4NTE2IDkuODEwNTVDNC4yMDMxMiA5LjgxMDU1IDQuNTE5NTMgOS43MTI4OSA0LjczNDM4IDkuNTE3NThDNC45NDkyMiA5LjMyMjI3IDUuMDU2NjQgOS4wNzAzMSA1LjA1NjY0IDguNzYxNzJaTTEzLjQxOCAxMi4yNzE1SDguMDc0MjJWMTFIMTMuNDE4VjEyLjI3MTVaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzLjk1MjY0IDYpIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K);
  --jp-icon-text-editor: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTUgMTVIM3YyaDEydi0yem0wLThIM3YyaDEyVjd6TTMgMTNoMTh2LTJIM3Yyem0wIDhoMTh2LTJIM3Yyek0zIDN2MmgxOFYzSDN6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-trusted: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI1Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIgMykiIGQ9Ik0xLjg2MDk0IDExLjQ0MDlDMC44MjY0NDggOC43NzAyNyAwLjg2Mzc3OSA2LjA1NzY0IDEuMjQ5MDcgNC4xOTkzMkMyLjQ4MjA2IDMuOTMzNDcgNC4wODA2OCAzLjQwMzQ3IDUuNjAxMDIgMi44NDQ5QzcuMjM1NDkgMi4yNDQ0IDguODU2NjYgMS41ODE1IDkuOTg3NiAxLjA5NTM5QzExLjA1OTcgMS41ODM0MSAxMi42MDk0IDIuMjQ0NCAxNC4yMTggMi44NDMzOUMxNS43NTAzIDMuNDEzOTQgMTcuMzk5NSAzLjk1MjU4IDE4Ljc1MzkgNC4yMTM4NUMxOS4xMzY0IDYuMDcxNzcgMTkuMTcwOSA4Ljc3NzIyIDE4LjEzOSAxMS40NDA5QzE3LjAzMDMgMTQuMzAzMiAxNC42NjY4IDE3LjE4NDQgOS45OTk5OSAxOC45MzU0QzUuMzMzMiAxNy4xODQ0IDIuOTY5NjggMTQuMzAzMiAxLjg2MDk0IDExLjQ0MDlaIi8+CiAgICA8cGF0aCBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiMzMzMzMzMiIHN0cm9rZT0iIzMzMzMzMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOCA5Ljg2NzE5KSIgZD0iTTIuODYwMTUgNC44NjUzNUwwLjcyNjU0OSAyLjk5OTU5TDAgMy42MzA0NUwyLjg2MDE1IDYuMTMxNTdMOCAwLjYzMDg3Mkw3LjI3ODU3IDBMMi44NjAxNSA0Ljg2NTM1WiIvPgo8L3N2Zz4K);
  --jp-icon-undo: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyLjUgOGMtMi42NSAwLTUuMDUuOTktNi45IDIuNkwyIDd2OWg5bC0zLjYyLTMuNjJjMS4zOS0xLjE2IDMuMTYtMS44OCA1LjEyLTEuODggMy41NCAwIDYuNTUgMi4zMSA3LjYgNS41bDIuMzctLjc4QzIxLjA4IDExLjAzIDE3LjE1IDggMTIuNSA4eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-vega: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbjEganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMjEyMTIxIj4KICAgIDxwYXRoIGQ9Ik0xMC42IDUuNGwyLjItMy4ySDIuMnY3LjNsNC02LjZ6Ii8+CiAgICA8cGF0aCBkPSJNMTUuOCAyLjJsLTQuNCA2LjZMNyA2LjNsLTQuOCA4djUuNWgxNy42VjIuMmgtNHptLTcgMTUuNEg1LjV2LTQuNGgzLjN2NC40em00LjQgMEg5LjhWOS44aDMuNHY3Ljh6bTQuNCAwaC0zLjRWNi41aDMuNHYxMS4xeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-yaml: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbi1jb250cmFzdDIganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjRDgxQjYwIj4KICAgIDxwYXRoIGQ9Ik03LjIgMTguNnYtNS40TDMgNS42aDMuM2wxLjQgMy4xYy4zLjkuNiAxLjYgMSAyLjUuMy0uOC42LTEuNiAxLTIuNWwxLjQtMy4xaDMuNGwtNC40IDcuNnY1LjVsLTIuOS0uMXoiLz4KICAgIDxjaXJjbGUgY2xhc3M9InN0MCIgY3g9IjE3LjYiIGN5PSIxNi41IiByPSIyLjEiLz4KICAgIDxjaXJjbGUgY2xhc3M9InN0MCIgY3g9IjE3LjYiIGN5PSIxMSIgcj0iMi4xIi8+CiAgPC9nPgo8L3N2Zz4K);
}

/* Icon CSS class declarations */

.jp-AddIcon {
  background-image: var(--jp-icon-add);
}
.jp-BugIcon {
  background-image: var(--jp-icon-bug);
}
.jp-BuildIcon {
  background-image: var(--jp-icon-build);
}
.jp-CaretDownEmptyIcon {
  background-image: var(--jp-icon-caret-down-empty);
}
.jp-CaretDownEmptyThinIcon {
  background-image: var(--jp-icon-caret-down-empty-thin);
}
.jp-CaretDownIcon {
  background-image: var(--jp-icon-caret-down);
}
.jp-CaretLeftIcon {
  background-image: var(--jp-icon-caret-left);
}
.jp-CaretRightIcon {
  background-image: var(--jp-icon-caret-right);
}
.jp-CaretUpEmptyThinIcon {
  background-image: var(--jp-icon-caret-up-empty-thin);
}
.jp-CaretUpIcon {
  background-image: var(--jp-icon-caret-up);
}
.jp-CaseSensitiveIcon {
  background-image: var(--jp-icon-case-sensitive);
}
.jp-CheckIcon {
  background-image: var(--jp-icon-check);
}
.jp-CircleEmptyIcon {
  background-image: var(--jp-icon-circle-empty);
}
.jp-CircleIcon {
  background-image: var(--jp-icon-circle);
}
.jp-ClearIcon {
  background-image: var(--jp-icon-clear);
}
.jp-CloseIcon {
  background-image: var(--jp-icon-close);
}
.jp-ConsoleIcon {
  background-image: var(--jp-icon-console);
}
.jp-CopyIcon {
  background-image: var(--jp-icon-copy);
}
.jp-CutIcon {
  background-image: var(--jp-icon-cut);
}
.jp-DownloadIcon {
  background-image: var(--jp-icon-download);
}
.jp-EditIcon {
  background-image: var(--jp-icon-edit);
}
.jp-EllipsesIcon {
  background-image: var(--jp-icon-ellipses);
}
.jp-ExtensionIcon {
  background-image: var(--jp-icon-extension);
}
.jp-FastForwardIcon {
  background-image: var(--jp-icon-fast-forward);
}
.jp-FileIcon {
  background-image: var(--jp-icon-file);
}
.jp-FileUploadIcon {
  background-image: var(--jp-icon-file-upload);
}
.jp-FilterListIcon {
  background-image: var(--jp-icon-filter-list);
}
.jp-FolderIcon {
  background-image: var(--jp-icon-folder);
}
.jp-Html5Icon {
  background-image: var(--jp-icon-html5);
}
.jp-ImageIcon {
  background-image: var(--jp-icon-image);
}
.jp-InspectorIcon {
  background-image: var(--jp-icon-inspector);
}
.jp-JsonIcon {
  background-image: var(--jp-icon-json);
}
.jp-JupyterFaviconIcon {
  background-image: var(--jp-icon-jupyter-favicon);
}
.jp-JupyterIcon {
  background-image: var(--jp-icon-jupyter);
}
.jp-JupyterlabWordmarkIcon {
  background-image: var(--jp-icon-jupyterlab-wordmark);
}
.jp-KernelIcon {
  background-image: var(--jp-icon-kernel);
}
.jp-KeyboardIcon {
  background-image: var(--jp-icon-keyboard);
}
.jp-LauncherIcon {
  background-image: var(--jp-icon-launcher);
}
.jp-LineFormIcon {
  background-image: var(--jp-icon-line-form);
}
.jp-LinkIcon {
  background-image: var(--jp-icon-link);
}
.jp-ListIcon {
  background-image: var(--jp-icon-list);
}
.jp-ListingsInfoIcon {
  background-image: var(--jp-icon-listings-info);
}
.jp-MarkdownIcon {
  background-image: var(--jp-icon-markdown);
}
.jp-NewFolderIcon {
  background-image: var(--jp-icon-new-folder);
}
.jp-NotTrustedIcon {
  background-image: var(--jp-icon-not-trusted);
}
.jp-NotebookIcon {
  background-image: var(--jp-icon-notebook);
}
.jp-PaletteIcon {
  background-image: var(--jp-icon-palette);
}
.jp-PasteIcon {
  background-image: var(--jp-icon-paste);
}
.jp-PythonIcon {
  background-image: var(--jp-icon-python);
}
.jp-RKernelIcon {
  background-image: var(--jp-icon-r-kernel);
}
.jp-ReactIcon {
  background-image: var(--jp-icon-react);
}
.jp-RefreshIcon {
  background-image: var(--jp-icon-refresh);
}
.jp-RegexIcon {
  background-image: var(--jp-icon-regex);
}
.jp-RunIcon {
  background-image: var(--jp-icon-run);
}
.jp-RunningIcon {
  background-image: var(--jp-icon-running);
}
.jp-SaveIcon {
  background-image: var(--jp-icon-save);
}
.jp-SearchIcon {
  background-image: var(--jp-icon-search);
}
.jp-SettingsIcon {
  background-image: var(--jp-icon-settings);
}
.jp-SpreadsheetIcon {
  background-image: var(--jp-icon-spreadsheet);
}
.jp-StopIcon {
  background-image: var(--jp-icon-stop);
}
.jp-TabIcon {
  background-image: var(--jp-icon-tab);
}
.jp-TerminalIcon {
  background-image: var(--jp-icon-terminal);
}
.jp-TextEditorIcon {
  background-image: var(--jp-icon-text-editor);
}
.jp-TrustedIcon {
  background-image: var(--jp-icon-trusted);
}
.jp-UndoIcon {
  background-image: var(--jp-icon-undo);
}
.jp-VegaIcon {
  background-image: var(--jp-icon-vega);
}
.jp-YamlIcon {
  background-image: var(--jp-icon-yaml);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * (DEPRECATED) Support for consuming icons as CSS background images
 */

:root {
  --jp-icon-search-white: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyLjEsMTAuOWgtMC43bC0wLjItMC4yYzAuOC0wLjksMS4zLTIuMiwxLjMtMy41YzAtMy0yLjQtNS40LTUuNC01LjRTMS44LDQuMiwxLjgsNy4xczIuNCw1LjQsNS40LDUuNCBjMS4zLDAsMi41LTAuNSwzLjUtMS4zbDAuMiwwLjJ2MC43bDQuMSw0LjFsMS4yLTEuMkwxMi4xLDEwLjl6IE03LjEsMTAuOWMtMi4xLDAtMy43LTEuNy0zLjctMy43czEuNy0zLjcsMy43LTMuN3MzLjcsMS43LDMuNywzLjcgUzkuMiwxMC45LDcuMSwxMC45eiIvPgogIDwvZz4KPC9zdmc+Cg==);
}

.jp-Icon,
.jp-MaterialIcon {
  background-position: center;
  background-repeat: no-repeat;
  background-size: 16px;
  min-width: 16px;
  min-height: 16px;
}

.jp-Icon-cover {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/**
 * (DEPRECATED) Support for specific CSS icon sizes
 */

.jp-Icon-16 {
  background-size: 16px;
  min-width: 16px;
  min-height: 16px;
}

.jp-Icon-18 {
  background-size: 18px;
  min-width: 18px;
  min-height: 18px;
}

.jp-Icon-20 {
  background-size: 20px;
  min-width: 20px;
  min-height: 20px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * Support for icons as inline SVG HTMLElements
 */

/* recolor the primary elements of an icon */
.jp-icon0[fill] {
  fill: var(--jp-inverse-layout-color0);
}
.jp-icon1[fill] {
  fill: var(--jp-inverse-layout-color1);
}
.jp-icon2[fill] {
  fill: var(--jp-inverse-layout-color2);
}
.jp-icon3[fill] {
  fill: var(--jp-inverse-layout-color3);
}
.jp-icon4[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon0[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}
.jp-icon1[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}
.jp-icon2[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}
.jp-icon3[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}
.jp-icon4[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}
/* recolor the accent elements of an icon */
.jp-icon-accent0[fill] {
  fill: var(--jp-layout-color0);
}
.jp-icon-accent1[fill] {
  fill: var(--jp-layout-color1);
}
.jp-icon-accent2[fill] {
  fill: var(--jp-layout-color2);
}
.jp-icon-accent3[fill] {
  fill: var(--jp-layout-color3);
}
.jp-icon-accent4[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-accent0[stroke] {
  stroke: var(--jp-layout-color0);
}
.jp-icon-accent1[stroke] {
  stroke: var(--jp-layout-color1);
}
.jp-icon-accent2[stroke] {
  stroke: var(--jp-layout-color2);
}
.jp-icon-accent3[stroke] {
  stroke: var(--jp-layout-color3);
}
.jp-icon-accent4[stroke] {
  stroke: var(--jp-layout-color4);
}
/* set the color of an icon to transparent */
.jp-icon-none[fill] {
  fill: none;
}

.jp-icon-none[stroke] {
  stroke: none;
}
/* brand icon colors. Same for light and dark */
.jp-icon-brand0[fill] {
  fill: var(--jp-brand-color0);
}
.jp-icon-brand1[fill] {
  fill: var(--jp-brand-color1);
}
.jp-icon-brand2[fill] {
  fill: var(--jp-brand-color2);
}
.jp-icon-brand3[fill] {
  fill: var(--jp-brand-color3);
}
.jp-icon-brand4[fill] {
  fill: var(--jp-brand-color4);
}

.jp-icon-brand0[stroke] {
  stroke: var(--jp-brand-color0);
}
.jp-icon-brand1[stroke] {
  stroke: var(--jp-brand-color1);
}
.jp-icon-brand2[stroke] {
  stroke: var(--jp-brand-color2);
}
.jp-icon-brand3[stroke] {
  stroke: var(--jp-brand-color3);
}
.jp-icon-brand4[stroke] {
  stroke: var(--jp-brand-color4);
}
/* warn icon colors. Same for light and dark */
.jp-icon-warn0[fill] {
  fill: var(--jp-warn-color0);
}
.jp-icon-warn1[fill] {
  fill: var(--jp-warn-color1);
}
.jp-icon-warn2[fill] {
  fill: var(--jp-warn-color2);
}
.jp-icon-warn3[fill] {
  fill: var(--jp-warn-color3);
}

.jp-icon-warn0[stroke] {
  stroke: var(--jp-warn-color0);
}
.jp-icon-warn1[stroke] {
  stroke: var(--jp-warn-color1);
}
.jp-icon-warn2[stroke] {
  stroke: var(--jp-warn-color2);
}
.jp-icon-warn3[stroke] {
  stroke: var(--jp-warn-color3);
}
/* icon colors that contrast well with each other and most backgrounds */
.jp-icon-contrast0[fill] {
  fill: var(--jp-icon-contrast-color0);
}
.jp-icon-contrast1[fill] {
  fill: var(--jp-icon-contrast-color1);
}
.jp-icon-contrast2[fill] {
  fill: var(--jp-icon-contrast-color2);
}
.jp-icon-contrast3[fill] {
  fill: var(--jp-icon-contrast-color3);
}

.jp-icon-contrast0[stroke] {
  stroke: var(--jp-icon-contrast-color0);
}
.jp-icon-contrast1[stroke] {
  stroke: var(--jp-icon-contrast-color1);
}
.jp-icon-contrast2[stroke] {
  stroke: var(--jp-icon-contrast-color2);
}
.jp-icon-contrast3[stroke] {
  stroke: var(--jp-icon-contrast-color3);
}

/* CSS for icons in selected items in the settings editor */
#setting-editor .jp-PluginList .jp-mod-selected .jp-icon-selectable[fill] {
  fill: #fff;
}
#setting-editor
  .jp-PluginList
  .jp-mod-selected
  .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}

/* CSS for icons in selected filebrowser listing items */
.jp-DirListing-item.jp-mod-selected .jp-icon-selectable[fill] {
  fill: #fff;
}
.jp-DirListing-item.jp-mod-selected .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}

/* CSS for icons in selected tabs in the sidebar tab manager */
#tab-manager .lm-TabBar-tab.jp-mod-active .jp-icon-selectable[fill] {
  fill: #fff;
}

#tab-manager .lm-TabBar-tab.jp-mod-active .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}
#tab-manager
  .lm-TabBar-tab.jp-mod-active
  .jp-icon-hover
  :hover
  .jp-icon-selectable[fill] {
  fill: var(--jp-brand-color1);
}

#tab-manager
  .lm-TabBar-tab.jp-mod-active
  .jp-icon-hover
  :hover
  .jp-icon-selectable-inverse[fill] {
  fill: #fff;
}

/**
 * TODO: come up with non css-hack solution for showing the busy icon on top
 *  of the close icon
 * CSS for complex behavior of close icon of tabs in the sidebar tab manager
 */
#tab-manager
  .lm-TabBar-tab.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon3[fill] {
  fill: none;
}
#tab-manager
  .lm-TabBar-tab.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon-busy[fill] {
  fill: var(--jp-inverse-layout-color3);
}

#tab-manager
  .lm-TabBar-tab.jp-mod-dirty.jp-mod-active
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon-busy[fill] {
  fill: #fff;
}

/**
* TODO: come up with non css-hack solution for showing the busy icon on top
*  of the close icon
* CSS for complex behavior of close icon of tabs in the main area tabbar
*/
.lm-DockPanel-tabBar
  .lm-TabBar-tab.lm-mod-closable.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon3[fill] {
  fill: none;
}
.lm-DockPanel-tabBar
  .lm-TabBar-tab.lm-mod-closable.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon-busy[fill] {
  fill: var(--jp-inverse-layout-color3);
}

/* CSS for icons in status bar */
#jp-main-statusbar .jp-mod-selected .jp-icon-selectable[fill] {
  fill: #fff;
}

#jp-main-statusbar .jp-mod-selected .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}
/* special handling for splash icon CSS. While the theme CSS reloads during
   splash, the splash icon can loose theming. To prevent that, we set a
   default for its color variable */
:root {
  --jp-warn-color0: var(--md-orange-700);
}

/* not sure what to do with this one, used in filebrowser listing */
.jp-DragIcon {
  margin-right: 4px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * Support for alt colors for icons as inline SVG HTMLElements
 */

/* alt recolor the primary elements of an icon */
.jp-icon-alt .jp-icon0[fill] {
  fill: var(--jp-layout-color0);
}
.jp-icon-alt .jp-icon1[fill] {
  fill: var(--jp-layout-color1);
}
.jp-icon-alt .jp-icon2[fill] {
  fill: var(--jp-layout-color2);
}
.jp-icon-alt .jp-icon3[fill] {
  fill: var(--jp-layout-color3);
}
.jp-icon-alt .jp-icon4[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-alt .jp-icon0[stroke] {
  stroke: var(--jp-layout-color0);
}
.jp-icon-alt .jp-icon1[stroke] {
  stroke: var(--jp-layout-color1);
}
.jp-icon-alt .jp-icon2[stroke] {
  stroke: var(--jp-layout-color2);
}
.jp-icon-alt .jp-icon3[stroke] {
  stroke: var(--jp-layout-color3);
}
.jp-icon-alt .jp-icon4[stroke] {
  stroke: var(--jp-layout-color4);
}

/* alt recolor the accent elements of an icon */
.jp-icon-alt .jp-icon-accent0[fill] {
  fill: var(--jp-inverse-layout-color0);
}
.jp-icon-alt .jp-icon-accent1[fill] {
  fill: var(--jp-inverse-layout-color1);
}
.jp-icon-alt .jp-icon-accent2[fill] {
  fill: var(--jp-inverse-layout-color2);
}
.jp-icon-alt .jp-icon-accent3[fill] {
  fill: var(--jp-inverse-layout-color3);
}
.jp-icon-alt .jp-icon-accent4[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-alt .jp-icon-accent0[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}
.jp-icon-alt .jp-icon-accent1[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}
.jp-icon-alt .jp-icon-accent2[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}
.jp-icon-alt .jp-icon-accent3[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}
.jp-icon-alt .jp-icon-accent4[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-icon-hoverShow:not(:hover) svg {
  display: none !important;
}

/**
 * Support for hover colors for icons as inline SVG HTMLElements
 */

/**
 * regular colors
 */

/* recolor the primary elements of an icon */
.jp-icon-hover :hover .jp-icon0-hover[fill] {
  fill: var(--jp-inverse-layout-color0);
}
.jp-icon-hover :hover .jp-icon1-hover[fill] {
  fill: var(--jp-inverse-layout-color1);
}
.jp-icon-hover :hover .jp-icon2-hover[fill] {
  fill: var(--jp-inverse-layout-color2);
}
.jp-icon-hover :hover .jp-icon3-hover[fill] {
  fill: var(--jp-inverse-layout-color3);
}
.jp-icon-hover :hover .jp-icon4-hover[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-hover :hover .jp-icon0-hover[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}
.jp-icon-hover :hover .jp-icon1-hover[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}
.jp-icon-hover :hover .jp-icon2-hover[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}
.jp-icon-hover :hover .jp-icon3-hover[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}
.jp-icon-hover :hover .jp-icon4-hover[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/* recolor the accent elements of an icon */
.jp-icon-hover :hover .jp-icon-accent0-hover[fill] {
  fill: var(--jp-layout-color0);
}
.jp-icon-hover :hover .jp-icon-accent1-hover[fill] {
  fill: var(--jp-layout-color1);
}
.jp-icon-hover :hover .jp-icon-accent2-hover[fill] {
  fill: var(--jp-layout-color2);
}
.jp-icon-hover :hover .jp-icon-accent3-hover[fill] {
  fill: var(--jp-layout-color3);
}
.jp-icon-hover :hover .jp-icon-accent4-hover[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-hover :hover .jp-icon-accent0-hover[stroke] {
  stroke: var(--jp-layout-color0);
}
.jp-icon-hover :hover .jp-icon-accent1-hover[stroke] {
  stroke: var(--jp-layout-color1);
}
.jp-icon-hover :hover .jp-icon-accent2-hover[stroke] {
  stroke: var(--jp-layout-color2);
}
.jp-icon-hover :hover .jp-icon-accent3-hover[stroke] {
  stroke: var(--jp-layout-color3);
}
.jp-icon-hover :hover .jp-icon-accent4-hover[stroke] {
  stroke: var(--jp-layout-color4);
}

/* set the color of an icon to transparent */
.jp-icon-hover :hover .jp-icon-none-hover[fill] {
  fill: none;
}

.jp-icon-hover :hover .jp-icon-none-hover[stroke] {
  stroke: none;
}

/**
 * inverse colors
 */

/* inverse recolor the primary elements of an icon */
.jp-icon-hover.jp-icon-alt :hover .jp-icon0-hover[fill] {
  fill: var(--jp-layout-color0);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon1-hover[fill] {
  fill: var(--jp-layout-color1);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon2-hover[fill] {
  fill: var(--jp-layout-color2);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon3-hover[fill] {
  fill: var(--jp-layout-color3);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon4-hover[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon0-hover[stroke] {
  stroke: var(--jp-layout-color0);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon1-hover[stroke] {
  stroke: var(--jp-layout-color1);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon2-hover[stroke] {
  stroke: var(--jp-layout-color2);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon3-hover[stroke] {
  stroke: var(--jp-layout-color3);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon4-hover[stroke] {
  stroke: var(--jp-layout-color4);
}

/* inverse recolor the accent elements of an icon */
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent0-hover[fill] {
  fill: var(--jp-inverse-layout-color0);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent1-hover[fill] {
  fill: var(--jp-inverse-layout-color1);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent2-hover[fill] {
  fill: var(--jp-inverse-layout-color2);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent3-hover[fill] {
  fill: var(--jp-inverse-layout-color3);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent4-hover[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent0-hover[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent1-hover[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent2-hover[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent3-hover[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent4-hover[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* Sibling imports */

/* Override Blueprint's _reset.scss styles */
html {
  box-sizing: unset;
}

*,
*::before,
*::after {
  box-sizing: unset;
}

body {
  color: unset;
  font-family: var(--jp-ui-font-family);
}

p {
  margin-top: unset;
  margin-bottom: unset;
}

small {
  font-size: unset;
}

strong {
  font-weight: unset;
}

/* Override Blueprint's _typography.scss styles */
a {
  text-decoration: unset;
  color: unset;
}
a:hover {
  text-decoration: unset;
  color: unset;
}

/* Override Blueprint's _accessibility.scss styles */
:focus {
  outline: unset;
  outline-offset: unset;
  -moz-outline-radius: unset;
}

/* Styles for ui-components */
.jp-Button {
  border-radius: var(--jp-border-radius);
  padding: 0px 12px;
  font-size: var(--jp-ui-font-size1);
}

/* Use our own theme for hover styles */
button.jp-Button.bp3-button.bp3-minimal:hover {
  background-color: var(--jp-layout-color2);
}
.jp-Button.minimal {
  color: unset !important;
}

.jp-Button.jp-ToolbarButtonComponent {
  text-transform: none;
}

.jp-InputGroup input {
  box-sizing: border-box;
  border-radius: 0;
  background-color: transparent;
  color: var(--jp-ui-font-color0);
  box-shadow: inset 0 0 0 var(--jp-border-width) var(--jp-input-border-color);
}

.jp-InputGroup input:focus {
  box-shadow: inset 0 0 0 var(--jp-border-width)
      var(--jp-input-active-box-shadow-color),
    inset 0 0 0 3px var(--jp-input-active-box-shadow-color);
}

.jp-InputGroup input::placeholder,
input::placeholder {
  color: var(--jp-ui-font-color3);
}

.jp-BPIcon {
  display: inline-block;
  vertical-align: middle;
  margin: auto;
}

/* Stop blueprint futzing with our icon fills */
.bp3-icon.jp-BPIcon > svg:not([fill]) {
  fill: var(--jp-inverse-layout-color3);
}

.jp-InputGroupAction {
  padding: 6px;
}

.jp-HTMLSelect.jp-DefaultStyle select {
  background-color: initial;
  border: none;
  border-radius: 0;
  box-shadow: none;
  color: var(--jp-ui-font-color0);
  display: block;
  font-size: var(--jp-ui-font-size1);
  height: 24px;
  line-height: 14px;
  padding: 0 25px 0 10px;
  text-align: left;
  -moz-appearance: none;
  -webkit-appearance: none;
}

/* Use our own theme for hover and option styles */
.jp-HTMLSelect.jp-DefaultStyle select:hover,
.jp-HTMLSelect.jp-DefaultStyle select > option {
  background-color: var(--jp-layout-color2);
  color: var(--jp-ui-font-color0);
}
select {
  box-sizing: border-box;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Collapse {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  border-top: 1px solid var(--jp-border-color2);
  border-bottom: 1px solid var(--jp-border-color2);
}

.jp-Collapse-header {
  padding: 1px 12px;
  color: var(--jp-ui-font-color1);
  background-color: var(--jp-layout-color1);
  font-size: var(--jp-ui-font-size2);
}

.jp-Collapse-header:hover {
  background-color: var(--jp-layout-color2);
}

.jp-Collapse-contents {
  padding: 0px 12px 0px 12px;
  background-color: var(--jp-layout-color1);
  color: var(--jp-ui-font-color1);
  overflow: auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-commandpalette-search-height: 28px;
}

/*-----------------------------------------------------------------------------
| Overall styles
|----------------------------------------------------------------------------*/

.lm-CommandPalette {
  padding-bottom: 0px;
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);
  /* This is needed so that all font sizing of children done in ems is
   * relative to this base size */
  font-size: var(--jp-ui-font-size1);
}

/*-----------------------------------------------------------------------------
| Search
|----------------------------------------------------------------------------*/

.lm-CommandPalette-search {
  padding: 4px;
  background-color: var(--jp-layout-color1);
  z-index: 2;
}

.lm-CommandPalette-wrapper {
  overflow: overlay;
  padding: 0px 9px;
  background-color: var(--jp-input-active-background);
  height: 30px;
  box-shadow: inset 0 0 0 var(--jp-border-width) var(--jp-input-border-color);
}

.lm-CommandPalette.lm-mod-focused .lm-CommandPalette-wrapper {
  box-shadow: inset 0 0 0 1px var(--jp-input-active-box-shadow-color),
    inset 0 0 0 3px var(--jp-input-active-box-shadow-color);
}

.lm-CommandPalette-wrapper::after {
  content: ' ';
  color: white;
  background-color: var(--jp-brand-color1);
  position: absolute;
  top: 4px;
  right: 4px;
  height: 30px;
  width: 10px;
  padding: 0px 10px;
  background-image: var(--jp-icon-search-white);
  background-size: 20px;
  background-repeat: no-repeat;
  background-position: center;
}

.lm-CommandPalette-input {
  background: transparent;
  width: calc(100% - 18px);
  float: left;
  border: none;
  outline: none;
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  line-height: var(--jp-private-commandpalette-search-height);
}

.lm-CommandPalette-input::-webkit-input-placeholder,
.lm-CommandPalette-input::-moz-placeholder,
.lm-CommandPalette-input:-ms-input-placeholder {
  color: var(--jp-ui-font-color3);
  font-size: var(--jp-ui-font-size1);
}

/*-----------------------------------------------------------------------------
| Results
|----------------------------------------------------------------------------*/

.lm-CommandPalette-header:first-child {
  margin-top: 0px;
}

.lm-CommandPalette-header {
  border-bottom: solid var(--jp-border-width) var(--jp-border-color2);
  color: var(--jp-ui-font-color1);
  cursor: pointer;
  display: flex;
  font-size: var(--jp-ui-font-size0);
  font-weight: 600;
  letter-spacing: 1px;
  margin-top: 8px;
  padding: 8px 0 8px 12px;
  text-transform: uppercase;
}

.lm-CommandPalette-header.lm-mod-active {
  background: var(--jp-layout-color2);
}

.lm-CommandPalette-header > mark {
  background-color: transparent;
  font-weight: bold;
  color: var(--jp-ui-font-color1);
}

.lm-CommandPalette-item {
  padding: 4px 12px 4px 4px;
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
  font-weight: 400;
  display: flex;
}

.lm-CommandPalette-item.lm-mod-disabled {
  color: var(--jp-ui-font-color3);
}

.lm-CommandPalette-item.lm-mod-active {
  background: var(--jp-layout-color3);
}

.lm-CommandPalette-item.lm-mod-active:hover:not(.lm-mod-disabled) {
  background: var(--jp-layout-color4);
}

.lm-CommandPalette-item:hover:not(.lm-mod-active):not(.lm-mod-disabled) {
  background: var(--jp-layout-color2);
}

.lm-CommandPalette-itemContent {
  overflow: hidden;
}

.lm-CommandPalette-itemLabel > mark {
  color: var(--jp-ui-font-color0);
  background-color: transparent;
  font-weight: bold;
}

.lm-CommandPalette-item.lm-mod-disabled mark {
  color: var(--jp-ui-font-color3);
}

.lm-CommandPalette-item .lm-CommandPalette-itemIcon {
  margin: 0 4px 0 0;
  position: relative;
  width: 16px;
  top: 2px;
  flex: 0 0 auto;
}

.lm-CommandPalette-item.lm-mod-disabled .lm-CommandPalette-itemIcon {
  opacity: 0.4;
}

.lm-CommandPalette-item .lm-CommandPalette-itemShortcut {
  flex: 0 0 auto;
}

.lm-CommandPalette-itemCaption {
  display: none;
}

.lm-CommandPalette-content {
  background-color: var(--jp-layout-color1);
}

.lm-CommandPalette-content:empty:after {
  content: 'No results';
  margin: auto;
  margin-top: 20px;
  width: 100px;
  display: block;
  font-size: var(--jp-ui-font-size2);
  font-family: var(--jp-ui-font-family);
  font-weight: lighter;
}

.lm-CommandPalette-emptyMessage {
  text-align: center;
  margin-top: 24px;
  line-height: 1.32;
  padding: 0px 8px;
  color: var(--jp-content-font-color3);
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Dialog {
  position: absolute;
  z-index: 10000;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  top: 0px;
  left: 0px;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background: var(--jp-dialog-background);
}

.jp-Dialog-content {
  display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
  background: var(--jp-layout-color1);
  padding: 24px;
  padding-bottom: 12px;
  min-width: 300px;
  min-height: 150px;
  max-width: 1000px;
  max-height: 500px;
  box-sizing: border-box;
  box-shadow: var(--jp-elevation-z20);
  word-wrap: break-word;
  border-radius: var(--jp-border-radius);
  /* This is needed so that all font sizing of children done in ems is
   * relative to this base size */
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color1);
}

.jp-Dialog-button {
  overflow: visible;
}

button.jp-Dialog-button:focus {
  outline: 1px solid var(--jp-brand-color1);
  outline-offset: 4px;
  -moz-outline-radius: 0px;
}

button.jp-Dialog-button:focus::-moz-focus-inner {
  border: 0;
}

.jp-Dialog-header {
  flex: 0 0 auto;
  padding-bottom: 12px;
  font-size: var(--jp-ui-font-size3);
  font-weight: 400;
  color: var(--jp-ui-font-color0);
}

.jp-Dialog-body {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  font-size: var(--jp-ui-font-size1);
  background: var(--jp-layout-color1);
  overflow: auto;
}

.jp-Dialog-footer {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  flex: 0 0 auto;
  margin-left: -12px;
  margin-right: -12px;
  padding: 12px;
}

.jp-Dialog-title {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.jp-Dialog-body > .jp-select-wrapper {
  width: 100%;
}

.jp-Dialog-body > button {
  padding: 0px 16px;
}

.jp-Dialog-body > label {
  line-height: 1.4;
  color: var(--jp-ui-font-color0);
}

.jp-Dialog-button.jp-mod-styled:not(:last-child) {
  margin-right: 12px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-HoverBox {
  position: fixed;
}

.jp-HoverBox.jp-mod-outofview {
  display: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-IFrame {
  width: 100%;
  height: 100%;
}

.jp-IFrame > iframe {
  border: none;
}

/*
When drag events occur, `p-mod-override-cursor` is added to the body.
Because iframes steal all cursor events, the following two rules are necessary
to suppress pointer events while resize drags are occurring. There may be a
better solution to this problem.
*/
body.lm-mod-override-cursor .jp-IFrame {
  position: relative;
}

body.lm-mod-override-cursor .jp-IFrame:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-MainAreaWidget > :focus {
  outline: none;
}

/**
 * google-material-color v1.2.6
 * https://github.com/danlevan/google-material-color
 */
:root {
  --md-red-50: #ffebee;
  --md-red-100: #ffcdd2;
  --md-red-200: #ef9a9a;
  --md-red-300: #e57373;
  --md-red-400: #ef5350;
  --md-red-500: #f44336;
  --md-red-600: #e53935;
  --md-red-700: #d32f2f;
  --md-red-800: #c62828;
  --md-red-900: #b71c1c;
  --md-red-A100: #ff8a80;
  --md-red-A200: #ff5252;
  --md-red-A400: #ff1744;
  --md-red-A700: #d50000;

  --md-pink-50: #fce4ec;
  --md-pink-100: #f8bbd0;
  --md-pink-200: #f48fb1;
  --md-pink-300: #f06292;
  --md-pink-400: #ec407a;
  --md-pink-500: #e91e63;
  --md-pink-600: #d81b60;
  --md-pink-700: #c2185b;
  --md-pink-800: #ad1457;
  --md-pink-900: #880e4f;
  --md-pink-A100: #ff80ab;
  --md-pink-A200: #ff4081;
  --md-pink-A400: #f50057;
  --md-pink-A700: #c51162;

  --md-purple-50: #f3e5f5;
  --md-purple-100: #e1bee7;
  --md-purple-200: #ce93d8;
  --md-purple-300: #ba68c8;
  --md-purple-400: #ab47bc;
  --md-purple-500: #9c27b0;
  --md-purple-600: #8e24aa;
  --md-purple-700: #7b1fa2;
  --md-purple-800: #6a1b9a;
  --md-purple-900: #4a148c;
  --md-purple-A100: #ea80fc;
  --md-purple-A200: #e040fb;
  --md-purple-A400: #d500f9;
  --md-purple-A700: #aa00ff;

  --md-deep-purple-50: #ede7f6;
  --md-deep-purple-100: #d1c4e9;
  --md-deep-purple-200: #b39ddb;
  --md-deep-purple-300: #9575cd;
  --md-deep-purple-400: #7e57c2;
  --md-deep-purple-500: #673ab7;
  --md-deep-purple-600: #5e35b1;
  --md-deep-purple-700: #512da8;
  --md-deep-purple-800: #4527a0;
  --md-deep-purple-900: #311b92;
  --md-deep-purple-A100: #b388ff;
  --md-deep-purple-A200: #7c4dff;
  --md-deep-purple-A400: #651fff;
  --md-deep-purple-A700: #6200ea;

  --md-indigo-50: #e8eaf6;
  --md-indigo-100: #c5cae9;
  --md-indigo-200: #9fa8da;
  --md-indigo-300: #7986cb;
  --md-indigo-400: #5c6bc0;
  --md-indigo-500: #3f51b5;
  --md-indigo-600: #3949ab;
  --md-indigo-700: #303f9f;
  --md-indigo-800: #283593;
  --md-indigo-900: #1a237e;
  --md-indigo-A100: #8c9eff;
  --md-indigo-A200: #536dfe;
  --md-indigo-A400: #3d5afe;
  --md-indigo-A700: #304ffe;

  --md-blue-50: #e3f2fd;
  --md-blue-100: #bbdefb;
  --md-blue-200: #90caf9;
  --md-blue-300: #64b5f6;
  --md-blue-400: #42a5f5;
  --md-blue-500: #2196f3;
  --md-blue-600: #1e88e5;
  --md-blue-700: #1976d2;
  --md-blue-800: #1565c0;
  --md-blue-900: #0d47a1;
  --md-blue-A100: #82b1ff;
  --md-blue-A200: #448aff;
  --md-blue-A400: #2979ff;
  --md-blue-A700: #2962ff;

  --md-light-blue-50: #e1f5fe;
  --md-light-blue-100: #b3e5fc;
  --md-light-blue-200: #81d4fa;
  --md-light-blue-300: #4fc3f7;
  --md-light-blue-400: #29b6f6;
  --md-light-blue-500: #03a9f4;
  --md-light-blue-600: #039be5;
  --md-light-blue-700: #0288d1;
  --md-light-blue-800: #0277bd;
  --md-light-blue-900: #01579b;
  --md-light-blue-A100: #80d8ff;
  --md-light-blue-A200: #40c4ff;
  --md-light-blue-A400: #00b0ff;
  --md-light-blue-A700: #0091ea;

  --md-cyan-50: #e0f7fa;
  --md-cyan-100: #b2ebf2;
  --md-cyan-200: #80deea;
  --md-cyan-300: #4dd0e1;
  --md-cyan-400: #26c6da;
  --md-cyan-500: #00bcd4;
  --md-cyan-600: #00acc1;
  --md-cyan-700: #0097a7;
  --md-cyan-800: #00838f;
  --md-cyan-900: #006064;
  --md-cyan-A100: #84ffff;
  --md-cyan-A200: #18ffff;
  --md-cyan-A400: #00e5ff;
  --md-cyan-A700: #00b8d4;

  --md-teal-50: #e0f2f1;
  --md-teal-100: #b2dfdb;
  --md-teal-200: #80cbc4;
  --md-teal-300: #4db6ac;
  --md-teal-400: #26a69a;
  --md-teal-500: #009688;
  --md-teal-600: #00897b;
  --md-teal-700: #00796b;
  --md-teal-800: #00695c;
  --md-teal-900: #004d40;
  --md-teal-A100: #a7ffeb;
  --md-teal-A200: #64ffda;
  --md-teal-A400: #1de9b6;
  --md-teal-A700: #00bfa5;

  --md-green-50: #e8f5e9;
  --md-green-100: #c8e6c9;
  --md-green-200: #a5d6a7;
  --md-green-300: #81c784;
  --md-green-400: #66bb6a;
  --md-green-500: #4caf50;
  --md-green-600: #43a047;
  --md-green-700: #388e3c;
  --md-green-800: #2e7d32;
  --md-green-900: #1b5e20;
  --md-green-A100: #b9f6ca;
  --md-green-A200: #69f0ae;
  --md-green-A400: #00e676;
  --md-green-A700: #00c853;

  --md-light-green-50: #f1f8e9;
  --md-light-green-100: #dcedc8;
  --md-light-green-200: #c5e1a5;
  --md-light-green-300: #aed581;
  --md-light-green-400: #9ccc65;
  --md-light-green-500: #8bc34a;
  --md-light-green-600: #7cb342;
  --md-light-green-700: #689f38;
  --md-light-green-800: #558b2f;
  --md-light-green-900: #33691e;
  --md-light-green-A100: #ccff90;
  --md-light-green-A200: #b2ff59;
  --md-light-green-A400: #76ff03;
  --md-light-green-A700: #64dd17;

  --md-lime-50: #f9fbe7;
  --md-lime-100: #f0f4c3;
  --md-lime-200: #e6ee9c;
  --md-lime-300: #dce775;
  --md-lime-400: #d4e157;
  --md-lime-500: #cddc39;
  --md-lime-600: #c0ca33;
  --md-lime-700: #afb42b;
  --md-lime-800: #9e9d24;
  --md-lime-900: #827717;
  --md-lime-A100: #f4ff81;
  --md-lime-A200: #eeff41;
  --md-lime-A400: #c6ff00;
  --md-lime-A700: #aeea00;

  --md-yellow-50: #fffde7;
  --md-yellow-100: #fff9c4;
  --md-yellow-200: #fff59d;
  --md-yellow-300: #fff176;
  --md-yellow-400: #ffee58;
  --md-yellow-500: #ffeb3b;
  --md-yellow-600: #fdd835;
  --md-yellow-700: #fbc02d;
  --md-yellow-800: #f9a825;
  --md-yellow-900: #f57f17;
  --md-yellow-A100: #ffff8d;
  --md-yellow-A200: #ffff00;
  --md-yellow-A400: #ffea00;
  --md-yellow-A700: #ffd600;

  --md-amber-50: #fff8e1;
  --md-amber-100: #ffecb3;
  --md-amber-200: #ffe082;
  --md-amber-300: #ffd54f;
  --md-amber-400: #ffca28;
  --md-amber-500: #ffc107;
  --md-amber-600: #ffb300;
  --md-amber-700: #ffa000;
  --md-amber-800: #ff8f00;
  --md-amber-900: #ff6f00;
  --md-amber-A100: #ffe57f;
  --md-amber-A200: #ffd740;
  --md-amber-A400: #ffc400;
  --md-amber-A700: #ffab00;

  --md-orange-50: #fff3e0;
  --md-orange-100: #ffe0b2;
  --md-orange-200: #ffcc80;
  --md-orange-300: #ffb74d;
  --md-orange-400: #ffa726;
  --md-orange-500: #ff9800;
  --md-orange-600: #fb8c00;
  --md-orange-700: #f57c00;
  --md-orange-800: #ef6c00;
  --md-orange-900: #e65100;
  --md-orange-A100: #ffd180;
  --md-orange-A200: #ffab40;
  --md-orange-A400: #ff9100;
  --md-orange-A700: #ff6d00;

  --md-deep-orange-50: #fbe9e7;
  --md-deep-orange-100: #ffccbc;
  --md-deep-orange-200: #ffab91;
  --md-deep-orange-300: #ff8a65;
  --md-deep-orange-400: #ff7043;
  --md-deep-orange-500: #ff5722;
  --md-deep-orange-600: #f4511e;
  --md-deep-orange-700: #e64a19;
  --md-deep-orange-800: #d84315;
  --md-deep-orange-900: #bf360c;
  --md-deep-orange-A100: #ff9e80;
  --md-deep-orange-A200: #ff6e40;
  --md-deep-orange-A400: #ff3d00;
  --md-deep-orange-A700: #dd2c00;

  --md-brown-50: #efebe9;
  --md-brown-100: #d7ccc8;
  --md-brown-200: #bcaaa4;
  --md-brown-300: #a1887f;
  --md-brown-400: #8d6e63;
  --md-brown-500: #795548;
  --md-brown-600: #6d4c41;
  --md-brown-700: #5d4037;
  --md-brown-800: #4e342e;
  --md-brown-900: #3e2723;

  --md-grey-50: #fafafa;
  --md-grey-100: #f5f5f5;
  --md-grey-200: #eeeeee;
  --md-grey-300: #e0e0e0;
  --md-grey-400: #bdbdbd;
  --md-grey-500: #9e9e9e;
  --md-grey-600: #757575;
  --md-grey-700: #616161;
  --md-grey-800: #424242;
  --md-grey-900: #212121;

  --md-blue-grey-50: #eceff1;
  --md-blue-grey-100: #cfd8dc;
  --md-blue-grey-200: #b0bec5;
  --md-blue-grey-300: #90a4ae;
  --md-blue-grey-400: #78909c;
  --md-blue-grey-500: #607d8b;
  --md-blue-grey-600: #546e7a;
  --md-blue-grey-700: #455a64;
  --md-blue-grey-800: #37474f;
  --md-blue-grey-900: #263238;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Spinner {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: var(--jp-layout-color0);
  outline: none;
}

.jp-SpinnerContent {
  font-size: 10px;
  margin: 50px auto;
  text-indent: -9999em;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  background: var(--jp-brand-color3);
  background: linear-gradient(
    to right,
    #f37626 10%,
    rgba(255, 255, 255, 0) 42%
  );
  position: relative;
  animation: load3 1s infinite linear, fadeIn 1s;
}

.jp-SpinnerContent:before {
  width: 50%;
  height: 50%;
  background: #f37626;
  border-radius: 100% 0 0 0;
  position: absolute;
  top: 0;
  left: 0;
  content: '';
}

.jp-SpinnerContent:after {
  background: var(--jp-layout-color0);
  width: 75%;
  height: 75%;
  border-radius: 50%;
  content: '';
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes load3 {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

button.jp-mod-styled {
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  border: none;
  box-sizing: border-box;
  text-align: center;
  line-height: 32px;
  height: 32px;
  padding: 0px 12px;
  letter-spacing: 0.8px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input.jp-mod-styled {
  background: var(--jp-input-background);
  height: 28px;
  box-sizing: border-box;
  border: var(--jp-border-width) solid var(--jp-border-color1);
  padding-left: 7px;
  padding-right: 7px;
  font-size: var(--jp-ui-font-size2);
  color: var(--jp-ui-font-color0);
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input.jp-mod-styled:focus {
  border: var(--jp-border-width) solid var(--md-blue-500);
  box-shadow: inset 0 0 4px var(--md-blue-300);
}

.jp-select-wrapper {
  display: flex;
  position: relative;
  flex-direction: column;
  padding: 1px;
  background-color: var(--jp-layout-color1);
  height: 28px;
  box-sizing: border-box;
  margin-bottom: 12px;
}

.jp-select-wrapper.jp-mod-focused select.jp-mod-styled {
  border: var(--jp-border-width) solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
  background-color: var(--jp-input-active-background);
}

select.jp-mod-styled:hover {
  background-color: var(--jp-layout-color1);
  cursor: pointer;
  color: var(--jp-ui-font-color0);
  background-color: var(--jp-input-hover-background);
  box-shadow: inset 0 0px 1px rgba(0, 0, 0, 0.5);
}

select.jp-mod-styled {
  flex: 1 1 auto;
  height: 32px;
  width: 100%;
  font-size: var(--jp-ui-font-size2);
  background: var(--jp-input-background);
  color: var(--jp-ui-font-color0);
  padding: 0 25px 0 8px;
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  border-radius: 0px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

:root {
  --jp-private-toolbar-height: calc(
    28px + var(--jp-border-width)
  ); /* leave 28px for content */
}

.jp-Toolbar {
  color: var(--jp-ui-font-color1);
  flex: 0 0 auto;
  display: flex;
  flex-direction: row;
  border-bottom: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  box-shadow: var(--jp-toolbar-box-shadow);
  background: var(--jp-toolbar-background);
  min-height: var(--jp-toolbar-micro-height);
  padding: 2px;
  z-index: 1;
}

/* Toolbar items */

.jp-Toolbar > .jp-Toolbar-item.jp-Toolbar-spacer {
  flex-grow: 1;
  flex-shrink: 1;
}

.jp-Toolbar-item.jp-Toolbar-kernelStatus {
  display: inline-block;
  width: 32px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 16px;
}

.jp-Toolbar > .jp-Toolbar-item {
  flex: 0 0 auto;
  display: flex;
  padding-left: 1px;
  padding-right: 1px;
  font-size: var(--jp-ui-font-size1);
  line-height: var(--jp-private-toolbar-height);
  height: 100%;
}

/* Toolbar buttons */

/* This is the div we use to wrap the react component into a Widget */
div.jp-ToolbarButton {
  color: transparent;
  border: none;
  box-sizing: border-box;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding: 0px;
  margin: 0px;
}

button.jp-ToolbarButtonComponent {
  background: var(--jp-layout-color1);
  border: none;
  box-sizing: border-box;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding: 0px 6px;
  margin: 0px;
  height: 24px;
  border-radius: var(--jp-border-radius);
  display: flex;
  align-items: center;
  text-align: center;
  font-size: 14px;
  min-width: unset;
  min-height: unset;
}

button.jp-ToolbarButtonComponent:disabled {
  opacity: 0.4;
}

button.jp-ToolbarButtonComponent span {
  padding: 0px;
  flex: 0 0 auto;
}

button.jp-ToolbarButtonComponent .jp-ToolbarButtonComponent-label {
  font-size: var(--jp-ui-font-size1);
  line-height: 100%;
  padding-left: 2px;
  color: var(--jp-ui-font-color1);
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/


/* <DEPRECATED> */ body.p-mod-override-cursor *, /* </DEPRECATED> */
body.lm-mod-override-cursor * {
  cursor: inherit !important;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-JSONEditor {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.jp-JSONEditor-host {
  flex: 1 1 auto;
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  border-radius: 0px;
  background: var(--jp-layout-color0);
  min-height: 50px;
  padding: 1px;
}

.jp-JSONEditor.jp-mod-error .jp-JSONEditor-host {
  border-color: red;
  outline-color: red;
}

.jp-JSONEditor-header {
  display: flex;
  flex: 1 0 auto;
  padding: 0 0 0 12px;
}

.jp-JSONEditor-header label {
  flex: 0 0 auto;
}

.jp-JSONEditor-commitButton {
  height: 16px;
  width: 16px;
  background-size: 18px;
  background-repeat: no-repeat;
  background-position: center;
}

.jp-JSONEditor-host.jp-mod-focused {
  background-color: var(--jp-input-active-background);
  border: 1px solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
}

.jp-Editor.jp-mod-dropTarget {
  border: var(--jp-border-width) solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* BASICS */

.CodeMirror {
  /* Set height, width, borders, and global font properties here */
  font-family: monospace;
  height: 300px;
  color: black;
  direction: ltr;
}

/* PADDING */

.CodeMirror-lines {
  padding: 4px 0; /* Vertical padding around content */
}
.CodeMirror pre.CodeMirror-line,
.CodeMirror pre.CodeMirror-line-like {
  padding: 0 4px; /* Horizontal padding of content */
}

.CodeMirror-scrollbar-filler, .CodeMirror-gutter-filler {
  background-color: white; /* The little square between H and V scrollbars */
}

/* GUTTER */

.CodeMirror-gutters {
  border-right: 1px solid #ddd;
  background-color: #f7f7f7;
  white-space: nowrap;
}
.CodeMirror-linenumbers {}
.CodeMirror-linenumber {
  padding: 0 3px 0 5px;
  min-width: 20px;
  text-align: right;
  color: #999;
  white-space: nowrap;
}

.CodeMirror-guttermarker { color: black; }
.CodeMirror-guttermarker-subtle { color: #999; }

/* CURSOR */

.CodeMirror-cursor {
  border-left: 1px solid black;
  border-right: none;
  width: 0;
}
/* Shown when moving in bi-directional text */
.CodeMirror div.CodeMirror-secondarycursor {
  border-left: 1px solid silver;
}
.cm-fat-cursor .CodeMirror-cursor {
  width: auto;
  border: 0 !important;
  background: #7e7;
}
.cm-fat-cursor div.CodeMirror-cursors {
  z-index: 1;
}
.cm-fat-cursor-mark {
  background-color: rgba(20, 255, 20, 0.5);
  -webkit-animation: blink 1.06s steps(1) infinite;
  -moz-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
}
.cm-animate-fat-cursor {
  width: auto;
  border: 0;
  -webkit-animation: blink 1.06s steps(1) infinite;
  -moz-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
  background-color: #7e7;
}
@-moz-keyframes blink {
  0% {}
  50% { background-color: transparent; }
  100% {}
}
@-webkit-keyframes blink {
  0% {}
  50% { background-color: transparent; }
  100% {}
}
@keyframes blink {
  0% {}
  50% { background-color: transparent; }
  100% {}
}

/* Can style cursor different in overwrite (non-insert) mode */
.CodeMirror-overwrite .CodeMirror-cursor {}

.cm-tab { display: inline-block; text-decoration: inherit; }

.CodeMirror-rulers {
  position: absolute;
  left: 0; right: 0; top: -50px; bottom: 0;
  overflow: hidden;
}
.CodeMirror-ruler {
  border-left: 1px solid #ccc;
  top: 0; bottom: 0;
  position: absolute;
}

/* DEFAULT THEME */

.cm-s-default .cm-header {color: blue;}
.cm-s-default .cm-quote {color: #090;}
.cm-negative {color: #d44;}
.cm-positive {color: #292;}
.cm-header, .cm-strong {font-weight: bold;}
.cm-em {font-style: italic;}
.cm-link {text-decoration: underline;}
.cm-strikethrough {text-decoration: line-through;}

.cm-s-default .cm-keyword {color: #708;}
.cm-s-default .cm-atom {color: #219;}
.cm-s-default .cm-number {color: #164;}
.cm-s-default .cm-def {color: #00f;}
.cm-s-default .cm-variable,
.cm-s-default .cm-punctuation,
.cm-s-default .cm-property,
.cm-s-default .cm-operator {}
.cm-s-default .cm-variable-2 {color: #05a;}
.cm-s-default .cm-variable-3, .cm-s-default .cm-type {color: #085;}
.cm-s-default .cm-comment {color: #a50;}
.cm-s-default .cm-string {color: #a11;}
.cm-s-default .cm-string-2 {color: #f50;}
.cm-s-default .cm-meta {color: #555;}
.cm-s-default .cm-qualifier {color: #555;}
.cm-s-default .cm-builtin {color: #30a;}
.cm-s-default .cm-bracket {color: #997;}
.cm-s-default .cm-tag {color: #170;}
.cm-s-default .cm-attribute {color: #00c;}
.cm-s-default .cm-hr {color: #999;}
.cm-s-default .cm-link {color: #00c;}

.cm-s-default .cm-error {color: #f00;}
.cm-invalidchar {color: #f00;}

.CodeMirror-composing { border-bottom: 2px solid; }

/* Default styles for common addons */

div.CodeMirror span.CodeMirror-matchingbracket {color: #0b0;}
div.CodeMirror span.CodeMirror-nonmatchingbracket {color: #a22;}
.CodeMirror-matchingtag { background: rgba(255, 150, 0, .3); }
.CodeMirror-activeline-background {background: #e8f2ff;}

/* STOP */

/* The rest of this file contains styles related to the mechanics of
   the editor. You probably shouldn't touch them. */

.CodeMirror {
  position: relative;
  overflow: hidden;
  background: white;
}

.CodeMirror-scroll {
  overflow: scroll !important; /* Things will break if this is overridden */
  /* 30px is the magic margin used to hide the element's real scrollbars */
  /* See overflow: hidden in .CodeMirror */
  margin-bottom: -30px; margin-right: -30px;
  padding-bottom: 30px;
  height: 100%;
  outline: none; /* Prevent dragging from highlighting the element */
  position: relative;
}
.CodeMirror-sizer {
  position: relative;
  border-right: 30px solid transparent;
}

/* The fake, visible scrollbars. Used to force redraw during scrolling
   before actual scrolling happens, thus preventing shaking and
   flickering artifacts. */
.CodeMirror-vscrollbar, .CodeMirror-hscrollbar, .CodeMirror-scrollbar-filler, .CodeMirror-gutter-filler {
  position: absolute;
  z-index: 6;
  display: none;
}
.CodeMirror-vscrollbar {
  right: 0; top: 0;
  overflow-x: hidden;
  overflow-y: scroll;
}
.CodeMirror-hscrollbar {
  bottom: 0; left: 0;
  overflow-y: hidden;
  overflow-x: scroll;
}
.CodeMirror-scrollbar-filler {
  right: 0; bottom: 0;
}
.CodeMirror-gutter-filler {
  left: 0; bottom: 0;
}

.CodeMirror-gutters {
  position: absolute; left: 0; top: 0;
  min-height: 100%;
  z-index: 3;
}
.CodeMirror-gutter {
  white-space: normal;
  height: 100%;
  display: inline-block;
  vertical-align: top;
  margin-bottom: -30px;
}
.CodeMirror-gutter-wrapper {
  position: absolute;
  z-index: 4;
  background: none !important;
  border: none !important;
}
.CodeMirror-gutter-background {
  position: absolute;
  top: 0; bottom: 0;
  z-index: 4;
}
.CodeMirror-gutter-elt {
  position: absolute;
  cursor: default;
  z-index: 4;
}
.CodeMirror-gutter-wrapper ::selection { background-color: transparent }
.CodeMirror-gutter-wrapper ::-moz-selection { background-color: transparent }

.CodeMirror-lines {
  cursor: text;
  min-height: 1px; /* prevents collapsing before first draw */
}
.CodeMirror pre.CodeMirror-line,
.CodeMirror pre.CodeMirror-line-like {
  /* Reset some styles that the rest of the page might have set */
  -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
  border-width: 0;
  background: transparent;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  white-space: pre;
  word-wrap: normal;
  line-height: inherit;
  color: inherit;
  z-index: 2;
  position: relative;
  overflow: visible;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-variant-ligatures: contextual;
  font-variant-ligatures: contextual;
}
.CodeMirror-wrap pre.CodeMirror-line,
.CodeMirror-wrap pre.CodeMirror-line-like {
  word-wrap: break-word;
  white-space: pre-wrap;
  word-break: normal;
}

.CodeMirror-linebackground {
  position: absolute;
  left: 0; right: 0; top: 0; bottom: 0;
  z-index: 0;
}

.CodeMirror-linewidget {
  position: relative;
  z-index: 2;
  padding: 0.1px; /* Force widget margins to stay inside of the container */
}

.CodeMirror-widget {}

.CodeMirror-rtl pre { direction: rtl; }

.CodeMirror-code {
  outline: none;
}

/* Force content-box sizing for the elements where we expect it */
.CodeMirror-scroll,
.CodeMirror-sizer,
.CodeMirror-gutter,
.CodeMirror-gutters,
.CodeMirror-linenumber {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.CodeMirror-measure {
  position: absolute;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
}

.CodeMirror-cursor {
  position: absolute;
  pointer-events: none;
}
.CodeMirror-measure pre { position: static; }

div.CodeMirror-cursors {
  visibility: hidden;
  position: relative;
  z-index: 3;
}
div.CodeMirror-dragcursors {
  visibility: visible;
}

.CodeMirror-focused div.CodeMirror-cursors {
  visibility: visible;
}

.CodeMirror-selected { background: #d9d9d9; }
.CodeMirror-focused .CodeMirror-selected { background: #d7d4f0; }
.CodeMirror-crosshair { cursor: crosshair; }
.CodeMirror-line::selection, .CodeMirror-line > span::selection, .CodeMirror-line > span > span::selection { background: #d7d4f0; }
.CodeMirror-line::-moz-selection, .CodeMirror-line > span::-moz-selection, .CodeMirror-line > span > span::-moz-selection { background: #d7d4f0; }

.cm-searching {
  background-color: #ffa;
  background-color: rgba(255, 255, 0, .4);
}

/* Used to force a border model for a node */
.cm-force-border { padding-right: .1px; }

@media print {
  /* Hide the cursor when printing */
  .CodeMirror div.CodeMirror-cursors {
    visibility: hidden;
  }
}

/* See issue #2901 */
.cm-tab-wrap-hack:after { content: ''; }

/* Help users use markselection to safely style text background */
span.CodeMirror-selectedtext { background: none; }

.CodeMirror-dialog {
  position: absolute;
  left: 0; right: 0;
  background: inherit;
  z-index: 15;
  padding: .1em .8em;
  overflow: hidden;
  color: inherit;
}

.CodeMirror-dialog-top {
  border-bottom: 1px solid #eee;
  top: 0;
}

.CodeMirror-dialog-bottom {
  border-top: 1px solid #eee;
  bottom: 0;
}

.CodeMirror-dialog input {
  border: none;
  outline: none;
  background: transparent;
  width: 20em;
  color: inherit;
  font-family: monospace;
}

.CodeMirror-dialog button {
  font-size: 70%;
}

.CodeMirror-foldmarker {
  color: blue;
  text-shadow: #b9f 1px 1px 2px, #b9f -1px -1px 2px, #b9f 1px -1px 2px, #b9f -1px 1px 2px;
  font-family: arial;
  line-height: .3;
  cursor: pointer;
}
.CodeMirror-foldgutter {
  width: .7em;
}
.CodeMirror-foldgutter-open,
.CodeMirror-foldgutter-folded {
  cursor: pointer;
}
.CodeMirror-foldgutter-open:after {
  content: "\25BE";
}
.CodeMirror-foldgutter-folded:after {
  content: "\25B8";
}

/*
  Name:       material
  Author:     Mattia Astorino (http://github.com/equinusocio)
  Website:    https://material-theme.site/
*/

.cm-s-material.CodeMirror {
  background-color: #263238;
  color: #EEFFFF;
}

.cm-s-material .CodeMirror-gutters {
  background: #263238;
  color: #546E7A;
  border: none;
}

.cm-s-material .CodeMirror-guttermarker,
.cm-s-material .CodeMirror-guttermarker-subtle,
.cm-s-material .CodeMirror-linenumber {
  color: #546E7A;
}

.cm-s-material .CodeMirror-cursor {
  border-left: 1px solid #FFCC00;
}

.cm-s-material div.CodeMirror-selected {
  background: rgba(128, 203, 196, 0.2);
}

.cm-s-material.CodeMirror-focused div.CodeMirror-selected {
  background: rgba(128, 203, 196, 0.2);
}

.cm-s-material .CodeMirror-line::selection,
.cm-s-material .CodeMirror-line>span::selection,
.cm-s-material .CodeMirror-line>span>span::selection {
  background: rgba(128, 203, 196, 0.2);
}

.cm-s-material .CodeMirror-line::-moz-selection,
.cm-s-material .CodeMirror-line>span::-moz-selection,
.cm-s-material .CodeMirror-line>span>span::-moz-selection {
  background: rgba(128, 203, 196, 0.2);
}

.cm-s-material .CodeMirror-activeline-background {
  background: rgba(0, 0, 0, 0.5);
}

.cm-s-material .cm-keyword {
  color: #C792EA;
}

.cm-s-material .cm-operator {
  color: #89DDFF;
}

.cm-s-material .cm-variable-2 {
  color: #EEFFFF;
}

.cm-s-material .cm-variable-3,
.cm-s-material .cm-type {
  color: #f07178;
}

.cm-s-material .cm-builtin {
  color: #FFCB6B;
}

.cm-s-material .cm-atom {
  color: #F78C6C;
}

.cm-s-material .cm-number {
  color: #FF5370;
}

.cm-s-material .cm-def {
  color: #82AAFF;
}

.cm-s-material .cm-string {
  color: #C3E88D;
}

.cm-s-material .cm-string-2 {
  color: #f07178;
}

.cm-s-material .cm-comment {
  color: #546E7A;
}

.cm-s-material .cm-variable {
  color: #f07178;
}

.cm-s-material .cm-tag {
  color: #FF5370;
}

.cm-s-material .cm-meta {
  color: #FFCB6B;
}

.cm-s-material .cm-attribute {
  color: #C792EA;
}

.cm-s-material .cm-property {
  color: #C792EA;
}

.cm-s-material .cm-qualifier {
  color: #DECB6B;
}

.cm-s-material .cm-variable-3,
.cm-s-material .cm-type {
  color: #DECB6B;
}


.cm-s-material .cm-error {
  color: rgba(255, 255, 255, 1.0);
  background-color: #FF5370;
}

.cm-s-material .CodeMirror-matchingbracket {
  text-decoration: underline;
  color: white !important;
}
/**
 * "
 *  Using Zenburn color palette from the Emacs Zenburn Theme
 *  https://github.com/bbatsov/zenburn-emacs/blob/master/zenburn-theme.el
 *
 *  Also using parts of https://github.com/xavi/coderay-lighttable-theme
 * "
 * From: https://github.com/wisenomad/zenburn-lighttable-theme/blob/master/zenburn.css
 */

.cm-s-zenburn .CodeMirror-gutters { background: #3f3f3f !important; }
.cm-s-zenburn .CodeMirror-foldgutter-open, .CodeMirror-foldgutter-folded { color: #999; }
.cm-s-zenburn .CodeMirror-cursor { border-left: 1px solid white; }
.cm-s-zenburn { background-color: #3f3f3f; color: #dcdccc; }
.cm-s-zenburn span.cm-builtin { color: #dcdccc; font-weight: bold; }
.cm-s-zenburn span.cm-comment { color: #7f9f7f; }
.cm-s-zenburn span.cm-keyword { color: #f0dfaf; font-weight: bold; }
.cm-s-zenburn span.cm-atom { color: #bfebbf; }
.cm-s-zenburn span.cm-def { color: #dcdccc; }
.cm-s-zenburn span.cm-variable { color: #dfaf8f; }
.cm-s-zenburn span.cm-variable-2 { color: #dcdccc; }
.cm-s-zenburn span.cm-string { color: #cc9393; }
.cm-s-zenburn span.cm-string-2 { color: #cc9393; }
.cm-s-zenburn span.cm-number { color: #dcdccc; }
.cm-s-zenburn span.cm-tag { color: #93e0e3; }
.cm-s-zenburn span.cm-property { color: #dfaf8f; }
.cm-s-zenburn span.cm-attribute { color: #dfaf8f; }
.cm-s-zenburn span.cm-qualifier { color: #7cb8bb; }
.cm-s-zenburn span.cm-meta { color: #f0dfaf; }
.cm-s-zenburn span.cm-header { color: #f0efd0; }
.cm-s-zenburn span.cm-operator { color: #f0efd0; }
.cm-s-zenburn span.CodeMirror-matchingbracket { box-sizing: border-box; background: transparent; border-bottom: 1px solid; }
.cm-s-zenburn span.CodeMirror-nonmatchingbracket { border-bottom: 1px solid; background: none; }
.cm-s-zenburn .CodeMirror-activeline { background: #000000; }
.cm-s-zenburn .CodeMirror-activeline-background { background: #000000; }
.cm-s-zenburn div.CodeMirror-selected { background: #545454; }
.cm-s-zenburn .CodeMirror-focused div.CodeMirror-selected { background: #4f4f4f; }

.cm-s-abcdef.CodeMirror { background: #0f0f0f; color: #defdef; }
.cm-s-abcdef div.CodeMirror-selected { background: #515151; }
.cm-s-abcdef .CodeMirror-line::selection, .cm-s-abcdef .CodeMirror-line > span::selection, .cm-s-abcdef .CodeMirror-line > span > span::selection { background: rgba(56, 56, 56, 0.99); }
.cm-s-abcdef .CodeMirror-line::-moz-selection, .cm-s-abcdef .CodeMirror-line > span::-moz-selection, .cm-s-abcdef .CodeMirror-line > span > span::-moz-selection { background: rgba(56, 56, 56, 0.99); }
.cm-s-abcdef .CodeMirror-gutters { background: #555; border-right: 2px solid #314151; }
.cm-s-abcdef .CodeMirror-guttermarker { color: #222; }
.cm-s-abcdef .CodeMirror-guttermarker-subtle { color: azure; }
.cm-s-abcdef .CodeMirror-linenumber { color: #FFFFFF; }
.cm-s-abcdef .CodeMirror-cursor { border-left: 1px solid #00FF00; }

.cm-s-abcdef span.cm-keyword { color: darkgoldenrod; font-weight: bold; }
.cm-s-abcdef span.cm-atom { color: #77F; }
.cm-s-abcdef span.cm-number { color: violet; }
.cm-s-abcdef span.cm-def { color: #fffabc; }
.cm-s-abcdef span.cm-variable { color: #abcdef; }
.cm-s-abcdef span.cm-variable-2 { color: #cacbcc; }
.cm-s-abcdef span.cm-variable-3, .cm-s-abcdef span.cm-type { color: #def; }
.cm-s-abcdef span.cm-property { color: #fedcba; }
.cm-s-abcdef span.cm-operator { color: #ff0; }
.cm-s-abcdef span.cm-comment { color: #7a7b7c; font-style: italic;}
.cm-s-abcdef span.cm-string { color: #2b4; }
.cm-s-abcdef span.cm-meta { color: #C9F; }
.cm-s-abcdef span.cm-qualifier { color: #FFF700; }
.cm-s-abcdef span.cm-builtin { color: #30aabc; }
.cm-s-abcdef span.cm-bracket { color: #8a8a8a; }
.cm-s-abcdef span.cm-tag { color: #FFDD44; }
.cm-s-abcdef span.cm-attribute { color: #DDFF00; }
.cm-s-abcdef span.cm-error { color: #FF0000; }
.cm-s-abcdef span.cm-header { color: aquamarine; font-weight: bold; }
.cm-s-abcdef span.cm-link { color: blueviolet; }

.cm-s-abcdef .CodeMirror-activeline-background { background: #314151; }

/*

    Name:       Base16 Default Light
    Author:     Chris Kempson (http://chriskempson.com)

    CodeMirror template by Jan T. Sott (https://github.com/idleberg/base16-codemirror)
    Original Base16 color scheme by Chris Kempson (https://github.com/chriskempson/base16)

*/

.cm-s-base16-light.CodeMirror { background: #f5f5f5; color: #202020; }
.cm-s-base16-light div.CodeMirror-selected { background: #e0e0e0; }
.cm-s-base16-light .CodeMirror-line::selection, .cm-s-base16-light .CodeMirror-line > span::selection, .cm-s-base16-light .CodeMirror-line > span > span::selection { background: #e0e0e0; }
.cm-s-base16-light .CodeMirror-line::-moz-selection, .cm-s-base16-light .CodeMirror-line > span::-moz-selection, .cm-s-base16-light .CodeMirror-line > span > span::-moz-selection { background: #e0e0e0; }
.cm-s-base16-light .CodeMirror-gutters { background: #f5f5f5; border-right: 0px; }
.cm-s-base16-light .CodeMirror-guttermarker { color: #ac4142; }
.cm-s-base16-light .CodeMirror-guttermarker-subtle { color: #b0b0b0; }
.cm-s-base16-light .CodeMirror-linenumber { color: #b0b0b0; }
.cm-s-base16-light .CodeMirror-cursor { border-left: 1px solid #505050; }

.cm-s-base16-light span.cm-comment { color: #8f5536; }
.cm-s-base16-light span.cm-atom { color: #aa759f; }
.cm-s-base16-light span.cm-number { color: #aa759f; }

.cm-s-base16-light span.cm-property, .cm-s-base16-light span.cm-attribute { color: #90a959; }
.cm-s-base16-light span.cm-keyword { color: #ac4142; }
.cm-s-base16-light span.cm-string { color: #f4bf75; }

.cm-s-base16-light span.cm-variable { color: #90a959; }
.cm-s-base16-light span.cm-variable-2 { color: #6a9fb5; }
.cm-s-base16-light span.cm-def { color: #d28445; }
.cm-s-base16-light span.cm-bracket { color: #202020; }
.cm-s-base16-light span.cm-tag { color: #ac4142; }
.cm-s-base16-light span.cm-link { color: #aa759f; }
.cm-s-base16-light span.cm-error { background: #ac4142; color: #505050; }

.cm-s-base16-light .CodeMirror-activeline-background { background: #DDDCDC; }
.cm-s-base16-light .CodeMirror-matchingbracket { color: #f5f5f5 !important; background-color: #6A9FB5 !important}

/*

    Name:       Base16 Default Dark
    Author:     Chris Kempson (http://chriskempson.com)

    CodeMirror template by Jan T. Sott (https://github.com/idleberg/base16-codemirror)
    Original Base16 color scheme by Chris Kempson (https://github.com/chriskempson/base16)

*/

.cm-s-base16-dark.CodeMirror { background: #151515; color: #e0e0e0; }
.cm-s-base16-dark div.CodeMirror-selected { background: #303030; }
.cm-s-base16-dark .CodeMirror-line::selection, .cm-s-base16-dark .CodeMirror-line > span::selection, .cm-s-base16-dark .CodeMirror-line > span > span::selection { background: rgba(48, 48, 48, .99); }
.cm-s-base16-dark .CodeMirror-line::-moz-selection, .cm-s-base16-dark .CodeMirror-line > span::-moz-selection, .cm-s-base16-dark .CodeMirror-line > span > span::-moz-selection { background: rgba(48, 48, 48, .99); }
.cm-s-base16-dark .CodeMirror-gutters { background: #151515; border-right: 0px; }
.cm-s-base16-dark .CodeMirror-guttermarker { color: #ac4142; }
.cm-s-base16-dark .CodeMirror-guttermarker-subtle { color: #505050; }
.cm-s-base16-dark .CodeMirror-linenumber { color: #505050; }
.cm-s-base16-dark .CodeMirror-cursor { border-left: 1px solid #b0b0b0; }

.cm-s-base16-dark span.cm-comment { color: #8f5536; }
.cm-s-base16-dark span.cm-atom { color: #aa759f; }
.cm-s-base16-dark span.cm-number { color: #aa759f; }

.cm-s-base16-dark span.cm-property, .cm-s-base16-dark span.cm-attribute { color: #90a959; }
.cm-s-base16-dark span.cm-keyword { color: #ac4142; }
.cm-s-base16-dark span.cm-string { color: #f4bf75; }

.cm-s-base16-dark span.cm-variable { color: #90a959; }
.cm-s-base16-dark span.cm-variable-2 { color: #6a9fb5; }
.cm-s-base16-dark span.cm-def { color: #d28445; }
.cm-s-base16-dark span.cm-bracket { color: #e0e0e0; }
.cm-s-base16-dark span.cm-tag { color: #ac4142; }
.cm-s-base16-dark span.cm-link { color: #aa759f; }
.cm-s-base16-dark span.cm-error { background: #ac4142; color: #b0b0b0; }

.cm-s-base16-dark .CodeMirror-activeline-background { background: #202020; }
.cm-s-base16-dark .CodeMirror-matchingbracket { text-decoration: underline; color: white !important; }

/*

    Name:       dracula
    Author:     Michael Kaminsky (http://github.com/mkaminsky11)

    Original dracula color scheme by Zeno Rocha (https://github.com/zenorocha/dracula-theme)

*/


.cm-s-dracula.CodeMirror, .cm-s-dracula .CodeMirror-gutters {
  background-color: #282a36 !important;
  color: #f8f8f2 !important;
  border: none;
}
.cm-s-dracula .CodeMirror-gutters { color: #282a36; }
.cm-s-dracula .CodeMirror-cursor { border-left: solid thin #f8f8f0; }
.cm-s-dracula .CodeMirror-linenumber { color: #6D8A88; }
.cm-s-dracula .CodeMirror-selected { background: rgba(255, 255, 255, 0.10); }
.cm-s-dracula .CodeMirror-line::selection, .cm-s-dracula .CodeMirror-line > span::selection, .cm-s-dracula .CodeMirror-line > span > span::selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-dracula .CodeMirror-line::-moz-selection, .cm-s-dracula .CodeMirror-line > span::-moz-selection, .cm-s-dracula .CodeMirror-line > span > span::-moz-selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-dracula span.cm-comment { color: #6272a4; }
.cm-s-dracula span.cm-string, .cm-s-dracula span.cm-string-2 { color: #f1fa8c; }
.cm-s-dracula span.cm-number { color: #bd93f9; }
.cm-s-dracula span.cm-variable { color: #50fa7b; }
.cm-s-dracula span.cm-variable-2 { color: white; }
.cm-s-dracula span.cm-def { color: #50fa7b; }
.cm-s-dracula span.cm-operator { color: #ff79c6; }
.cm-s-dracula span.cm-keyword { color: #ff79c6; }
.cm-s-dracula span.cm-atom { color: #bd93f9; }
.cm-s-dracula span.cm-meta { color: #f8f8f2; }
.cm-s-dracula span.cm-tag { color: #ff79c6; }
.cm-s-dracula span.cm-attribute { color: #50fa7b; }
.cm-s-dracula span.cm-qualifier { color: #50fa7b; }
.cm-s-dracula span.cm-property { color: #66d9ef; }
.cm-s-dracula span.cm-builtin { color: #50fa7b; }
.cm-s-dracula span.cm-variable-3, .cm-s-dracula span.cm-type { color: #ffb86c; }

.cm-s-dracula .CodeMirror-activeline-background { background: rgba(255,255,255,0.1); }
.cm-s-dracula .CodeMirror-matchingbracket { text-decoration: underline; color: white !important; }

/*

    Name:       Hopscotch
    Author:     Jan T. Sott

    CodeMirror template by Jan T. Sott (https://github.com/idleberg/base16-codemirror)
    Original Base16 color scheme by Chris Kempson (https://github.com/chriskempson/base16)

*/

.cm-s-hopscotch.CodeMirror {background: #322931; color: #d5d3d5;}
.cm-s-hopscotch div.CodeMirror-selected {background: #433b42 !important;}
.cm-s-hopscotch .CodeMirror-gutters {background: #322931; border-right: 0px;}
.cm-s-hopscotch .CodeMirror-linenumber {color: #797379;}
.cm-s-hopscotch .CodeMirror-cursor {border-left: 1px solid #989498 !important;}

.cm-s-hopscotch span.cm-comment {color: #b33508;}
.cm-s-hopscotch span.cm-atom {color: #c85e7c;}
.cm-s-hopscotch span.cm-number {color: #c85e7c;}

.cm-s-hopscotch span.cm-property, .cm-s-hopscotch span.cm-attribute {color: #8fc13e;}
.cm-s-hopscotch span.cm-keyword {color: #dd464c;}
.cm-s-hopscotch span.cm-string {color: #fdcc59;}

.cm-s-hopscotch span.cm-variable {color: #8fc13e;}
.cm-s-hopscotch span.cm-variable-2 {color: #1290bf;}
.cm-s-hopscotch span.cm-def {color: #fd8b19;}
.cm-s-hopscotch span.cm-error {background: #dd464c; color: #989498;}
.cm-s-hopscotch span.cm-bracket {color: #d5d3d5;}
.cm-s-hopscotch span.cm-tag {color: #dd464c;}
.cm-s-hopscotch span.cm-link {color: #c85e7c;}

.cm-s-hopscotch .CodeMirror-matchingbracket { text-decoration: underline; color: white !important;}
.cm-s-hopscotch .CodeMirror-activeline-background { background: #302020; }

/****************************************************************/
/*   Based on mbonaci's Brackets mbo theme                      */
/*   https://github.com/mbonaci/global/blob/master/Mbo.tmTheme  */
/*   Create your own: http://tmtheme-editor.herokuapp.com       */
/****************************************************************/

.cm-s-mbo.CodeMirror { background: #2c2c2c; color: #ffffec; }
.cm-s-mbo div.CodeMirror-selected { background: #716C62; }
.cm-s-mbo .CodeMirror-line::selection, .cm-s-mbo .CodeMirror-line > span::selection, .cm-s-mbo .CodeMirror-line > span > span::selection { background: rgba(113, 108, 98, .99); }
.cm-s-mbo .CodeMirror-line::-moz-selection, .cm-s-mbo .CodeMirror-line > span::-moz-selection, .cm-s-mbo .CodeMirror-line > span > span::-moz-selection { background: rgba(113, 108, 98, .99); }
.cm-s-mbo .CodeMirror-gutters { background: #4e4e4e; border-right: 0px; }
.cm-s-mbo .CodeMirror-guttermarker { color: white; }
.cm-s-mbo .CodeMirror-guttermarker-subtle { color: grey; }
.cm-s-mbo .CodeMirror-linenumber { color: #dadada; }
.cm-s-mbo .CodeMirror-cursor { border-left: 1px solid #ffffec; }

.cm-s-mbo span.cm-comment { color: #95958a; }
.cm-s-mbo span.cm-atom { color: #00a8c6; }
.cm-s-mbo span.cm-number { color: #00a8c6; }

.cm-s-mbo span.cm-property, .cm-s-mbo span.cm-attribute { color: #9ddfe9; }
.cm-s-mbo span.cm-keyword { color: #ffb928; }
.cm-s-mbo span.cm-string { color: #ffcf6c; }
.cm-s-mbo span.cm-string.cm-property { color: #ffffec; }

.cm-s-mbo span.cm-variable { color: #ffffec; }
.cm-s-mbo span.cm-variable-2 { color: #00a8c6; }
.cm-s-mbo span.cm-def { color: #ffffec; }
.cm-s-mbo span.cm-bracket { color: #fffffc; font-weight: bold; }
.cm-s-mbo span.cm-tag { color: #9ddfe9; }
.cm-s-mbo span.cm-link { color: #f54b07; }
.cm-s-mbo span.cm-error { border-bottom: #636363; color: #ffffec; }
.cm-s-mbo span.cm-qualifier { color: #ffffec; }

.cm-s-mbo .CodeMirror-activeline-background { background: #494b41; }
.cm-s-mbo .CodeMirror-matchingbracket { color: #ffb928 !important; }
.cm-s-mbo .CodeMirror-matchingtag { background: rgba(255, 255, 255, .37); }

/*
  MDN-LIKE Theme - Mozilla
  Ported to CodeMirror by Peter Kroon <plakroon@gmail.com>
  Report bugs/issues here: https://github.com/codemirror/CodeMirror/issues
  GitHub: @peterkroon

  The mdn-like theme is inspired on the displayed code examples at: https://developer.mozilla.org/en-US/docs/Web/CSS/animation

*/
.cm-s-mdn-like.CodeMirror { color: #999; background-color: #fff; }
.cm-s-mdn-like div.CodeMirror-selected { background: #cfc; }
.cm-s-mdn-like .CodeMirror-line::selection, .cm-s-mdn-like .CodeMirror-line > span::selection, .cm-s-mdn-like .CodeMirror-line > span > span::selection { background: #cfc; }
.cm-s-mdn-like .CodeMirror-line::-moz-selection, .cm-s-mdn-like .CodeMirror-line > span::-moz-selection, .cm-s-mdn-like .CodeMirror-line > span > span::-moz-selection { background: #cfc; }

.cm-s-mdn-like .CodeMirror-gutters { background: #f8f8f8; border-left: 6px solid rgba(0,83,159,0.65); color: #333; }
.cm-s-mdn-like .CodeMirror-linenumber { color: #aaa; padding-left: 8px; }
.cm-s-mdn-like .CodeMirror-cursor { border-left: 2px solid #222; }

.cm-s-mdn-like .cm-keyword { color: #6262FF; }
.cm-s-mdn-like .cm-atom { color: #F90; }
.cm-s-mdn-like .cm-number { color:  #ca7841; }
.cm-s-mdn-like .cm-def { color: #8DA6CE; }
.cm-s-mdn-like span.cm-variable-2, .cm-s-mdn-like span.cm-tag { color: #690; }
.cm-s-mdn-like span.cm-variable-3, .cm-s-mdn-like span.cm-def, .cm-s-mdn-like span.cm-type { color: #07a; }

.cm-s-mdn-like .cm-variable { color: #07a; }
.cm-s-mdn-like .cm-property { color: #905; }
.cm-s-mdn-like .cm-qualifier { color: #690; }

.cm-s-mdn-like .cm-operator { color: #cda869; }
.cm-s-mdn-like .cm-comment { color:#777; font-weight:normal; }
.cm-s-mdn-like .cm-string { color:#07a; font-style:italic; }
.cm-s-mdn-like .cm-string-2 { color:#bd6b18; } /*?*/
.cm-s-mdn-like .cm-meta { color: #000; } /*?*/
.cm-s-mdn-like .cm-builtin { color: #9B7536; } /*?*/
.cm-s-mdn-like .cm-tag { color: #997643; }
.cm-s-mdn-like .cm-attribute { color: #d6bb6d; } /*?*/
.cm-s-mdn-like .cm-header { color: #FF6400; }
.cm-s-mdn-like .cm-hr { color: #AEAEAE; }
.cm-s-mdn-like .cm-link { color:#ad9361; font-style:italic; text-decoration:none; }
.cm-s-mdn-like .cm-error { border-bottom: 1px solid red; }

div.cm-s-mdn-like .CodeMirror-activeline-background { background: #efefff; }
div.cm-s-mdn-like span.CodeMirror-matchingbracket { outline:1px solid grey; color: inherit; }

.cm-s-mdn-like.CodeMirror { background-image: url(data:image/png;base64,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); }

/*

    Name:       seti
    Author:     Michael Kaminsky (http://github.com/mkaminsky11)

    Original seti color scheme by Jesse Weed (https://github.com/jesseweed/seti-syntax)

*/


.cm-s-seti.CodeMirror {
  background-color: #151718 !important;
  color: #CFD2D1 !important;
  border: none;
}
.cm-s-seti .CodeMirror-gutters {
  color: #404b53;
  background-color: #0E1112;
  border: none;
}
.cm-s-seti .CodeMirror-cursor { border-left: solid thin #f8f8f0; }
.cm-s-seti .CodeMirror-linenumber { color: #6D8A88; }
.cm-s-seti.CodeMirror-focused div.CodeMirror-selected { background: rgba(255, 255, 255, 0.10); }
.cm-s-seti .CodeMirror-line::selection, .cm-s-seti .CodeMirror-line > span::selection, .cm-s-seti .CodeMirror-line > span > span::selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-seti .CodeMirror-line::-moz-selection, .cm-s-seti .CodeMirror-line > span::-moz-selection, .cm-s-seti .CodeMirror-line > span > span::-moz-selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-seti span.cm-comment { color: #41535b; }
.cm-s-seti span.cm-string, .cm-s-seti span.cm-string-2 { color: #55b5db; }
.cm-s-seti span.cm-number { color: #cd3f45; }
.cm-s-seti span.cm-variable { color: #55b5db; }
.cm-s-seti span.cm-variable-2 { color: #a074c4; }
.cm-s-seti span.cm-def { color: #55b5db; }
.cm-s-seti span.cm-keyword { color: #ff79c6; }
.cm-s-seti span.cm-operator { color: #9fca56; }
.cm-s-seti span.cm-keyword { color: #e6cd69; }
.cm-s-seti span.cm-atom { color: #cd3f45; }
.cm-s-seti span.cm-meta { color: #55b5db; }
.cm-s-seti span.cm-tag { color: #55b5db; }
.cm-s-seti span.cm-attribute { color: #9fca56; }
.cm-s-seti span.cm-qualifier { color: #9fca56; }
.cm-s-seti span.cm-property { color: #a074c4; }
.cm-s-seti span.cm-variable-3, .cm-s-seti span.cm-type { color: #9fca56; }
.cm-s-seti span.cm-builtin { color: #9fca56; }
.cm-s-seti .CodeMirror-activeline-background { background: #101213; }
.cm-s-seti .CodeMirror-matchingbracket { text-decoration: underline; color: white !important; }

/*
Solarized theme for code-mirror
http://ethanschoonover.com/solarized
*/

/*
Solarized color palette
http://ethanschoonover.com/solarized/img/solarized-palette.png
*/

.solarized.base03 { color: #002b36; }
.solarized.base02 { color: #073642; }
.solarized.base01 { color: #586e75; }
.solarized.base00 { color: #657b83; }
.solarized.base0 { color: #839496; }
.solarized.base1 { color: #93a1a1; }
.solarized.base2 { color: #eee8d5; }
.solarized.base3  { color: #fdf6e3; }
.solarized.solar-yellow  { color: #b58900; }
.solarized.solar-orange  { color: #cb4b16; }
.solarized.solar-red { color: #dc322f; }
.solarized.solar-magenta { color: #d33682; }
.solarized.solar-violet  { color: #6c71c4; }
.solarized.solar-blue { color: #268bd2; }
.solarized.solar-cyan { color: #2aa198; }
.solarized.solar-green { color: #859900; }

/* Color scheme for code-mirror */

.cm-s-solarized {
  line-height: 1.45em;
  color-profile: sRGB;
  rendering-intent: auto;
}
.cm-s-solarized.cm-s-dark {
  color: #839496;
  background-color: #002b36;
  text-shadow: #002b36 0 1px;
}
.cm-s-solarized.cm-s-light {
  background-color: #fdf6e3;
  color: #657b83;
  text-shadow: #eee8d5 0 1px;
}

.cm-s-solarized .CodeMirror-widget {
  text-shadow: none;
}

.cm-s-solarized .cm-header { color: #586e75; }
.cm-s-solarized .cm-quote { color: #93a1a1; }

.cm-s-solarized .cm-keyword { color: #cb4b16; }
.cm-s-solarized .cm-atom { color: #d33682; }
.cm-s-solarized .cm-number { color: #d33682; }
.cm-s-solarized .cm-def { color: #2aa198; }

.cm-s-solarized .cm-variable { color: #839496; }
.cm-s-solarized .cm-variable-2 { color: #b58900; }
.cm-s-solarized .cm-variable-3, .cm-s-solarized .cm-type { color: #6c71c4; }

.cm-s-solarized .cm-property { color: #2aa198; }
.cm-s-solarized .cm-operator { color: #6c71c4; }

.cm-s-solarized .cm-comment { color: #586e75; font-style:italic; }

.cm-s-solarized .cm-string { color: #859900; }
.cm-s-solarized .cm-string-2 { color: #b58900; }

.cm-s-solarized .cm-meta { color: #859900; }
.cm-s-solarized .cm-qualifier { color: #b58900; }
.cm-s-solarized .cm-builtin { color: #d33682; }
.cm-s-solarized .cm-bracket { color: #cb4b16; }
.cm-s-solarized .CodeMirror-matchingbracket { color: #859900; }
.cm-s-solarized .CodeMirror-nonmatchingbracket { color: #dc322f; }
.cm-s-solarized .cm-tag { color: #93a1a1; }
.cm-s-solarized .cm-attribute { color: #2aa198; }
.cm-s-solarized .cm-hr {
  color: transparent;
  border-top: 1px solid #586e75;
  display: block;
}
.cm-s-solarized .cm-link { color: #93a1a1; cursor: pointer; }
.cm-s-solarized .cm-special { color: #6c71c4; }
.cm-s-solarized .cm-em {
  color: #999;
  text-decoration: underline;
  text-decoration-style: dotted;
}
.cm-s-solarized .cm-error,
.cm-s-solarized .cm-invalidchar {
  color: #586e75;
  border-bottom: 1px dotted #dc322f;
}

.cm-s-solarized.cm-s-dark div.CodeMirror-selected { background: #073642; }
.cm-s-solarized.cm-s-dark.CodeMirror ::selection { background: rgba(7, 54, 66, 0.99); }
.cm-s-solarized.cm-s-dark .CodeMirror-line::-moz-selection, .cm-s-dark .CodeMirror-line > span::-moz-selection, .cm-s-dark .CodeMirror-line > span > span::-moz-selection { background: rgba(7, 54, 66, 0.99); }

.cm-s-solarized.cm-s-light div.CodeMirror-selected { background: #eee8d5; }
.cm-s-solarized.cm-s-light .CodeMirror-line::selection, .cm-s-light .CodeMirror-line > span::selection, .cm-s-light .CodeMirror-line > span > span::selection { background: #eee8d5; }
.cm-s-solarized.cm-s-light .CodeMirror-line::-moz-selection, .cm-s-ligh .CodeMirror-line > span::-moz-selection, .cm-s-ligh .CodeMirror-line > span > span::-moz-selection { background: #eee8d5; }

/* Editor styling */



/* Little shadow on the view-port of the buffer view */
.cm-s-solarized.CodeMirror {
  -moz-box-shadow: inset 7px 0 12px -6px #000;
  -webkit-box-shadow: inset 7px 0 12px -6px #000;
  box-shadow: inset 7px 0 12px -6px #000;
}

/* Remove gutter border */
.cm-s-solarized .CodeMirror-gutters {
  border-right: 0;
}

/* Gutter colors and line number styling based of color scheme (dark / light) */

/* Dark */
.cm-s-solarized.cm-s-dark .CodeMirror-gutters {
  background-color: #073642;
}

.cm-s-solarized.cm-s-dark .CodeMirror-linenumber {
  color: #586e75;
  text-shadow: #021014 0 -1px;
}

/* Light */
.cm-s-solarized.cm-s-light .CodeMirror-gutters {
  background-color: #eee8d5;
}

.cm-s-solarized.cm-s-light .CodeMirror-linenumber {
  color: #839496;
}

/* Common */
.cm-s-solarized .CodeMirror-linenumber {
  padding: 0 5px;
}
.cm-s-solarized .CodeMirror-guttermarker-subtle { color: #586e75; }
.cm-s-solarized.cm-s-dark .CodeMirror-guttermarker { color: #ddd; }
.cm-s-solarized.cm-s-light .CodeMirror-guttermarker { color: #cb4b16; }

.cm-s-solarized .CodeMirror-gutter .CodeMirror-gutter-text {
  color: #586e75;
}

/* Cursor */
.cm-s-solarized .CodeMirror-cursor { border-left: 1px solid #819090; }

/* Fat cursor */
.cm-s-solarized.cm-s-light.cm-fat-cursor .CodeMirror-cursor { background: #77ee77; }
.cm-s-solarized.cm-s-light .cm-animate-fat-cursor { background-color: #77ee77; }
.cm-s-solarized.cm-s-dark.cm-fat-cursor .CodeMirror-cursor { background: #586e75; }
.cm-s-solarized.cm-s-dark .cm-animate-fat-cursor { background-color: #586e75; }

/* Active line */
.cm-s-solarized.cm-s-dark .CodeMirror-activeline-background {
  background: rgba(255, 255, 255, 0.06);
}
.cm-s-solarized.cm-s-light .CodeMirror-activeline-background {
  background: rgba(0, 0, 0, 0.06);
}

.cm-s-the-matrix.CodeMirror { background: #000000; color: #00FF00; }
.cm-s-the-matrix div.CodeMirror-selected { background: #2D2D2D; }
.cm-s-the-matrix .CodeMirror-line::selection, .cm-s-the-matrix .CodeMirror-line > span::selection, .cm-s-the-matrix .CodeMirror-line > span > span::selection { background: rgba(45, 45, 45, 0.99); }
.cm-s-the-matrix .CodeMirror-line::-moz-selection, .cm-s-the-matrix .CodeMirror-line > span::-moz-selection, .cm-s-the-matrix .CodeMirror-line > span > span::-moz-selection { background: rgba(45, 45, 45, 0.99); }
.cm-s-the-matrix .CodeMirror-gutters { background: #060; border-right: 2px solid #00FF00; }
.cm-s-the-matrix .CodeMirror-guttermarker { color: #0f0; }
.cm-s-the-matrix .CodeMirror-guttermarker-subtle { color: white; }
.cm-s-the-matrix .CodeMirror-linenumber { color: #FFFFFF; }
.cm-s-the-matrix .CodeMirror-cursor { border-left: 1px solid #00FF00; }

.cm-s-the-matrix span.cm-keyword { color: #008803; font-weight: bold; }
.cm-s-the-matrix span.cm-atom { color: #3FF; }
.cm-s-the-matrix span.cm-number { color: #FFB94F; }
.cm-s-the-matrix span.cm-def { color: #99C; }
.cm-s-the-matrix span.cm-variable { color: #F6C; }
.cm-s-the-matrix span.cm-variable-2 { color: #C6F; }
.cm-s-the-matrix span.cm-variable-3, .cm-s-the-matrix span.cm-type { color: #96F; }
.cm-s-the-matrix span.cm-property { color: #62FFA0; }
.cm-s-the-matrix span.cm-operator { color: #999; }
.cm-s-the-matrix span.cm-comment { color: #CCCCCC; }
.cm-s-the-matrix span.cm-string { color: #39C; }
.cm-s-the-matrix span.cm-meta { color: #C9F; }
.cm-s-the-matrix span.cm-qualifier { color: #FFF700; }
.cm-s-the-matrix span.cm-builtin { color: #30a; }
.cm-s-the-matrix span.cm-bracket { color: #cc7; }
.cm-s-the-matrix span.cm-tag { color: #FFBD40; }
.cm-s-the-matrix span.cm-attribute { color: #FFF700; }
.cm-s-the-matrix span.cm-error { color: #FF0000; }

.cm-s-the-matrix .CodeMirror-activeline-background { background: #040; }

/*
Copyright (C) 2011 by MarkLogic Corporation
Author: Mike Brevoort <mike@brevoort.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
.cm-s-xq-light span.cm-keyword { line-height: 1em; font-weight: bold; color: #5A5CAD; }
.cm-s-xq-light span.cm-atom { color: #6C8CD5; }
.cm-s-xq-light span.cm-number { color: #164; }
.cm-s-xq-light span.cm-def { text-decoration:underline; }
.cm-s-xq-light span.cm-variable { color: black; }
.cm-s-xq-light span.cm-variable-2 { color:black; }
.cm-s-xq-light span.cm-variable-3, .cm-s-xq-light span.cm-type { color: black; }
.cm-s-xq-light span.cm-property {}
.cm-s-xq-light span.cm-operator {}
.cm-s-xq-light span.cm-comment { color: #0080FF; font-style: italic; }
.cm-s-xq-light span.cm-string { color: red; }
.cm-s-xq-light span.cm-meta { color: yellow; }
.cm-s-xq-light span.cm-qualifier { color: grey; }
.cm-s-xq-light span.cm-builtin { color: #7EA656; }
.cm-s-xq-light span.cm-bracket { color: #cc7; }
.cm-s-xq-light span.cm-tag { color: #3F7F7F; }
.cm-s-xq-light span.cm-attribute { color: #7F007F; }
.cm-s-xq-light span.cm-error { color: #f00; }

.cm-s-xq-light .CodeMirror-activeline-background { background: #e8f2ff; }
.cm-s-xq-light .CodeMirror-matchingbracket { outline:1px solid grey;color:black !important;background:yellow; }

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.CodeMirror {
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  font-family: var(--jp-code-font-family);
  border: 0;
  border-radius: 0;
  height: auto;
  /* Changed to auto to autogrow */
}

.CodeMirror pre {
  padding: 0 var(--jp-code-padding);
}

.jp-CodeMirrorEditor[data-type='inline'] .CodeMirror-dialog {
  background-color: var(--jp-layout-color0);
  color: var(--jp-content-font-color1);
}

/* This causes https://github.com/jupyter/jupyterlab/issues/522 */
/* May not cause it not because we changed it! */
.CodeMirror-lines {
  padding: var(--jp-code-padding) 0;
}

.CodeMirror-linenumber {
  padding: 0 8px;
}

.jp-CodeMirrorEditor-static {
  margin: var(--jp-code-padding);
}

.jp-CodeMirrorEditor,
.jp-CodeMirrorEditor-static {
  cursor: text;
}

.jp-CodeMirrorEditor[data-type='inline'] .CodeMirror-cursor {
  border-left: var(--jp-code-cursor-width0) solid var(--jp-editor-cursor-color);
}

/* When zoomed out 67% and 33% on a screen of 1440 width x 900 height */
@media screen and (min-width: 2138px) and (max-width: 4319px) {
  .jp-CodeMirrorEditor[data-type='inline'] .CodeMirror-cursor {
    border-left: var(--jp-code-cursor-width1) solid
      var(--jp-editor-cursor-color);
  }
}

/* When zoomed out less than 33% */
@media screen and (min-width: 4320px) {
  .jp-CodeMirrorEditor[data-type='inline'] .CodeMirror-cursor {
    border-left: var(--jp-code-cursor-width2) solid
      var(--jp-editor-cursor-color);
  }
}

.CodeMirror.jp-mod-readOnly .CodeMirror-cursor {
  display: none;
}

.CodeMirror-gutters {
  border-right: 1px solid var(--jp-border-color2);
  background-color: var(--jp-layout-color0);
}

.jp-CollaboratorCursor {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: none;
  border-bottom: 3px solid;
  background-clip: content-box;
  margin-left: -5px;
  margin-right: -5px;
}

.CodeMirror-selectedtext.cm-searching {
  background-color: var(--jp-search-selected-match-background-color) !important;
  color: var(--jp-search-selected-match-color) !important;
}

.cm-searching {
  background-color: var(
    --jp-search-unselected-match-background-color
  ) !important;
  color: var(--jp-search-unselected-match-color) !important;
}

.CodeMirror-focused .CodeMirror-selected {
  background-color: var(--jp-editor-selected-focused-background);
}

.CodeMirror-selected {
  background-color: var(--jp-editor-selected-background);
}

.jp-CollaboratorCursor-hover {
  position: absolute;
  z-index: 1;
  transform: translateX(-50%);
  color: white;
  border-radius: 3px;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 1px;
  padding-bottom: 1px;
  text-align: center;
  font-size: var(--jp-ui-font-size1);
  white-space: nowrap;
}

.jp-CodeMirror-ruler {
  border-left: 1px dashed var(--jp-border-color2);
}

/**
 * Here is our jupyter theme for CodeMirror syntax highlighting
 * This is used in our marked.js syntax highlighting and CodeMirror itself
 * The string "jupyter" is set in ../codemirror/widget.DEFAULT_CODEMIRROR_THEME
 * This came from the classic notebook, which came form highlight.js/GitHub
 */

/**
 * CodeMirror themes are handling the background/color in this way. This works
 * fine for CodeMirror editors outside the notebook, but the notebook styles
 * these things differently.
 */
.CodeMirror.cm-s-jupyter {
  background: var(--jp-layout-color0);
  color: var(--jp-content-font-color1);
}

/* In the notebook, we want this styling to be handled by its container */
.jp-CodeConsole .CodeMirror.cm-s-jupyter,
.jp-Notebook .CodeMirror.cm-s-jupyter {
  background: transparent;
}

.cm-s-jupyter .CodeMirror-cursor {
  border-left: var(--jp-code-cursor-width0) solid var(--jp-editor-cursor-color);
}
.cm-s-jupyter span.cm-keyword {
  color: var(--jp-mirror-editor-keyword-color);
  font-weight: bold;
}
.cm-s-jupyter span.cm-atom {
  color: var(--jp-mirror-editor-atom-color);
}
.cm-s-jupyter span.cm-number {
  color: var(--jp-mirror-editor-number-color);
}
.cm-s-jupyter span.cm-def {
  color: var(--jp-mirror-editor-def-color);
}
.cm-s-jupyter span.cm-variable {
  color: var(--jp-mirror-editor-variable-color);
}
.cm-s-jupyter span.cm-variable-2 {
  color: var(--jp-mirror-editor-variable-2-color);
}
.cm-s-jupyter span.cm-variable-3 {
  color: var(--jp-mirror-editor-variable-3-color);
}
.cm-s-jupyter span.cm-punctuation {
  color: var(--jp-mirror-editor-punctuation-color);
}
.cm-s-jupyter span.cm-property {
  color: var(--jp-mirror-editor-property-color);
}
.cm-s-jupyter span.cm-operator {
  color: var(--jp-mirror-editor-operator-color);
  font-weight: bold;
}
.cm-s-jupyter span.cm-comment {
  color: var(--jp-mirror-editor-comment-color);
  font-style: italic;
}
.cm-s-jupyter span.cm-string {
  color: var(--jp-mirror-editor-string-color);
}
.cm-s-jupyter span.cm-string-2 {
  color: var(--jp-mirror-editor-string-2-color);
}
.cm-s-jupyter span.cm-meta {
  color: var(--jp-mirror-editor-meta-color);
}
.cm-s-jupyter span.cm-qualifier {
  color: var(--jp-mirror-editor-qualifier-color);
}
.cm-s-jupyter span.cm-builtin {
  color: var(--jp-mirror-editor-builtin-color);
}
.cm-s-jupyter span.cm-bracket {
  color: var(--jp-mirror-editor-bracket-color);
}
.cm-s-jupyter span.cm-tag {
  color: var(--jp-mirror-editor-tag-color);
}
.cm-s-jupyter span.cm-attribute {
  color: var(--jp-mirror-editor-attribute-color);
}
.cm-s-jupyter span.cm-header {
  color: var(--jp-mirror-editor-header-color);
}
.cm-s-jupyter span.cm-quote {
  color: var(--jp-mirror-editor-quote-color);
}
.cm-s-jupyter span.cm-link {
  color: var(--jp-mirror-editor-link-color);
}
.cm-s-jupyter span.cm-error {
  color: var(--jp-mirror-editor-error-color);
}
.cm-s-jupyter span.cm-hr {
  color: #999;
}

.cm-s-jupyter span.cm-tab {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAAXNSR0IArs4c6QAAAGFJREFUSMft1LsRQFAQheHPowAKoACx3IgEKtaEHujDjORSgWTH/ZOdnZOcM/sgk/kFFWY0qV8foQwS4MKBCS3qR6ixBJvElOobYAtivseIE120FaowJPN75GMu8j/LfMwNjh4HUpwg4LUAAAAASUVORK5CYII=);
  background-position: right;
  background-repeat: no-repeat;
}

.cm-s-jupyter .CodeMirror-activeline-background,
.cm-s-jupyter .CodeMirror-gutter {
  background-color: var(--jp-layout-color2);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| RenderedText
|----------------------------------------------------------------------------*/

.jp-RenderedText {
  text-align: left;
  padding-left: var(--jp-code-padding);
  line-height: var(--jp-code-line-height);
  font-family: var(--jp-code-font-family);
}

.jp-RenderedText pre,
.jp-RenderedJavaScript pre,
.jp-RenderedHTMLCommon pre {
  color: var(--jp-content-font-color1);
  font-size: var(--jp-code-font-size);
  border: none;
  margin: 0px;
  padding: 0px;
  line-height: normal;
}

.jp-RenderedText pre a:link {
  text-decoration: none;
  color: var(--jp-content-link-color);
}
.jp-RenderedText pre a:hover {
  text-decoration: underline;
  color: var(--jp-content-link-color);
}
.jp-RenderedText pre a:visited {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

/* console foregrounds and backgrounds */
.jp-RenderedText pre .ansi-black-fg {
  color: #3e424d;
}
.jp-RenderedText pre .ansi-red-fg {
  color: #e75c58;
}
.jp-RenderedText pre .ansi-green-fg {
  color: #00a250;
}
.jp-RenderedText pre .ansi-yellow-fg {
  color: #ddb62b;
}
.jp-RenderedText pre .ansi-blue-fg {
  color: #208ffb;
}
.jp-RenderedText pre .ansi-magenta-fg {
  color: #d160c4;
}
.jp-RenderedText pre .ansi-cyan-fg {
  color: #60c6c8;
}
.jp-RenderedText pre .ansi-white-fg {
  color: #c5c1b4;
}

.jp-RenderedText pre .ansi-black-bg {
  background-color: #3e424d;
}
.jp-RenderedText pre .ansi-red-bg {
  background-color: #e75c58;
}
.jp-RenderedText pre .ansi-green-bg {
  background-color: #00a250;
}
.jp-RenderedText pre .ansi-yellow-bg {
  background-color: #ddb62b;
}
.jp-RenderedText pre .ansi-blue-bg {
  background-color: #208ffb;
}
.jp-RenderedText pre .ansi-magenta-bg {
  background-color: #d160c4;
}
.jp-RenderedText pre .ansi-cyan-bg {
  background-color: #60c6c8;
}
.jp-RenderedText pre .ansi-white-bg {
  background-color: #c5c1b4;
}

.jp-RenderedText pre .ansi-black-intense-fg {
  color: #282c36;
}
.jp-RenderedText pre .ansi-red-intense-fg {
  color: #b22b31;
}
.jp-RenderedText pre .ansi-green-intense-fg {
  color: #007427;
}
.jp-RenderedText pre .ansi-yellow-intense-fg {
  color: #b27d12;
}
.jp-RenderedText pre .ansi-blue-intense-fg {
  color: #0065ca;
}
.jp-RenderedText pre .ansi-magenta-intense-fg {
  color: #a03196;
}
.jp-RenderedText pre .ansi-cyan-intense-fg {
  color: #258f8f;
}
.jp-RenderedText pre .ansi-white-intense-fg {
  color: #a1a6b2;
}

.jp-RenderedText pre .ansi-black-intense-bg {
  background-color: #282c36;
}
.jp-RenderedText pre .ansi-red-intense-bg {
  background-color: #b22b31;
}
.jp-RenderedText pre .ansi-green-intense-bg {
  background-color: #007427;
}
.jp-RenderedText pre .ansi-yellow-intense-bg {
  background-color: #b27d12;
}
.jp-RenderedText pre .ansi-blue-intense-bg {
  background-color: #0065ca;
}
.jp-RenderedText pre .ansi-magenta-intense-bg {
  background-color: #a03196;
}
.jp-RenderedText pre .ansi-cyan-intense-bg {
  background-color: #258f8f;
}
.jp-RenderedText pre .ansi-white-intense-bg {
  background-color: #a1a6b2;
}

.jp-RenderedText pre .ansi-default-inverse-fg {
  color: var(--jp-ui-inverse-font-color0);
}
.jp-RenderedText pre .ansi-default-inverse-bg {
  background-color: var(--jp-inverse-layout-color0);
}

.jp-RenderedText pre .ansi-bold {
  font-weight: bold;
}
.jp-RenderedText pre .ansi-underline {
  text-decoration: underline;
}

.jp-RenderedText[data-mime-type='application/vnd.jupyter.stderr'] {
  background: var(--jp-rendermime-error-background);
  padding-top: var(--jp-code-padding);
}

/*-----------------------------------------------------------------------------
| RenderedLatex
|----------------------------------------------------------------------------*/

.jp-RenderedLatex {
  color: var(--jp-content-font-color1);
  font-size: var(--jp-content-font-size1);
  line-height: var(--jp-content-line-height);
}

/* Left-justify outputs.*/
.jp-OutputArea-output.jp-RenderedLatex {
  padding: var(--jp-code-padding);
  text-align: left;
}

/*-----------------------------------------------------------------------------
| RenderedHTML
|----------------------------------------------------------------------------*/

.jp-RenderedHTMLCommon {
  color: var(--jp-content-font-color1);
  font-family: var(--jp-content-font-family);
  font-size: var(--jp-content-font-size1);
  line-height: var(--jp-content-line-height);
  /* Give a bit more R padding on Markdown text to keep line lengths reasonable */
  padding-right: 20px;
}

.jp-RenderedHTMLCommon em {
  font-style: italic;
}

.jp-RenderedHTMLCommon strong {
  font-weight: bold;
}

.jp-RenderedHTMLCommon u {
  text-decoration: underline;
}

.jp-RenderedHTMLCommon a:link {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

.jp-RenderedHTMLCommon a:hover {
  text-decoration: underline;
  color: var(--jp-content-link-color);
}

.jp-RenderedHTMLCommon a:visited {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

/* Headings */

.jp-RenderedHTMLCommon h1,
.jp-RenderedHTMLCommon h2,
.jp-RenderedHTMLCommon h3,
.jp-RenderedHTMLCommon h4,
.jp-RenderedHTMLCommon h5,
.jp-RenderedHTMLCommon h6 {
  line-height: var(--jp-content-heading-line-height);
  font-weight: var(--jp-content-heading-font-weight);
  font-style: normal;
  margin: var(--jp-content-heading-margin-top) 0
    var(--jp-content-heading-margin-bottom) 0;
}

.jp-RenderedHTMLCommon h1:first-child,
.jp-RenderedHTMLCommon h2:first-child,
.jp-RenderedHTMLCommon h3:first-child,
.jp-RenderedHTMLCommon h4:first-child,
.jp-RenderedHTMLCommon h5:first-child,
.jp-RenderedHTMLCommon h6:first-child {
  margin-top: calc(0.5 * var(--jp-content-heading-margin-top));
}

.jp-RenderedHTMLCommon h1:last-child,
.jp-RenderedHTMLCommon h2:last-child,
.jp-RenderedHTMLCommon h3:last-child,
.jp-RenderedHTMLCommon h4:last-child,
.jp-RenderedHTMLCommon h5:last-child,
.jp-RenderedHTMLCommon h6:last-child {
  margin-bottom: calc(0.5 * var(--jp-content-heading-margin-bottom));
}

.jp-RenderedHTMLCommon h1 {
  font-size: var(--jp-content-font-size5);
}

.jp-RenderedHTMLCommon h2 {
  font-size: var(--jp-content-font-size4);
}

.jp-RenderedHTMLCommon h3 {
  font-size: var(--jp-content-font-size3);
}

.jp-RenderedHTMLCommon h4 {
  font-size: var(--jp-content-font-size2);
}

.jp-RenderedHTMLCommon h5 {
  font-size: var(--jp-content-font-size1);
}

.jp-RenderedHTMLCommon h6 {
  font-size: var(--jp-content-font-size0);
}

/* Lists */

.jp-RenderedHTMLCommon ul:not(.list-inline),
.jp-RenderedHTMLCommon ol:not(.list-inline) {
  padding-left: 2em;
}

.jp-RenderedHTMLCommon ul {
  list-style: disc;
}

.jp-RenderedHTMLCommon ul ul {
  list-style: square;
}

.jp-RenderedHTMLCommon ul ul ul {
  list-style: circle;
}

.jp-RenderedHTMLCommon ol {
  list-style: decimal;
}

.jp-RenderedHTMLCommon ol ol {
  list-style: upper-alpha;
}

.jp-RenderedHTMLCommon ol ol ol {
  list-style: lower-alpha;
}

.jp-RenderedHTMLCommon ol ol ol ol {
  list-style: lower-roman;
}

.jp-RenderedHTMLCommon ol ol ol ol ol {
  list-style: decimal;
}

.jp-RenderedHTMLCommon ol,
.jp-RenderedHTMLCommon ul {
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon ul ul,
.jp-RenderedHTMLCommon ul ol,
.jp-RenderedHTMLCommon ol ul,
.jp-RenderedHTMLCommon ol ol {
  margin-bottom: 0em;
}

.jp-RenderedHTMLCommon hr {
  color: var(--jp-border-color2);
  background-color: var(--jp-border-color1);
  margin-top: 1em;
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon > pre {
  margin: 1.5em 2em;
}

.jp-RenderedHTMLCommon pre,
.jp-RenderedHTMLCommon code {
  border: 0;
  background-color: var(--jp-layout-color0);
  color: var(--jp-content-font-color1);
  font-family: var(--jp-code-font-family);
  font-size: inherit;
  line-height: var(--jp-code-line-height);
  padding: 0;
  white-space: pre-wrap;
}

.jp-RenderedHTMLCommon :not(pre) > code {
  background-color: var(--jp-layout-color2);
  padding: 1px 5px;
}

/* Tables */

.jp-RenderedHTMLCommon table {
  border-collapse: collapse;
  border-spacing: 0;
  border: none;
  color: var(--jp-ui-font-color1);
  font-size: 12px;
  table-layout: fixed;
  margin-left: auto;
  margin-right: auto;
}

.jp-RenderedHTMLCommon thead {
  border-bottom: var(--jp-border-width) solid var(--jp-border-color1);
  vertical-align: bottom;
}

.jp-RenderedHTMLCommon td,
.jp-RenderedHTMLCommon th,
.jp-RenderedHTMLCommon tr {
  vertical-align: middle;
  padding: 0.5em 0.5em;
  line-height: normal;
  white-space: normal;
  max-width: none;
  border: none;
}

.jp-RenderedMarkdown.jp-RenderedHTMLCommon td,
.jp-RenderedMarkdown.jp-RenderedHTMLCommon th {
  max-width: none;
}

:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon td,
:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon th,
:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon tr {
  text-align: right;
}

.jp-RenderedHTMLCommon th {
  font-weight: bold;
}

.jp-RenderedHTMLCommon tbody tr:nth-child(odd) {
  background: var(--jp-layout-color0);
}

.jp-RenderedHTMLCommon tbody tr:nth-child(even) {
  background: var(--jp-rendermime-table-row-background);
}

.jp-RenderedHTMLCommon tbody tr:hover {
  background: var(--jp-rendermime-table-row-hover-background);
}

.jp-RenderedHTMLCommon table {
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon p {
  text-align: left;
  margin: 0px;
}

.jp-RenderedHTMLCommon p {
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon img {
  -moz-force-broken-image-icon: 1;
}

/* Restrict to direct children as other images could be nested in other content. */
.jp-RenderedHTMLCommon > img {
  display: block;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 1em;
}

/* Change color behind transparent images if they need it... */
[data-jp-theme-light='false'] .jp-RenderedImage img.jp-needs-light-background {
  background-color: var(--jp-inverse-layout-color1);
}
[data-jp-theme-light='true'] .jp-RenderedImage img.jp-needs-dark-background {
  background-color: var(--jp-inverse-layout-color1);
}
/* ...or leave it untouched if they don't */
[data-jp-theme-light='false'] .jp-RenderedImage img.jp-needs-dark-background {
}
[data-jp-theme-light='true'] .jp-RenderedImage img.jp-needs-light-background {
}

.jp-RenderedHTMLCommon img,
.jp-RenderedImage img,
.jp-RenderedHTMLCommon svg,
.jp-RenderedSVG svg {
  max-width: 100%;
  height: auto;
}

.jp-RenderedHTMLCommon img.jp-mod-unconfined,
.jp-RenderedImage img.jp-mod-unconfined,
.jp-RenderedHTMLCommon svg.jp-mod-unconfined,
.jp-RenderedSVG svg.jp-mod-unconfined {
  max-width: none;
}

.jp-RenderedHTMLCommon .alert {
  padding: var(--jp-notebook-padding);
  border: var(--jp-border-width) solid transparent;
  border-radius: var(--jp-border-radius);
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon .alert-info {
  color: var(--jp-info-color0);
  background-color: var(--jp-info-color3);
  border-color: var(--jp-info-color2);
}
.jp-RenderedHTMLCommon .alert-info hr {
  border-color: var(--jp-info-color3);
}
.jp-RenderedHTMLCommon .alert-info > p:last-child,
.jp-RenderedHTMLCommon .alert-info > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-warning {
  color: var(--jp-warn-color0);
  background-color: var(--jp-warn-color3);
  border-color: var(--jp-warn-color2);
}
.jp-RenderedHTMLCommon .alert-warning hr {
  border-color: var(--jp-warn-color3);
}
.jp-RenderedHTMLCommon .alert-warning > p:last-child,
.jp-RenderedHTMLCommon .alert-warning > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-success {
  color: var(--jp-success-color0);
  background-color: var(--jp-success-color3);
  border-color: var(--jp-success-color2);
}
.jp-RenderedHTMLCommon .alert-success hr {
  border-color: var(--jp-success-color3);
}
.jp-RenderedHTMLCommon .alert-success > p:last-child,
.jp-RenderedHTMLCommon .alert-success > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-danger {
  color: var(--jp-error-color0);
  background-color: var(--jp-error-color3);
  border-color: var(--jp-error-color2);
}
.jp-RenderedHTMLCommon .alert-danger hr {
  border-color: var(--jp-error-color3);
}
.jp-RenderedHTMLCommon .alert-danger > p:last-child,
.jp-RenderedHTMLCommon .alert-danger > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon blockquote {
  margin: 1em 2em;
  padding: 0 1em;
  border-left: 5px solid var(--jp-border-color2);
}

a.jp-InternalAnchorLink {
  visibility: hidden;
  margin-left: 8px;
  color: var(--md-blue-800);
}

h1:hover .jp-InternalAnchorLink,
h2:hover .jp-InternalAnchorLink,
h3:hover .jp-InternalAnchorLink,
h4:hover .jp-InternalAnchorLink,
h5:hover .jp-InternalAnchorLink,
h6:hover .jp-InternalAnchorLink {
  visibility: visible;
}

.jp-RenderedHTMLCommon kbd {
  background-color: var(--jp-rendermime-table-row-background);
  border: 1px solid var(--jp-border-color0);
  border-bottom-color: var(--jp-border-color2);
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  display: inline-block;
  font-size: 0.8em;
  line-height: 1em;
  padding: 0.2em 0.5em;
}

/* Most direct children of .jp-RenderedHTMLCommon have a margin-bottom of 1.0.
 * At the bottom of cells this is a bit too much as there is also spacing
 * between cells. Going all the way to 0 gets too tight between markdown and
 * code cells.
 */
.jp-RenderedHTMLCommon > *:last-child {
  margin-bottom: 0.5em;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-MimeDocument {
  outline: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-filebrowser-button-height: 28px;
  --jp-private-filebrowser-button-width: 48px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-FileBrowser {
  display: flex;
  flex-direction: column;
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);
  /* This is needed so that all font sizing of children done in ems is
   * relative to this base size */
  font-size: var(--jp-ui-font-size1);
}

.jp-FileBrowser-toolbar.jp-Toolbar {
  border-bottom: none;
  height: auto;
  margin: var(--jp-toolbar-header-margin);
  box-shadow: none;
}

.jp-BreadCrumbs {
  flex: 0 0 auto;
  margin: 4px 12px;
}

.jp-BreadCrumbs-item {
  margin: 0px 2px;
  padding: 0px 2px;
  border-radius: var(--jp-border-radius);
  cursor: pointer;
}

.jp-BreadCrumbs-item:hover {
  background-color: var(--jp-layout-color2);
}

.jp-BreadCrumbs-item:first-child {
  margin-left: 0px;
}

.jp-BreadCrumbs-item.jp-mod-dropTarget {
  background-color: var(--jp-brand-color2);
  opacity: 0.7;
}

/*-----------------------------------------------------------------------------
| Buttons
|----------------------------------------------------------------------------*/

.jp-FileBrowser-toolbar.jp-Toolbar {
  padding: 0px;
}

.jp-FileBrowser-toolbar.jp-Toolbar {
  justify-content: space-evenly;
}

.jp-FileBrowser-toolbar.jp-Toolbar .jp-Toolbar-item {
  flex: 1;
}

.jp-FileBrowser-toolbar.jp-Toolbar .jp-ToolbarButtonComponent {
  width: 100%;
}

/*-----------------------------------------------------------------------------
| DirListing
|----------------------------------------------------------------------------*/

.jp-DirListing {
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
  outline: 0;
}

.jp-DirListing-header {
  flex: 0 0 auto;
  display: flex;
  flex-direction: row;
  overflow: hidden;
  border-top: var(--jp-border-width) solid var(--jp-border-color2);
  border-bottom: var(--jp-border-width) solid var(--jp-border-color1);
  box-shadow: var(--jp-toolbar-box-shadow);
  z-index: 2;
}

.jp-DirListing-headerItem {
  padding: 4px 12px 2px 12px;
  font-weight: 500;
}

.jp-DirListing-headerItem:hover {
  background: var(--jp-layout-color2);
}

.jp-DirListing-headerItem.jp-id-name {
  flex: 1 0 84px;
}

.jp-DirListing-headerItem.jp-id-modified {
  flex: 0 0 112px;
  border-left: var(--jp-border-width) solid var(--jp-border-color2);
  text-align: right;
}

.jp-DirListing-narrow .jp-id-modified,
.jp-DirListing-narrow .jp-DirListing-itemModified {
  display: none;
}

.jp-DirListing-headerItem.jp-mod-selected {
  font-weight: 600;
}

/* increase specificity to override bundled default */
.jp-DirListing-content {
  flex: 1 1 auto;
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: auto;
  background-color: var(--jp-layout-color1);
}

/* Style the directory listing content when a user drops a file to upload */
.jp-DirListing.jp-mod-native-drop .jp-DirListing-content {
  outline: 5px dashed rgba(128, 128, 128, 0.5);
  outline-offset: -10px;
  cursor: copy;
}

.jp-DirListing-item {
  display: flex;
  flex-direction: row;
  padding: 4px 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.jp-DirListing-item.jp-mod-selected {
  color: white;
  background: var(--jp-brand-color1);
}

.jp-DirListing-item.jp-mod-dropTarget {
  background: var(--jp-brand-color3);
}

.jp-DirListing-item:hover:not(.jp-mod-selected) {
  background: var(--jp-layout-color2);
}

.jp-DirListing-itemIcon {
  flex: 0 0 20px;
  margin-right: 4px;
}

.jp-DirListing-itemText {
  flex: 1 0 64px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  user-select: none;
}

.jp-DirListing-itemModified {
  flex: 0 0 125px;
  text-align: right;
}

.jp-DirListing-editor {
  flex: 1 0 64px;
  outline: none;
  border: none;
}

.jp-DirListing-item.jp-mod-running .jp-DirListing-itemIcon:before {
  color: limegreen;
  content: '\25CF';
  font-size: 8px;
  position: absolute;
  left: -8px;
}

.jp-DirListing-item.lm-mod-drag-image,
.jp-DirListing-item.jp-mod-selected.lm-mod-drag-image {
  font-size: var(--jp-ui-font-size1);
  padding-left: 4px;
  margin-left: 4px;
  width: 160px;
  background-color: var(--jp-ui-inverse-font-color2);
  box-shadow: var(--jp-elevation-z2);
  border-radius: 0px;
  color: var(--jp-ui-font-color1);
  transform: translateX(-40%) translateY(-58%);
}

.jp-DirListing-deadSpace {
  flex: 1 1 auto;
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: auto;
  background-color: var(--jp-layout-color1);
}

.jp-Document {
  min-width: 120px;
  min-height: 120px;
  outline: none;
}

.jp-FileDialog.jp-mod-conflict input {
  color: red;
}

.jp-FileDialog .jp-new-name-title {
  margin-top: 12px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Private CSS variables
|----------------------------------------------------------------------------*/

:root {
}

/*-----------------------------------------------------------------------------
| Main OutputArea
| OutputArea has a list of Outputs
|----------------------------------------------------------------------------*/

.jp-OutputArea {
  overflow-y: auto;
}

.jp-OutputArea-child {
  display: flex;
  flex-direction: row;
}

.jp-OutputPrompt {
  flex: 0 0 var(--jp-cell-prompt-width);
  color: var(--jp-cell-outprompt-font-color);
  font-family: var(--jp-cell-prompt-font-family);
  padding: var(--jp-code-padding);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;
  opacity: var(--jp-cell-prompt-opacity);
  /* Right align prompt text, don't wrap to handle large prompt numbers */
  text-align: right;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  /* Disable text selection */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.jp-OutputArea-output {
  height: auto;
  overflow: auto;
  user-select: text;
  -moz-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
}

.jp-OutputArea-child .jp-OutputArea-output {
  flex-grow: 1;
  flex-shrink: 1;
}

/**
 * Isolated output.
 */
.jp-OutputArea-output.jp-mod-isolated {
  width: 100%;
  display: block;
}

/*
When drag events occur, `p-mod-override-cursor` is added to the body.
Because iframes steal all cursor events, the following two rules are necessary
to suppress pointer events while resize drags are occurring. There may be a
better solution to this problem.
*/
body.lm-mod-override-cursor .jp-OutputArea-output.jp-mod-isolated {
  position: relative;
}

body.lm-mod-override-cursor .jp-OutputArea-output.jp-mod-isolated:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: transparent;
}

/* pre */

.jp-OutputArea-output pre {
  border: none;
  margin: 0px;
  padding: 0px;
  overflow-x: auto;
  overflow-y: auto;
  word-break: break-all;
  word-wrap: break-word;
  white-space: pre-wrap;
}

/* tables */

.jp-OutputArea-output.jp-RenderedHTMLCommon table {
  margin-left: 0;
  margin-right: 0;
}

/* description lists */

.jp-OutputArea-output dl,
.jp-OutputArea-output dt,
.jp-OutputArea-output dd {
  display: block;
}

.jp-OutputArea-output dl {
  width: 100%;
  overflow: hidden;
  padding: 0;
  margin: 0;
}

.jp-OutputArea-output dt {
  font-weight: bold;
  float: left;
  width: 20%;
  padding: 0;
  margin: 0;
}

.jp-OutputArea-output dd {
  float: left;
  width: 80%;
  padding: 0;
  margin: 0;
}

/* Hide the gutter in case of
 *  - nested output areas (e.g. in the case of output widgets)
 *  - mirrored output areas
 */
.jp-OutputArea .jp-OutputArea .jp-OutputArea-prompt {
  display: none;
}

/*-----------------------------------------------------------------------------
| executeResult is added to any Output-result for the display of the object
| returned by a cell
|----------------------------------------------------------------------------*/

.jp-OutputArea-output.jp-OutputArea-executeResult {
  margin-left: 0px;
  flex: 1 1 auto;
}

.jp-OutputArea-executeResult.jp-RenderedText {
  padding-top: var(--jp-code-padding);
}

/*-----------------------------------------------------------------------------
| The Stdin output
|----------------------------------------------------------------------------*/

.jp-OutputArea-stdin {
  line-height: var(--jp-code-line-height);
  padding-top: var(--jp-code-padding);
  display: flex;
}

.jp-Stdin-prompt {
  color: var(--jp-content-font-color0);
  padding-right: var(--jp-code-padding);
  vertical-align: baseline;
  flex: 0 0 auto;
}

.jp-Stdin-input {
  font-family: var(--jp-code-font-family);
  font-size: inherit;
  color: inherit;
  background-color: inherit;
  width: 42%;
  min-width: 200px;
  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;
  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0em 0.25em;
  margin: 0em 0.25em;
  flex: 0 0 70%;
}

.jp-Stdin-input:focus {
  box-shadow: none;
}

/*-----------------------------------------------------------------------------
| Output Area View
|----------------------------------------------------------------------------*/

.jp-LinkedOutputView .jp-OutputArea {
  height: 100%;
  display: block;
}

.jp-LinkedOutputView .jp-OutputArea-output:only-child {
  height: 100%;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Collapser {
  flex: 0 0 var(--jp-cell-collapser-width);
  padding: 0px;
  margin: 0px;
  border: none;
  outline: none;
  background: transparent;
  border-radius: var(--jp-border-radius);
  opacity: 1;
}

.jp-Collapser-child {
  display: block;
  width: 100%;
  box-sizing: border-box;
  /* height: 100% doesn't work because the height of its parent is computed from content */
  position: absolute;
  top: 0px;
  bottom: 0px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Header/Footer
|----------------------------------------------------------------------------*/

/* Hidden by zero height by default */
.jp-CellHeader,
.jp-CellFooter {
  height: 0px;
  width: 100%;
  padding: 0px;
  margin: 0px;
  border: none;
  outline: none;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Input
|----------------------------------------------------------------------------*/

/* All input areas */
.jp-InputArea {
  display: flex;
  flex-direction: row;
}

.jp-InputArea-editor {
  flex: 1 1 auto;
}

.jp-InputArea-editor {
  /* This is the non-active, default styling */
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  border-radius: 0px;
  background: var(--jp-cell-editor-background);
}

.jp-InputPrompt {
  flex: 0 0 var(--jp-cell-prompt-width);
  color: var(--jp-cell-inprompt-font-color);
  font-family: var(--jp-cell-prompt-font-family);
  padding: var(--jp-code-padding);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  opacity: var(--jp-cell-prompt-opacity);
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;
  opacity: var(--jp-cell-prompt-opacity);
  /* Right align prompt text, don't wrap to handle large prompt numbers */
  text-align: right;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  /* Disable text selection */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Placeholder
|----------------------------------------------------------------------------*/

.jp-Placeholder {
  display: flex;
  flex-direction: row;
  flex: 1 1 auto;
}

.jp-Placeholder-prompt {
  box-sizing: border-box;
}

.jp-Placeholder-content {
  flex: 1 1 auto;
  border: none;
  background: transparent;
  height: 20px;
  box-sizing: border-box;
}

.jp-Placeholder-content .jp-MoreHorizIcon {
  width: 32px;
  height: 16px;
  border: 1px solid transparent;
  border-radius: var(--jp-border-radius);
}

.jp-Placeholder-content .jp-MoreHorizIcon:hover {
  border: 1px solid var(--jp-border-color1);
  box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25);
  background-color: var(--jp-layout-color0);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Private CSS variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-cell-scrolling-output-offset: 5px;
}

/*-----------------------------------------------------------------------------
| Cell
|----------------------------------------------------------------------------*/

.jp-Cell {
  padding: var(--jp-cell-padding);
  margin: 0px;
  border: none;
  outline: none;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Common input/output
|----------------------------------------------------------------------------*/

.jp-Cell-inputWrapper,
.jp-Cell-outputWrapper {
  display: flex;
  flex-direction: row;
  padding: 0px;
  margin: 0px;
  /* Added to reveal the box-shadow on the input and output collapsers. */
  overflow: visible;
}

/* Only input/output areas inside cells */
.jp-Cell-inputArea,
.jp-Cell-outputArea {
  flex: 1 1 auto;
}

/*-----------------------------------------------------------------------------
| Collapser
|----------------------------------------------------------------------------*/

/* Make the output collapser disappear when there is not output, but do so
 * in a manner that leaves it in the layout and preserves its width.
 */
.jp-Cell.jp-mod-noOutputs .jp-Cell-outputCollapser {
  border: none !important;
  background: transparent !important;
}

.jp-Cell:not(.jp-mod-noOutputs) .jp-Cell-outputCollapser {
  min-height: var(--jp-cell-collapser-min-height);
}

/*-----------------------------------------------------------------------------
| Output
|----------------------------------------------------------------------------*/

/* Put a space between input and output when there IS output */
.jp-Cell:not(.jp-mod-noOutputs) .jp-Cell-outputWrapper {
  margin-top: 5px;
}

/* Text output with the Out[] prompt needs a top padding to match the
 * alignment of the Out[] prompt itself.
 */
.jp-OutputArea-executeResult .jp-RenderedText.jp-OutputArea-output {
  padding-top: var(--jp-code-padding);
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-Cell-outputArea {
  overflow-y: auto;
  max-height: 200px;
  box-shadow: inset 0 0 6px 2px rgba(0, 0, 0, 0.3);
  margin-left: var(--jp-private-cell-scrolling-output-offset);
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-OutputArea-prompt {
  flex: 0 0
    calc(
      var(--jp-cell-prompt-width) -
        var(--jp-private-cell-scrolling-output-offset)
    );
}

/*-----------------------------------------------------------------------------
| CodeCell
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| MarkdownCell
|----------------------------------------------------------------------------*/

.jp-MarkdownOutput {
  flex: 1 1 auto;
  margin-top: 0;
  margin-bottom: 0;
  padding-left: var(--jp-code-padding);
}

.jp-MarkdownOutput.jp-RenderedHTMLCommon {
  overflow: auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------

/*-----------------------------------------------------------------------------
| Styles
|----------------------------------------------------------------------------*/

.jp-NotebookPanel-toolbar {
  padding: 2px;
}

.jp-Toolbar-item.jp-Notebook-toolbarCellType .jp-select-wrapper.jp-mod-focused {
  border: none;
  box-shadow: none;
}

.jp-Notebook-toolbarCellTypeDropdown select {
  height: 24px;
  font-size: var(--jp-ui-font-size1);
  line-height: 14px;
  border-radius: 0;
  display: block;
}

.jp-Notebook-toolbarCellTypeDropdown span {
  top: 5px !important;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Private CSS variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-notebook-dragImage-width: 304px;
  --jp-private-notebook-dragImage-height: 36px;
  --jp-private-notebook-selected-color: var(--md-blue-400);
  --jp-private-notebook-active-color: var(--md-green-400);
}

/*-----------------------------------------------------------------------------
| Imports
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Notebook
|----------------------------------------------------------------------------*/

.jp-NotebookPanel {
  display: block;
  height: 100%;
}

.jp-NotebookPanel.jp-Document {
  min-width: 240px;
  min-height: 120px;
}

.jp-Notebook {
  padding: var(--jp-notebook-padding);
  outline: none;
  overflow: auto;
  background: var(--jp-layout-color0);
}

.jp-Notebook.jp-mod-scrollPastEnd::after {
  display: block;
  content: '';
  min-height: var(--jp-notebook-scroll-padding);
}

.jp-Notebook .jp-Cell {
  overflow: visible;
}

.jp-Notebook .jp-Cell .jp-InputPrompt {
  cursor: move;
}

/*-----------------------------------------------------------------------------
| Notebook state related styling
|
| The notebook and cells each have states, here are the possibilities:
|
| - Notebook
|   - Command
|   - Edit
| - Cell
|   - None
|   - Active (only one can be active)
|   - Selected (the cells actions are applied to)
|   - Multiselected (when multiple selected, the cursor)
|   - No outputs
|----------------------------------------------------------------------------*/

/* Command or edit modes */

.jp-Notebook .jp-Cell:not(.jp-mod-active) .jp-InputPrompt {
  opacity: var(--jp-cell-prompt-not-active-opacity);
  color: var(--jp-cell-prompt-not-active-font-color);
}

.jp-Notebook .jp-Cell:not(.jp-mod-active) .jp-OutputPrompt {
  opacity: var(--jp-cell-prompt-not-active-opacity);
  color: var(--jp-cell-prompt-not-active-font-color);
}

/* cell is active */
.jp-Notebook .jp-Cell.jp-mod-active .jp-Collapser {
  background: var(--jp-brand-color1);
}

/* collapser is hovered */
.jp-Notebook .jp-Cell .jp-Collapser:hover {
  box-shadow: var(--jp-elevation-z2);
  background: var(--jp-brand-color1);
  opacity: var(--jp-cell-collapser-not-active-hover-opacity);
}

/* cell is active and collapser is hovered */
.jp-Notebook .jp-Cell.jp-mod-active .jp-Collapser:hover {
  background: var(--jp-brand-color0);
  opacity: 1;
}

/* Command mode */

.jp-Notebook.jp-mod-commandMode .jp-Cell.jp-mod-selected {
  background: var(--jp-notebook-multiselected-color);
}

.jp-Notebook.jp-mod-commandMode
  .jp-Cell.jp-mod-active.jp-mod-selected:not(.jp-mod-multiSelected) {
  background: transparent;
}

/* Edit mode */

.jp-Notebook.jp-mod-editMode .jp-Cell.jp-mod-active .jp-InputArea-editor {
  border: var(--jp-border-width) solid var(--jp-cell-editor-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
  background-color: var(--jp-cell-editor-active-background);
}

/*-----------------------------------------------------------------------------
| Notebook drag and drop
|----------------------------------------------------------------------------*/

.jp-Notebook-cell.jp-mod-dropSource {
  opacity: 0.5;
}

.jp-Notebook-cell.jp-mod-dropTarget,
.jp-Notebook.jp-mod-commandMode
  .jp-Notebook-cell.jp-mod-active.jp-mod-selected.jp-mod-dropTarget {
  border-top-color: var(--jp-private-notebook-selected-color);
  border-top-style: solid;
  border-top-width: 2px;
}

.jp-dragImage {
  display: flex;
  flex-direction: row;
  width: var(--jp-private-notebook-dragImage-width);
  height: var(--jp-private-notebook-dragImage-height);
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  background: var(--jp-cell-editor-background);
  overflow: visible;
}

.jp-dragImage-singlePrompt {
  box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.12);
}

.jp-dragImage .jp-dragImage-content {
  flex: 1 1 auto;
  z-index: 2;
  font-size: var(--jp-code-font-size);
  font-family: var(--jp-code-font-family);
  line-height: var(--jp-code-line-height);
  padding: var(--jp-code-padding);
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  background: var(--jp-cell-editor-background-color);
  color: var(--jp-content-font-color3);
  text-align: left;
  margin: 4px 4px 4px 0px;
}

.jp-dragImage .jp-dragImage-prompt {
  flex: 0 0 auto;
  min-width: 36px;
  color: var(--jp-cell-inprompt-font-color);
  padding: var(--jp-code-padding);
  padding-left: 12px;
  font-family: var(--jp-cell-prompt-font-family);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  line-height: 1.9;
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;
}

.jp-dragImage-multipleBack {
  z-index: -1;
  position: absolute;
  height: 32px;
  width: 300px;
  top: 8px;
  left: 8px;
  background: var(--jp-layout-color2);
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.12);
}

/*-----------------------------------------------------------------------------
| Cell toolbar
|----------------------------------------------------------------------------*/

.jp-NotebookTools {
  display: block;
  min-width: var(--jp-sidebar-min-width);
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);
  /* This is needed so that all font sizing of children done in ems is
    * relative to this base size */
  font-size: var(--jp-ui-font-size1);
  overflow: auto;
}

.jp-NotebookTools-tool {
  padding: 0px 12px 0 12px;
}

.jp-ActiveCellTool {
  padding: 12px;
  background-color: var(--jp-layout-color1);
  border-top: none !important;
}

.jp-ActiveCellTool .jp-InputArea-prompt {
  flex: 0 0 auto;
  padding-left: 0px;
}

.jp-ActiveCellTool .jp-InputArea-editor {
  flex: 1 1 auto;
  background: var(--jp-cell-editor-background);
  border-color: var(--jp-cell-editor-border-color);
}

.jp-ActiveCellTool .jp-InputArea-editor .CodeMirror {
  background: transparent;
}

.jp-MetadataEditorTool {
  flex-direction: column;
  padding: 12px 0px 12px 0px;
}

.jp-RankedPanel > :not(:first-child) {
  margin-top: 12px;
}

.jp-KeySelector select.jp-mod-styled {
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  border: var(--jp-border-width) solid var(--jp-border-color1);
}

.jp-KeySelector label,
.jp-MetadataEditorTool label {
  line-height: 1.4;
}

/*-----------------------------------------------------------------------------
| Presentation Mode (.jp-mod-presentationMode)
|----------------------------------------------------------------------------*/

.jp-mod-presentationMode .jp-Notebook {
  --jp-content-font-size1: var(--jp-content-presentation-font-size1);
  --jp-code-font-size: var(--jp-code-presentation-font-size);
}

.jp-mod-presentationMode .jp-Notebook .jp-Cell .jp-InputPrompt,
.jp-mod-presentationMode .jp-Notebook .jp-Cell .jp-OutputPrompt {
  flex: 0 0 110px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensurePackage() in @jupyterlab/buildutils */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

</style>

    <style type="text/css">
/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*
The following CSS variables define the main, public API for styling JupyterLab.
These variables should be used by all plugins wherever possible. In other
words, plugins should not define custom colors, sizes, etc unless absolutely
necessary. This enables users to change the visual theme of JupyterLab
by changing these variables.

Many variables appear in an ordered sequence (0,1,2,3). These sequences
are designed to work well together, so for example, `--jp-border-color1` should
be used with `--jp-layout-color1`. The numbers have the following meanings:

* 0: super-primary, reserved for special emphasis
* 1: primary, most important under normal situations
* 2: secondary, next most important under normal situations
* 3: tertiary, next most important under normal situations

Throughout JupyterLab, we are mostly following principles from Google's
Material Design when selecting colors. We are not, however, following
all of MD as it is not optimized for dense, information rich UIs.
*/

:root {
  /* Elevation
   *
   * We style box-shadows using Material Design's idea of elevation. These particular numbers are taken from here:
   *
   * https://github.com/material-components/material-components-web
   * https://material-components-web.appspot.com/elevation.html
   */

  --jp-shadow-base-lightness: 0;
  --jp-shadow-umbra-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.2
  );
  --jp-shadow-penumbra-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.14
  );
  --jp-shadow-ambient-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.12
  );
  --jp-elevation-z0: none;
  --jp-elevation-z1: 0px 2px 1px -1px var(--jp-shadow-umbra-color),
    0px 1px 1px 0px var(--jp-shadow-penumbra-color),
    0px 1px 3px 0px var(--jp-shadow-ambient-color);
  --jp-elevation-z2: 0px 3px 1px -2px var(--jp-shadow-umbra-color),
    0px 2px 2px 0px var(--jp-shadow-penumbra-color),
    0px 1px 5px 0px var(--jp-shadow-ambient-color);
  --jp-elevation-z4: 0px 2px 4px -1px var(--jp-shadow-umbra-color),
    0px 4px 5px 0px var(--jp-shadow-penumbra-color),
    0px 1px 10px 0px var(--jp-shadow-ambient-color);
  --jp-elevation-z6: 0px 3px 5px -1px var(--jp-shadow-umbra-color),
    0px 6px 10px 0px var(--jp-shadow-penumbra-color),
    0px 1px 18px 0px var(--jp-shadow-ambient-color);
  --jp-elevation-z8: 0px 5px 5px -3px var(--jp-shadow-umbra-color),
    0px 8px 10px 1px var(--jp-shadow-penumbra-color),
    0px 3px 14px 2px var(--jp-shadow-ambient-color);
  --jp-elevation-z12: 0px 7px 8px -4px var(--jp-shadow-umbra-color),
    0px 12px 17px 2px var(--jp-shadow-penumbra-color),
    0px 5px 22px 4px var(--jp-shadow-ambient-color);
  --jp-elevation-z16: 0px 8px 10px -5px var(--jp-shadow-umbra-color),
    0px 16px 24px 2px var(--jp-shadow-penumbra-color),
    0px 6px 30px 5px var(--jp-shadow-ambient-color);
  --jp-elevation-z20: 0px 10px 13px -6px var(--jp-shadow-umbra-color),
    0px 20px 31px 3px var(--jp-shadow-penumbra-color),
    0px 8px 38px 7px var(--jp-shadow-ambient-color);
  --jp-elevation-z24: 0px 11px 15px -7px var(--jp-shadow-umbra-color),
    0px 24px 38px 3px var(--jp-shadow-penumbra-color),
    0px 9px 46px 8px var(--jp-shadow-ambient-color);

  /* Borders
   *
   * The following variables, specify the visual styling of borders in JupyterLab.
   */

  --jp-border-width: 1px;
  --jp-border-color0: var(--md-grey-400);
  --jp-border-color1: var(--md-grey-400);
  --jp-border-color2: var(--md-grey-300);
  --jp-border-color3: var(--md-grey-200);
  --jp-border-radius: 2px;

  /* UI Fonts
   *
   * The UI font CSS variables are used for the typography all of the JupyterLab
   * user interface elements that are not directly user generated content.
   *
   * The font sizing here is done assuming that the body font size of --jp-ui-font-size1
   * is applied to a parent element. When children elements, such as headings, are sized
   * in em all things will be computed relative to that body size.
   */

  --jp-ui-font-scale-factor: 1.2;
  --jp-ui-font-size0: 0.83333em;
  --jp-ui-font-size1: 13px; /* Base font size */
  --jp-ui-font-size2: 1.2em;
  --jp-ui-font-size3: 1.44em;

  --jp-ui-font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica,
    Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';

  /*
   * Use these font colors against the corresponding main layout colors.
   * In a light theme, these go from dark to light.
   */

  /* Defaults use Material Design specification */
  --jp-ui-font-color0: rgba(0, 0, 0, 1);
  --jp-ui-font-color1: rgba(0, 0, 0, 0.87);
  --jp-ui-font-color2: rgba(0, 0, 0, 0.54);
  --jp-ui-font-color3: rgba(0, 0, 0, 0.38);

  /*
   * Use these against the brand/accent/warn/error colors.
   * These will typically go from light to darker, in both a dark and light theme.
   */

  --jp-ui-inverse-font-color0: rgba(255, 255, 255, 1);
  --jp-ui-inverse-font-color1: rgba(255, 255, 255, 1);
  --jp-ui-inverse-font-color2: rgba(255, 255, 255, 0.7);
  --jp-ui-inverse-font-color3: rgba(255, 255, 255, 0.5);

  /* Content Fonts
   *
   * Content font variables are used for typography of user generated content.
   *
   * The font sizing here is done assuming that the body font size of --jp-content-font-size1
   * is applied to a parent element. When children elements, such as headings, are sized
   * in em all things will be computed relative to that body size.
   */

  --jp-content-line-height: 1.6;
  --jp-content-font-scale-factor: 1.2;
  --jp-content-font-size0: 0.83333em;
  --jp-content-font-size1: 14px; /* Base font size */
  --jp-content-font-size2: 1.2em;
  --jp-content-font-size3: 1.44em;
  --jp-content-font-size4: 1.728em;
  --jp-content-font-size5: 2.0736em;

  /* This gives a magnification of about 125% in presentation mode over normal. */
  --jp-content-presentation-font-size1: 17px;

  --jp-content-heading-line-height: 1;
  --jp-content-heading-margin-top: 1.2em;
  --jp-content-heading-margin-bottom: 0.8em;
  --jp-content-heading-font-weight: 500;

  /* Defaults use Material Design specification */
  --jp-content-font-color0: rgba(0, 0, 0, 1);
  --jp-content-font-color1: rgba(0, 0, 0, 0.87);
  --jp-content-font-color2: rgba(0, 0, 0, 0.54);
  --jp-content-font-color3: rgba(0, 0, 0, 0.38);

  --jp-content-link-color: var(--md-blue-700);

  --jp-content-font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
    'Segoe UI Symbol';

  /*
   * Code Fonts
   *
   * Code font variables are used for typography of code and other monospaces content.
   */

  --jp-code-font-size: 13px;
  --jp-code-line-height: 1.3077; /* 17px for 13px base */
  --jp-code-padding: 5px; /* 5px for 13px base, codemirror highlighting needs integer px value */
  --jp-code-font-family-default: Menlo, Consolas, 'DejaVu Sans Mono', monospace;
  --jp-code-font-family: var(--jp-code-font-family-default);

  /* This gives a magnification of about 125% in presentation mode over normal. */
  --jp-code-presentation-font-size: 16px;

  /* may need to tweak cursor width if you change font size */
  --jp-code-cursor-width0: 1.4px;
  --jp-code-cursor-width1: 2px;
  --jp-code-cursor-width2: 4px;

  /* Layout
   *
   * The following are the main layout colors use in JupyterLab. In a light
   * theme these would go from light to dark.
   */

  --jp-layout-color0: white;
  --jp-layout-color1: white;
  --jp-layout-color2: var(--md-grey-200);
  --jp-layout-color3: var(--md-grey-400);
  --jp-layout-color4: var(--md-grey-600);

  /* Inverse Layout
   *
   * The following are the inverse layout colors use in JupyterLab. In a light
   * theme these would go from dark to light.
   */

  --jp-inverse-layout-color0: #111111;
  --jp-inverse-layout-color1: var(--md-grey-900);
  --jp-inverse-layout-color2: var(--md-grey-800);
  --jp-inverse-layout-color3: var(--md-grey-700);
  --jp-inverse-layout-color4: var(--md-grey-600);

  /* Brand/accent */

  --jp-brand-color0: var(--md-blue-700);
  --jp-brand-color1: var(--md-blue-500);
  --jp-brand-color2: var(--md-blue-300);
  --jp-brand-color3: var(--md-blue-100);
  --jp-brand-color4: var(--md-blue-50);

  --jp-accent-color0: var(--md-green-700);
  --jp-accent-color1: var(--md-green-500);
  --jp-accent-color2: var(--md-green-300);
  --jp-accent-color3: var(--md-green-100);

  /* State colors (warn, error, success, info) */

  --jp-warn-color0: var(--md-orange-700);
  --jp-warn-color1: var(--md-orange-500);
  --jp-warn-color2: var(--md-orange-300);
  --jp-warn-color3: var(--md-orange-100);

  --jp-error-color0: var(--md-red-700);
  --jp-error-color1: var(--md-red-500);
  --jp-error-color2: var(--md-red-300);
  --jp-error-color3: var(--md-red-100);

  --jp-success-color0: var(--md-green-700);
  --jp-success-color1: var(--md-green-500);
  --jp-success-color2: var(--md-green-300);
  --jp-success-color3: var(--md-green-100);

  --jp-info-color0: var(--md-cyan-700);
  --jp-info-color1: var(--md-cyan-500);
  --jp-info-color2: var(--md-cyan-300);
  --jp-info-color3: var(--md-cyan-100);

  /* Cell specific styles */

  --jp-cell-padding: 5px;

  --jp-cell-collapser-width: 8px;
  --jp-cell-collapser-min-height: 20px;
  --jp-cell-collapser-not-active-hover-opacity: 0.6;

  --jp-cell-editor-background: var(--md-grey-100);
  --jp-cell-editor-border-color: var(--md-grey-300);
  --jp-cell-editor-box-shadow: inset 0 0 2px var(--md-blue-300);
  --jp-cell-editor-active-background: var(--jp-layout-color0);
  --jp-cell-editor-active-border-color: var(--jp-brand-color1);

  --jp-cell-prompt-width: 64px;
  --jp-cell-prompt-font-family: 'Source Code Pro', monospace;
  --jp-cell-prompt-letter-spacing: 0px;
  --jp-cell-prompt-opacity: 1;
  --jp-cell-prompt-not-active-opacity: 0.5;
  --jp-cell-prompt-not-active-font-color: var(--md-grey-700);
  /* A custom blend of MD grey and blue 600
   * See https://meyerweb.com/eric/tools/color-blend/#546E7A:1E88E5:5:hex */
  --jp-cell-inprompt-font-color: #307fc1;
  /* A custom blend of MD grey and orange 600
   * https://meyerweb.com/eric/tools/color-blend/#546E7A:F4511E:5:hex */
  --jp-cell-outprompt-font-color: #bf5b3d;

  /* Notebook specific styles */

  --jp-notebook-padding: 10px;
  --jp-notebook-select-background: var(--jp-layout-color1);
  --jp-notebook-multiselected-color: var(--md-blue-50);

  /* The scroll padding is calculated to fill enough space at the bottom of the
  notebook to show one single-line cell (with appropriate padding) at the top
  when the notebook is scrolled all the way to the bottom. We also subtract one
  pixel so that no scrollbar appears if we have just one single-line cell in the
  notebook. This padding is to enable a 'scroll past end' feature in a notebook.
  */
  --jp-notebook-scroll-padding: calc(
    100% - var(--jp-code-font-size) * var(--jp-code-line-height) -
      var(--jp-code-padding) - var(--jp-cell-padding) - 1px
  );

  /* Rendermime styles */

  --jp-rendermime-error-background: #fdd;
  --jp-rendermime-table-row-background: var(--md-grey-100);
  --jp-rendermime-table-row-hover-background: var(--md-light-blue-50);

  /* Dialog specific styles */

  --jp-dialog-background: rgba(0, 0, 0, 0.25);

  /* Console specific styles */

  --jp-console-padding: 10px;

  /* Toolbar specific styles */

  --jp-toolbar-border-color: var(--jp-border-color1);
  --jp-toolbar-micro-height: 8px;
  --jp-toolbar-background: var(--jp-layout-color1);
  --jp-toolbar-box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.24);
  --jp-toolbar-header-margin: 4px 4px 0px 4px;
  --jp-toolbar-active-background: var(--md-grey-300);

  /* Input field styles */

  --jp-input-box-shadow: inset 0 0 2px var(--md-blue-300);
  --jp-input-active-background: var(--jp-layout-color1);
  --jp-input-hover-background: var(--jp-layout-color1);
  --jp-input-background: var(--md-grey-100);
  --jp-input-border-color: var(--jp-border-color1);
  --jp-input-active-border-color: var(--jp-brand-color1);
  --jp-input-active-box-shadow-color: rgba(19, 124, 189, 0.3);

  /* General editor styles */

  --jp-editor-selected-background: #d9d9d9;
  --jp-editor-selected-focused-background: #d7d4f0;
  --jp-editor-cursor-color: var(--jp-ui-font-color0);

  /* Code mirror specific styles */

  --jp-mirror-editor-keyword-color: #008000;
  --jp-mirror-editor-atom-color: #88f;
  --jp-mirror-editor-number-color: #080;
  --jp-mirror-editor-def-color: #00f;
  --jp-mirror-editor-variable-color: var(--md-grey-900);
  --jp-mirror-editor-variable-2-color: #05a;
  --jp-mirror-editor-variable-3-color: #085;
  --jp-mirror-editor-punctuation-color: #05a;
  --jp-mirror-editor-property-color: #05a;
  --jp-mirror-editor-operator-color: #aa22ff;
  --jp-mirror-editor-comment-color: #408080;
  --jp-mirror-editor-string-color: #ba2121;
  --jp-mirror-editor-string-2-color: #708;
  --jp-mirror-editor-meta-color: #aa22ff;
  --jp-mirror-editor-qualifier-color: #555;
  --jp-mirror-editor-builtin-color: #008000;
  --jp-mirror-editor-bracket-color: #997;
  --jp-mirror-editor-tag-color: #170;
  --jp-mirror-editor-attribute-color: #00c;
  --jp-mirror-editor-header-color: blue;
  --jp-mirror-editor-quote-color: #090;
  --jp-mirror-editor-link-color: #00c;
  --jp-mirror-editor-error-color: #f00;
  --jp-mirror-editor-hr-color: #999;

  /* Vega extension styles */

  --jp-vega-background: white;

  /* Sidebar-related styles */

  --jp-sidebar-min-width: 180px;

  /* Search-related styles */

  --jp-search-toggle-off-opacity: 0.5;
  --jp-search-toggle-hover-opacity: 0.8;
  --jp-search-toggle-on-opacity: 1;
  --jp-search-selected-match-background-color: rgb(245, 200, 0);
  --jp-search-selected-match-color: black;
  --jp-search-unselected-match-background-color: var(
    --jp-inverse-layout-color0
  );
  --jp-search-unselected-match-color: var(--jp-ui-inverse-font-color0);

  /* Icon colors that work well with light or dark backgrounds */
  --jp-icon-contrast-color0: var(--md-purple-600);
  --jp-icon-contrast-color1: var(--md-green-600);
  --jp-icon-contrast-color2: var(--md-pink-600);
  --jp-icon-contrast-color3: var(--md-blue-600);
}
</style>

<style type="text/css">
a.anchor-link {
   display: none;
}
.highlight  {
    margin: 0.4em;
}

/* Input area styling */
.jp-InputArea {
    overflow: hidden;
}

.jp-InputArea-editor {
    overflow: hidden;
}

@media print {
  body {
    margin: 0;
  }
}
</style>



<!-- Load mathjax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-MML-AM_CHTML-full,Safe"> </script>
    <!-- MathJax configuration -->
    <script type="text/x-mathjax-config">
    init_mathjax = function() {
        if (window.MathJax) {
        // MathJax loaded
            MathJax.Hub.Config({
                TeX: {
                    equationNumbers: {
                    autoNumber: "AMS",
                    useLabelIds: true
                    }
                },
                tex2jax: {
                    inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                    displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                    processEscapes: true,
                    processEnvironments: true
                },
                displayAlign: 'center',
                CommonHTML: {
                    linebreaks: { 
                    automatic: true 
                    }
                },
                "HTML-CSS": {
                    linebreaks: { 
                    automatic: true 
                    }
                }
            });
        
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        }
    }
    init_mathjax();
    </script>
    	<link rel="stylesheet" type="text/css" href="index.css">

    <!-- End of mathjax configuration --></head>

<body class="jp-Notebook" data-jp-theme-light="true" data-jp-theme-name="JupyterLab Light" style="background-image: url('image/analyse.jpg'); background-size: cover;">

<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
 <h2 id="Data-Collection">Data Collection<a class="anchor-link" href="#Data-Collection"></a></h2><p>In this section, we use wholesale customers dataset. And we import or load the dataset from customers.csv file into Python.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>&lt;class &#39;pandas.core.frame.DataFrame&#39;&gt;
     Channel  Region  Fresh  ...  Frozen  Detergents_Paper  Delicatessen
0          2       3  12669  ...     214              2674          1338
1          2       3   7057  ...    1762              3293          1776
2          2       3   6353  ...    2405              3516          7844
3          1       3  13265  ...    6404               507          1788
4          2       3  22615  ...    3915              1777          5185
..       ...     ...    ...  ...     ...               ...           ...
435        1       3  29703  ...   13135               182          2204
436        1       3  39228  ...    4510                93          2346
437        2       3  14531  ...     437             14841          1867
438        1       3  10290  ...    1038               168          2125
439        1       3   2787  ...      65               477            52

[440 rows x 8 columns]
     Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
0    12669   9656     7561     214              2674          1338
1     7057   9810     9568    1762              3293          1776
2     6353   8808     7684    2405              3516          7844
3    13265   1196     4221    6404               507          1788
4    22615   5410     7198    3915              1777          5185
..     ...    ...      ...     ...               ...           ...
435  29703  12051    16027   13135               182          2204
436  39228   1431      764    4510                93          2346
437  14531  15488    30243     437             14841          1867
438  10290   1981     2232    1038               168          2125
439   2787   1698     2510      65               477            52

[440 rows x 6 columns]
&lt;class &#39;tuple&#39;&gt;
(440, 6)
Wholesale customers dataset has 440 samples with 6 features each.
</pre>
</div>
</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Data-Exploration">Data Exploration<a class="anchor-link" href="#Data-Exploration">&#182;</a></h2><p>In this section, we will begin exploring the data through visualizations and code to understand how each feature is related to the others. You will observe a statistical description of the dataset, consider the relevance of each feature, and select a few sample data points from the dataset which we will track through the course of this project.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>count</th>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>12000.297727</td>
      <td>5796.265909</td>
      <td>7951.277273</td>
      <td>3071.931818</td>
      <td>2881.493182</td>
      <td>1524.870455</td>
    </tr>
    <tr>
      <th>std</th>
      <td>12647.328865</td>
      <td>7380.377175</td>
      <td>9503.162829</td>
      <td>4854.673333</td>
      <td>4767.854448</td>
      <td>2820.105937</td>
    </tr>
    <tr>
      <th>min</th>
      <td>3.000000</td>
      <td>55.000000</td>
      <td>3.000000</td>
      <td>25.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>3127.750000</td>
      <td>1533.000000</td>
      <td>2153.000000</td>
      <td>742.250000</td>
      <td>256.750000</td>
      <td>408.250000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>8504.000000</td>
      <td>3627.000000</td>
      <td>4755.500000</td>
      <td>1526.000000</td>
      <td>816.500000</td>
      <td>965.500000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>16933.750000</td>
      <td>7190.250000</td>
      <td>10655.750000</td>
      <td>3554.250000</td>
      <td>3922.000000</td>
      <td>1820.250000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>112151.000000</td>
      <td>73498.000000</td>
      <td>92780.000000</td>
      <td>60869.000000</td>
      <td>40827.000000</td>
      <td>47943.000000</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>12669</td>
      <td>9656</td>
      <td>7561</td>
      <td>214</td>
      <td>2674</td>
      <td>1338</td>
    </tr>
    <tr>
      <th>1</th>
      <td>7057</td>
      <td>9810</td>
      <td>9568</td>
      <td>1762</td>
      <td>3293</td>
      <td>1776</td>
    </tr>
    <tr>
      <th>2</th>
      <td>6353</td>
      <td>8808</td>
      <td>7684</td>
      <td>2405</td>
      <td>3516</td>
      <td>7844</td>
    </tr>
    <tr>
      <th>3</th>
      <td>13265</td>
      <td>1196</td>
      <td>4221</td>
      <td>6404</td>
      <td>507</td>
      <td>1788</td>
    </tr>
    <tr>
      <th>4</th>
      <td>22615</td>
      <td>5410</td>
      <td>7198</td>
      <td>3915</td>
      <td>1777</td>
      <td>5185</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Selecting-Samples">Implementation: Selecting Samples<a class="anchor-link" href="#Implementation:-Selecting-Samples">&#182;</a></h3><p>To get a better understanding of the customers and how their data will transform through the analysis, it would be best to select a few sample data points and explore them in more detail.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>&lt;class &#39;pandas.core.frame.DataFrame&#39;&gt;
      Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
85    16117  46197    92780    1026             40827          2944
181  112151  29627    18148   16745              4948          8550
338       3    333     7021   15601                15           550
&lt;class &#39;pandas.core.indexes.base.Index&#39;&gt;
Index([&#39;Fresh&#39;, &#39;Milk&#39;, &#39;Grocery&#39;, &#39;Frozen&#39;, &#39;Detergents_Paper&#39;,
       &#39;Delicatessen&#39;],
      dtype=&#39;object&#39;)
      Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
85    16117  46197    92780    1026             40827          2944
181  112151  29627    18148   16745              4948          8550
338       3    333     7021   15601                15           550
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>16117</td>
      <td>46197</td>
      <td>92780</td>
      <td>1026</td>
      <td>40827</td>
      <td>2944</td>
    </tr>
    <tr>
      <th>1</th>
      <td>112151</td>
      <td>29627</td>
      <td>18148</td>
      <td>16745</td>
      <td>4948</td>
      <td>8550</td>
    </tr>
    <tr>
      <th>2</th>
      <td>3</td>
      <td>333</td>
      <td>7021</td>
      <td>15601</td>
      <td>15</td>
      <td>550</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>Considering the total purchase cost of each product category and the statistical description of the dataset above for our sample customers. We make a prediction on what kind of establishment (customer) could each of the three samples we've chosen represent?</p>
<p>The mean values are as follows:</p>
<ul>
<li>Fresh: 12000.2977</li>
<li>Milk: 5796.2</li>
<li>Grocery: 3071.9</li>
<li>Detergents_paper: 2881.4</li>
<li>Delicatessen: 1524.8</li>
</ul>
<p>Knowing this, how do our samples compare?</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>1) Index 85: Retailer:</p>

<pre><code>- Largest spending on detergents and paper and groceries of the entire dataset, which usually are products for houses.

- Higher than average spending on milk.

- Lower than average spending on frozen products.

</code></pre>
<p>2) Index 181: Large market</p>

<pre><code>- High spending on almost every product category.

- Highest spending on fresh products of the entire dataset. Likely to be a large market.

- Low spending on detergents.

</code></pre>
<p>3) Index 338: Restaurant</p>

<pre><code>- The amount of every product is significantly lower than the previous two customers considered. 

- The spending on fresh products is the lowest of the entire dataset. 

- The spending on milk and detergent and papers is in the bottom quartile.

- It may be a small and cheap restaurant which needs groceries and frozen food to serve the meals.</code></pre>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Feature-Relevance">Implementation: Feature Relevance<a class="anchor-link" href="#Implementation:-Feature-Relevance">&#182;</a></h3><p>One interesting thought to consider is if one (or more) of the six product categories is actually relevant for understanding customer purchasing. That is to say, is it possible to determine whether customers purchasing some amount of one category of products will necessarily purchase some proportional amount of another category of products? We can make this determination quite easily by training a supervised regression learner on a subset of the data with one feature removed, and then score how well that model can predict the removed feature.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>12669</td>
      <td>9656</td>
      <td>7561</td>
      <td>214</td>
      <td>2674</td>
      <td>1338</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>&lt;class &#39;pandas.core.frame.DataFrame&#39;&gt;
     Fresh   Milk  Frozen  Detergents_Paper  Delicatessen
0    12669   9656     214              2674          1338
1     7057   9810    1762              3293          1776
2     6353   8808    2405              3516          7844
3    13265   1196    6404               507          1788
4    22615   5410    3915              1777          5185
..     ...    ...     ...               ...           ...
435  29703  12051   13135               182          2204
436  39228   1431    4510                93          2346
437  14531  15488     437             14841          1867
438  10290   1981    1038               168          2125
439   2787   1698      65               477            52

[440 rows x 5 columns]
&lt;class &#39;pandas.core.series.Series&#39;&gt;
0       7561
1       9568
2       7684
3       4221
4       7198
       ...  
435    16027
436      764
437    30243
438     2232
439     2510
Name: Grocery, Length: 440, dtype: int64

X_train:
     Fresh   Milk  Frozen  Detergents_Paper  Delicatessen
314  10617   1795    1483               857          1233
3    13265   1196    6404               507          1788
18   18601   6327    2205              2767          3181
393  23632   6730    8620               385           819
60    8590   3045      96              4095           225
..     ...    ...     ...               ...           ...
106   1454   6337     133              6830          1831
270   4720   1032    5500               197            56
348   3428   2380    1341              1184           665
435  29703  12051   13135               182          2204
102   2932   6459    2561              4573          1386

[330 rows x 5 columns]

X_test:
     Fresh   Milk  Frozen  Detergents_Paper  Delicatessen
265   5909  23527   10155               830          3636
78   10766   1175    2096               301           167
347  27380   7184    2809              4621          1022
255  31614    489    3242               111           615
327    542    899     414                88           522
..     ...    ...     ...               ...           ...
378   3225   3294     282                68          1114
417   5065   5499     364              3485          1063
16    1020   8816     134              4508          1080
406  25066   5010    9806              1092           960
117   6990   3880    1647               319          1160

[110 rows x 5 columns]

y_train:
314     7647
3       4221
18     10099
393     3842
60      7854
       ...  
106    10704
270      975
348     2028
435    16027
102     7677
Name: Grocery, Length: 330, dtype: int64

y_test:
265    13699
78      2067
347    12311
255     1495
327     1664
       ...  
378     1902
417    11055
16     12121
406     5026
117     5380
Name: Grocery, Length: 110, dtype: int64
&lt;class &#39;sklearn.tree._classes.DecisionTreeRegressor&#39;&gt;
DecisionTreeRegressor(ccp_alpha=0.0, criterion=&#39;mse&#39;, max_depth=None,
                      max_features=None, max_leaf_nodes=None,
                      min_impurity_decrease=0.0, min_impurity_split=None,
                      min_samples_leaf=1, min_samples_split=2,
                      min_weight_fraction_leaf=0.0, presort=&#39;deprecated&#39;,
                      random_state=None, splitter=&#39;best&#39;)
&lt;class &#39;sklearn.tree._classes.DecisionTreeRegressor&#39;&gt;
DecisionTreeRegressor(ccp_alpha=0.0, criterion=&#39;mse&#39;, max_depth=None,
                      max_features=None, max_leaf_nodes=None,
                      min_impurity_decrease=0.0, min_impurity_split=None,
                      min_samples_leaf=1, min_samples_split=2,
                      min_weight_fraction_leaf=0.0, presort=&#39;deprecated&#39;,
                      random_state=None, splitter=&#39;best&#39;)
&lt;class &#39;numpy.ndarray&#39;&gt;
[16027.   534. 13586.  2000.  1533.  1498.  2060.  6360.  1648.  4523.
  1498.   283. 10391.  2201. 11238.  6964.  4657. 12822.  2109.   683.
 21570.  4604.  5956.  1235.  6975.  2886.  3389.  2155.  3389.  4657.
 11522. 19816.  2914.  3838.  2000.  3558.   283. 10908.  1296.   489.
  1988.  1499.  2530.  4252. 14886.  8280. 15538. 21203. 23596.   699.
  1660.  4438.   935.  4740.  6360.  6996. 10685.  5265. 24708. 19847.
   534.  3389.   218.  5189.  2012. 13586.  7854.  2548.  3281.  4172.
 13227.  2861.  1799.  3558.  6360.  4172.  2124.  8117. 16709.   489.
  2006.  3281. 16027. 13227.  2824. 15538.  4910.  8118. 15538.  4172.
  7336. 12400. 23998.   864. 12091.  6986.  2109.  3993.  2146.   489.
  3250.  6981. 21570.  4602.  2313.  5034.  6360. 11522.  4252.  1498.]
&lt;class &#39;dict&#39;&gt;
{&#39;Actual&#39;: 265    13699
78      2067
347    12311
255     1495
327     1664
       ...  
378     1902
417    11055
16     12121
406     5026
117     5380
Name: Grocery, Length: 110, dtype: int64, &#39;Predicted&#39;: array([16027.,   534., 13586.,  2000.,  1533.,  1498.,  2060.,  6360.,
        1648.,  4523.,  1498.,   283., 10391.,  2201., 11238.,  6964.,
        4657., 12822.,  2109.,   683., 21570.,  4604.,  5956.,  1235.,
        6975.,  2886.,  3389.,  2155.,  3389.,  4657., 11522., 19816.,
        2914.,  3838.,  2000.,  3558.,   283., 10908.,  1296.,   489.,
        1988.,  1499.,  2530.,  4252., 14886.,  8280., 15538., 21203.,
       23596.,   699.,  1660.,  4438.,   935.,  4740.,  6360.,  6996.,
       10685.,  5265., 24708., 19847.,   534.,  3389.,   218.,  5189.,
        2012., 13586.,  7854.,  2548.,  3281.,  4172., 13227.,  2861.,
        1799.,  3558.,  6360.,  4172.,  2124.,  8117., 16709.,   489.,
        2006.,  3281., 16027., 13227.,  2824., 15538.,  4910.,  8118.,
       15538.,  4172.,  7336., 12400., 23998.,   864., 12091.,  6986.,
        2109.,  3993.,  2146.,   489.,  3250.,  6981., 21570.,  4602.,
        2313.,  5034.,  6360., 11522.,  4252.,  1498.])}
     Actual  Predicted
265   13699    16027.0
78     2067      534.0
347   12311    13586.0
255    1495     2000.0
327    1664     1533.0
..      ...        ...
378    1902     5034.0
417   11055     6360.0
16    12121    11522.0
406    5026     4252.0
117    5380     1498.0

[110 rows x 2 columns]
Prediction score is 0.668937778388869
</pre>
</div>
</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<ul>
<li><p>We tried to predict the Grocery feature.</p>
</li>
<li><p>The reported prediction score was 67.25%.</p>
</li>
<li><p>As we obtained high score, it as indicator of a very good fit. So this feature is easy to predict considering the rest of spending habits and, therefore, not very necessary for identifying customers' spending habits.</p>
</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Visualize-Feature-Distributions">Visualize Feature Distributions<a class="anchor-link" href="#Visualize-Feature-Distributions">&#182;</a></h3><p>To get a better understanding of the dataset, we can construct a scatter matrix of each of the six product features present in the data. Features relevant to predict the above, won't show a correlation in the scatter matrix and the inverse is also true.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f55867013d0&gt;</pre>
</div>

</div>

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>Using the scatter matrix as a reference, we can discuss the following:</p>
<ul>
<li><p>Data is not normally distributed, it is positively skewed and they resemeble the log-normal distribution.</p>
</li>
<li><p>In most plots, most data points lie near the origin which shows little correlation between them.</p>
</li>
<li><p>From the scatter plots and the heatmap of correlation, we can see that there is a strong correlation between the 'Grocery' and 'Detergent_paper' features. The features 'Grocery' and 'Milk' also show a good degree of correlation.</p>
</li>
<li><p>This correlation confirms my guess about the relevance of the 'Grocery' feature, which can be accurately predicted with the 'Detergent_paper' feature. And, therefore, is not an absolutely necessaty feature in the dataset.</p>
</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Data-Preprocessing">Data Preprocessing<a class="anchor-link" href="#Data-Preprocessing">&#182;</a></h2><p>In this section, we will preprocess the data to create a better representation of customers by performing a scaling on the data and detecting (and optionally removing) outliers. Preprocessing data is often times a critical step in assuring that results we obtain from our analysis are significant and meaningful.</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Feature-Scaling">Implementation: Feature Scaling<a class="anchor-link" href="#Implementation:-Feature-Scaling">&#182;</a></h3><p>If data is not normally distributed, especially if the mean and median vary significantly (indicating a large skew), it is most <a href="http://econbrowser.com/archives/2014/02/use-of-logarithms-in-economics">often appropriate</a> to apply a non-linear scaling — particularly for financial data. One way to achieve this scaling is by using a <a href="http://scipy.github.io/devdocs/generated/scipy.stats.boxcox.html">Box-Cox test</a>, which calculates the best power transformation of the data that reduces skewness. A simpler approach which can work in most cases would be applying the natural logarithm.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observation">Observation<a class="anchor-link" href="#Observation">&#182;</a></h3><p>After applying a natural logarithm scaling to the data, the distribution of each feature appear much more normal. For any pairs of features we have identified earlier as being correlated, we observe here that correlation is still present (and whether it is now stronger or weaker than before).</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.687630</td>
      <td>10.740670</td>
      <td>11.437986</td>
      <td>6.933423</td>
      <td>10.617099</td>
      <td>7.987524</td>
    </tr>
    <tr>
      <th>1</th>
      <td>11.627601</td>
      <td>10.296441</td>
      <td>9.806316</td>
      <td>9.725855</td>
      <td>8.506739</td>
      <td>9.053687</td>
    </tr>
    <tr>
      <th>2</th>
      <td>1.098612</td>
      <td>5.808142</td>
      <td>8.856661</td>
      <td>9.655090</td>
      <td>2.708050</td>
      <td>6.309918</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Outlier-Detection">Implementation: Outlier Detection<a class="anchor-link" href="#Implementation:-Outlier-Detection">&#182;</a></h3><p>Detecting outliers in the data is extremely important in the data preprocessing step of any analysis. The presence of outliers can often skew results which take into consideration these data points. There are many "rules of thumb" for what constitutes an outlier in a dataset. Here, we will use <a href="http://datapigtechnologies.com/blog/index.php/highlighting-outliers-in-your-data-with-the-tukey-method/">Tukey's Method for identfying outliers</a>: An <em>outlier step</em> is calculated as 1.5 times the interquartile range (IQR). A data point with a feature that is beyond an outlier step outside of the IQR for that feature is considered abnormal.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Fresh&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>65</th>
      <td>4.442651</td>
      <td>9.950323</td>
      <td>10.732651</td>
      <td>3.583519</td>
      <td>10.095388</td>
      <td>7.260523</td>
    </tr>
    <tr>
      <th>66</th>
      <td>2.197225</td>
      <td>7.335634</td>
      <td>8.911530</td>
      <td>5.164786</td>
      <td>8.151333</td>
      <td>3.295837</td>
    </tr>
    <tr>
      <th>81</th>
      <td>5.389072</td>
      <td>9.163249</td>
      <td>9.575192</td>
      <td>5.645447</td>
      <td>8.964184</td>
      <td>5.049856</td>
    </tr>
    <tr>
      <th>95</th>
      <td>1.098612</td>
      <td>7.979339</td>
      <td>8.740657</td>
      <td>6.086775</td>
      <td>5.407172</td>
      <td>6.563856</td>
    </tr>
    <tr>
      <th>96</th>
      <td>3.135494</td>
      <td>7.869402</td>
      <td>9.001839</td>
      <td>4.976734</td>
      <td>8.262043</td>
      <td>5.379897</td>
    </tr>
    <tr>
      <th>128</th>
      <td>4.941642</td>
      <td>9.087834</td>
      <td>8.248791</td>
      <td>4.955827</td>
      <td>6.967909</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>171</th>
      <td>5.298317</td>
      <td>10.160530</td>
      <td>9.894245</td>
      <td>6.478510</td>
      <td>9.079434</td>
      <td>8.740337</td>
    </tr>
    <tr>
      <th>193</th>
      <td>5.192957</td>
      <td>8.156223</td>
      <td>9.917982</td>
      <td>6.865891</td>
      <td>8.633731</td>
      <td>6.501290</td>
    </tr>
    <tr>
      <th>218</th>
      <td>2.890372</td>
      <td>8.923191</td>
      <td>9.629380</td>
      <td>7.158514</td>
      <td>8.475746</td>
      <td>8.759669</td>
    </tr>
    <tr>
      <th>304</th>
      <td>5.081404</td>
      <td>8.917311</td>
      <td>10.117510</td>
      <td>6.424869</td>
      <td>9.374413</td>
      <td>7.787382</td>
    </tr>
    <tr>
      <th>305</th>
      <td>5.493061</td>
      <td>9.468001</td>
      <td>9.088399</td>
      <td>6.683361</td>
      <td>8.271037</td>
      <td>5.351858</td>
    </tr>
    <tr>
      <th>338</th>
      <td>1.098612</td>
      <td>5.808142</td>
      <td>8.856661</td>
      <td>9.655090</td>
      <td>2.708050</td>
      <td>6.309918</td>
    </tr>
    <tr>
      <th>353</th>
      <td>4.762174</td>
      <td>8.742574</td>
      <td>9.961898</td>
      <td>5.429346</td>
      <td>9.069007</td>
      <td>7.013016</td>
    </tr>
    <tr>
      <th>355</th>
      <td>5.247024</td>
      <td>6.588926</td>
      <td>7.606885</td>
      <td>5.501258</td>
      <td>5.214936</td>
      <td>4.844187</td>
    </tr>
    <tr>
      <th>357</th>
      <td>3.610918</td>
      <td>7.150701</td>
      <td>10.011086</td>
      <td>4.919981</td>
      <td>8.816853</td>
      <td>4.700480</td>
    </tr>
    <tr>
      <th>412</th>
      <td>4.574711</td>
      <td>8.190077</td>
      <td>9.425452</td>
      <td>4.584967</td>
      <td>7.996317</td>
      <td>4.127134</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Milk&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>86</th>
      <td>10.039983</td>
      <td>11.205013</td>
      <td>10.377047</td>
      <td>6.894670</td>
      <td>9.906981</td>
      <td>6.805723</td>
    </tr>
    <tr>
      <th>98</th>
      <td>6.220590</td>
      <td>4.718499</td>
      <td>6.656727</td>
      <td>6.796824</td>
      <td>4.025352</td>
      <td>4.882802</td>
    </tr>
    <tr>
      <th>154</th>
      <td>6.432940</td>
      <td>4.007333</td>
      <td>4.919981</td>
      <td>4.317488</td>
      <td>1.945910</td>
      <td>2.079442</td>
    </tr>
    <tr>
      <th>356</th>
      <td>10.029503</td>
      <td>4.897840</td>
      <td>5.384495</td>
      <td>8.057377</td>
      <td>2.197225</td>
      <td>6.306275</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Grocery&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>75</th>
      <td>9.923192</td>
      <td>7.036148</td>
      <td>1.098612</td>
      <td>8.390949</td>
      <td>1.098612</td>
      <td>6.882437</td>
    </tr>
    <tr>
      <th>154</th>
      <td>6.432940</td>
      <td>4.007333</td>
      <td>4.919981</td>
      <td>4.317488</td>
      <td>1.945910</td>
      <td>2.079442</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Frozen&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>38</th>
      <td>8.431853</td>
      <td>9.663261</td>
      <td>9.723703</td>
      <td>3.496508</td>
      <td>8.847360</td>
      <td>6.070738</td>
    </tr>
    <tr>
      <th>57</th>
      <td>8.597297</td>
      <td>9.203618</td>
      <td>9.257892</td>
      <td>3.637586</td>
      <td>8.932213</td>
      <td>7.156177</td>
    </tr>
    <tr>
      <th>65</th>
      <td>4.442651</td>
      <td>9.950323</td>
      <td>10.732651</td>
      <td>3.583519</td>
      <td>10.095388</td>
      <td>7.260523</td>
    </tr>
    <tr>
      <th>145</th>
      <td>10.000569</td>
      <td>9.034080</td>
      <td>10.457143</td>
      <td>3.737670</td>
      <td>9.440738</td>
      <td>8.396155</td>
    </tr>
    <tr>
      <th>175</th>
      <td>7.759187</td>
      <td>8.967632</td>
      <td>9.382106</td>
      <td>3.951244</td>
      <td>8.341887</td>
      <td>7.436617</td>
    </tr>
    <tr>
      <th>264</th>
      <td>6.978214</td>
      <td>9.177714</td>
      <td>9.645041</td>
      <td>4.110874</td>
      <td>8.696176</td>
      <td>7.142827</td>
    </tr>
    <tr>
      <th>325</th>
      <td>10.395650</td>
      <td>9.728181</td>
      <td>9.519735</td>
      <td>11.016479</td>
      <td>7.148346</td>
      <td>8.632128</td>
    </tr>
    <tr>
      <th>420</th>
      <td>8.402007</td>
      <td>8.569026</td>
      <td>9.490015</td>
      <td>3.218876</td>
      <td>8.827321</td>
      <td>7.239215</td>
    </tr>
    <tr>
      <th>429</th>
      <td>9.060331</td>
      <td>7.467371</td>
      <td>8.183118</td>
      <td>3.850148</td>
      <td>4.430817</td>
      <td>7.824446</td>
    </tr>
    <tr>
      <th>439</th>
      <td>7.932721</td>
      <td>7.437206</td>
      <td>7.828038</td>
      <td>4.174387</td>
      <td>6.167516</td>
      <td>3.951244</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Detergents_Paper&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>75</th>
      <td>9.923192</td>
      <td>7.036148</td>
      <td>1.098612</td>
      <td>8.390949</td>
      <td>1.098612</td>
      <td>6.882437</td>
    </tr>
    <tr>
      <th>161</th>
      <td>9.428190</td>
      <td>6.291569</td>
      <td>5.645447</td>
      <td>6.995766</td>
      <td>1.098612</td>
      <td>7.711101</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Data points considered outliers for the feature &#39;Delicatessen&#39;:
</pre>
</div>
</div>

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>66</th>
      <td>2.197225</td>
      <td>7.335634</td>
      <td>8.911530</td>
      <td>5.164786</td>
      <td>8.151333</td>
      <td>3.295837</td>
    </tr>
    <tr>
      <th>109</th>
      <td>7.248504</td>
      <td>9.724899</td>
      <td>10.274568</td>
      <td>6.511745</td>
      <td>6.728629</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>128</th>
      <td>4.941642</td>
      <td>9.087834</td>
      <td>8.248791</td>
      <td>4.955827</td>
      <td>6.967909</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>137</th>
      <td>8.034955</td>
      <td>8.997147</td>
      <td>9.021840</td>
      <td>6.493754</td>
      <td>6.580639</td>
      <td>3.583519</td>
    </tr>
    <tr>
      <th>142</th>
      <td>10.519646</td>
      <td>8.875147</td>
      <td>9.018332</td>
      <td>8.004700</td>
      <td>2.995732</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>154</th>
      <td>6.432940</td>
      <td>4.007333</td>
      <td>4.919981</td>
      <td>4.317488</td>
      <td>1.945910</td>
      <td>2.079442</td>
    </tr>
    <tr>
      <th>183</th>
      <td>10.514529</td>
      <td>10.690808</td>
      <td>9.911952</td>
      <td>10.505999</td>
      <td>5.476464</td>
      <td>10.777768</td>
    </tr>
    <tr>
      <th>184</th>
      <td>5.789960</td>
      <td>6.822197</td>
      <td>8.457443</td>
      <td>4.304065</td>
      <td>5.811141</td>
      <td>2.397895</td>
    </tr>
    <tr>
      <th>187</th>
      <td>7.798933</td>
      <td>8.987447</td>
      <td>9.192075</td>
      <td>8.743372</td>
      <td>8.148735</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>203</th>
      <td>6.368187</td>
      <td>6.529419</td>
      <td>7.703459</td>
      <td>6.150603</td>
      <td>6.860664</td>
      <td>2.890372</td>
    </tr>
    <tr>
      <th>233</th>
      <td>6.871091</td>
      <td>8.513988</td>
      <td>8.106515</td>
      <td>6.842683</td>
      <td>6.013715</td>
      <td>1.945910</td>
    </tr>
    <tr>
      <th>285</th>
      <td>10.602965</td>
      <td>6.461468</td>
      <td>8.188689</td>
      <td>6.948897</td>
      <td>6.077642</td>
      <td>2.890372</td>
    </tr>
    <tr>
      <th>289</th>
      <td>10.663966</td>
      <td>5.655992</td>
      <td>6.154858</td>
      <td>7.235619</td>
      <td>3.465736</td>
      <td>3.091042</td>
    </tr>
    <tr>
      <th>343</th>
      <td>7.431892</td>
      <td>8.848509</td>
      <td>10.177932</td>
      <td>7.283448</td>
      <td>9.646593</td>
      <td>3.610918</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>[[65, 66, 81, 95, 96, 128, 171, 193, 218, 304, 305, 338, 353, 355, 357, 412],
 [86, 98, 154, 356],
 [75, 154],
 [38, 57, 65, 145, 175, 264, 325, 420, 429, 439],
 [75, 161],
 [66, 109, 128, 137, 142, 154, 183, 184, 187, 203, 233, 285, 289, 343]]</pre>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>[65, 66, 75, 128, 154]</pre>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput ">

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observations">Observations<a class="anchor-link" href="#Observations">&#182;</a></h3>
</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<ul>
<li><p>Datapoints considered outliers that are present in more than one feature are: 65, 66, 75, 128, 154.</p>
</li>
<li><p>K-Means is heavily influenced by the presence of outliers as they increase significantly the loss function that the algorithm tries to minimize. This loss function is the squared sum of the distances of each datapoint to the centroid, so, if the outlier is far enough, the centroid will be incorrectly situated. Because of this, the outliers shoul be removed.</p>
</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Feature-Transformation">Feature Transformation<a class="anchor-link" href="#Feature-Transformation">&#182;</a></h2><p>In this section we will use principal component analysis (PCA) to draw conclusions about the underlying structure of the wholesale customer data. Since using PCA on a dataset calculates the dimensions which best maximize variance, we will find which compound combinations of features best describe customers.</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-PCA">Implementation: PCA<a class="anchor-link" href="#Implementation:-PCA">&#182;</a></h3><p>Now that the data has been scaled to a more normal distribution and has had any necessary outliers removed, we can now apply PCA to the <code>good_data</code> to discover which dimensions about the data best maximize the variance of features involved. In addition to finding these dimensions, PCA will also report the <em>explained variance ratio</em> of each dimension — how much variance within the data is explained by that dimension alone. Note that a component (dimension) from PCA can be considered a new "feature" of the space, however it is a composition of the original features present in the data.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>(3, 6)</pre>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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z605xmabbcY//vEPZs6cSd++famsrGTUqFG89NJLNXWOP/74muUzzjiD3/zmNyxfvpzRo0dz4oknNselSpIkSesMe5Caye67714zJA5g+PDhvPHGG1RVVQHQtm3bz3TclBL9+vXj9ttvr3d77eMeffTRXHnllRxwwAH06tWLzTff/DOdU5IkSVpf2YPUTA444AA++OADbrnllpqy9957r966++yzD7feeisAEydOZIsttuDzn/88/fr1Y/jw4TX13nrrLfr06cPjjz/O3LlzAViyZAnPP/98vcdt06YNBx98MN/5znccXidJ0tpuaLviX5KajAlSM4kIxo4dy6OPPsqOO+5I7969GThwINdee+2n6g4dOpQpU6bQvXt3hgwZwqhRowC47LLLeOutt+jatSs9evTgkUceoUOHDowcOZITTjiB7t27s/feezN79uwG4zjppJNo1aoVBx10UMmuVZIkSVpXtcghdsVMy10K22yzDXfccUe92wYNGlSz3L59e8aOHfupOptssklNslTbAQccwKRJkz5VXl1d/amyxx57jNNOO80pvyVJkqR6tMgEqaU68sgjeeGFF3j44YfLHYokSZK0VjJBakHuvvvucocgSZIkrdW8B0mSJEmSMhMkSZIkScpMkCRJkiQpM0GSJEmSpMxJGppJRUUF3bp1q1kfO3YsnTp1Kl9AkiRJkj6lRSZIszp3adLjdZk9a7V1Nt54Y6ZOnVrvtpQSKSVatbJDT5IkSSonv5GXSXV1NbvuuiunnnoqXbt25eWXX2bw4MF07dqVbt26MXr0aAAuv/xyKisrqaysZNttt+W0004D4Pe//z29e/emsrKSs846i+XLlwOFh8leeuml9OjRgz59+vD666+X7RolSZKkdY0JUjN5//33axKdI488EoA5c+ZwzjnnMGPGDCZPnszUqVN55plnmDBhAoMHD+a1115j2LBhTJ06lYkTJ9K+fXvOO+88Zs2axejRo3n88ceZOnUqFRUV3HrrrQAsWbKEPn368Mwzz7Dvvvvyi1/8opyXLUmSJK1TWuQQu3KoO8SuurqaHXbYgT59+gDw2GOPccIJJ1BRUcFWW23FV7/6VSZNmsSAAQNIKXHyySdz4YUX0qtXL26++WamTJnCnnvuCRSSry233BKADTfckP79+wPQq1cvHnzwwWa+UkmSJGndZYJURm3bti2q3tChQ+nYsWPN8LqUEgMHDuSHP/zhp+pusMEGRARQmBhi2bJlTRewJEmStJ5ziN1aYp999mH06NEsX76cBQsW8Ne//pXevXvzpz/9iQkTJvCTn/ykpu6BBx7ImDFjmD9/PgBvvvkmL730UrlClyRJktYb9iCtJY488kieeOIJevToQUTwox/9iK233pobbriBV155hd69ewMwYMAAhg0bxtVXX81BBx3EihUr2GCDDRg+fDg77LBDma9CkiRJWrdFSqncMTSpqqqqNHny5E+UzZo1iy5dmnZqb63dfM8l6ZMa84iLYh5foWYwtF0j6i4qXRxaZ3Qb1W31lbLpA6eXMJJ1Q0RMSSlV1S13iJ0kSZIkZSZIkiRJkpSZIEmSJElSZoIkSZIkSZkJkiRJkiRlTvMtSfpMrj++f9F1Lxp9bwkjkSSp6diDJEmSJElZi+xBGn72w016vHN/dsBq61RUVNCtWzeWLl1K69atOfXUU/n+979Pq1YN56jV1dX8/e9/58QTT2zKcBtl6tSpvPrqqxx66KGN2q+6upouXbqw66678tFHH7Hvvvvy05/+dJXXK0mSJJWb31abycYbb8zUqVOZMWMGDz74IH/+85+58sorV7lPdXU1t912W6POs2zZsjUJ81OmTp3K+PHjP9O+X/rSl5g6dSrTpk1j5syZjB07tkljW6mpr1mSJEktV1kTpIg4JCKei4i5ETGkgTrHRcTMiJgREY3LFtZSW265JSNGjODmm28mpcTy5csZPHgwe+65J927d+fnP/85AEOGDOFvf/sblZWV/PjHP26w3sSJE9lnn30YMGAAu+22GytWrOCcc86hc+fO9OvXj0MPPZQxY8YAMGXKFL761a/Sq1cvDj74YF577TUA9ttvPy655BJ69+7NLrvswt/+9jc++ugjLr/8ckaPHk1lZSWjR4/m0UcfpbKyksrKSvbYYw/efffd1V5v69at+fKXv8zcuXP5xS9+wZ577kmPHj04+uijee+99wAYNGgQZ599NlVVVeyyyy7ce2/hfoVir1mSJElqCmUbYhcRFcBwoB8wD5gUEeNSSjNr1dkZ+AHQN6X0VkRsWZ5om95OO+3E8uXLmT9/Pvfccw/t2rVj0qRJfPjhh/Tt25eDDjqIa665huuuu64mWRgxYkS99QCefvppnn32WXbccUfGjBlDdXU1M2fOZP78+XTp0oVvfetbLF26lPPPP5977rmHDh06MHr0aC699FJ+/etfA4WemKeeeorx48dz5ZVXMmHCBIYNG8bkyZO5+eabAfjGN77B8OHD6du3L4sXL6ZNmzarvdb33nuPhx56iGHDhtG7d2++/e1vA3DZZZfxq1/9ivPPPx8o9Jg99dRTvPDCC+y///7MnTuX3/72t0VdsyRJktQUynkPUm9gbkrpRYCIuAM4HJhZq863geEppbcAUkrzmz3KZvDAAw8wbdq0ml6eRYsWMWfOHDbccMOi6/Xu3bsmUXjsscc49thjadWqFVtvvTX7778/AM899xzPPvss/fr1Awq9M9tss03N8Y866igAevXqRXV1db2x9u3blwsvvJCTTjqJo446io4dOzZ4XS+88AKVlZVEBIcffjhf//rXefTRR7nssst4++23Wbx4MQcffHBN/eOOO45WrVqx8847s9NOOzF79uyir1mSJElqCuVMkLYFXq61Pg/Yq06dXQAi4nGgAhiaUvpL3QNFxJnAmQDbb799SYJtai+++CIVFRVsueWWpJS46aabPpEsQGEYWW2rqte2bdvVnjOlxO67784TTzxR7/aNNtoIKEwo0dB9PUOGDOGwww5j/Pjx9O3bl/vvv5/OnTvXW3flPUi1DRo0iLFjx9KjRw9Gjhz5iWuMiE/UjYg1vmZJkiSpMdb2SRpaAzsD+wEnAL+IiC/UrZRSGpFSqkopVXXo0KGZQ2y8BQsWcPbZZ3PeeecRERx88MHccsstLF26FIDnn3+eJUuWsOmmm37iHp+G6tXVt29f7rrrLlasWMHrr79ek4TsuuuuLFiwoCZBWrp0KTNmzFhlrHVjeOGFF+jWrRuXXHIJe+65J7Nnz27Utb/77rtss802LF26lFtvvfUT2+68805WrFjBCy+8wIsvvsiuu+5a9DVLkiRJTaGcPUivANvVWu+Yy2qbBzyZUloK/CsinqeQME1akxMXMy13U3v//feprKysmeb7lFNO4cILLwTgjDPOoLq6mp49e5JSokOHDowdO5bu3btTUVFBjx49GDRoEN/97nfrrVfX0UcfzUMPPcRuu+3GdtttR8+ePWnXrh0bbrghY8aM4YILLmDRokUsW7aM733ve+y+++4Nxr3//vtzzTXXUFlZyQ9+8AMee+wxHnnkEVq1asXuu+/O17/+9Ub9Hq666ir22msvOnTowF577fWJ5Gv77bend+/evPPOO/zsZz+jTZs2Df5uJEmSpFKIlFJ5ThzRGngeOJBCYjQJODGlNKNWnUOAE1JKAyNiC+CfQGVKaWFDx62qqkqTJ0/+RNmsWbPo0qVLCa5i7bV48WI22WQTFi5cSO/evXn88cfZeuutyx1WgwYNGkT//v055phjmuR4LfE9l5rb9cf3L7ruRaPvLWEkKsaszsV/JnaZPauEkahoQ9s1ou6i0sWhdUa3Ud2Krjt94PQSRrJuiIgpKaWquuVl60FKKS2LiPOA+yncX/TrlNKMiBgGTE4pjdithncAACAASURBVMvbDoqImcByYPCqkiN9rH///rz99tt89NFH/Md//MdanRxJkiRJa4tyDrEjpTQeGF+n7PJaywm4ML/UCHUneCiV6dOnc8opp3yibKONNuLJJ59s1HFGjhzZhFFJkiRJn01ZEySt+7p16/apmeokSZKkddXaPoudJEmSJDUbEyRJkiRJykyQJEmSJCkzQWomFRUVVFZWsvvuu9OjRw+uv/56VqxYscp9qqur6dq1KwCTJ0/mggsu+EznvvHGG3nvvfc+076SJElSS9IiJ2lozLM7ilHM8z023njjmskM5s+fz4knnsg777zDlVdeWdQ5qqqqqKr61DTtRbnxxhs5+eST+dznPveZ9pckSZJaCnuQymDLLbdkxIgR3HzzzaSUWL58OYMHD2bPPfeke/fu/PznP//UPhMnTqR//0Jit3jxYk477TS6detG9+7dueuuuwD4zne+Q1VVFbvvvjtXXHEFAD/5yU949dVX2X///dl///0BeOCBB9h7773p2bMnxx57LIsXLwZgyJAh7LbbbnTv3p2LL74YgDvvvJOuXbvSo0cP9t13X4AG4504cSL77bcfxxxzDJ07d+akk06iXA8iliRJkj6LFtmDtDbYaaedWL58OfPnz+eee+6hXbt2TJo0iQ8//JC+ffty0EEHERH17nvVVVfRrl07pk8vPAH5rbfeAuA///M/ad++PcuXL+fAAw9k2rRpXHDBBdxwww088sgjbLHFFrzxxhtcffXVTJgwgbZt23Lttddyww03cO6553L33Xcze/ZsIoK3334bgGHDhnH//fez7bbb1pT96le/qjdegH/+85/MmDGDL37xi/Tt25fHH3+cr3zlK6X+dUqSJElNwgRp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
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observations">Observations<a class="anchor-link" href="#Observations">&#182;</a></h3><ul>
<li><p>The variance explained by the first two Principal Components is the 70.68% of the total.</p>
</li>
<li><p>The variance explained by the first three Principal Components is the 93.11% of the total.</p>
</li>
<li><p>Dimensions discussion:</p>
<ul>
<li><p>Dimension 1: This dimension represents well, in terms of negative variance, the following features: Detergent_Paper, Milk and groceries. Mostly utilities for everyday consuming.</p>
</li>
<li><p>Dimension 2: This dimension represents well, in terms of negative variance, the following features: Fresh, Frozen and Delicatessen. Mostly food consuming.</p>
</li>
<li><p>Dimension 3: This dimension represents well, in terms of positive variance, the Delicatessen features, and in terms of negative variance de Fresh feature. Food to be consumed on the day.</p>
</li>
<li><p>Dimension 4: This dimension represents well, in terms of positive variance, the Frozen feature, and in terms of negative variance, the Delicatessen Feature. Food that can be storaged.</p>
</li>
</ul>
</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observation">Observation<a class="anchor-link" href="#Observation">&#182;</a></h3><p>The code below to sehoe how the log-transformed sample data has changed after having a PCA transformation applied to it in six dimensions. Observe the numerical value for the first four dimensions of the sample points.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Dimension 1</th>
      <th>Dimension 2</th>
      <th>Dimension 3</th>
      <th>Dimension 4</th>
      <th>Dimension 5</th>
      <th>Dimension 6</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>-5.3316</td>
      <td>-1.8845</td>
      <td>-0.6957</td>
      <td>-0.1972</td>
      <td>0.5461</td>
      <td>0.3802</td>
    </tr>
    <tr>
      <th>1</th>
      <td>-2.1899</td>
      <td>-4.8605</td>
      <td>0.0008</td>
      <td>0.4827</td>
      <td>0.5041</td>
      <td>-0.1988</td>
    </tr>
    <tr>
      <th>2</th>
      <td>3.0206</td>
      <td>4.8169</td>
      <td>6.4519</td>
      <td>2.7403</td>
      <td>0.7788</td>
      <td>2.1415</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Dimensionality-Reduction">Implementation: Dimensionality Reduction<a class="anchor-link" href="#Implementation:-Dimensionality-Reduction">&#182;</a></h3><p>When using principal component analysis, one of the main goals is to reduce the dimensionality of the data — in effect, reducing the complexity of the problem. Dimensionality reduction comes at a cost: Fewer dimensions used implies less of the total variance in the data is being explained. Because of this, the <em>cumulative explained variance ratio</em> is extremely important for knowing how many dimensions are necessary for the problem. Additionally, if a signifiant amount of variance is explained by only two or three dimensions, the reduced data can be visualized afterwards.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput ">

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observation">Observation<a class="anchor-link" href="#Observation">&#182;</a></h3><p>The cell below show how the log-transformed sample data has changed after having a PCA transformation applied to it using only two dimensions. Observe how the values for the first two dimensions remains unchanged when compared to a PCA transformation in six dimensions.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Dimension 1</th>
      <th>Dimension 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>-5.3316</td>
      <td>-1.8845</td>
    </tr>
    <tr>
      <th>1</th>
      <td>-2.1899</td>
      <td>-4.8605</td>
    </tr>
    <tr>
      <th>2</th>
      <td>3.0206</td>
      <td>4.8169</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Visualizing-a-Biplot">Visualizing a Biplot<a class="anchor-link" href="#Visualizing-a-Biplot">&#182;</a></h2><p>A biplot is a scatterplot where each data point is represented by its scores along the principal components. The axes are the principal components (in this case <code>Dimension 1</code> and <code>Dimension 2</code>). In addition, the biplot shows the projection of the original features along the components. A biplot can help us interpret the reduced dimensions of the data, and discover relationships between the principal components and original features.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f558a4331d0&gt;</pre>
</div>

</div>

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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Kefk5BSp47JlyxQA9fHHH7s8TuHXNGvWrCLrBg8erCIiItTVq1eVUko98cQTCoBKTU11/AYppQ4fPqwAqPnz5zvdRiml1q9frwCod955x255bm6uat26tapfv77ltZrrbzKZ1JkzZyzb5ufnq+bNm6vatWu7PBYppXQbnNqp/z85/Z6/9957CoDavn27ev7551WDBg1UpUqVLN/brKws9dRTT6kGDRqokJAQVatWLTV69GiVnJxst5/Y2FhV8L+wyK1r16522+7bt08NGTJE1ahRQ4WEhKi4uDg1d+5clZuba7dd165dVWxsrDp37pz6wx/+oCIjI1WVKlVU79691fHjx732VhER+SIA+5WTeILdKUtJRGIA9Abws9F1IavsbD2xRp06jtfXqaPX5+SUb73I/1StWhUAcPXqVSilsHr1anTp0gW33nor0tLSLLewsDDEx8fj888/9/gYq1evBgDMmzevyHg5c1dIc7lKlSoAdEtJRkYG0tLS0KNHDwBAUlKS28cTEYwdO9buNaSlpWHQoEHIzMzE119/DQCoVq0aAN3V01kXRvM2O3fuxMWLF50e9/3330dERASGDBlid8yMjAwMHDgQycnJOHnypN1zhgwZYtcNVETQvXt3/O9//0MWM8e7ZptuAEBOTk6RzzszM9Oy/sknn8RHH32EiRMn4s0330STJk2Qm5uLPn364OWXX0arVq3w+uuvY+TIkVizZg3at2+PlJQUy/PfeOONIl01p0yZAgCoVauWZbstW7agU6dOOHHiBKZPn46///3v6NChA/76179i5MiRRV5GdnY2unTpguDgYLz00kuYMmUKEhMTMXjwYOQ5S0xJRBTg2J2y9F4HkABgk9EVIavsbH0fHOx4vXl5Vpb/jtmi8nH16lUAOpi7dOkS0tPT8fnnnyM6Otrh9kFBnl8bO3nyJEQEd911V7HbrlmzBq+++ioOHTqE3Nxcu3W//PKLW8c7duwYlFJo2rSp021SU1MBAFOmTMGmTZvw6KOPYubMmejcuTP69u2LkSNHWt6D2NhYPPPMM5g3bx7q1KmDli1b4p577sHw4cPRtm1bu+NmZmbandA7Om5cXJzlcYMGDYpsU6NGDQBAenq6XRdRKuTuu+0ezp49G7Nnz7ZbNmLECPTt2xcAcO3aNRw6dMiuC+XSpUvx1VdfYcaMGXjllVcsy3v2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
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observation">Observation<a class="anchor-link" href="#Observation">&#182;</a></h3><p>Once we have the original feature projections (in red), it is easier to interpret the relative position of each data point in the scatterplot. For instance, a point the lower right corner of the figure will likely correspond to a customer that spends a lot on <code>'Milk'</code>, <code>'Grocery'</code> and <code>'Detergents_Paper'</code>, but not so much on the other product categories.</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Clustering">Clustering<a class="anchor-link" href="#Clustering">&#182;</a></h2><p>In this section, we will choose to use either a K-Means clustering algorithm or a Gaussian Mixture Model clustering algorithm to identify the various customer segments hidden in the data. We will then recover specific data points from the clusters to understand their significance by transforming them back into their original dimension and scale.</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p><strong>1) The main advantages of using K-Means as a cluster algorithm are:</strong></p>

<pre><code>- It is easy to implement.

- With large number of variables, if (K is small), it may be computationally faster than hierarchichal clustering.

- Consistent and scale-invariant.

- It is guaranteed to converge.

</code></pre>
<p><strong>2) The main advantages of using Gaussian Mixture Models as a cluster algorithm are:</strong></p>

<pre><code>- It is much more flexible in terms of cluster covariance. Which means that each cluster can have unconstrained covariance structure. In other words, whereas K-means assumes that every cluster have spherical estructure, GMM allows eliptical.

- Points can belong to different clusters, with different level of memebership. This level of membership is the probability of each point to belong to each cluster.

</code></pre>
<p><strong>3) Chosen algorithm:</strong></p>

<pre><code>- The chosen algorithm is Gaussian Mixture Model. Because data is not splitted in clear and different clusters, so we do not know how many clusters there are.

</code></pre>
<p>References:</p>
<p><a href="https://www.quora.com/What-are-the-advantages-of-K-Means-clustering">https://www.quora.com/What-are-the-advantages-of-K-Means-clustering</a></p>
<p><a href="https://www.quora.com/What-are-the-advantages-to-using-a-Gaussian-Mixture-Model-clustering-algorithm">https://www.quora.com/What-are-the-advantages-to-using-a-Gaussian-Mixture-Model-clustering-algorithm</a></p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Creating-Clusters">Implementation: Creating Clusters<a class="anchor-link" href="#Implementation:-Creating-Clusters">&#182;</a></h3><p>Depending on the problem, the number of clusters that you expect to be in the data may already be known. When the number of clusters is not known <em>a priori</em>, there is no guarantee that a given number of clusters best segments the data, since it is unclear what structure exists in the data — if any. However, we can quantify the "goodness" of a clustering by calculating each data point's <em>silhouette coefficient</em>. The <a href="http://scikit-learn.org/stable/modules/generated/sklearn.metrics.silhouette_score.html">silhouette coefficient</a> for a data point measures how similar it is to its assigned cluster from -1 (dissimilar) to 1 (similar). Calculating the <em>mean</em> silhouette coefficient provides for a simple scoring method of a given clustering.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Number of clusters: 2
Cluster Center: [[ 1.25648563 -0.17661209]
 [-2.2256852   0.31284314]]
Sample predictions: [1 1 0]
Silhouette score is: 0.4223246826459388 

Number of clusters: 3
Cluster Center: [[-2.12747031 -0.00345018]
 [-1.47131107  0.9302386 ]
 [ 1.33240836 -0.24325007]]
Sample predictions: [1 1 1]
Silhouette score is: 0.38524471937146926 

Number of clusters: 4
Cluster Center: [[-1.62987178 -0.67042181]
 [-2.64869823  1.21463156]
 [ 1.33390526 -0.34578183]
 [ 1.60494287  1.4780565 ]]
Sample predictions: [0 0 3]
Silhouette score is: 0.3458671375116742 

Number of clusters: 5
Cluster Center: [[ 0.3334473  -1.85876158]
 [-2.84695947  1.50466681]
 [ 1.57656601 -0.0981946 ]
 [ 2.22802118  2.64221015]
 [-1.64820678 -0.37300795]]
Sample predictions: [4 0 3]
Silhouette score is: 0.3314244539434991 

Number of clusters: 6
Cluster Center: [[ 0.58724264 -1.84283598]
 [-2.83698866  1.750979  ]
 [ 1.46372735 -0.14070095]
 [ 2.67567304  0.71178899]
 [-1.64502773 -0.44638497]
 [ 1.15438443  4.07108358]]
Sample predictions: [4 0 5]
Silhouette score is: 0.29789067076045 

Scores: {2: 0.4223246826459388, 3: 0.38524471937146926, 4: 0.3458671375116742, 5: 0.3314244539434991, 6: 0.29789067076045}
</pre>
</div>
</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p><strong>Answer:</strong></p>
<ul>
<li><p>The Silhouette score for each number of clusters (from 2 to 6) are:</p>
<p>Scores: {2: 0.42191684646261496, 3: 0.40424873824078805, 4: 0.29326956484658406, 5: 0.30045638872525937, 6: 0.32613945047115767}</p>
</li>
</ul>
<ul>
<li>The number of clusters with the best silhouette score is 2, with a 0.42 score.</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Cluster-Visualization">Cluster Visualization<a class="anchor-link" href="#Cluster-Visualization">&#182;</a></h3><p>Once we've chosen the optimal number of clusters for your clustering algorithm using the scoring metric above, we can now visualize the results in the code block below.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Cluster Center: [[ 1.25648563 -0.17661209]
 [-2.2256852   0.31284314]]
Sample predictions: [1 1 0]
Silhouette score is: 0.4223246826459388 

</pre>
</div>
</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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7+9n1apV9PX11bspDam9vZ299tqLtra2gj+j4EdEREREpA5WrVpFR0cHEydOxMzq3ZyG4u48//zzrFq1in322afgzyntTURERESkDvr6+th1110V+JTAzNh1112L7jVT8CMiIiIiUicKfEpXyr5T8CMiIiIi0qLWrl3Lqaeeyn777cfUqVM57rjjePzxx3nqqac49NBDS1rnVVddxZo1a8pql7tz3nnnsf/++/PGN76Rhx56qKz1xRT8iIiIiIi0IHfnxBNP5Oijj+bJJ59kyZIlXHjhhTzzzDNlrbeU4GdgYGDY89tvv50nnniCJ554giuuuIJPfOITZbUppuBHRERERKQRdPfA7Lkw7ZTw2N1T1up+//vf09bWxrnnnrv1tSlTpnDUUUcNW+6qq67ik5/85NbnM2bM4J577mHLli2cddZZHHrooUyePJmLL76YRYsW0dXVxemnn85hhx3Gyy+/zJIlS3jHO97B1KlTOfbYY+npCe0++uijOf/88+ns7OR73/vesO+8+eabOfPMMzEzjjjiCNavX7/1c+VQtTcRERERkaTr7oEpJ8LGzdA/AEtXwIJb4OEbYcL4kla5fPlypk6dWnKTli5dyurVq1m+fDkA69evZ+zYsfzgBz/goosuorOzk/7+fmbPns3NN9/MuHHjuP7667ngggv4yU9+AsCrr75KV1fXiHWvXr2aCRMmbH2+1157sXr1asaPL21bYwp+RERERESSbt78ocAHwuPGzeH1S79Qlybtu+++rFy5ktmzZ3P88cfz3ve+d8Qyf/vb31i+fDnHHHMMAFu2bBkWwJxyyik1ay8o+BERERERSb7Fy4YCn1j/ADywrORVTpo0iUWLFuVdbvTo0QwODm59HpeX3nnnnXn44Ye54447uOyyy1i4cOHWHp2YuzNp0iTuu+++jOveYYcdMr6+55570t3dvfX5qlWr2HPPPfO2NR+N+RERERERSbrpk6Etrd+ibTRMm1zyKt/1rnfxyiuvcMUVV2x97ZFHHuHee+8dttzEiRNZunQpg4ODdHd388ADDwDw3HPPMTg4yEknncTcuXO3VmTr6Oigt7cXgIMOOoh169ZtDX76+/t59NFH87bt/e9/Pz/72c9wd+6//3522mmnslPeoM49P2Y2FvgxcCjgwMfcPXNYKCIiIiLSquacE8b4xKlvbaNhzPbh9RKZGTfeeCPnn38+3/rWt2hvb2fixIlccsklw5Y78sgj2WeffTjkkEM4+OCDOfzww4EwLufss8/e2it04YUXAnDWWWdx7rnnst1223HfffexaNEizjvvPDZs2MDAwADnn38+kyZNytm24447jttuu43999+f7bffniuvvLLk7Ry2ze5ekRWV9OVmPwXudfcfm9lrgO3dfX225Ts7Oz3TgCgRkZbS3QfznobFvTC9A+bsDRPa690qEREp0ooVKzj44IML/0B3Txjj88Cy0OMz55ySix00i0z70MyWuHtnpuXr1vNjZjsBbwfOAnD3V4FX620CI14AACAASURBVNUeEZGG0N0HU7pg4wD0A0t7YcGz8HCnAiARkWY3YXzdihs0i3qO+dkHWAdcaWZ/MbMfm1nmEU8iIhLMe3oo8IHwuHFLeF2K190Hsx+HaUvCY3dfvVskIiJVVM/gZzRwOPA/7v4mYBPwn+kLmdnHzazLzLrWrVtX6zaKiCTL4t6hwCfW7/BAb12a09DiXrTL18CDveFxSpcCIBGRJlbP4GcVsMrdF0fPFxGCoWHc/Qp373T3znHjxtW0gSIiiTO9A9rSXmszmNZRl+Y0NPWiiYi0nLoFP+6+Fug2s4Oil94NPFav9oiINIQ5e8OY0UMBUJvBmG3C61Ic9aKJiLScek9yOhtYEFV6WwmcXef2iIgk24T2UNxg3tPhIn2aqr2VbHpHKBiRGgCpF01EpKnVdZJTd18apbS90d0/6O4v1rM9IiINYUI7XHogLJ4aHhX4lEa9aCIirF27llNPPZX99tuPqVOnctxxx/H444/z1FNPceihh5a0zquuuoo1a9aU1a6//vWvvOUtb2HbbbfloosuKmtdqeoa/IiIiNRN3Is2a4/Q2zNrvEqGi0hLcXdOPPFEjj76aJ588kmWLFnChRdeyDPPPFPWeksJfgYGBoY932WXXfj+97/PZz7zmbLakk7Bj4iItC71oolII6lwef7f//73tLW1ce655259bcqUKRx11FHDlrvqqqv45Cc/ufX5jBkzuOeee9iyZQtnnXUWhx56KJMnT+biiy9m0aJFdHV1cfrpp3PYYYfx8ssvs2TJEt7xjncwdepUjj32WHp6egA4+uijOf/88+ns7OR73/vesO/cfffdefOb30xbW3qVn/LUe8yPiIiIiIjkU4VJrpcvX87UqVNL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
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Implementation:-Data-Recovery">Implementation: Data Recovery<a class="anchor-link" href="#Implementation:-Data-Recovery">&#182;</a></h3><p>Each cluster present in the visualization above has a central point. These centers (or means) are not specifically data points from the data, but rather the <em>averages</em> of all the data points predicted in the respective clusters. For the problem of creating customer segments, a cluster's center point corresponds to <em>the average customer of that segment</em>. Since the data is currently reduced in dimension and scaled by a logarithm, we can recover the representative customer spending from these data points by applying the inverse transformations.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output " data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Segment 0</th>
      <td>8939.0</td>
      <td>2108.0</td>
      <td>2758.0</td>
      <td>2073.0</td>
      <td>352.0</td>
      <td>730.0</td>
    </tr>
    <tr>
      <th>Segment 1</th>
      <td>3567.0</td>
      <td>7860.0</td>
      <td>12249.0</td>
      <td>873.0</td>
      <td>4713.0</td>
      <td>966.0</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observations">Observations<a class="anchor-link" href="#Observations">&#182;</a></h3><ul>
<li><p>Segment 0 may represent a a fresh food market as every feature except Frozen and Fresh are below the median.</p>
</li>
<li><p>Segment 1 may represent a supermarket as every feature except fresh and frozen are above the median.</p>
</li>
</ul>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">


<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Fresh</th>
      <th>Milk</th>
      <th>Grocery</th>
      <th>Frozen</th>
      <th>Detergents_Paper</th>
      <th>Delicatessen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>count</th>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
      <td>440.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>12000.297727</td>
      <td>5796.265909</td>
      <td>7951.277273</td>
      <td>3071.931818</td>
      <td>2881.493182</td>
      <td>1524.870455</td>
    </tr>
    <tr>
      <th>std</th>
      <td>12647.328865</td>
      <td>7380.377175</td>
      <td>9503.162829</td>
      <td>4854.673333</td>
      <td>4767.854448</td>
      <td>2820.105937</td>
    </tr>
    <tr>
      <th>min</th>
      <td>3.000000</td>
      <td>55.000000</td>
      <td>3.000000</td>
      <td>25.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>3127.750000</td>
      <td>1533.000000</td>
      <td>2153.000000</td>
      <td>742.250000</td>
      <td>256.750000</td>
      <td>408.250000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>8504.000000</td>
      <td>3627.000000</td>
      <td>4755.500000</td>
      <td>1526.000000</td>
      <td>816.500000</td>
      <td>965.500000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>16933.750000</td>
      <td>7190.250000</td>
      <td>10655.750000</td>
      <td>3554.250000</td>
      <td>3922.000000</td>
      <td>1820.250000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>112151.000000</td>
      <td>73498.000000</td>
      <td>92780.000000</td>
      <td>60869.000000</td>
      <td>40827.000000</td>
      <td>47943.000000</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>The code block below shows to which cluster each sample point is predicted to be.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>Sample point 0 predicted to be in Cluster 1
Sample point 1 predicted to be in Cluster 1
Sample point 2 predicted to be in Cluster 0
</pre>
</div>
</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observations">Observations<a class="anchor-link" href="#Observations">&#182;</a></h3><ul>
<li><p>Sample point 0 --&gt; Supermarket and the original guess was a retailer. This difference may be explained because of the size of the cluster (which is pretty big)</p>
</li>
<li><p>Sample point 1 --&gt; Supermarket and the originak guess was the same.</p>
</li>
<li><p>Sample point 2 --&gt; Fresh food market and the original guess was a restaurant which is reasonable considering the amount of the spending of the features.</p>
</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Conclusion">Conclusion<a class="anchor-link" href="#Conclusion">&#182;</a></h2>
</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>Additional structure is derived from originally unlabeled data when using clustering techniques. Since each customer has a <strong><em>customer segment</em></strong> it best identifies with (depending on the clustering algorithm applied), we can consider <em>'customer segment'</em> as an <strong>engineered feature</strong> for the data. Assume the wholesale distributor recently acquired ten new customers and each provided estimates for anticipated annual spending of each product category. Knowing these estimates, the wholesale distributor wants to classify each new customer to a <strong><em>customer segment</em></strong> to determine the most appropriate delivery service.</p>
<ul>
<li>How can the wholesale distributor label the new customers using only their estimated product spending and the <strong>customer segment</strong> data?</li>
</ul>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<p>A supervised learning algorithm could be used with the estimated product spending as attributes and the customer segment as the target variable, making it a classification problem (we would have 2 possible labels). As there is not  a clear mathematical relationship between the customer segment and the product spending KNN could be a good algorithm to work with.</p>

</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Visualizing-Underlying-Distributions">Visualizing Underlying Distributions<a class="anchor-link" href="#Visualizing-Underlying-Distributions">&#182;</a></h3><p>At the beginning of this project, it was discussed that the <code>'Channel'</code> and <code>'Region'</code> features would be excluded from the dataset so that the customer product categories were emphasized in the analysis. By reintroducing the <code>'Channel'</code> feature to the dataset, an interesting structure emerges when considering the same PCA dimensionality reduction applied earlier to the original dataset.</p>
<p>The code block below shows how each data point is labeled either <code>'HoReCa'</code> (Hotel/Restaurant/Cafe) or <code>'Retail'</code> the reduced space.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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Psuzzz7L0UcfzcEHH8z06dN58skn065v0aJFfOxjH+vx2NChQ5k8eTIvv/wyAHfeeSeHHnooBx10ECeffDIdHR0AfPOb3+SAAw5g0qRJnHvuuWnbcdVVVzF16lTq6uo46aSTuntYZs6cyY033ti9zURv17333sv06dM54YQTOOCAAwD49Kc/zcEHH8yECRP42c9+1uM1559/PnV1dRxyyCG8+uqraduQvJ9XXHEFZ555Joceemj3ej7zmc+w1157sXjxYg499FCmTJnCBz/4QZ566ikAPvGJT/Dyyy8zefJkHnjggayPbU7cvWz+HXzwwS4iIiIi5e+JJ57IfuF/vOK+2zT3monujA9+7jYteLwfBgwY4HV1dd3/amtr/ctf/rK7ux933HG+YMECd3efP3++f+pTn3J39zPPPNNvuOGG7nV89KMf9aefftrd3R955BE/4ogj3N39u9/9rl966aXu7r5mzRo//PDD3d39z3/+sx977LHu7v7GG2/4QQcd5O3t7b5mzRqfPn26d3R0uLv7JZdc4hdddJG//vrr/oEPfMC7urrc3f3NN99M247XX3+9+//nn3++X3755WmX23nnnbvbMWzYMH/uuee6n1u7dq27u2/evNknTJjQvU7Ab7vtNnd3P++88/ziiy9Ou+7k/TzxxBP9lltuSXvc169f752dne7uftddd/k///M/u7v7888/7xMmTMh4bJOlO4+Apd5LPKFS1yIiIiISb3PmQ8dm6AzTszq3Br/PmQ9zL8h7tUOHDmX58uXdvy9YsIClS5cC8PDDD/Pb3/4WgM9//vM0Nzfv8PqOjg4eeughTj755O7H3nnnnR2Wu/POO/nEJz7R/fsDDzxAXV0dzzzzDF//+tcZPXo0t99+O0888QSHHXYYAFu2bOHQQw9ll112YciQIcyaNYvjjjuO4447Lu2+PP7441xwwQWsW7eOjo4OjjrqqIz739DQ0KNM9OWXX87NN98MQFtbG8888wyjRo1i8ODB3ds9+OCDueuuu9KuL3U/e7N+/XrOPPNMnnnmGcyMzs7OHZbJ9tjmSsGPiIiIiMRb68rtgU9C51ZYvDKa9oS6urrYddddewRQ6dxxxx38+7//e/fv06dP5/bbb+f555/nkEMOYcaMGbg7H//4x7n22mt3eP3ixYtZtGgRN954I//7v//LPffcs8MyM2fO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dC53Rns6lzu/xw/jS1/6Eq+++irglMbu6OgIq/kiIiIinmidHxHBGMNHPvIROjs7AWfNnxkzZvCZz3yGlvhhsOIzE/cdHh7mPz/3Oa666qqJ2z7ykY9gjKl6u0VERERKoXV+RASAkZERzjvvPO66666J24444gje//73s2zZMqy1PPjgg1x99dU8/fTTE/c5++yzufXWW2lpUV+KiIiIhK/QOj8KfkRkwu7du7nooov4wx/+4On+f/d3f8ctt9xCW1tbwC0TERER8UaLnIqIJzNnzuTOO+/kC1/4AnPnzs17v7lz5/LFL36RO+64Q4GPiIiI1AyN/IiIq6GhIW6++WZ+/etfs2vXLgDmzJnDRRddxMUXX0xra2vILRQRERHJpbQ3ERERERFpCEp7ExERERGRhqfgR0REREREGoKCHxGRepDaAV3/CYlLnJ+pHWG3SEREJHK0MIeISK1L7YD2i2FwLwyPwPrN0PMb6L8F4oeF3ToREZHI0MiPiEit675mMvAB5+fgXud2ERERmaDgR0Sk1vVunAx80oZHoG9jOO0RERGJKAU/IiK1rmMhxLKymGMtkFgYTntEREQiSsGPiEitS14ObdMnA6BYi/N78vJw2yUiIhIxCn5ERGpd/DCnuEHncme0p3O5ih2IiIi4ULU3EZF6ED8MVnwm7FaIiIhEmkZ+RERERESkISj4ERERERGRhqDgR0REREREGoKCHxERERERaQgKfkREREREpCEo+BERERERkYag4EdERERERBqCgh8REREREWkICn5ERERERKQhKPgREREREZGGoOBHREREREQagoIfERERERFpCAp+RERERESkISj4ERERERGRhqDgR0REREREGoKx1obdBs+MMc8CT4bdDvHFocBzYTdCAqPPt77p861v+nzrmz7f+qbP13G0tXa22x9qKviR+mGMWWutXRJ2OyQY+nzrmz7f+qbPt77p861v+nyLU9qbiIiIiIg0BAU/IiIiIiLSEBT8SFh+FHYDJFD6fOubPt/6ps+3vunzrW/6fIvQnB8REREREWkIGvkREREREZGGoOBHQmeM+YQxxhpjDg27LeIfY8yVxpgtxpgNxphbjDEHhd0mqZwx5ixjzFZjzF+MMf8WdnvEP8aYuDHmHmPMJmPMn40x/xJ2m8R/xphmY8zDxpjfhN0W8Zcx5iBjzE3j372bjTF/E3abokjBj4TKGBMH3gb8Ney2iO9+B7zBWrsIeBT495DbIxUyxjQD3wPOBl4P/JMx5vXhtkp8NAJ8wlr7euAU4L/r861L/wJsDrsREohvA7+11p4AtKPP2ZWCHwnbVUAS0OSzOmOtvdtaOzL+62rgyDDbI75IAH+x1j5urR0CbgAuDLlN4hNr7Q5r7UPj/9+Nc+F0RLitEj8ZY44EzgWuDrst4i9jzIHAm4BrAKy1Q9bal8JtVTQp+JHQGGMuBJ6y1vaH3RYJ3PuAO8NuhFTsCCA15fft6OK4LhljjgFOAnrDbYn47Fs4HY5jYTdEfHcs8CzwX+NpjVcbY2aE3agoagm7AVLfjDG/B+a5/OnTwH/gpLxJjSr0+Vprfz1+n0/jpNP0VLNtIlIeY0wb8H+Aj1lrB8Juj/jDGHMesMtau84Yc0bY7RHftQBvBLqstb3GmG8D/wZ8NtxmRY+CHwmUtfbv3G43xizE6aXoN8aAkxL1kDEmYa3dWcUmSgXyfb5pxpj3AOcBZ1rV1a8HTwHxKb8fOX6b1AljTAwn8Omx1t4cdnvEV6cCFxhjzgH2Aw4wxlxvrX1XyO0Sf2wHtltr06O1N+EEP5JF6/xIJBhjngCWWGufC7st4g9jzFnAN4HTrbXPht0eqZwxpgWneMWZOEHPGuBSa+2fQ22Y+MI4PVE/A16w1n4s7PZIcMZHfj5prT0v7LaIf4wxDwDvt9ZuNcZ8Hphhrf1UyM2KHI38iEhQvgtMA343Prq32lr7wXCbJJWw1o4YYz4C3AU0Az9R4FNXTgX+GdhojFk/ftt/WGvvCLFNIuJdF9BjjGkFHgfeG3J7IkkjPyIiIiIi0hBU7U1ERERERBqCgh8REREREWkICn5ERERERKQhKPgREREREZGGoOBHREREREQagoIfERGpmDFm1Biz3hjzZ2NMvzHmE8aYpvG/LTHGfCekdj3o0/P84/i2jRljlvjxnCIiUn0qdS0iIhUzxgxaa9vG/z8H+DnwR2vt58JtmT+MMQuAMWAlzuKQa0NukoiIlEEjPyIi4itr7S7gCuAjxnGGMeY3AMaYzxtjfmaMecAY86Qx5h3GmG5jzEZjzG+NMbHx+51sjLnPGLPOGHOXMeaw8dvvNcZ8zRjTZ4x51Bhz2vjtJ47ftt4Ys8EY87rx2wfHfxpjzJXGmEfGX+uS8dvPGH/Om4wxW4wxPWZ8Vd6sbdpsrd1ajfdPRESCo+BHRER8Z619HGgG5rj8+TXAW4ALgOuBe6y1C4FXgHPHA6AVwD9Ya08GfgJ8ecrjW6y1CeBjQHpk6YPAt621i4ElwPas13wHsBhoB/4OuDIdUAEnjT/X64HjgFPL3W4REYm2lrAbICIiDedOa+2wMWYjToD02/HbNwLHAPOBNwC/Gx+EaQZ2THn8zeM/143fH+BPwKeNMUcCN1tr/1/Wa/4t8L+ttaPAM8aY+4ClwADQZ63dDmCMWT/+nP/Xly0VEZFI0ciPiIj4zhhzHDAK7HL58z4Aa+0YMGwnJ5+O4XTKGeDP1trF4/8WWmvflv348edvGX+un+OMJL0C3GGMeUsJzd035f8TzykiIvVHwY+IiPjKGDMb+CHwXVteVZ2twGxjzN+MP1/MGHNikdc8DnjcWvsd4NfAoqy7PABcYoxpHm/fm4C+MtomIiI1TMGPiIj4Yf90qWvg98DdwBfKeSJr7RDwD8DXjDH9wHpgWZGHLQceGU9bewNwbdbfbwE2AP3AH4CktXan1zYZYy42xmwH/ga43Rhzl9fHiohIdKjUtYiIiIiINASN/IiIiIiISENQ8CMiIiIiIg1BwY+IiIiIiDQEBT8iIiIiItIQFPyIiIiIiEhDUPAjIiIiIiINQcGPiIiIiIg0BAU/IiIiIiLSEP4/BDNPiNr12rQAAAAASUVORK5CYII=
"
>
</div>

</div>

</div>

</div>

</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h3 id="Observations">Observations<a class="anchor-link" href="#Observations">&#182;</a></h3>
</div>
</div>
<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<ul>
<li><p>The cluster algorithm doeas a pretty good job of clustering the data to the underlying distribution as the cluster 0 can be associated perfectly with a retailer and the cluster 1 to the Ho/Re/Ca.</p>
</li>
<li><p>Yes, this definitions are consistent with the previous definitions of customer segments.</p>
</li>
</ul>

</div>
</div>
</body>







</html>