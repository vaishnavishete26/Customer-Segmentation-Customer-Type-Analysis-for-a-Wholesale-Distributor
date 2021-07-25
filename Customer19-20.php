<?php
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>project_customer_segmentation19-20</title><script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>




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
    <!-- End of mathjax configuration --></head>
<body class="jp-Notebook" data-jp-theme-light="true" data-jp-theme-name="JupyterLab Light" style="background-image: url('image/analyse.jpg'); background-size: cover;">

<div class="jp-Cell-inputWrapper"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput " data-mime-type="text/markdown">
<h2 id="Data-Collection">Data Collection<a class="anchor-link" href="#Data-Collection">&#182;</a></h2><p>In this section, we use wholesale customers dataset. And we import or load the dataset from customers.csv file into Python.</p>

</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">

<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain">
<pre>&lt;class &#39;pandas.core.frame.DataFrame&#39;&gt;
     Channel  Region  Fresh  ...  Frozen  Detergents_Paper  Delicatessen
0          2       3  24653  ...   13316             21570         18815
1          2       3  10253  ...    5302              2842          2612
2          1       3   1020  ...    3688              3007         21632
3          2       3   5876  ...    1041             13567         29729
4          1       3  18601  ...     314              2405          1502
..       ...     ...    ...  ...     ...               ...           ...
626        1       3   5230  ...   20399             16165           203
627        1       3   4897  ...    9785              9898           980
628        1       2  10391  ...   13829             14276          2137
629        1       2   6824  ...   24773              4113           490
630        1       2   2112  ...    8852             43088           834

[631 rows x 8 columns]
     Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
0    24653  23127    24653   13316             21570         18815
1    10253  24708    10253    5302              2842          2612
2     1020   9490     1020    3688              3007         21632
3     5876   2216     5876    1041             13567         29729
4    18601   5226    18601     314              2405          1502
..     ...    ...      ...     ...               ...           ...
626   5230   2964     1304   20399             16165           203
627   4897   2235     3199    9785              9898           980
628  10391   5671     4560   13829             14276          2137
629   6824  21386      879   24773              4113           490
630   2112  12694     6243    8852             43088           834

[631 rows x 6 columns]
&lt;class &#39;tuple&#39;&gt;
(631, 6)
Wholesale customers dataset has 631 samples with 6 features each.
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
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>9450.231379</td>
      <td>5300.768621</td>
      <td>6886.977813</td>
      <td>4793.882726</td>
      <td>5033.161648</td>
      <td>4124.787639</td>
    </tr>
    <tr>
      <th>std</th>
      <td>10508.945983</td>
      <td>7687.322837</td>
      <td>9423.846276</td>
      <td>8089.537416</td>
      <td>7756.395420</td>
      <td>7207.473100</td>
    </tr>
    <tr>
      <th>min</th>
      <td>3.000000</td>
      <td>54.000000</td>
      <td>9.000000</td>
      <td>3.000000</td>
      <td>9.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>2175.500000</td>
      <td>1226.500000</td>
      <td>1495.000000</td>
      <td>729.000000</td>
      <td>894.000000</td>
      <td>423.500000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>5567.000000</td>
      <td>2611.000000</td>
      <td>3136.000000</td>
      <td>1809.000000</td>
      <td>2317.000000</td>
      <td>1360.000000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>13328.500000</td>
      <td>6335.500000</td>
      <td>8321.000000</td>
      <td>5564.000000</td>
      <td>5877.000000</td>
      <td>4112.000000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>92780.000000</td>
      <td>92780.000000</td>
      <td>89842.000000</td>
      <td>76237.000000</td>
      <td>112151.000000</td>
      <td>56159.000000</td>
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
      <td>24653</td>
      <td>23127</td>
      <td>24653</td>
      <td>13316</td>
      <td>21570</td>
      <td>18815</td>
    </tr>
    <tr>
      <th>1</th>
      <td>10253</td>
      <td>24708</td>
      <td>10253</td>
      <td>5302</td>
      <td>2842</td>
      <td>2612</td>
    </tr>
    <tr>
      <th>2</th>
      <td>1020</td>
      <td>9490</td>
      <td>1020</td>
      <td>3688</td>
      <td>3007</td>
      <td>21632</td>
    </tr>
    <tr>
      <th>3</th>
      <td>5876</td>
      <td>2216</td>
      <td>5876</td>
      <td>1041</td>
      <td>13567</td>
      <td>29729</td>
    </tr>
    <tr>
      <th>4</th>
      <td>18601</td>
      <td>5226</td>
      <td>18601</td>
      <td>314</td>
      <td>2405</td>
      <td>1502</td>
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
     Fresh  Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
85   16165  1200      610    7388             13316           170
181  18291  1428     2005      61                22           659
338  10908  3880    13031    1031             17773          5167
&lt;class &#39;pandas.core.indexes.base.Index&#39;&gt;
Index([&#39;Fresh&#39;, &#39;Milk&#39;, &#39;Grocery&#39;, &#39;Frozen&#39;, &#39;Detergents_Paper&#39;,
       &#39;Delicatessen&#39;],
      dtype=&#39;object&#39;)
     Fresh  Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
85   16165  1200      610    7388             13316           170
181  18291  1428     2005      61                22           659
338  10908  3880    13031    1031             17773          5167
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
      <td>16165</td>
      <td>1200</td>
      <td>610</td>
      <td>7388</td>
      <td>13316</td>
      <td>170</td>
    </tr>
    <tr>
      <th>1</th>
      <td>18291</td>
      <td>1428</td>
      <td>2005</td>
      <td>61</td>
      <td>22</td>
      <td>659</td>
    </tr>
    <tr>
      <th>2</th>
      <td>10908</td>
      <td>3880</td>
      <td>13031</td>
      <td>1031</td>
      <td>17773</td>
      <td>5167</td>
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
      <td>24653</td>
      <td>23127</td>
      <td>24653</td>
      <td>13316</td>
      <td>21570</td>
      <td>18815</td>
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
0    24653  23127   13316             21570         18815
1    10253  24708    5302              2842          2612
2     1020   9490    3688              3007         21632
3     5876   2216    1041             13567         29729
4    18601   5226     314              2405          1502
..     ...    ...     ...               ...           ...
626   5230   2964   20399             16165           203
627   4897   2235    9785              9898           980
628  10391   5671   13829             14276          2137
629   6824  21386   24773              4113           490
630   2112  12694    8852             43088           834

[631 rows x 5 columns]
&lt;class &#39;pandas.core.series.Series&#39;&gt;
0      24653
1      10253
2       1020
3       5876
4      18601
       ...  
626     1304
627     3199
628     4560
629      879
630     6243
Name: Grocery, Length: 631, dtype: int64

X_train:
     Fresh   Milk  Frozen  Detergents_Paper  Delicatessen
256  10704   4239    9584              4563         11072
312   8861    627    2921              4006          5234
584  14855   2174    2388              2916           727
569   5189    260     731              5778          6250
196  22925    710    1293              2410          2253
..     ...    ...     ...               ...           ...
71   13146    397   17160              2102          2447
106   3103   3821      75             17740          1440
270   3412  13583     228             12232          6202
435   5531   5593   22096              3213           371
102  10850   4523    1289              2587          1680

[473 rows x 5 columns]

X_test:
     Fresh  Milk  Frozen  Detergents_Paper  Delicatessen
509  14903  3450   11593               228           659
271   1498   609    6386              2593          3062
218   1531  1040    1809               834          2870
145    688  5429     303              6407           404
495    182   683   13567               416           282
..     ...   ...     ...               ...           ...
83   26373   485    1403               879           283
289   3343   788     876              1530          6869
408   4625    91     834             13486           751
79    7780  5154     140              1897           516
23   15168  5265    4420              1169           165

[158 rows x 5 columns]

y_train:
256     4456
312    15400
584     6109
569     7683
196     3508
       ...  
71     16117
106     2362
270    16731
435     2101
102     2000
Name: Grocery, Length: 473, dtype: int64

y_test:
509     1063
271    29703
218      868
145     2474
495     3182
       ...  
83      6252
289      864
408     4389
79      2530
23     15168
Name: Grocery, Length: 158, dtype: int64
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
[ 1909. 10704. 12377.  3012. 17623.   665.   223.   806. 19172. 14855.
 18815.  2317.   806.  3428.  4320.  2368.   688.   686.  7030. 10405.
  1391.  3343.  5004.  5969. 22272.   258. 10290.  6200. 16225.  5241.
 26539.  2647.  1022.  1982.  1449.  2028.  5038.  3884.  1897.  5241.
  2125. 13031.  4760.  4100. 13134.   542.  1982.  4320. 19913.  3643.
  3445. 19172. 18291.   317.  2153.  1328. 19913.   211.   137. 18827.
  2102.  6986.   778.  4967.   845.  3881.  3823. 32114.  8852.   610.
  1040.  3047.  8607.  5038.   778.  6137.   407. 10683.  1235.   686.
  2006.  5969. 17623.  2147.   656.  1409.   739.  7305.   444.  4983.
 13626. 17770.  1422.  1403. 26870.  1328.  5241.  3810.   686. 22272.
 29729.   219.  2153.   218.  3412.  4048. 20105.  4048. 17063.   137.
  8117. 11924.   838.   303.  2006.  1328.  5641. 11519.  2548.   683.
  4829.  1901.  2000.  8257. 22272.  3628.   806. 19176.  1550.  1235.
  5241.   739. 10290.   651.  1173.    75.  4425.   218. 31812. 12469.
  1364.   218.  4967. 38793. 14278.  1409.  1210.  4692. 16731.  2501.
  2842. 26870.  1524.  1235.  1409. 13134.  2121.   610.]
&lt;class &#39;dict&#39;&gt;
{&#39;Actual&#39;: 509     1063
271    29703
218      868
145     2474
495     3182
       ...  
83      6252
289      864
408     4389
79      2530
23     15168
Name: Grocery, Length: 158, dtype: int64, &#39;Predicted&#39;: array([ 1909., 10704., 12377.,  3012., 17623.,   665.,   223.,   806.,
       19172., 14855., 18815.,  2317.,   806.,  3428.,  4320.,  2368.,
         688.,   686.,  7030., 10405.,  1391.,  3343.,  5004.,  5969.,
       22272.,   258., 10290.,  6200., 16225.,  5241., 26539.,  2647.,
        1022.,  1982.,  1449.,  2028.,  5038.,  3884.,  1897.,  5241.,
        2125., 13031.,  4760.,  4100., 13134.,   542.,  1982.,  4320.,
       19913.,  3643.,  3445., 19172., 18291.,   317.,  2153.,  1328.,
       19913.,   211.,   137., 18827.,  2102.,  6986.,   778.,  4967.,
         845.,  3881.,  3823., 32114.,  8852.,   610.,  1040.,  3047.,
        8607.,  5038.,   778.,  6137.,   407., 10683.,  1235.,   686.,
        2006.,  5969., 17623.,  2147.,   656.,  1409.,   739.,  7305.,
         444.,  4983., 13626., 17770.,  1422.,  1403., 26870.,  1328.,
        5241.,  3810.,   686., 22272., 29729.,   219.,  2153.,   218.,
        3412.,  4048., 20105.,  4048., 17063.,   137.,  8117., 11924.,
         838.,   303.,  2006.,  1328.,  5641., 11519.,  2548.,   683.,
        4829.,  1901.,  2000.,  8257., 22272.,  3628.,   806., 19176.,
        1550.,  1235.,  5241.,   739., 10290.,   651.,  1173.,    75.,
        4425.,   218., 31812., 12469.,  1364.,   218.,  4967., 38793.,
       14278.,  1409.,  1210.,  4692., 16731.,  2501.,  2842., 26870.,
        1524.,  1235.,  1409., 13134.,  2121.,   610.])}
     Actual  Predicted
509    1063     1909.0
271   29703    10704.0
218     868    12377.0
145    2474     3012.0
495    3182    17623.0
..      ...        ...
83     6252     1235.0
289     864     1409.0
408    4389    13134.0
79     2530     2121.0
23    15168      610.0

[158 rows x 2 columns]
Prediction score is -0.6010003790202414
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
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA08AAAH1CAYAAAAu8MUgAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADh0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uMy4yLjIsIGh0dHA6Ly9tYXRwbG90bGliLm9yZy+WH4yJAAAgAElEQVR4nOzdeZBlWX7Q9++529v33Pfat65epqu7Z3oZTUsjCbQhGYOMjMEY4wiwwywOGbxig+0IiDC2MQgkGWzZECCBGEBiZjRoNDM906Oe3rururr2yqzcM9++3v34j5uVXVmVtWZWZVbl+UR0dNXLzFcn37v3vvs753d+PyGlRFEURVEURVEURbkzbacHoCiKoiiKoiiK8jhQwZOiKIqiKIqiKMo9UMGToiiKoiiKoijKPVDBk6IoiqIoiqIoyj1QwZOiKIqiKIqiKMo9UMGToiiKoiiKoijKPTB2egCPUl9fn5yamtrpYSg7bHp6mjsdB64f4oeSmKGha+LRDUx55G4+FkIJjhcghCBuqrmlvWKza4LjhwShJG5qaEJdB/aC6elpJqemsL0AgLipo975vef69SAIJY4fYmgCy1CfB3vNe++9V5ZS9m/2tT0VPE1NTfHuu+/u9DCUHXbq1KnbHge2F/C9i2UAMnGDl/aXHuXQlEfs5mPhk4UGi3UbgOcm8pTSsZ0amvII3XwcNG2Pt69UAejLxHh2PL9TQ1MeoVOnTvGVb7zB+aUWAPv7U+zvT+/wqJRH7fr14AdXKrRsH4BXD/URN/UdHpnyKAkhZm73NRVKA1fLHX7zvTm6rr/TQ1F2mKVrJK3oAplNmDs8GuVRy8aj91zXBUlrT80tKTeIG/r6THM2ro6DvSQTN9A0EEJ9Bux119//pKVj6ep2WfnMnv9UWG7a/NwvvUm96/GvPlrg1/7UCwiVorFnaZrghX1Fel5AJrbnT489Z7yYpJCyMHVBzFCzjHuVZWh8fn8Jxw/IxNUN9F6ST1q8fKCPUEo1gbLHHR3KMFpIkDR1NJXCr9xgz4fS//DNq7Rsnz/24gRvXFjlOxdWd3pIyg4zdY1s3FRB9B6VjhkqcFKwDE0FTntU3NRV4KQghCAbNzHUqpNykz19REgp+dcfLvD6kQH+x585QV/a4h//4NpOD0tRFEVRFEVRlF1oTwdPV8odFhs2rx/txzI0fvbZUb59foWW7e300BRFURRFURRF2WX2dPD05qWoqtqrB/sA+NHjg3iBXK+2piiKoiiKoiiKct2eDp7en6kxmI0xUUwC8PxkgVzC5Hc/XdnhkSmKoiiKoiiKstvs6eDp08UWJ0Zy64UBDF3jtUN9vHmpjJRyh0enKIqiKIqiKMpusmeDJ9sLuLza5thwZsPjL+0vsdS0uVbt7tDIFEVRFEVRFEXZjfZs8HRppY0fSo4NZzc8/tK+IgA/uFrdiWEpiqIoiqIoirJL7dng6dPFJsAtwdOhgTTFlMUPrqjgSVEURVEURVGUz+zZ4OlKuYOpCybXikVcJ4Tgxakib09XdmhkiqIoiqIoiqLsRns2eJqpdBgvJjftHP3iviKz1R6Ljd4OjExRFEVRFEVRlN1ozwZP0+UuU6XUpl97YSra9/TOdO1RDklRFEVRFEVRlF1sTwZPUkpmKh0mS8lNv35sOEPK0nlHFY1QFEVRFEVRFGXNngyeym2XjhvcduXJ0DU+N1ngnWkVPCmKoiiKoiiKEtmTwdNMpQNw25UniFL3zi+3aPS8RzUsRVEURVEURVF2sT0ZPE1Xoga4t1t5Ajg1VUBKeH9G7XtSFEVRFEVRFGWPBk8zlQ66JhgtJG77Pc+NFzA0wdsqdU9RFEVRFEVRFPZo8PS5iQL/6ZcOYG5Spvy6hKXz1GiOd1XwpCiKoiiKoigKezR4ev3oAH/px47c9fte3Ffko9kGthc8glEpiqIoiqIoirKb7cng6V6dmizgBiGn5xs7PRRFURRFURRFUXaYCp7u4NRas9y3Vb8nRVEURVEURdnzVPB0B8WUxcGBtNr3pCiKoiiKoigKxlZ+WAhxGPhFYPLG55JS/vAWx7VrvDBV4Lc/XiQIJbomdno4iqIoiqIoiqLskC0FT8A/A/4+8KvAE1lV4YWpIv/k7VkuLLc4Npzd6eEoD0kQSuZqXWw3oOX4jOQTFFMWiw2bYsoilzB3eojKQyKlZL7eQwjBaD5BtePS8wKGs3G0bZgwCULJfK1H3NQYyMa3YcS7w1LDxgtCRvOJbXmddoOu67PcdOjPxEjHDIJQstjokY4Z5JMWAC3bo9x2GcrGSVg6y00b13+yXgcF6l2XtuPTl46x1LDJJkyKKeu23+/6IQv1Hh3XJ5cwGc0nEEIdD4+zasfhrctVBnMxnhsv3HJ+1zoujZ7HSD6BZahErr1kq8GTL6X8e9sykl3qhbV9T+9MV1Xw9AS7tNLmwlKLH0xXSJg644Uko4UEUsK0LvjioX618viEmq/3OLfYAqDn+sxUukgJXcfn0GBmy89/ZbXNzFpj7lNT2vpN+OOs0nY4s1ZIxwtC9vend3hE2+PDa3W6bsBstcsXD/dzfqnFQr2HEPDygT7ipsZ7MzX8QLLctDk8mOH0XPQ6uEHIgSfkddjruq7PezM1pISeWydh6QgBrxzsI27qm/7MuaUm55ZazFW76/cKY4Xkoxy2so28IOSfvTvHx3MN4qaGZeicHM2tf932Aj6YrRGGUO95PDue38HRKo/aA4XKQoiiEKII/JYQ4s8JIYavP7b2+BNjrJBgOBfnrSuVnR6K8hAJARK5/vdQyjt8t/IkuXF2WMroP4Bgm46BGyefBU9GAH7ja/Ykzq5f/5WuXwek/OzPG373G3/mUQ1OeejCG64Dn73v9/ccT+J5sdfc+N7Lmz4PNl7Xlb3mQVee3gMknx0zv3jD1ySw/3Y/KISYAn4AfAq4UsofE0L8IvCHgBngP5RSelt57AF/p9uNl9cO9fH1M0v4QYhxh8a6yuPrYH+ahKlzcCBNo+cx2ZeklIrSNQopS606PcFG8wkE0YfhcC5BNmHSdQPGC4ltef79fWlihk7c1Mkln4z0z2LK4unxHK4fMpLbntdpN3huosBKy6YvHQPgyFCGpKWTjhukYtHH5fOTBSpth8FsnLipP5Gvw16Xjhk8PZ6jbfsM5eKUWy7ZhHHbVSeAY8NZ8gmL7liObNxkJK+Oh8eZqWv80RfGGS9UGMjEN6w6AcQMnecnijR6HsP5JycdW7k3DxQ8SSn3bfHf/bdSyj8OIIQYAF6XUr4qhPjLwM8KIb7zoI8R7cPaVl86MsBvvDvHB7P19TQ+5cmiaYLx4q0pFpOl1A6MRnnUbrzRGdzmfUm3O7YedwOZJ++GIWHpG855U9duSUlMxwzSsc8+Op/E10GJ3teBtazdidLdb5VMXWOi9OSd53tZKRXjp54Zue3Xc0nziZkQU+7PlpZRhBB/RAiRWfvzfyuE+BdCiOfu4UdfF0J8VwjxF4FTwLfXHv9d4AtbfGzbvXKwD10TfOvcysN4ekVRFEVRFEVRHgNbzUH776SULSHEq8CXgX9AVH3vThaBw8Draz9zCmiufa0B5Nf+e9DHtl0uYfL8RIFvn199GE+vKIqiKIqiKMpjYKvB0/Xy5D8J/IqU8t8AdywlJaV0pJQdKaUP/DZwGbhexi4L1IkCoQd9bAMhxH8ihHhXCPHu6uqDBz8/dKSfs4tNVpr2Az+HoiiKoiiKoiiPr60GT/NCiF8Gfh74qhAidrfnvJ7mt+YV4BLwQ2t//zLwFvDOFh7bQEr5K1LKU1LKU/39/ff3293gy8cGAfids8sP/BzK7nNltc0nCw1s74lsU6bcJy8I+XSxyaWV1i3VlRTl+vXC8dX1Yi8JQsn5pRYXllsEobouKA8uDCUXl1ucW2riB+FOD0d5QFsNnv4o8DvAj0sp60CRjZX3NvOaEOI9IcT3gXkp5Q+AN4QQ3wOeBf6llHLlQR/b4u9zW4cH0xwcSPPbHy08rH9CecQqbYfzyy3evFTmdz5ZwrvpQlbvurw7XeXicmuHRqg8au9MV/gnb1/jX7w/x7Vqd6eHozxCUkrOLjR5b6ZK2/Fv+Xq57XBltcO1apevnV7io9n6LdcM5ck0V+syW+1yrdJlod7jarnDO9NVym1nw/eV2w7vTFe5Wu7s0EiV7dZ2fP7t2SX+2buzXKts/X1dbNrMVLrMVXvqM+YxtqUmuVLKrhBiBXgVuAj4a/+/0898FfjqTY/9DeBvbNdjD4MQgp96epj/45sXWW7a216RS3n04qZOtePS7PkkTI8rq22ODGUJQsnHc3W+e3GVIJSM5JMM5xPUuy7LTZvxYnLTClthKPl0qYnrhxwbzt6xrK2yuzR6Lmfmm/zzd+dYqPfIJU2qbWdL1Rb9IOTcUjRTfXQ4Q8zY+eMhCCWfLjZ31Zh2i2rHZaHeY77W4/uXKxzoT3F0KMtUKYWmCdq2x5VyGzeQlJIWqy2HpYZ910qKHcfn/HKLpKVzZDCj+v/scmEoOT3foNx2eGo0x2A2TsLUubDcYrHRw9QFXhCtPl1cbq+XtQf49vkVym2H4WyC0XwCy1CtTR5XUkreulLhG58ss9ToMZBNYOqCbMLk7GITKeG58TzJ2P3dRidNfa1vFCStLd2CKztoq9X2/irwl4H/au0hE/hHWx3UbvVTT48gJXz19OJOD0XZBqmYwQ8d6mdfX5Ja1+P8covZapda16XSjv5bbNistmwsTXB+qUWt43F+afOVqNW2w2LdptJ2mamoGaXHRa3j8vUzS3z/UhlnrZdbNmEyscUy9UtNm6WGzWrLYa7W26bRbs2NY5qt7o4x7RapmIEQsNqKzuHvXSzzWx8t8MFstJX2WrXHaC5BIWEwkI2ha9GN1N1cLXeotl3mqj2qHfdh/xrKFjVtj08WGnxwrc5XTy/i+AGWodFzfeKmzvnlFnEzunUqpj7b4t11fdq2T9sOqPdcTF0FyY+zRs/j7atVZmtdFhs21Y5DfzrGQt1mrtrj9y9X+MbZJbruravUd1JIWby4r8gL+4oM5dQk/ONqq2HvzwHPAe8DSCkXbtrT9EQ5OJDm2HCWr3wwz596ZautrpTdYKyYxA0CrlUXubraYSAT53MTBZKWzngxSdLUOTCQxjJ1sgmTRtcjn9i8Jko6ZqDrgiCQ5BImYSj5YLZGo+dxZCjLqGqauCs1eh7pmIGhayRNjVguRiFhMlPtUkhaaA/YIDkTN9G0aIYxdw832Y9CJm6ga4JQSrIJNet5I10TCKDccWg7AQlLJxUzaPaivuu5hInrhxzJZXlqNIcQ3NPKXT5pstSwMXSx3mhX2b3SMYNQSq4vEH7j7DLNnku57SIQPDUS5/P7SrhhuGHlwNI1Dg1m6E+7HBpKqxXGx1zCij7z44ZOf9riqdEsR4ezfP9yhTPzDbJJE8vQadv+fa8gZeK74/NAeXBbvZK7UkophJAAQognvqPoz58a43/4rbOcnmtwcix39x9Qdj1daOQTJm4QkokbWIbGFw6UeHGqSM8PSFkGM5UOPTdgKBfjxEh20+dJxQxePlAiDKMLb9vxqXWiG6/Fek8FT7vUaCFKyRzNxZlvpLm43EZKSbXtYvvBA6dW5BImLx/oA3hoKZx+EPLxfFTw5MRI7q5BWjZu8oUDJaSMjlHlM42ex1LTxvEkhaTJ5/eVGMzFGS1E5+3TYznajk/KMu4roB4rJCmmLAxNu2MaV7hWiOBBg3Vlexi6xs88M8KF5TZLDZv5Wo9PFxs8O1YgmzT5qWdG0DWBcVPijqFrvLSviO2HG5ooK4+nmKHz4ycGads+AthXSjFT6ZIwdV7YV8TUBBOl1Ia0zXslpURKda4/zraakPsba9X28kKIP0PUqPZXtz6s3evfeX6MhKnzj96a2emhKNuk1vVoOh4aMJKLU+u4hBIMQ1tbPRBcKXdw/ZCVlnPHGcWYoa/flKYsnb5MDEMXjBVU5/ndyvYC6j2PlbZLNm4yUYr2uA1kYyS2GPTETf2BAqeO49Oyvbt+X7XrUm27dJ2Audq9pYrGTV0FTpvIJ0wE0apcKmawrz/Fqakiw7koeBJCrF8P7lfSMu4YODVtjzcurvLGxdV7et+Vz9heQL27vemQ2YTFqakiR4bSXCm3afQ85hpdnh7Lo9/w/oehpNZx1wuHGLqmAqcnyEK9Ry5h0vF8fCk50J8iYen0pWN86egAx0ey9309sL2A710q8+0LK1RuKjiiPD4e+CwX0R3krwNHiRrVHgH+eynlv92mse1K2bjJH3p2hH/54Tx/5Q8epZC6Y1srZZd752qFNy6WEQKajs/XzyzTn4lRSJk8P1lc/77BTJyFem/TQhG3I4Tg2fGH0rdZ2UbVjkvH8fnwWh2J5CeeHuFzE4UdG0+t4/L+tRpSwtPjuTsec7mESdzUcYMAS9eYrXYZySc23OAp96bnBjh+wEA2xsGBDKOFBLPVLtm4SS5p0nZ8qm2XgWxs21cSK20Xf60IQbXjqrSee+T6IW9dqeAHkslSkkOD27drYKHeZbUVBWWaEBji1sDok4Umy02bhKXzhf0ltZLwhGn2PE7P1Vlpu4zlEszXbV452Lel56x3PRwvCrZX2w6lB1i5UnbeAwdPa+l6X5VSngSe6IDpZn/61X38+ruz/PIbV/grf/DoTg9HeUDfv7zK//XGVTquTzpm8PqRQapdl/5MjLazsY/L8ZEshwfTGLqqnvSkGczG+d7FVT6aq5NLmHzt9CInRrI7Vomu4/pcbzHVcQK4w/1gzNB55WCJpu3z7nQVKaHrBhwZemK3nj4055ablNsupiYwNHjrchVNgK4LPr+vxHszNTw/ZKlp8+K+4t2f8D4MZeOsNG2EEKqS631w/GA96NysvPyDmqt1+c75VWaqHWptdz3l8sx8A4lcX428/m/aXkAgJRoqeHqSLNRtlls2iw2bH0xX8InSnadKyQfe01ZKWxRSJo4fqlT+x9hW15ffF0K8IKV8Z1tG85g4NJjhp58e4de+P82ffnUf/Rk1c/A4mi536bgBQQhHh7M8PZ4jael0nGB9n8ONVOD0ZHKDkEIqRjFlEUhJKWWxk/1xh3MJ2o5PGML4JsfhzYQQaGulbwFC1dz3gWTjJoPZGEsNGz+UXKt2ySVMSukou+D66/owXt+EpfPS/tK2P++TLhM3OTSYptnz2d+/fVuupQS59v+RfIKBTByhgR+GfDLfJBM3SccMjg9nmal26EvHMNXnwxNnvJQgHTfpCySa0NCAyytt4qa2HkDfL1PXNmS1KI+nrQZPLwF/XAgxDXQAQbQo9fRWB7bb/YUvH+JrZxb56799lr/9x57b6eEoD+DEcIbzSxkW6j0O9Cc50J8mFTOotB3U7efe4Qchqy2HQwMZCqmooALAUsOm4/pMFJMbboxsL6DWdSmmrIeyOqVrgqNDmxcluZ1M3OTp8RxdJ2DsHgIu5VYHBzLETZ3lps3ZxSbZhMlkKUkmbuAFIVOlJEEoGc0/3P2LXhBSbjvkE9ae3ZvmBSHXql1SlnHXcs5b6cV2O13HIwxDXpgqMpyLk7QM5mtdmo5PzBAYa+l5/lrFvaJK338ivTBZotnzubjSZjAbI5ewcP2QWtelLx3DDyT1nquC5z3ogYInIcSElPIa8OPbPJ7Hxv7+NP/Z64f43373Aj92YpCfenpkp4ek3Kdaz2e+3mWhbvP108tU2lHJ6mrH5chQlhOj2QeeXVIeHwt1m57r03Z8dA0+nm0wXe5GKVuatt70+Lr3Z2p03YB03OCFqSIfXKvRcnxOjGTX9yddq3RZadlMlqINxq4fPvQbrIFM/I4pfsqd6ZpgspRiqWHT6nq8vVTlbMbixEiONy6WOdifZigXf+gBzen5BtW2i2VovHqwb0/uo7m00mZ+rTdawtIfaan/xXqPX/3uVWodj8m+JP/lHzjKmfkG787UmK11+YmTwxiawPEDPpytI2VU8GMn90kqD8eFlRbvTFf5eK5OXyrO56YKTBaTLNRsek5Axw2ia3va2rb33/EDmj2fYspSe1d3sQddefqXwOeklDNCiN+UUv7h7RzU4+LPvX6ANy6u8l/8xkcUktaWNxIqj9ZMpYuQUO04OH5IteuSi5vUex4/uFrhyFCWP/HyJD0nYKXlMJJPsL8/vdPDVraZZWgYukbc0pipdOm6IaW0SShBiGhPVBBK3r9Wo237NHseEji31KTZ8whCialrLNZtBjJx/CDkwnLUSLnerQGCc0tNRvNxjg/nqfVcJopJRu4j332lZXNlNUoPOjigjsGH5cpqm699vMDvX62y3LQxdcFstcvJsajwS88L7vIMW+f60WZyPwwJH+I+Gi8IOTPfIJRwYiT70MrpP4jrKztC8MhvINuOFzVCrXcpd2y+e2GVTxaavDNdpesEfOX9eWodl59+ZgQnCJkpdxiy4zw7lr9roNuyPc4ttUiYOseH779Sm/LodByP33hnlndnqqw0Heptj2RMo+cEUQ9IS2e1ZfP+tTrFpMXx4a2fQ2EoeedqDdsL6MvEVMGpXexB1xlvPOP3b8dAHkemrvGrf+IUk6Ukf/Ifvs3f+/bl9Q8+Zfd7frLAsZEsE4UUSUvD9QMqHQcEdNwQUxN88+wKv/PJMu/P1Lm00l4vSas8OQ4NpPmRowOUkjHScYNs3KCUijGcS1BMxoiZgpbt0ehGgVIxbREzNCaKUfqWrgl0XTCcj6//PROP5qUSls7l1TafLrZ4e7rGdy6u0LajNJD7cXmlQ9v2mS53cPyHfwO/F4Wh5N+cXmShYdPzor2QSIkfSl471MdQLs7R+yjEEa4F3N+5sMpq695LEp8czTFRSvLMWP6h7rNcathU2i61jst8vffQ/p0HcaA/zfGRLM9PFh556e++dIyTYzkKSYuUZfDNcytk4yaWLvDCgOWWzcWlFqfnm/SnLIqpGElLp9K5e7n0a9Uuja4Xvfb38P3Kzql2okwUU9MIQ4kThthuyP7+FKYueGY8j+tHExyOH3Jl9f6u6ZuJniu6vvdcdZ3fzR70yixv8+c9p5iy+M0/+zJfPjbI3/j6OX7ib3+X718u7/SwlHvw1GiOk2M59vcnCUOwfUnM0jkxnGUwY9H1ArJxg+xaA9103FifEb0TKSWrLYeuu33Vn5SHRwhBICXnl5q8daXCW1cqvLCvQC5p0pexKKViaEKAiGbEjw5l+cKBEvmkRS5h8qUjA7x+ZGA9ZU8IwQtTRb5woMTLB/oYzSfIJ0wKSYu+teIDpbUUPtsLWG7atwTl9a67oXfN9aIF2YSJpXLrHwovCPlkrsHVSgdNwEQpzkgxyWg+yVghyVOjufsqId6yo9Lmnh9yaaXFastB3kOxiVTM4PBg5qGXMM4nTXRdoGlQTO6uPTuaJhjJJ8jvwLgKqRg/cmwAU4fpSgeBBCF59VA/J0fzJAydTNLEDwJipk42YRC3DISA8l369pRSMYSIVruvT7Aou9NIPkE2YdLquQRSkjB1JvuS5JImk6VU1Jh8NGolkU+Z21Il09A1To7mGMrFOT5yf/tela1rO/49X6cf9Ox9RgjRJFqBSqz9GT4rGLGn3vVM3OTv/wfP881Pl/mr//oTfuFXf8C/+/wY/9PPPrWrUiGUjWYqbd68VKVl+wghSFka2ZhJEEqmSikODKTpz8Y5lLBIx3Umi6l7Kk96caXNtUoXXRN84UDptsdAGEqVtrELOF7AmbkmH801aDs+QWDz3kyNnzw5EgVWoeStKxWQMFZKrFfX/OLh/ts+p6YJUmsz5l8+PshYIUHM1Dk6lMHxQ+KmjpSSd6ejFI1CyuL5yQJBKKl0HD6ebQCf9Xk6PJhhopjE0jWEEIShRAgeuFyucqszcw0ul9vUOh7FlMmpySLD+QSDmTjVjsfQ2v7HIJS0bZ903LhtSlkYSlIxnWzCpNJ2mKu5dJyAqb7Urkm7zMRNXj3Yh5TcsYHvXmQ7PuW2i5SSs4tN/uMv7kcXGqOFJs2eSyEZww0kK02HhKHz7FiO3/p4gY4T8PKB0nqa582GcnEKKRMNgaGrc3c300SUQusj0BCYusbPPz9OKATXKl2qHZeX9hf5ky9P0ur569f7uym3HWYqHQYyccaLtxafGcjGGbjPQEzdS2xd1/V5+2qFMOSertMPFDxJKVVEsIkfOTbIKwf7+D9/7yJ/91uXuVru8P/+Ry/e80mlPFpn5prMVrosNLoYusDzJbqIeufYfogXyChdw9DIxE1sP2C22qOQMu/YuNRe2xcRhBIvCG8JnoJQ8s50lY7jc3Q4q3o97LDzyy2ulNsM5uK0lj1CQs4uNBnMJJgoJckmooAawPbuP20zbuo8e8Nm4uvHg5TgBtGx0nY8vvnpMpW2SyYRrXAKxHozxRt/rt51+eBaHV2LVrj2akW27bbU6qFrGpoWXQNyCYtK28XzJc9Nfvb+fThbo9bxyCdNTk3dWnK40fN4/1oNTQienyzw8WydTxaadN3grpXjwlBGqx1CbKmXDERFDKJ9eLHbNnNXFcI29/Z0lVrHI5SSCUNDShjMxVlq2mgChvNxVprRKpMU0Xu+1Ij+fnGlfdvgCaDZ8zk9Xydm6JyaKuxYPznlzoQQDOfihIHElxJL15gopbha6a5/TyjharlLreNyrdbl1YN96+esH4RMV7prP/dZkHRhqUXXDah1PIZy8S2fg/P1HucWm6RiUQEjVWTiwXi+JFz7uLXvYW+ruqvfZnFT5xd//CjHh3P85//0A/7cP36ff/AnT6keQbtQteuiadGJMpJKcHQoQ38mTiZhcmQww/6+FBdX2qy2HOZqHWKGTtvxuVYV/NDhgdvO1h4ezGDqUVrGZmk+bcenbUcpfctNWwVPO8zxQ/b3pckmDI4PZbha6XJxpY2UcHwkx5eO9HNkKEPb8RkrJLi00iYV09crMQahJJTyvj8ENU1wYiTLR3MNmrbPdLmL44UcHkwzOZDGMvRNj43VlkMQSoJQUu26jFrq+NkOR4ayHBvK0PUSTOSTFJMmQ7lsVEzkhhvcWsdjsdGj2fM2BE/z9R62FxCGkiCQBEgqbYeuGzCaT+CH4V1nM+dqPa6sdoBoNWgr14bTcw16bsBCo7ABYvIAACAASURBVMeXDverVcp7VGk7zFS69GVM2r2AYsrk7atVfuGlDE+P5vjKB/PUux7D+Tj96RilVBSc7utL0XI8Ttwl3WqlZROG0Z6WRs9jIKOCp93qqdEcMUOjP20RMzV6rk/P87H9gJOjOXIJc32fuxeEhBI0JG4QMlvtMV2OzuW4pa1PuOaS5nq11nvZBnA3y00bKaFtRxVjH2VlyidJLmlyZChDx/WZuof2Byp4ekh+8ulhGj2P//orp/k737rEX/jy4Z0eknKT0XwCNwiRUtJzA3LJGK8d6mN/X5rE2mqhWY1mmWaqPSptm4vLHUopi2fHcxiazqXVNoWkycGBDJW2w+XVDsWUxUguQdv1N11Oz8YNBrIxmj1/veiAsnOGc3EuLbc40J8hnzCpdFymyw5Xyx1MQ+NHTwwyvrb/5OxCk4W1zfVJy8DSNd6erhKEISdH8/RnYrh+uHY83f5D7HpFvk8WooznjuOTtnSQMNmX5PhI7vbjzScot10MXdD/APtiah2Xes9jNJ9Q6Vo3GMol+LETQ3zjkyU+XmjQdgIGsnE+XWzQdjx++OggmiaimygvIGHqNG2PbNyk2nH5dO297M9GhUeCMMT2gqgfmKkxWUzdMY1bSsnl1TZn5uvsW9uUvhWmrtEjwNQ0FTjdB10T1Lou5ZaHkNFe2OlKB9sLmK11WW05+KFkMBejZfss1G3296f4mWdHcPzwrgUuxgpJGl2PmKnvur1mymfqXZevvD9H1/XpeQETxSTnl9u8cbFMzNAYyyeYLKV4ajTLfL1HfzqGAN6ZrtHseRvO9Rv3qR4fzjJRTJK0jG05LyeKSbpOQDZhkFFZTluyWRrl7ahX+iH6hZcmeGe6yt/+5kVeO9SnukrvMs9N5Pmlb3nUux71ro/GEvWuw1RfitcODtCXsUhbOm1DQChpdH1sL5ox+urpJaQU5JMGl5ajD8xr1Wg2eqXR462eh6FrPDOe49jwxhthIQRP3yGtQ3m0qh2XhGlwcaXFUqPHxZUW05UOg5k4cVOj3HLoOgFeEHI91hBrxSMaPQ9vbeax2nHJJ01+cLWC44VMlJIcHry1Ots3P13m984t4/ohpbRFwjQ4NpxlX3+KoWz8rkUJ0jFjvZEvRCun8/UepZR11w32jh/wwWyNMIxSjfZiKdzrqzE3v15xXWO52ePNS2Vs1+fScovpShvL1Fmo2dS6HuOFJMmYzv6+9PoxABvLaWdiBkcGM/zm+3N8NNtgX1+KHzk2eNdAtdJ2+GShQcv2afb8O6YG34tnx/NUOg4FdYN+XxZqXT6crdF2o1TdlYbNqakis7UuGoJDA2m6XsCh/gzvzNToOB5xU2N/f/qeVp97bkAyZjBWSKxnpIRhtLfK9gKODWdVqv8uIICvnVlkteMBsNqy+aXvXMIQgiND2fXzORM3OToUXbNtL6DZi77f1AWHh3JYurbhOiOEuK/CM3fTl47x6qGHW1xGuZU6Qx+yv/aHTvDuTJW/+Osf8bU//5q6KO4ibhDS6Lq07IAA+Hi+SbnrUUrF+OanK4zlE/RlYrx9pUoqbqxXR+o6ftT41JP84EoV2w8pdxz2l5I4viSQkqWGDUIwkIndEjxtFyklF1fauH6UDqSKkzyYTMzg7EKdMwt1Pllo0XICkNBzOxSTJr/10QIHB9LEDB1DE+gaHBvOkYoZxAyNvrXVprFCAi8I1/cpteyotPn5pRahlKy2e/z2h4vMVLu4gUQIyQk9y+f39/HseH7DB+xCvcf5pRaFlMUzY7k7zlCenm/Q6Hpcq3R57VDfPacI79W1iNPzDZq96PX64uH+9cDnX300z9/6xnmaTvT+CTfkw9k6pqHRGfR4ZiJHy/bouj6TfSmmSimSloHtBVyrdMknTUbyCYZzcWarPTq2H+1t6G4sSe0HIR/M1uk4Pk+N5uhbWz1MWAZBKElYBklL59JKm2zCeOAgyjI01eT7AczXbDruZ9W2PllqY/vXOLfQZLIvxauH+vjCYJZUTKdlezR7Hm4+OmauV1U8OZojvckNclSAokEYQrPnrRedqXTc6DODqP/gvVRau379d7yQQ4Pq+r/dvDCkvhYIAZxf6bLUdEhYOoYOs9UcBwcyuEHI+aUms9Ue+aRJNhFNpBq6IGUZtB2fD2frjBUS6+f6jRo9lzcvlSmlYry0v3TL1++mZXu8ealMvePxQ0f6Gd5j2wDCUHJhpYUfSI4MZR7ZPk51J/+QZeIm/+sfeZaf/5Xf53/+6qf8Lz93cqeHpKy5utKm2vG4vjXQDaP9JF0nwDI0Lq/14gmkZDATZ7yQpD8dY19fioSp05c2qHQdek7AldU244UECUvnqdEcgqi4wGZ7HMrtqCnvcDa+pQo5qy2Ha2ubV01d48h99KBRPmP7AZdW23w811ifbQYIQrhc7hK3arhewHzDZjAb47nxAkuNHkO5OJoQGJog1AW6JoibOrmEwZmFJplEloV6jyvlNh9cq/HeTA3PD+l5AXFTZySX4KnRHM9N5MklNq4OzNd7BKGk3HKodByKydj6sdJxfM4vt0hZBocH01w/hDarvnd9JrSUjqFrgpih8/xEkUbPW+9LtdfoN6we3vhqvX2lvB44QdSDw/YlQoSkrOhGuey5HBhIU245DKRj+EFIue2y3IxufCeKUZGHQspkf3+KStfl5QN967PUfhDyxoVVTs83mCymWKzb6zdUqZjBzz03ylLTxvFDpssdhICXD5ibFgW5Vumy2OgxUUruaJAUhpLllk3SNO6Yqvq46M/GMAXccCngctmm0ilTbjvUOi6vHPLoT8ew3YChbJxSKkaj6/F751Zo9nxmql3+vRcmkGs9gCxdcHGlQ8f10YUgRG4oVZ6JG5iGhueHFFL39hqutj+7/luGuv5vN4Egbuj0vM9ajrTsIFrpr9l8/ZNF6j2P80stLENDE4KjQxkW6j0WGzZdx6fZc9eu1SaHBzN8+fjgLf/Ot86tcmmlTSijVefBbJyjw/ceBCw3Hc4vtfACyfculfkjp8a37TW4brrcodJx2N+Xvm3xmZ2y1LSZq0ap9AlL50D/o6lmqoKnR+DFfUX+zGv7+ZU3rvCjxwd5/cjATg9pz5NS8t1LFdrOxl5M2bhOKR1bS8Gy6Dg+GoK4oTFeSDBX77HScjg5liVhmiw1bC622xwaSJOKGcTNaJP/Fw/3I+GW3g+NrseH1+pAdGO7lRM9GTPQNAhDSK99EM/Xeyw3bSaLyYfeJ+ZJ8cG1OhdX2tjext4OpgZJSycbj/ZBpSyd1ZbDB9dqjJeSCE2AlKy2opWFmUqXI0MZAgnjhSTVjkvH9jk9F60M6UKgmTrjxQSvHx2kkDCJWQYJ89bL8Eg+Qdv2qa1V1sslLF6YKiCE4Gq5Q7XtUsWlL21xcjTPctOO+vbcEIwHoeTtq1VcP6Q/E+OZtRS9XNJ8Im5yH9T116uQsjZMXozkb81312AtxdHn3ek6Q7k42YRJvedR77pUOx59aYvVtkPKMkjGopnjnheQjpns60szXvjsees9Dy8IMXWNes9lOB/H8aPCAcWkxUQpxUQpxZn5BksNey0gvvV3iFYdWkgJF5bbOxo8XVqNWjMIAV84UCJpPd63FdmEQTpuUO3d1KdPShq2x3cvlfFDyWghwVRfCs+XHB/JEoSSVs9nudlb36/28VyD1ZZD3NTWK3X2Z2JMlpJkb1iZips6rxwo4YfynleQktat139l+3Rdn5FcjNoNx4EAdAEdJ6DS9lio2zhewEK9RzZuEgykMDWBLgSfLDbwvJClps3+/jT7BzYWIai0naiSbyJ67zqOz/mlJpdX2xg695yxMpiNkYoZ9NxgvY3GdrK9gEtrE8kXgtYDrY49TKm1HmtS8kgbaqsz7hH5Sz96mG+fX+Ev//OP+cZf/OKONP9TPiNltAIU3tQLLWbovLCviAglLdfn/Wt1um6AE4ScXWqSiZtkYgYXlju0bZ9swuSVQ30cHkqvlTc26XkB1a5LcZMZmvCG5mv30ojtTtIxgy/s78MLw+jCHUrOLTaRMsqrf+WgCp7uheeHeF4YrUgEYOigCUE6YRA3dIppi1DCmfk66Vh0oV5pOZyZb9CXjjFeSlJKxsivBSS6EHz9zCJdL+DZsRyaiBqSfunIAIcGUrx+dJCYqdPoeSTW/m/p2oaAZjSfYDSf4PuXykxXOpyeb2BqgucmC+QSUdBu6FEvKcvQNt3oer1UPkQVBZXI7V6v5yfzGBpcf6mSBpiGQTZu4ATR6kogA8YLScIw5I0LZQwtCoiGsnFOjOYIguicfn+6xtVyh0zcZKKUXJ9FziVMMgmTo8MZTo7m6UvH+P6lMl03oJAy1/fFHhvOUkhZZOLGpjfT0eqWRbXtrjdc3gk9N+Dtq1XKLYf9/an1kv6PM8cLcYKNpYqzFgxkY9TaHkKL0moPD2ZImgaxpEbb9jF0Qd12Waj3ooJBjk+l4+CHIQt1l1LaQkoo3rDXbrHR49PFJrmEyXPjBeLmvaccpWMGLx/owwvCbd1Do0QKSYvZWm/DY8WUSdLSySRMXjvUx0A2Ts/1iZkaz40XmOxLYWgauVSXQtpkttLDCyRDuRivHfisL+B0ucOllTaaBi9MFhnPJ6n3HL53qYIThNQ73s3DuS3bC/ni4X6Slv5QgidL10haOl03IJ+0CELJezM1Oo7PiZHsffek2m65pMkXDpQIQvlIzwMVPD0icVPnb/3RZ/nZv/sm/81XzvB3fuE5VQFpB2mawA8Cghs+600Bhq4zkI6haxqiGXWaThgaV8sdsnGTWsfl8ECamUoXQ4OBTIz+TIyR3Gebf9+drlLveszXerx2yNqwUbyQsnhqNIfjB4wVtl5pL2HpJIhurjQRpf60bX/DrKZyZ4cGM6CBs3a/pCGwDI183OKpsSyHBzJcKbcppWJIKbG9gJhhoIuoitmxoSyHBjIkLJ3LK23+9UfzaytBFh/PNxjMxqPvGcysr/5AdCM9W+1yfqkFwKmpwi2TKgcH05xbajKYiVPpuHhByHgxSTFlYeraHYsQWEbUrb7Sce+ritBe1bJ9dAHX55mFgGRMY7KUZKovxSfzTeqdgNl6Bw2NtuOx3LSxdI2m7VFIxZBEF5SW49NxAxBRqt714ElKGMjEScd08kmTq6vt9VWrG3uI6Zq4a5ny58bz6w2Xd0q57dCXtpBSMnAPxU4eB9WOi3PTKnQqHoseExIpBcWkyU+cHKLrhVxZbfPeTC2aPJGQT8ZoOT4xQ+PQQIbfPbtMwtKJGRrPTRQ27HteqEdly2sdj47r3/frFzd1tdfpIZESOu7GSae+jAUIHD9kuenwysE+Xj/Sz4ezDWw3YKXpUEpbfPFQP0EY8r1LZYSEF/eXSN2wOthb6yMUhlGJ88NDGWwvSaPn4wWSVNzg0kqbfCLKErhdCl/X9fl4ro6UUQPm7binuJmmCV7cV6TnBWTiJvWuu14UY7Fh73jwBOzIarcKnh6hp0Zz/KUfO8zf/Pp5xr6e4K/8gaMqgNpBXSfgxktjCPQcjzMLDWQImq4RN3WqHZfUWorcs+N5xgpJLq92CEKJEwR03QA/lFxvBXP9htbQNTbb0nS3Rpk3k1Ly8VyDRs/j6HDmthvIhRCcmizQcQOyKo3jnuUSJk37s5m+IJAkEhqmIeg6AU3bo+1EvX2khAP9aV49VGSl6SKlJGVqfPfCKrYXlbRtdD16bkAmHnJsOIftB5i6xkA2mhWUMurRZOjahhUhd5PVoYFMnC8fG+Jyuc1AJrb+IXqvhWcepFv9XjXVl8K/YcGh50EyhBMjOV472Ee96+MGAR3bJx0zmSymaNo+YRAShhLXD3jrShlT1zk8kCZlGeST5oYmqBeWW+uFAUIpWW7axE2NUsrCD0POLTU5Mpih3vVIWHe+MRZC7PiNc38mRi5hkY6ZPDX6cArjPGpLTXvDpJogeq8SMYOCYSKloD8b553pGsWkwXS5w0guQS4ZVdd8/1qN0XwSx48mOvYPpOk6PstNG+2mz/uxQoKW7ZFNmKQe83THJ40mIG5C54Z6L0v1LkLo+FLy3nSFY8NZjg1n+cKBEnO1LpdXOlxebXN2obl2Xsc4Mpy5ZVLsQH9UrTNh6uvp9XFT57VD/fz+pQq/d24FS9cwdY2jwxk+v7+0aQAlEOspaw/zVtLQNTL6Z9UFCymLtuMzsseKU9xIna2P2J/9oQMs1Hv88neusNp0+Ks/c0I1Ndsh5c7GKliBhMWmy+onyxRSJi/u62OqmKKUipG0DPYPpPnDz4+zUO+RihlRpaWuR7Xt4fgBL+4rcrXcQSA4MpimYXtcWm1zsD992wpoN2/o30zb8VltRd3rZ6u9O1bfMnSNXEL17rkfny408G64WwqAatej5Xi4a7OCpyZLLDcddC1a7dE1HU1A0/X5m79zjpWWi2VoDGRiWIbOsxMFXtpfRCBwg4DhXAJL1whDydvTVc4tNZkqpXjlQAmQa8HV5u/rRCm5oUP9bLXLbK3LeCGpVpS20UfX6tyYrBUCQRhwrdahZucoJE0urjgkTI18Mkrle36ywHS5Q8LS6Lg+3zq/SjZm8tRYjh89PkjM0NHWStqfXWiw2LAxdYGpa1xd7dJxfXIJg319aepdj7lqj67jU+14GLrg8/tLDyVAsj2fattlIBvfUgP3uKlvKJv/JFhp9bhx3UkC1bbLyZEMQtNBSupdj2+eW6badunLWMRMnYP9aRJmlLlwvZDA85MFZBjytdNLjBcTvDtT5dWDfeuTpoPZ+C37Ym82V+sShJLxQnJLBYaU++OHkpSpRyvIa2q2BHwMopTLM2uZBfmkiS7g4kqLasdFiGhV8aV9RVJxg8FMfL0i3OHBDJahcXQoS9P2OD3XoJS2GMjEoia8foCUsNJ0GC8lcLyoX9xmwVPC0vncRIG24z+yfY+6Jnh+svBI/q3dTAVPj5gQgr/2M0/Rn47zv3/zAt88t8LPPTfKa4f6ODacZTgXV6tRj0jHuTWvOCSquldpe3w4W+XoYA5dF+STJp+fzGPoguFcnGfGc3SdqAxxw3bpuQHvXK1waaWDpgmOD2dp2VECkKVHPUBudrsN/TdLWVEVq2bPu+9VK+XuZuvRitKN/BCQUGm7vDddRRewry/FUsPB0ODrpxf5eL5Oyw5IWTp+KLEMjbFCkpF8ggP9aSaLSSRRsYFK26XSdnl6LMfF5RbllkvHDjg6lGW8mNzQRPFm3g1pX7WOy3curFJImthecMfgSUqJlKgbrnskN7nuNrsBb15cZbFhM5iJo4no/byw0uGHj0aFf1IxAx1BuevQbbtUAzeqvLgWOF0pt/nGmWVq3ajAx2QpxecmCuiaoNxymSglGMzGqXc9Yqa2vg/TDyRusP1peX4Q8v/9/jUaPY8TI1n+4MnhbX3+x11/+tZrrCfhO+crDGQtel7I8ZEMw7lodcn1JW3b581LZfb1p6l0XZabDomYwcH+FJ8sttBEVFjj+PDdS5DfaLlpc24xSuuVMlod3czVcoe5WpexQpJ9t/ke5f5omqDeDTb9WkBUav7TxQZnF5r82FODGJogYWmkfYOe5xMEIZ/MN3h6LM9yy+bdqzU6rk8YSk6utZ84t9hae55mVKgkZlBImhwejKraWbq2tvfx9hPs+eTGfnXXKl2atseB/vSmVTqV7aGCpx2gaYI//+VDfPn4AH/3W5f4J29f4//5/jQQbSw/MZLlqZEcrx8d4IWp4m1XJJQH5wchi3X79l+XUO14UZW1WNRz5ddtj8+Vu1F38JhOPmGST5qstBwWGz0mS6n1vhBSyvXl9M3yccMw6lq/srY3xvY2v0hDdLy8MFVce051LGy3A6Uk8qaMueuxVNsJOLvYZKHe48Rojq7jcWahTrPnr6dkxk2NVMxgMBsjYepU2w4xQ+Natcvx4Sx9N2zitQyNqVKKetdjMBdjod7lzLxHPmny/GThlvf3wnKLa5UupbTF02N5PpytY3sBMxWPVw/13fZ3sr2Ad6druEHA02P5TfuLPM78IKpilU2Y27a/7+YiARBdB5qO5PRsk0bRZbiQJB3TmSgkyScspvpS/OixGE3HY3q1w0rLxg8lz47n0TRBzw04t9BirtZlutrhUH+GLx7qpy8T4/P7SzTWik0YukZfOoapC9wg5Mpqh0zceCh7F9uOT2stTXW5dftr4F6VjRvogg2pewAeMN900YBLKx2eGS0ggbFiAg1460qVetfl2fEC8/UuAkHLia4TIZKkqRMK1lJ27+06fuNn/53uA6bLURr51XJbBU/bJGHqtxwD10nA9eHMQoNcwuRb51YYysbpuNFk2sH+JPO6xkg+ge0F+IFkptZhsW4zU+nwwWyGY8NZkpZBs+dF1TktnU8WmhwezPAjxwYfaNKkaXtcWG7RtD1WWw5fOtKv7hkeEhU87aATIzl+6d9/nq7rc3ahyaeLTc4uNjkz3+T/fnOaX37jCn1pi588OczPPDvC5yZuvblSHoyuidt+GAmii6Pjhay0e0xaKWpdBy8ICcIqfhCStnRmql3ajs/x0SxJ02CylOLsYhPXDxnMJehLW4RhVA3GD0I6js+VcgdD04ibGh/PNbiw3GK8kOSFZ0fuOmb13j8cLx0ooW1ysyQEaELS7Pq0ez6LDQdEiOdH5Wr7MzEGsjF+6tlRToxkWa47nF1qstJ0WKj3KKZiuEHIcC5OIWkSN3XySYvXDvdzciyHrglOzzUAqHc9vEBiGQLbC/h4rkEo5Xop/UrbJQhCNE0wVUqRjus8Pbb5SiVEs6LXA/KVpvPEBU+fLrZYbtromuDlg6UN+4oe1MXF5m2/dj2V0zQcfD+Mer/lE5wYybDY6DFVSpKLm7x5cZVkzODKapvFhs3x4SyBlDR6HtmYwb5SkuFCgkrbQQIjuQTz9R4xU6MvFUMSTbZc3z/UdX20tb1NQSj5dLGJG4QcH84+8IpULmHy4r4is9XuE5dytx1sL7xlJfpGIdGG/48X6mQTFklTZ6lhc2m1w/szNb54uI8fPjpAKmbwrz5aoGv7DGVjnJoqoWuCQMpNb7xcP8QNwvVyy7YXkE+YPDOeJwjlHbMOBrNxFuq9u6YAKvdOSrA06N2mUGnAWulyLer15wchrZ5HGIZcq/YQwNVKZ70S3lguCRKWGjZXVrs0ej5//KUJhnNxTo7meOtKBX3teebrvfU2JksNm/PLLQpJk5OjmzdMvz6xaukaXdfnymqHgYzPbLW3IeV7MzOVDteq3fWMic34QYgmhMpiuIEKnnaBpGVwaqrIqani+mMdx+fb51f5N6cX+KfvzPJrvz/DWCHBTz8zwisH+jgxkt11zcoeJ0IIikmDcte/5WvXPzcDCZWWS+AFIAQCwbVqB9f3CaRkte1RSJqsdhwOD2RBwGAmRjoepdhdnwFcbvR4f7ZOueUQM3SKqf+fvfsOsizLE/r+vf4+79JXZlaWr/ZdPd3b3WPWsrDajYUVBCwCJEAilj9EsJICCEn8oxWKUICEQFIgFItCQiKWVQhh1rACdoadnR7TPdN+2pTPSu+ef+/ed/3RH/dldtmsqiyTVZnnE9PRXS8zq07Nu+/e8zvnd34/k7ytU+/7mLpGPmOAorA0DMaO1bIIFGxD3XPAtD2xPGiT5kfhmxc3bztZihIgSSdLCL6oYU26I1HJmfzCy0fYckLW2z7GsKN8zoo4O1lgvGATxGJnEr1dSMQLYza6Pj0vxA1iYpFwYjS/8/Wtnr9TzShraQiR9vIwDY3X5iq03JCxu5SkreZMKjkTP4yZrh68Q73x8A1LhqmJD8PkLoefTRUSkaS7zF2PMdeiYOt86+ImKgwbH6uoispYyWa8YBFEgjhOG2Vv9co0nYBqwWK1NeDiRo+sqZMd9g5TlPQS2+x5ZAxtWLJc8Hvnt8hZOn/slSP0hn1gen6Epiq8tEvwvBtFUfjqqdG7f+MhNVowuVth/zCK+WS1Q9E2WWq6lDI6V+suuqrwz95fQVEV/tCzY/xwuU3TCZmrZVmo93n+SBlL10gSwXzDAeDIsKz5J6sdolhwZqKAril8utKl66XPkbMTu6f7PTtV5MxEQWap7IEQgtVhEZep645NzG/17xg4Qfp5napkGMnqTFXSRsnL7QEFS6frRVze7JOzNH7tnQVqeYvpis0rs2Xm6w6DMGGskDY+3065e/14lW9d3GIQxlSHadmWrvLJSofz6z3ydtoANmNoXBteOzOVLB8stel5IWcnixwpZ3h5tkwQJTSdgI+WW4wVrVsWWhw/SoM1RcGLYnRV5VrduW3wtNnz+OFyB1NXeW2u+kBpxOsdj6YTcLSWveeiR0+qp3v0B1jO0vm5Fyf5uRcn6Xkhv/vZBr/x4Sq/+q2r/P1vXgHSBp61vDlsEqagDhsqbldgMTSVI+UMJ8fy/MixKudmyw9lhfaguNrYPWVFAINIEDoRhYwBQUQYq1zZjHCDmFAIgjDh1HieIErouREjRQvbUJks2Sw1XX7/4ibvLzQBhZdnyvT9iNGCxbOTBUxN4VrDZbqSQQixU7L687UuRdvY9RyUH8VoinLbw97Xl79+efbgpWztVZIIvCi+JY3y/Wstbg2h2XUCpZD2evnXn26CApc20nMNBTttjDpdyXGkZDPfcFioO+QtnZNjedwg4uJ6jw8WW3yw1ObcTJlnpkqcHCvs/N7VnImhqyRC8NxU6YaCMumE++63bV1Tef5IkaWmixfEB650/dmJAstWWs3uYZ0JGs3tvmpv6RpukBAlCRvtAd9wQ3QF3DAhEWlPLV1VqeUtxgomKApNx+OV2bT/y2tzVVpuyD/87jxemPDVkyMsNkOaTkgsEipZk3euNogSsVNtzw3Sap5rXY9azmKpOSAWgs2uTLd7VP7NZxt3/R4vSu/Bg8Cj54W0HA1b1+h5EUEU883P13lvvsFKx0NTFK7V+xRsg/58g3OzTSkifwAAIABJREFUFbb6PvNbDlGc8OFiG1VJ0ynL2bQUtKoq+FHM1S1nZ3Hg3OyNh/RbTnBDRUYZOO3NWsfj89Uvdp23WwT40e69lnQFVpoDkjhD020zW83x42fGWO0MaDsB9b5Py1XY6gdMFjN8uCQ4Vsvxsy9OYuoqKsrOvfzfnt/g659tkLd0Xp4p873LdbxIcGIsTxgnrLYHCNLqnIamcnXLIYgT6n2f7rCJ73rH40g5w2w1x0bXS89L6hpXt/ocH83fcJ/8wbUmHyy2URQ4Ws1Szpp33LXc6vkIkWbidL1wz/dbL4z5dLWDEOmO+vWbBbdT7/u03YAj5ewTeXbrQARPiqL8HeBV4H0hxC/v93getoJt8EdfmeaPvjJN2w34ZCVN8dvoplF8z48QYnhAnC/+7YcJ7y+2+K2PVxECLF3lS0crvHm8xpsnajw3VbrlogyihK2+z0bXY7Prs9VPex1ZuspowWK6kuVIOfPUrxoIIYjuccU6EtBxQ5Ssjq4phIkgTNKKAr2BT9cz2ezATDXDzz4/iaLAVt/n4+U2v/nhGl4YUcoalLMmXzk5QsE2MHWV54+UqeUsyjkTU1NoOAFxkhAngqJt0LypGuC2ja7HJysddE3lR+aqt7yH1zeqvLlp5VLTpeEEzNWyh6pRsxCC9xZbdNyQqXKGZ6e+WMkdhPffQFaQrt59vt5BUxRUFao5m6ypYeoqJ0Zz5G2dtY6X7jgaKq4fcXGjR9sLaXQ9vDDmwkaPkYJF34+I4oTPVrvkLJ2vnqilCyLDCZEQAieIyRjaPU+SLq732RhOst88oT/QZzZJBItNF0NX79p/6HGwDY2TY7dPMdmrb5xfvePXggQMRcHSVZIgwYsFgReikgaqSZIgEhCKQEEgUFCBS5sOKCpnJvK8fKTMd6806HlpL5dECMpZk/ktBwFUsya2rhELQSwEz0+W+HilQ97Sma1k0VSFWsGk7QYYWpreud+lyvdKCMFyKy3UMlPNPFEpydPVu6e+bd8xlEgQ6QJQMNT089r3Aj5f75MxNPxhincPWM46PDddpueFLLdcPl3tEMYJU+UMowWLxZbLIIip5kxenqnQHURUct5Oo+vrXd7sca3uomsKb564MW01SQTtQUjO0uRi6T24/tK7/iqsZHe/DmKR7nxv9v20nH0ieGaqSMbQeL/ep+OGGBogdAahQXcQ0OqHOH7MuaNlRnI2WbNHMaPz9c82WGyl5+QSIVhopMHS106N8MbxGp+sdMiYGp+sdDg5lsePYi5u9KnnTTQFxksZpssZLm/2EAJOjRXo+zFr7QEtJ2C963FuprKTrZSz0rkMAl6cKXNiNH/H58pkyeadq02EELx2bPeAZze6mi72hvfQmy6IEj5ebpMk0BmEO83Db+ZHMR8uttnq+ZyZKHByLP/Y7iVP9wwYUBTlFSAvhPiaoih/X1GU14QQP9jvcT0q5azJV0+N7HpY/GadQcj355t870qD711t8Ld/9yL8bvq1kbxJ1tRRFWgPQtruvXW2Lto6E6W0zGopkwYDlp42Arzdtatw44u3+x4xvBml/y1IBAiG/94ODoffIxh+7w2//uJ7wjjNHw/jhCBKV4R//ZfeuO7Pv/8P2M6kJ07QNCUtZSzg6qbDgjZgteszVc5ypGyjqyqOH5ExVWKhcqyW52efn6TpBvT9ECNSubTZp9lPK3ONlyy6gwDb0Dg9VkAoaQ+Q22k6Qfp3jBJ63vYKdUTfjxjJWcwOK7BpqnLDalIQJTs7Ul4Y88bxx3PeYaHh0HQCjo/kKWX3ZwckTgSd4bXdcm8MSrdT5O6HqUIYp4FXHCeYukqYDChZOstNg89XO1imxljBYr3j8b2rDTJ6WpXPDSLMYRCy2h5weaNPywnIWvpOr6fRvEk5Z+6sTL51qc4PVzrpA3qywMmxwh0rb23bfhiq6oOvSs83HOa30lQRS1cP5G7mJ6t3PvME6RmHmYrNRsdnywmJSFefJ0sGESqOFxIngjARjBdMRgo2G12P/iDk4nqfyVKLSs4giBJyls7p8TyXNx2WOwNcL03F+/kXJ7hSH3ByLMcrcxVemi1jaCqaquD4IUGY4Poxn6x0iZO071ztKXwv1jrezr1IUdiXkvtxIlhtD8iY2g3Xcxjc26qaQnr2MW9rmIZG3fHxowQBw8wPhTASuEGMpsCF9R7nZsp8vNJJe8YBJ8cKlIaFh06PFTCGvd9yls6p8TxXt/qEcUJ3EN5QMKg/7OgdRgnvL7Rwg5iTY/mdc7frHQ/LUPnyiRG5I3UXk6UMynDJ4/py35+vt3f9OQEEoUCItM9jU1N5b75BMWdS74cIkWZ6JwLCWNAeRJhawqerbZpOwFjRouNVqGRMgighb+pMFG1G8hbzdRfHD+kNIk6PFzg9XuC9hSZ9PyJjakyUbPwoYbHp0nLSBfWNjsdo3mQQJbyglpgu2Xyy3GGhkabjjRfsneDp3EwZVUkr+Z4eT7Megii5bdP11bZHy03nHO9da/KluSp9P2KiaN/XtaVrKq8fq9L1QkZyN96zLm/2qPcDTozmGS1YaQaVkp4+19U7V6Kt9wOWWwPm6w4tN8DStbue8XpYnvrgCXiDnVCArwNvAgc2eNqLUsbgp58d56efHQfS7f535ptc2eqzPFztSkRa6W80b+0chB8r2IwV0v5DgzBms+ez1HRZbg3Y6HpsdD3Wuz4r7QF+mAYrfhhzy6NH7PrL9DUh0gaC6f9Q1TTcUhVl54N0/a+3mw2qahqYqdvfM/x5Q0v78Ww3mstZN650eMHtErXuLAGUhJ0HoWGoWGq6C+X7MaYuWGq5/P1vXmaiaPPmiRrusCxp0dI5NpLl13+wSGsQkMRwdrKQHsBU0pv2xfU+nUGE48dMP5O9YXW/70d8utLBMjRsXaXhBBi6Qi1nMZK3CKKEd+abxLHY2VW53cRaVxWyw1SgwmNqouuFMZc2+gBESY/X7rJV/6jomsrJsTybPZ+5m26u59c69/V7qaTXg6pAlCToqkLO0smZGrqqstX3eHs+JkhAU9OUvmsNh0rOxBpW2zNUlThO6AcxTTeg6YacHMvxw5UuhpYGnLW8xZFKlp88M8b59S6OH7LQSA8Sr7QHt32PN3vppLSUMZgoWlzZ7DFasLFu81C8H9p1iw03N/o8KDLG7n+vRj/ENFSuX8yPBGx0fEo5i4ypkzN14kSw0fEYhAlNNyAMBWNFk29dhK+crA13pxUMXSNn61SzJpsdj7WOx7XmgDMTBYIo4RufbTBTy/LM8LxL203PyDl+jK6pCAFdL3rkwVMYJ7x7rYUXxrwwXXoogfO9VpF7lC5v9llqukB63mS7HPSny427/qxG+hzTdRVNSXeVnSAGkebOW8NeUGkjVJUgSbBMnc1+AJs9Gv10waacNTg3W6GUMdjoeiy3BkyVbZJE8PFye2fSOl25sRHqqbE8mpKei11opH+HlXZa8dUZFpnxwzTFVFPl7tPd3K4Yx1bn7qmxEaAiUAA/jFhoOoR1h2Y/IAE0AaaRLm6WMwZuEKOrCoauoippcG0ZGj96epQwTsgYOqNFi9X2gM5gmOkSJ/T8kGSYOhfGgtG8yXzdoeOGdNwARVG41nCoOz5hlFZ2jITgk9UOiw2HxabDUnvAf/DGUc5OFtOAyAlpOSHjRZtrDYdGP2C6mrnlfJ2pq+iqQhgLDE3hvYVmuiPkhjdkcNwL27i18bcXxlyrp9fwla0+o8Nm8K/NVekMQsZ3Od9bzZqYelr863Gnph+E4KkMXB3+dwd4bh/H8lSo5Ex+5vmJ+/656UqWV2YPRnO0262w3I4B5DJ6mpaDQpwkmIbGsWoWRYFEpE1Qg1Bgmyqamq4yrbYHjBYsShmTStZgqTlgvGTT7IcYqkIiYLpik7MMKlmD8+s9EiEwtVvTopaaLj0vYr3rEUYJ5azJSMHaqcgVRTHxsFScH92l5PmxKq4fU8w8no++oanYhoYX7v+5m7mR3G0Djp5/90BaIZ0wKYCmM0x5VMgYKqWMybFajuNjWd5d6GBqCkGUoCjpucS8paMpCgVbZ7qc5exEEcdPJ1amoVLLmWQsnZJtcqRs43gR610fL0xQUFhquTw/VeLj5Q4vTpvYpspM5fara0tNN60SGfp0vZCMqdP3I7pe9EDNuI/WslhGuhBRPaCFao6PFLjSaN7x65YBmqJiWjqmHuJHaQBtGhqaplLJaJSzFoMgoZY3aLoBiQDTUPBjgRcmhJFgvJyuGk8UbeZqOaIwASGo5S0qOQtVhbrjU7IN1toeI3mL8aJN3jY4M1Fgtpolb+uM5K3HkkLZGYQ7E/L1jvdQgqfxoo0yw7AYyv5XiLt+Qa/j7/69OV1BUUGgUM0aPDdZZLOfBjmapjBMiECJErKWRiVrMFHMMJq3eGm2jAIUbZNKVufHTn9RSvrmhrmWrjFXyxEmCS8NS9/vjMHSeWE6vf/7UXr2ZTvj4JmpIgv1tL2BTNvbu5mRe0sLzps6hqZiqGmBp6yRLpoZikLG0Dg1mme0mJ5XNFQ1bZpbtJkqZ/iJM6P4sUBTYa3t4UcJHTfkp5+bYLXtUczoNJ0AXVWp5AxsQ+flmRJukFDOmLxytMxKa0DXCzk+mk8bsQ+vQx2FvKWTt3V0VUMFLmz0ODtZHB47SPlxTKOfZmNs9XzO3jQ1PDWWxzp3hChOGC/avH01vUfefCRgr0xNJW/r9L2IkfwXz5a8pe9UnryTjKnx8y8dYbXtEid3ztZ5FA5C8NQBtsPfInDDXquiKL8E/BLA7Ozs4x2Z9MRSVZWfOlvjG+dvXWVUAEPli8o1w2aVBSvdVk8bEWZZ6Xpc3uinO3vPjLHa9vh0tUMhY3J6PD/crk/L3h4fyRELQTGjc6SUoZKzODn2xSHOc7NlZqvZ205MR/IWa520io+w0glH+aYiAs8dKdJ2Q+Zqu6dyGZpKKftguxD3Q1MVXj9exQ3iB5q8P0p/7o2j/L23Fm55XVdgqmgwiGCqbHNupsxK28ONYo6Us+gKGHq6aviTZ8cYhDFnxuus9zwmCjbVvMl0JcOZ8S4z1Qx5y+CPnJtCQcENYuYbDmcmirw4XcY2NPwo5vREng8W24x7IV60Xebc5PR4gVeOVjA1dddysROlDG03pJgxmCjZXFjrkbfTXbEHoSjKY+tgv1/+ys88x9cvvHXbnfHRvM7XTo8ShoKMpVG0NTZ7PsWMwYmRPG6UVtX7c1+ZY7Hh8oP5Bn0/pudFlHM6CAVdVTk1XuDsTY1Sf/7cEc7NVdjspRPggq2z2fW5sN5D05SdCUQpY/DmiRpxIh7recXtfnaDMH6owdpYYX+DpvT+q5I1b+yn9cs/dYpvXXnnlu8fL+j85NlxTE2j64W0B2mFs1/80jTvLrRZbrkkQrDW8Wk6A5r9iPGyzZ94ZZofPztOECeYmspya8BSKy0NvVv6+KtzFTqDkGrWvG1hoG3bi2jbiraxE1hJe/cjx0bIGHBzVrcB2JaKrqjMjWY4MZpWPp4bybHW8rjWdEiEgqYIfursOH/pp05jmxrrnQE/uNailEl7+uUsfaf5OaTpfYsNl0rO4MRoHkvXKGZ0xgo2p8bTdLYzEwWmylk6bshSy6Wkm/zUM+OowzLl9b7PcnvAVClD1lRpOgHnZsp0BhGGnhatApir5XYydCaKGdzRmPWOx9HbLC4qisLR6+YVL86U6HnRHRfw7peqKvzIXPWBGoJPlR9/2q8iHlad130yPPP0F4UQf1FRlP8F+IdCiO/f7ntHRkbE3NzcbX+fOBE7qWLSwXbt2jXudB1Ih8vN10KciJ3UUOnwuP462D5XKc+KHD6P4tkg7ylPn92ug+1z2Qc1fVn6wnvvvSeEELdduXjqd56EEO8riuIpivIW8OGdAieAubk53n333Vte/2gprdaRtTTePF57oir/SA/fq6++etvrQDp8rr8WPl3tsNb2sA2NN0/U5OT5ENm+DgZBzNtXG8SJ4NR4/oYVV+nge9jPhksbPRYaaZXKN4/X7jldXNpfd7oO2m7AewsthIAXpktPRMqp9OgoivL+nb721AdPAA9annw7n3u7cIIm50ySdOg4wwpWXhgTxvKg9WE0COOdXP7+PZyFk6TdbJ+nDKO0oJIMnp5uThDv9N3q+xHj+zscaR8diODpQT0zWWSx6TJWtORq8yHkhTF/9n//PtWcyd/7U6/seqZEOrjOTBS4Vneo5c2ntn+O9GCqw7MLXhhzYvTh9pGSDp/T4wWuqum52LsdfpeefJNFm74XESXJToEO6XCSn2bS6nOVA1pBSrq73/54jXfm0woy37lS52unRvd5RNJ+KGUMXhoeqJUOr4fdfFc6vPKWzovT8p5yUKiqwpmJwn4PQ3oCyD1k6dD7zuU6BVvH1FW+eWFrv4cjSZIkSZIkPaHkzpN06L270OSrJ0douyFvX717g0RJkiRJkiTpcJI7T9Kh5oUxy60Bp8cLvDxb5sJ6jyBK7v6DkiRJkiRJ0qEjgyfpUFtouGkT29EcZ8YLRIlgvu7s97AkSZIkSZKkJ5AMnqRDbb7eB+D4SH7nIOj59e5+DkmSJEmSJEl6QskzT9KhNl93ATg2msPQFDRV4dJGf59HJUmSJEmSJD2JZPAkHWprnQFFW9/pwTFVtllouvs8KkmSJEmSJOlJJNP2pENto+sxXrR3fn20mmOxIc88SZIkSZIkSbeSwZN0qK13fSZK1wVPtSzXGnLnSZIkSZIkSbqVDJ6kQ22jc9POUy1LZxDSccN9HJUkSZIkSZL0JJLBk3RoxYlgq+8zXrR2Xput5gBYaMrUPUmSJEmSJOlGMniSDq1G3ydOBBPX7TzNjWSBtP+TJEmSJEmSJF1PBk/SobXe9QBuSNubrW4HT3LnSZIkSZIkSbqRDJ6kQ2uj6wM3Bk9ZU2e0YLEoy5VLkiRJkiRJNznUwVPPC+kMZGGAwypv6fz4mVGmypkbXp+tZmXwdIgIIWj0fbww3u+hSE+IQRDTdIL9Hob0BIvihEbfJ4yT/R6KtI+8MKbR9xFC7PdQpMfo0DbJbToBHyy2EAJemC7dsPsgHQ5vnqjx5onaLa/PVrO8c7WxDyOS9sP59R4rrQGGrvLlEzUM7VCvKR16Xhjz9nyDOBbMjeQ4OZbf7yFJT6APltp03JCCrfP68VufI9LBF0QJb19tEMWCmWqWMxOF/R6S9Jgc2lnCIIzZXihwA7niLH1htpplrevhR/K6OAy2P/9hlMhVZAk/Sojj9OHgBtE+j0Z6Um3fN1y5Y31ohXFCJO8Vh9Kh3XmaLNq4fkQsBDOVzN1/QDo0ZqtZhICV1oDjo3LV+aA7M1HgWt2hnDXImof2ligNlTIGp8bz9LyIE/LzL93B81NF1jreDU3WpcMlZ+mcmSjQGYQcH83t93Ckx+jQzhRUVeHUuNxilW51tDasuNd0ZfB0COQtneePlPZ7GNIT5GhNToSk3dXyFrW8dfdvlA60mWqWmf0ehPTYHdq0PUm6k+1y5UuyaIQkSZIkSZJ0HRk8SdJNRgsWtqGyKBvlSpIkSZIkSdeRwZMk3URRFGarWRbkzpMkSZIkSZJ0HRk8SdJtzFazMm1PkiRJkiRJuoEMniTpNmaGjXJl4ztJkiRJkiRp2wMFT4qi/Nc3/VpTFOXXHmxIkrT/jlazuEFMvR/s91AkSZIkSZKkJ8SD7jzNKIryXwAoimIB/wy49MCjkqR9NjssV74oU/ckSZIkSZKkoQcNnv5D4IVhAPVbwO8JIf6r3X5AUZQ5RVE2FEX5pqIo/2b42l9VFOXbiqL8mqIoxoO+JkkParaa9nlZbDr7PBJJkiRJkiTpSbGn4ElRlFcURXkFOAf8j8Avku44fWv4+t38rhDix4UQf1BRlDHgJ4QQXwU+Bn7hQV7by99Hkm42XckAsNgY7PNIJEmSJEmSpCeFvsef+9s3/boFPDt8XQA/eZef/wlFUd4iTfO7AHxz+PrXgT8NOA/w2j+5v7+KJN3KNjQmirZM25MkSZIkSZJ27Cl4EkL8xAP8mWvAacAHfgMoAJvDr3WA8vCf7h5fu4GiKL8E/BLA7OzsAwxbOmyO1rLM1/v7PQxJkiRJkiTpCbGn4ElRlP9st68LIf6HXb7mkwZOKIry26TBz5Hhl4tAmzQQmt7jazf/eb8K/CrAq6++etu604MgRtcUDE1Wbpe+cHq8wL/4YAUhBIqi7PdwpH2UJIJBGJM1NXktHGBRnBDECVlzr0kZ0kEjrwnpZn4UA2Dp2j6PRNove40WCnf5544URbn+618BLgM/Nvz1HwDeBn7wAK/dl5X2gO9crvPdKw28ML7fH5cOsNPjeXp+xHrX2++hSPvsg6UW37vS4JOV7t2/WXoqhXHC21ebfPdyg/m6LBQjyWtCulXbDfjO5TrfuVyn5chWJofVXtP2fuUB/syvKYryN0h3n94SQryjKMq3FEX5NrAI/F0hRLDX1+53MNsXfxglOH6EbciVBCl1ajyN8y9u9JksZfZ5NNJ+EULQdkMAmq58WB5UgzDeWUBruQHHyO3ziKT95slrQrpJZxCSJF/8dyVn7u+ApH2x17S9vyaE+FuKovzPpAUibiCE+Mt3+lkhxO8Av3PTa38T+JsP67X7MTeSw49iMoZOVX4IpOuc3g6e1nv82OnRfR6NtF8UReHMRIG1jsdMJbvfw5EekaJtMFvL0h2EnBjN7/dwpCdAwTY4WsvSGYScGJHXhART5czOYtpUWS6qHlZ7TeL9fPjvdx/WQPZL3tL50tEqkG7RLzT6WLrGTFVOkg67as5kJG9xcaO330ORHpPV9gDHj5itZW/IZ5+uZJmWgdOBt71gss0LYxabLqWMwXjR3qdRSftpOwOh64VcWO8xXrQoZ+VC62Gx1hnQ8yKODp8Jhqby0swttcmkQ2avaXu/Nfz3//lwh7O/5usOi420NHXW1KjlrXv+WTeIuLjRJ2dqnBzLy0PlB8Tp8TwXN2XFvcOg64V8tpqeafKjhOePlB7o9/PCmIsbPXRV5exEAVWV94Snzfn1HvWeD0DxpEHGvDWt2/EjLm70KNg6J8d2PfIrPcU+XurQHgS8dWmLHz8zxskxuRN10PW8kN+/sEXHC3lhqsSXT47s95CkJ8Re0/Z+c7evCyH+8N6G8/jU+z5tN2C6kt0557RdbU9RQL/PyntXtxzqPZ86UMtbMgXwgHh2ssg/enuBME5kNcYDTlcVVBWSBEx99/c6ihMWmi62oXHkDqkbS02XzW468a7mTCZKcufiaeKFMWudAa4fU82ZqHe4JK5s9Wn0Axr9gNG8TSlrPN6BSg9dkggWmy6qojBTzaAoCoamsNb28MKYa3WH0YJFKSPf64MsTgRLTZf2IEQFGTxJO/aatvcmsAT8OvAO8FQtqfpRzEdLbYSAziDiS0crAMzVsuRMDUvX7vumWLQN1jseuqaQNTUGQUzXCxnJW2hyxfmp9dJMmf/t2/NcWO898E6E9GTLmjqvzlUZBDFjhd13nefrDgvDXWpbV2+7S10c3kNUFXKWRhgnNJ2AUsaQhWmeUI2+j6YqlLMmn6110RUFIeDF6dIdyxIXbYPNro+hq9imXGA5CJZbAy5v9vGjmM4g4LmpEudm03lC0wnS99qQ7/VBV7QNRgsWbhCjqgptN7jvlE0/imm7IdWcKRdgD5C9Bk8TwE8D/x7wp4B/Cfy6EOLThzWwR0lVFFRVIY4F+jCwCaIEU1cZ22Ne+2wtSyVnYOoqmqLwnSsNwihhrGjx4rTMj31avTzMbf5ouS2Dp0OgaBsU7bsvnOiaSiIEiRB33KUeL9rkT+hoqoJtaLx7rUnbDbENja+crMnU3ifMSnvA58O0zXOzZRSRFgup5U0Ku1wTcyM5ankTS9fuumMpPR00TSFKEi6s9+j7Eaqq8NxUideP1+h5oXyvDwlVVXjzRI1q3iRraCTJbVuF7uq9ay3cIKaUNXhtrvoIRinthz19+oUQsRDiXwkh/izwBmmvpm8qivKXHuroHhGFNB3rmakiz00VOb/e5VsXt/hgsfVAv2/BNrB0jVgIojitZRlEyUMYsbRfpisZKlmDj5Zu6b8sHSB9PyKM7/2zeqRsE0QJfpi2OLiTnKXv7DJt3wvCOEHc/zNYesS2359ECL51cYu1zoCCrfPqXOWuE+WCbcjJ9AFypJzh9FgeP0xYag64ct25V/leHy7TlQwvz5SxdI33F9t8vnbvvf6EEPjD54ofyrngQbLnltmKoljAz5HuPs0B/xPwzx/OsB6dOBG8M99kEMQcrWXRyxm2hgeCG/2AOBH3lGYXxgnacAfrZpau8cKREk03kKWNn3KKovDSTJmPljr7PRTpEbm82eda3cE2NN44Xr3tTtLNn3fHj3eCoq2ef08la5+fLrHSGjBWsGTxiCfQbDVLFCdc2exxZauPoauUc7vvOkkHU5IIllsDgjhB07ivayBOBGKXHWnp6bHe8fhkpYOiwiCIsXWNrZ7PM5O7/1wQJRiaks4fpstsdD1Z1vyA2WvBiP8LeJ60X9OvCCE+eaijeoT8KD3s2XQC/Cjm1HiB46N5FuoO4yX7ngKn7fSOrKnx2rHqbfNYx4r2nlMApSfLuZkKv3/x4p7ynaUnX2eQ9uzwwhgvSgi8iPPrXYq2wXNTRTZ7Pp+sdDB1ldfmqtiGtlO6uu+nJWzvRdE2KE7KifiTSlVgq+fx7SsNHC9dXJuQ9/BD6cpWn4+WOxQzOkXb4JnJ4j39nONH/OBak0QIzs1UZAPVp9z2s0EkMF6wCeOEoyN3bpS80HB4f6GFFyYcG83x2lyVas6UBcQOoL3uPP0ZwAF+GfjL1+XuK4AQQtzbnWYfZM30r2xct+1+pJy5Y8Ws29kuXesGMY4fyQn1AffVUzX+ztfhu1ca/OwLd1lykp46J8fyXN7sU8oY5C2d9zdauH6M68fMVLNs9XyESNMuel4z5LxIAAAgAElEQVSEbWioqsIL0/IM3EESJYKrWy4ZUyOO4UtzZY7LZrmH0nJ7QC1v0vcj/ugr0/ccBLXcgChOc3IbTiCDp6fc0VqWQRhjavfWbuLKVp+NrocbxIwWLLwwJmftOcFLeoLttc/TU70f/cJ0ic3urak2PS+k7YaMF+1dc5qP1rK4QUzB1mWp0kPgxekyeUvn25frMng6gEoZgy8drdByApZbLqM5i2Y/IGtp5EyN2VqWvh+RMTRqcjJ0YBmayrNTRTpeyMlRk7G8jRfGsjLiIVTLmWx0PZ6fKt1XADRetNno+iRC3NeCrPRksg1tp2jU9ZJEsNb1bqm0OlawabshXhhzpJKRgdMBdijf2Renyzf07YniBAG8u9AiCBOWWy5vnrhzPf9y1uTNE7XHNFppvxmayhvHa3z7Un2/hyI9Io4f8f5iCyHSnehXjpYpWDq6plIcvv/SwffK0QovzZR56+IW59e7NNyAL+/yLJAOJkNTKdoGbhDhBtFOxsq9/Nx265OHIYoTgji55z9fejyu1h2u1R0AXjtW3VlEf/5IiTMThYdSkjyKkwN3bi5OxIHZjXv6/wZ7NAhjPl5up/05NJWRvEkYxZxf72EZKlPlDEdrd85tlQ6XHz09wtc/3+DyZl92lj+AEiEQIj339I/evkaUCL58vMbPvTQle3McMgrwjfMbzNddpqsZXpmtyN2nQ6be9zm/3kVVFGxTI2fqPDNZfKzXQRQnO8Wtjo/mZArpEyQZlkvt+xHvL7SYrWU5MXx/Hsbz4qOlNls9n+lqhrMTT+wpmPuSJIJ35hu4fnqe9NR4Yb+H9EAO7azg6pZDywn5bK1L0/VpugFnxotU8yaz1RxNJ6Djhjslx+NEcHmzz+KwMaZ0uPyh5yZQFPjtj1f3eyjSI1CwDV6cLhHGCY4f4/gxlzb7DML4jj/jhTEXN3qsd7w9/ZnOfZZHlx4P148YBDFCJHhBxHLri3t+0wm4sN6j54X7OELpUSvaOmMFm7yl89lql/cWmnyw0CLeQ5+fvfKihEGQ3n9arrze9ltnEBJECUkiUADbSBslx4lgfsvBDe7csuJ+CCF2KkBvdP1dvzdJBH0/QjwFvS/8KMH1D871fGh3nipZg62uRxgnrDQ9ajmLoyM5Xo8Tel76IfnG+Q26XsRPnhklTMTONq1t7L2Z7raWE+BHCeNFSzbLfAqMF21eP1bltz5a5Zd/6pR8zw6gWAgUJW2MmNHT9JubG+Zeqzs0nIATozkWmy6bw4db3tbJ30cqwnzd4cpmH8tIUwINTSWMEzZ7PuWMcSDSGp5GUZzwbz7foO0GdAYRJ0bzFKz0GkgSwUdLbeJE0HD8e07nGwQxTTdgZNhIV3ryzY3kcYKYjhvy3rUmFzf7fLrSoxdE/PQz4wBc2OgxCGLOThTJmPf+vgoh2Oj6WLq663mqvKUzN5Kl7YaclLtO+6YzCPnmhU26XshcLceRUoaF4SJ6wTYYBDFZU3ton21FUTg2mmOt7d21kut7iy3aToCmKXzpaPWJPoOfMTWOjeZoOcGB2EU9lE/oJBE4foyhqzw3WSJjajuTldPDrcRvX9pioeEQJ/D5Wo/T41+82Xfalo0TwedrXcI42XWLvzMIeW8hbcjrBLmd7V7pyfbzL03x1//5J/xwpcOL07ceIpWeTr1ByL/+dIO1zoC5kSx/6Nlxnpkq3pK264Uxl4fNMi8mgmImvWeoKuj32bep7QZAWsFvEMYYmsoPVzo0+wG6pvC1U6P31DZBerjWOh7LzQEF22SsaPPq0SorHZeVzoBnJgromkKcCAxV4fO1LoMw5uxEYdczKe8ttPDCmLytP/DZuTgRJELIVNJHzBt+Jo+O5Liw1k13nBTBVtcjSgRtN2S5OQDShZBnp+49tepq3WF+69bzMrdzcuzpTm06CC5u9Liy1WO15TMIYsIozUqYLGV4aaZM1tSwDe2h3q9PjObvOi9MEkF3ELLcGtAd7oR/+cTIE51ifGI0D6P7PYqH41DegZdbLr/98QpvX2ngBhGVnLETNAGEUULXi9KyxLpKKWswN5LjxZkSr87duXfDRtdjvePR6AcsNe+c3nf91v/jTAOQHszPvzRFztT4P75zbb+HIj1E7y+1+GSlwwdLLX7v/CabfY9rdWfngbTN0FSywxXmctbg9FiBMxMFXp4p3/cD68RYnkrO5Ggtu7O7tX0vSITYyamXHi9DU8haKpNli1dmK0yWMzT7Ic1+wFJrwGtzVU6O55gsZ1hpDWj2A+aHGQk388KY716u8+FSCzeIHvhe7wYRb13a4q1LW9T7u6fzSA/m/FqXq1sOP1xqM13NYmgKi00XRVEwNJWcpaFp6WS5lP0i+Nk+EL+b66+DRD7/n2hRnPC9Kw1+MN9ivTug4wY03ZCRvEXW1BgtWOQsfV8WulRV4cxEgaylc6ScIUnkfPJxOpQ7Txc30xujrio8N1XkldkKSSKo93wWmy6LTYfLmw5nJgqMF21em6uiKApjhd1T9YoZA01VSIS44YZ6s2rO5NmpIl4YM1u9twab9yqME3RVkWllj0DRNvjjr87wa+8s8Nd+5gyTJVmK9iCYKmfoeAE9LyRrarSckKmSYLPr3ZK2N1myCeKE6UqGlhtwabOHoii8NlfF0lU0RblrLxBIr6Wbq3I9N1VkueVSy1lyZ2GfXKu75E2d0azFH37lCPW+z/evNbF1jXLGYLPrc3nDQVVBUUAIbtvnb73jsdoe4AQRM5UsOUvjxQfsC9YZhDs9hJpOwMh1JZKlh6szCPhoqUnRNjhay2EbGtWcSd+PEUKQNXW+fKJGFIudrBU/ivn+fBM/THhmqnjHUuXHR3LoqoJtaLIP1BPO8SOCKKE6LF2vqSrrbQ8/TpgoWqx3BtiGdsM9QAyLD93Lc+B62+fr76fC3nQlyy+cs1hqDija+h3Tvf0oJogSCvaTm9b3tDmUwdNa26ftBEQIanmDb13c4p35BhfXexSzBgXLYLaWJU4Ezx8p7awqeGFMwwmo5czbrjTnLZ2vnBwhEeKuK9E395h6GC5v9rlWdyhn04mZDKAevv/oq8f4x+8s8t//64v87T/x0n4PR3oITo7meeN4lX/1SchW16PR9wmjhOeP3JiKc2mzx/m1Hle3+pyeKDBRtEkSAMHF9S4tN8TSNX7kWHXXPnEAm10PTVVu6BHSHUQsNQfU+wGvZQwZQD1mXhjxT95d5N2FFoam0hqElHMmfhTx7FyRsaLNB4tpunWSwEszJQZBQuWmhbKNrscnKx3CYZnpSs7kpZnyA09cRvMWIwWLcBi8S49Gzwt5Z77JO1ebZAyV9a7HVi+dOJ+ZKNL3Iwq2gaVrXD9XdfwYP0wnwM1+cMfgSdfUA3Hm4zAo2AYIhmfUNDKmxnrHQ1Hg+GiOb17YYiRvMTeS4+RYniBK+MG1Jn4U8/yR0l0X3Ld13JD3F1ugwKtHK/d1r7B0bdcKwF4Y8/bVBlEsODWef2qqSPe8kM4g7bv6JD4LD2Xw5EcxpqGRVRUa/ZBEpJX06v2AOBGMFWyenSzy/JHSDRfx+wst3CCtUb/d58kLY641HPKWznQle8OkqeeFnF/vsdH1yJs6x0fzzN50AHCz57HR8ZmuZB54FWqzl1b9arshQZzIw8mPwEw1y5//yhy/+tZV/v03j962gZ70dPGjhFrO5qXpEt+70kBTFL6/0MTUVb56aoSCbXBsJIcQ6eH/RKSri3lbR1FAU9Wd1caeF7LUdDg+mr/t4kUUJ/zb85tcrfeZreR4/Xh1J4Da7HkIAX0v4oPFNqWMwcmxvDz79JicX+tR7wd0BiG2ofGN8xscH8nT9SMMTeXYaJ7jI3mCqEsxY9DoByy3Bny+Jpgo2YwVLSZLGbYzLg1N5fkjJWaqWa7VHZaaLifH8ns+k6BrqrzfPAYbXY8PFts0nABbV7HNAZqqMV40udZw+I0PV/l3z02Rs26c4LbcACeIqOVMjo483IwSaX98vNzmvcUmLTfg3EyJIErnVU0noO2EjJfS4Mjx00p7XS/cqZC42fXvOXhqOP5Oyl3LCR/qDtEgiHd2rLuDB68I6IUxXhjfdsf9YQnjhHcXWsSxoN4PHtt9b77u4PjRPd2nD2XwdLSWxQ3S8o6NfsCZyQKTJZtqzmI0b/Gn35hFVRQ+W+0yVrSZLNlc3XK4uNEjSgSjhS9Wiy9v9ndKFRczxg1pPgsNl1Y/4Pxaj1reoO6kQdL2dq4Qgk9WOiQJtAcBXzv1YCfpjo/kubrVZ6RgEcWCT1db5C2dU2O3n8hJe/Mf/+RJfuujVf6T//sDfvsvf+2+qqxJTx5LV+kMQjqDiJlqjoWGQ4Jgs+vz/astChmdvhfxwnQJU1dYa2coZ01OjOZpOQHrXY9ixsANYlY2B+iqQhALnpm89RD5Zs9ns+fT92KW2y6jWyYZUyNr6sxUsvSGZy3bbkB3EJIxtFsWXB7EdlGbOBGcnSzIBZbr5Cydgp2eX4gTQZIIrtR7FG0Tx49Z7w5YaXlMV7McKWf4cKkNwELTIYwTtno+5YzJRMneObd2pJyh44Zc3uyz1fO5vNnnDzw7fsd7xmbXww1ipiuZA9cg82nRG4Q4XogXxsSxoGxrxKQlqdPFEZeFhsuzU1+kYW71fC5v9MmZOpWceUu6r/R0en+hxXrXo+2m5x5/5vlJfrjSZVQ1KecMRvImGUPnxFi6m1PJmlTzJl4QM1O58b692HDp+SEnRm+dmE+VMzSdAEWB8dKN6bhNJ+DyZp9K1thTb6Tts7XOsF/Yg/CjL3ax5kayj6ygiRguUMLjO8fVdgOuDAtCQdrweDeHctanqSqKotB0An7nk1Wemz7Ln3ljjiBKODGWx/EjvnF+g5yp0/MiuoOArV7AVs8nZ2moSvqGaqqCNdxpUlUwhw+7KE74eKXDctMlEZA1NTa7PrqqMt9wdqqoKIpCxtBx/HvvYL6biZLNxHAl5IfLaeWuZj9gNG/J3OqHqGgb/J1ffJk/+Q/e5q/8Px/x9/70K3J34ClW7wdcrfe4tNGl50WcnkgfCJW8SSQS1joePT/CNjXOjBc4MVrADSJaTsDHK20QCp1ByGtzVQZBTJwkfLjUpu9HPDtZYBAm5C0d29AoZQwmSzYKEEQxLTfkw6U2Xz4xQiVn8pWTI2z1fD4aTsyz1sMNbtaHRW0gDRZkw+cvjBUsel5E3tIJ4yR9zw2NQkbnSMXm4nofL4y5sN7lqydHOD2Wx9RUdE0higWapuzcB65Py7YMlY6XToDmRrNc3OjxyuwX593abtq2wtJVPl7uAOBF8YFpjvm0qeYsBAoC0HWFzX7Ai0cq2KaKGyTYhkoQJ7TdgHLWxPEj3l9s8ulql9G8xdxNix31vk/XC9no+NTy5g3FqaQnV5IIgjBis+OhayptLyJJBNOVDFe2+ny+0qXRD/gLXzu+8zOaqvDKbIW2G+wUFIH0M35howukc8ebq/Xahsarc9XbjuPqVp/uIKQ7CJkqZ257rmmh4bDYdJksZW57T39YDWmDKNnZxer7uxdGeRCmrvLSdJmWGz62FGVL13YWzrL30HrgUAZPUXpQgUbfp+sG/NX/92P+1GuznJpIJ0W/f7FOlCTYhsYLR0osNFwcPyYRgs4gIucErHcGZM108lHKGjvBz3LLRQhYablcWE93qn7s9CiNvk8sQL1pB+jVuQrdQfjQt0BLGYONroehq/fVg0K6N68fr/HXf/YZ/pt/+Tm/8luf8it/+Dm5u/eU0hSFK5sOVxsOrhdR7/v8wecmODGao94LiJKEtfaAty5uoSrp2cZ3F1qoKKy0XWaqWaIkIYwTzkwUuLTZI2/qdNyQb12qY6gqhq7y5RM1cpbOj54eJUkEv/bOIh8vd3ZWLbeNFixeP54+SP0o4b2FFuNFi+nKg+9AFWwdVU1X9rZLrUupj5dafLzUoh/E2LqKqWnoqkLB1Dg9XqDRD1luuXQGIRc3+pi6xrNTRc4mBT5cbJEg8MII0G9I3/bCOL0GNAVTTSs2/nC5gxNETFcyXFjvIQSMF79Ycb75OSE9PgVbJ2eqRJGgE0Xoisd0JcAKNd44ViEWcHXTod4LeO1YlZ4XoikquqoyiGLqTsDJ4e+10HC4tNHn4kaP6UoGx4+YrWYfaTnpnhey2EwLz2wvpkr3r+H4/P6lLcLhvV1VBG0vZL3rcWmzj6EqZG19J2X709UubhBRyhrMbzmoSjpPmK87LDZcPl5uk7cNandZyO64If0gYrJoo6oK1ZxJ2w3JWtodr5v5ukMUCxYaDidGcw91LpIkgtXOgIyhUctbnBrP0x1ED7yLdTe1vHXDmeBHLWNqvHG8hhfG97TZcCifnvVegEqaVjGIBH4/4J++v8RcLYuuafhhzGbP5/hojpylMZK3sQ2VF46U8GNBs+/znct1ChmdF46UGS/aDMKYty42UJS050t3ELHe9ciaGu8vtihlDExdu6UfjKGpj+QCma1lqeVNDE296+F1aW/+wteOs9H1+AdvzRMngr/xR56/7wo70v5bbDlMFm0+WEwb5TadgH/63hLfvLDFidE85ZxBHAsKtsFHS22iOD0jGSYJ5YzJZs/nSDnDuwstXp+rcFVRcKOInK1hKipCpO0PolhgaOln3ktixooWmWEVr5tt57x/fLnOIIhZarps9XwmSvYDVXks2gZfPjGCEMhFlZu8fa1J348JBYgwQZDuPn262uNffLDKn3xthoyhMl93uLrVZ73r8fqxKpWswXevNpivO9iGyo+fGeON47Wd99ALE7KmzoszZSaLNiM5kw+X0h2ma3WHlhOgayqzRpZzs2UGYczULu9xnAgubfZIEjg9npfpfQ9ZP4hYbg3YXlfvDkIcP+L14zVWOx5NN8DUVJ6dKNJyfCaKGSo5n4ypcaScYRDGXN7sMV932X4cFDI6USwoZoydDJVH5fO1Ht1ByHrHo5oz5fN/j6JYsNjyCGMQwIW1Hr/5wQojeQtLVdA0hTdP1FAUhYbjs9FNd/QXGi7LrbRVzdFqjkY/wIsS8rbOXC1LwTZY73hc2uhxbDR3w6KYG0S8u9DcOT97dqLI8dE8lq7SH1b+u919e7KUYanpMl60d3axH1YAdbXucK3+RV+yp6XgxF5kTO2en4uHMnjqexEJCqamMggiUKDRT1Mn+l6EqavYhorjx3yy0mG6HHJsNMdzw12olZZLyw1puwFBKMgYGooKn693qWZNpqtZvnpqBC+K+XS1S2cQ4kcxM5UcbpAe2EsS8cgn2ncqWyk9PP/lzz6Dpqr8r79/hfYg5G/9sRfl/+9PGcePuLTVAwRhmOAlMIgEXuSiawozlRq2qTM3kkUIWO0M6PsRPT8iZ+p0ByEFS6eY0fnH7yzywVIHQ1P4T//AKUYKNvN1h0rOvOGmbBsax0fy1Pv+TprF7e4JxWEH+3rfJ2/pNJ00DfdBJsxPchPF/XS8liUcptdHAlo9n4ydnmNdabls9nxOjxfoeRE/XOnQ9SI+XGrz6lyVphOw0fXIGGk1rs7gi0Pf40ULN8gRJYLjIzniYTVWP0rf18/Wu+RNnR89NUI1b5EkAkWBvh9h6eotlaZW24OdBq0ZU+PYyMGdzOyHK5s93GHVPIAggbbj0x0E+GGMjoKqKHhRzOVNh64X8aWjFY6N5FhtD9BUhbcu1mk4AWNFk7MTJUYKJvWex0TRfOjPfTeIaLsho4W0xUHG0OgOQgxNlenkD6CQ0anmDFbaaVDkBAmfrXawTI2ibXJ6rMBcLUuSCJIkoe+HZE093WEMInRNwdAV8paGwCBj5IkTgamr/NvzG6y2PT5cavPnv3ps5wxknIid8z7dQUiSCKJEcGEjXSzpedFt0/vOTBQ4NZbns7Uu375UZ7Rg8dJMmb4fofBgc8Hts0c3//dhdyhneXMjWerdAT0vIhZgIKjm9LTUaJTgRzGaalDve/zIaJWeH9DoG+SHKTdCwFLLJU4S4iThg+Ue4wULP0rY7PmMFi2ubPWZLNp4QUzW1PhwucNCwyWKE9qDkN4g4sxEgZmH0OcpjBM2uh7lrLnzIWw6AZ+udshZOi9Nl+VN9BFRFIX//N85SzVn8N/+f+c5v9blv/vjL91wpkF6sl3d7HF+tUPTjUmuez2KIWP8/+y9eYxdWX7f9zl3fftWe5FVLO5kk9093c2epWeXRtLIsGXHji3LiQMjRsYIBMeJ4A0IDMNJEMBZ7NiwHViBYyNGJEuCx5vkyNbsmhlNN8neu7mTte9v3+5+8sd99VhFFptFFskiWecDFOq9+7bz3rvvnPPbvj8NieC1ySKnx3OUW17c28XSiWScG+2GEatNh1wy288D90OJE0SkbYOzB/LUOz4fLzYYydlkEgZzlQ4DGYtTo1nmKh3+zbvzLNfjzfkXjw/2jaOzB3IcGoyjyOWWR3KbTvYL1biA/eRo9ommOTxvnBjNkTRgQ5Cq4UsCfK6tNqm2XExD8LmjQ5wYyZJPmizWHLIJk8likiNDaabLHVKWzmDGZiR3O11KCLFFmjoKIl4+mMc2dX7zwhy23vMqhxENx+ftmSpLdYdswqCQtPjMkdIWAyptG/0eU+lHXBOnAEuHcNMeUQPma11+570FdF1HA37mzCgpW+fHN9bwgri34uHBDGcP5FlvuVhm/H0lDJ0z4zl+9Qc3uL7aJptY5X/4hbNYj8iBEUaSt25VCELJQMbilckiZ8ZzjOYTffETxcORtgwMeXtFiIBaNyQdQsaOWxCs1l3ema3x4UKdQtLk7IEEx0eytLyAwbTNYt3B9SNKaRsjC7OVDtdXW/2eTrap4fphf9+WTZi8dDDPm7cqhG2Pd+ZqvHwwjyYEEbK/LrTcgPfnauia4OVek3ZNE6z1mmeX2y6rTYf35+oIAa9OFrekonW9kBtrLQYzFqP3yWQ4MpTpBRT0x6qw96yxL42nhapDpRsQRhACupRU27fFIKQUaEIjY5ssVB1mKm1W6i5Hh9OcO1RCF5C2dI4OpfnRjXXaTsiFW2VGczanx/KstzxSZpyu5/kh+ZSJLsAN4f2Fehy2F7EH+07jabbc5vJyk2La4qWD+R2pYX2wEItDGLrgC8fijdd8tYPrR7h+LL27XWqQ4tHxjS8d5ex4nv/2N97lj/+jH/PzZ0f5c29M8enDJVUL9ZSz0vBoOVsNpw0Wqm0ytknHD7hVbnNoIM1o3mah2iaI4sWs7QRIGUsc/8lzB/g37y7S8QLark8QRnS8gP/w0TK2qbNU7+L4Aestn9GczUQpxdXlFj+6sU42YaKLuODYMiLmq12KaYt80mQ4F2/IswmDtZbLQNpG12Khivj1Qm6V2/ziuQmVxvWQmLqGf4eSb8eXGGHIcuTy+1fXsTSdwwNpSmmbfNJiPG/z7nyNlhNwbDjNWC7JG0cH79mXZHPPlVNjWUbzNj+8tkYpbfODq+ucHssShLHXGRlvvt0g6j9fw4lTyF47VETXxK4kjR0/5P35OmEkeXki/0hEi54H3p9vbrkeAs1urIIpRBx1ar+7wEQhyfX1NlEkmS23+cqpEV6fLBISb1a1Q4LBjMVa02Wh3kXKiGZX8oOraxQzdn9TvNoTonqY73JD1REg6KmSaZrYogisuD/Rps9ug2rH4/Jq+677hlLi+BI/CPlX78zz4WIchT48kMY0NJwgwgtCzk+XaTkBY4UkmoClusNS3WEkZ/PzL45xc63N4DZ1PcO5BJmEQdibBwxd4/WpErWuz3Dve12ux6qcAEs1h3RCp5iyOD6cYa7S5UAhGdfpR5KluoOpa3z+2GDfmP7htTXemasiI/jGV46ST5j3jIjqmrgrVS+MJH4Y7esshn05W74zFxs1G5slLwQvjPCDCD+KlfOqHYdSxqLthQRRnPd54VaFhWoXN4hzzoezNgs1h5m1FqGMvQGFlM3llSZL9S61joel6xwfyXB8OMN62+NgIUXdiQsCN7yTGwWHSw2H719dY6XhcnQozVg+saMi8Y0ffiQlGw6zXMLkzZtlNCGwTY3RXOKhFFeuLDdpOj7Hh7PkU0p+9ZN449gg3/3LX+Eff/8G/+zH0/x/Hy5zZDDNH3l5nF/41HhfZVHxdJFN6Gi6Rq/jbZ8IaHYj3pmtcmm5yUfzdX7u7BihhNlKl1rXo5S2ODueZ67SJZsIWaw5BJHk5lqH5cY8HyzUmVnvcm01doh89nAJN4xbJJi64PBgGtvUKKVtBHEfMU3Ar781R6Prc3Q4zWAmQduN00AEcVRrw8scRfK2qpNEGeo7YLnucGu9zVDW3qJM9TvvLbBdF5QgAjOUBFEs4PHmzTI/uVWmlLL58Y11luoOUkZ87ugghbRJNrF1We14AW/PVJEyrlHyg4hQSmodDyQcG85wZbnJj66vs9p0eHmiwPHhDLYZixBsfKNuEHJxuhr3IszZdyl2PShrTTc20og3dmp+islYGpqAzQrJniQufCG+MFvusN50EJpGFElurrVJ2WV+8/wcQRQxUUzxF3/6GCv1LhdnqqRMA1vTYiVPIai2PabLcR1j2w3Qtbh+ZvNm1PFDdE18YoNQU49VyZbqXdKWiRuEqv3AA9J0fC7OxM2vX9vUoDaMIu5sixQBrh8hkFxfa8U1si2Pjh+RT3rISLJY63L+VhnHj3CDiEvLTc6MZTk+kkMTgpGczVA2wdAdPaDKLZeZSofhrM0LYznmq7ER1HB8bq61KaZuN04fytrMVzvomuBWuUUUQT5l8vpUqb9n9MOIm2stpJA4fshi7bazvuH4zPVSf3/3g2WGsjZjhQRnxreX55YyTh80dQ0/jHjzZgXHDx9Z9tSzyL4znqSUzFc6OMFtQ2OD7kaFaBgXCy5WuyAlQS8H9ftX1sgkDcayNpGEt9bapCydCIllakggkzC4stJivtKh64XkUxYJ3eDrZ8cJe2k+G+pK6YRBs+vzvaur2IbOUNYmbel8vJ4ttP8AACAASURBVFTn1lqLw4MpTF0jYxvb5qxu1EicGc+zUOtSSlv9H9da06XjhsxVO6RtA9ePmBxIPdDE2nB8bqy1cIMITcCrh7aX0nzaWa47tL1Y5ehxd6pO2wa/8rMn+a+/EveC+uY78/z971zj7337GmfGc/z82VFeO1TipYN5VRv1lJBLGPjBdnGneNOkhRKv69Ps+txYu8ZoPoEE6l0fy9B5f77O4VKK4azNb7+/xHS5zXrLwzY0Gl2f9ZaLH8RqnZW2RyljM5qzSVkGQRhxoJjkzIEsg5kEizWHn9ws4wYhXT9krelS7KVK+GHUN5CcXk1GMW3x82dGWag7nBnLPtE0nbYbEITymXOq3Fxr0fFC2m7AoYHbc8KNtdYnPEoykDZ4a7rMD6+t0QkiSkkTLwjxwggvBEuvsFTr0uj6fO7IAIWUxXAuwZXlJt+/ukbXC+n6g6y3PNpuwOnRHF5GcmQww3LdoZiy0IXg9FgWz5estVzWmi5v3ar0m7JvRBkeReuTUtrCNDQiKRl8wumeQRhxZSVeB0+OZnc9Lz/KGuKxQor7PVMgoelG5GxBMRWv3VdX4l5eXhCx1vT49bfmSFs6ay2PQtLkM0cHOHeoyOXlJq4fcX21yVylS9rWSVsGlbZLrRMwmk/gBmFfkbGQMBnOJTg9ltv2PQ5k4tderrssNbq8cXTwkXwO+4VK2+vLb5dbXt94avYcC3cSAnNVh3LLYShrI4RG0hT4YcRspYMbRHy0WMfxIkxDo5C2mC53mBpMMzmQYqnW5X/53cucHs1x5kCODxbq+EFEpe2RT1lUWh5fOTnUd65fnKmw1nCZ6Tl8UpZBPmny2SMlwgjemq4AsYG0GVPXeOlgAS+IcP2tQhOfOzrAjbU2Wdug7fkMYbNcd7Y1nqJIcnG2Sr3jc3Q4QzFl9l+r0vb21HiSUnJzvU2j6zNZSj3RtPV9t3tbrHf4aLF+l+F0JxHx5sDr5aYausatclzn9J6AkyM5BjIW2YTBkaEsQsDrU0VySZMgDGk4AZYuCMKIpudTbrmcmyqh9TxJ1Y6HIQT/7Me3qHbijvY/fXqYhKnj+CEdJ+BXf3CLzx8bZCyf4PPHB7cYPnOVWAo9lzQ5d6h4l7Z/GEn8SJKyDbq91MEHVfmRUvLDa6s0nZCvnx19oMc+LTQcnw8XYmUr1494YfzJ9E5JWjp/6vUJ/tTrE6w0HH77/SX+7XuL/G//8Wr/PmP5BEeG0hwZzMT/hzIcGUxzoJBUqn1PEC+UfaGAOxFs3agGIUxXHApJHT+QuL5Hs+tT6/qsd1wytomuC7wg5MRImlrbJ2FqVNsOkliJqe4EWKbG+mKd71xe4Usnhjg8mCFrW0yvt/EjiakLIFbnGssnCaVkIG0RSslaw42Lwh2fXMJkciDN5BNWQGo4PhemK0QRnBrLPhIZ9SfFYNZmttyhkDK3qJ9WO949H6PrAieQVNo+gtgL23IhjKDWjb/j2XKHm+UOb92q8PZMhcmBNK9MFjGExnw1bp78/nyd1YaDG0YM521+4aUDHB/KcHw0w4+ur9PxQv6Pb11BSA1NF3zu8ACgEUSSjG3wqYkCte6j6X2StmORCnjyEculusNS7Xa/sYcVvQgjyYXpCi034NRYjgOF3X8ul5fqW2qe7oUEun6I4WmEDQ/fD3CDWJpNE/D+XI10wsTxAhACP5SUUnET5Q/n67S9kJGczUy5jZkX/Ob5edK2wcRAkoliimurLT6cj8VnDg9lSNk6hwe3jw76vX2Kv5OBK7Ywkkv0e99tlnb/aKFxz8dIoO2DbLrYRtzDz9Z1Km2PqytNGt3Y+TWas0kYGrW2z83VFkII3rxVZr7apdxyma/FbXDmqx0OFBOstVxWbJ3z02Umiim+/uIYKcvgykrcPif6UHJiNMtUKc35mbjWbSRn03B8jmw6N8JI8t58lStLLWpdj/FCgq5327gaL6T4k+cmesIigvWWt6U33Wa8MKLeiQ3JlYbD1ECK8UKSlhswtcdiNSsNlw/n61xfazGSS/C10yNPTJ7/uTCehBB/FzgHvC2l/EufdN9mN2Cnvb1a3ibFnXCrZ/rKcoPJUpqDpQRrTReJ5OpygwiotGPvU+CB40vena0ykDYpZWxKKYuBlMV8pcsPrq3R6Pp8tFjv9fWQDKQs6m2fmuPjRREfLTTo+gGf7XkeN7i83ODyUpybXUqZHB2OtfdnKm1sI+6GPpKzOTdV5IXRLINZ+4EXyJWGE0v3hhGLvYXuWUMXol9cbeh7Y5CM5BL8+S8c5s9/4TCVtsd7czU+Wqxzc63NjfU2//rdBZrO7fwA29A4NJCi1OtUH8l4cQyjOL9dSpDEIfSEqWP3ijkTpoZtxP8Tho5txspLCVMnZRmkLB2rp95lGRqWrmEZIu5no8e5/JoARNxnRhD/l9zOrZdy4/LtdNON6/Htty9HUfw/jCShlH3vsKHFzUQNLW4wuvm6rt1uNLrxXBIJkv7lza+98VlsjENyuzv5xuVIxvnZfhinUbwyUdzihfud9xbu+d3daytS74ZYGggRbzxlJHG8iDCKla+ODafwAnh5osCV5SZ+NkHTCbk4W8M2NWxNkLQN/FDy7mwNP4g4M55DE7DS6FLr+Jha/P1FUnJ8OEPDCchbOvOVDv/uvUXyKZM/8+lJ8puKeNdbLleWm3Ez3pzN+Zkqgxmb1w4Vd7VBbrkBHy3UMY24ZYPjhf0sx473+Jol3osokqy3YwXCB63VOTGS5dBACkvfKufbujNHZxMtTzJfbhFIEAiEkLTdgIQBGnHqVrXj4kexwf3tS11SlsXvvr/EsZEctik4UEjR7Pp8tNTEDyPGc0nOHXJYrHX4/uU1Li01aLo+ay2frB33lnKDkBOjWTJ23E/mynKTtZaDpWu4QchS3WGylHpg+eCbay0aTsDRofSu6qbCSPLRQp3lhsPZA/l7bsDuJNMTvQDuSnN8ENpe0J87VxrOIzGeNpqZ7gQvgpbj03YCwlAiBRga5GydIIqYr7TxQ0khFdc+Vdoe0+ttVpsOlq7zqYkCCUOn6QasNh3SrkEmofP5I4MYmiCXNOn6sWKavulcbTo+N9bapC2dyYEULx8ssNxwGM2pvk4PSsLU+cyRgbuOi22rYLfS8cHxAzQhqbQd6l0P1w9wgoCmExKGIXavDmrm/TYpaxXL0AmjiErL5TOHS9x02izWO1RaLrahUXcCpJR8tNhEaILXp4pMDaYpt1xWmg6WofHubJVyy+fwYIqf3GxR6/jMVTr84ZfGsU2d66stfnh1nYVaFy+IGM7YVDtbo0SbHRZRJHGCECnlXeuE32sI3Q1CfmZ8BCHEI3dC+2FExwvJJYwHWqdsQ8MNIqQES9f6atZPgmfeeBJCvApkpJRfFEL8n0KI16WU5+91/yC8/w9iJ3i9OqjZahs/BKHFSipRtFWphyBiqeHyvStrAHR9STFtoiO4ud6i7YV0vRBDh48Wm5wYTiNE3O247Yacnymz2uzyxeNDHBvOslzv8sPr67x5oxyn44URl5Yb6LoWGztOwM31FpOlFGP5JIWkxfsLDRw/5PBQmqNDmR0X+ZXSNkOZBG3P52Dx2ZyU07bBa4eKdLzwqVhYSmmLr54a5qunhvvHpJSstzxurLW4uRb3kJmtdKh2PGbKnV7ee2xUaD1jUCBo+kE/TcTxQ5wgwu39Dx9FXs9zyrd+5ctbIrUXZne+WdpAAm4EaTPuSB5EEastNy68FZKuH5K2Ihpdj6V6l+lyB0HcOb3pxIpeE1YaTcR1hV4Q8fMvjnGgmOT6WovpcgdDEyQsnXzS5MPFOtWWj21qfLBQo9zySVk6i3Wnbzwt1x3evFXGNjS6XsiPrq/x7mwNvRdx3pC4vbbSpNrxOTac2bGQzEK129+kllseIzmbqcE0XhAxtQd9Py4tN1iqORi64I2jgw/cy2a79OVbK3cXh2+m1c/iuf3bckPQiLB6xr0Q8fngBdD1PdZbHtWOSzph4YcSLwh6UUWB0OLCbT+MKLc91lqxQpauCdq917m2Enurh7I2HS/kD26WkT0DbsNonC53tjWe/DCi2vHIJ80t77fZU/SrdXzqHY8vnxy+67F3Mlvu0PEDjgxmtnzWS/UuF2erlFseqw2XP/bqgb5y2CdRTFv9VMTtjN961+fSUoOUpXN2PH/PSHzWNhjJJaj30nYehPWWywcLddKWwauThb7QypWl6gM9jxeCocm4Xk5CGMJ628PQdbpegKYJgraLpsFyrctstct6b6N85mCesWKCRNsnnzRxg4jJYops0uSPvDzOXDVO/58oJbdsfK+vtlisdbm20uLYcIZPHy5xcvTBa5oV92Z6/ZPSeG8TAeVOSLPbwTAEtqHR7sY19S1fcmO9RSllU3d8qh1BPqmTTVr4keRgIUXHD0kvGdQ6Pkv1AF0XRFKSjmTcuymb4NhQhjCKjYSWE5BLmviRxIsirq60mK92uLkWzxWmLqi1A2bKHaodl3zSYrbaIWUbjBeS26bovj0bzwej+QRnD2xN3ZutdGg6sZNive0y+ggcFFs+v0hy/laFjhdyoJjk9NjODbNi2uJnXxjh4mwF29QfeA7YDc+88QR8Fvi93uVvAZ8D7mk8XV9t3uumByYinjgBZLRRSroNEixT46OlJkMZm9lKB73ntfYDST5pUHcC0pbGcC7JsZEMtY7PYr2LG0Q0nIDrKy38UPL2TJV/994iKUunEwS8dKBIoufJyNgGLSdgMGOj94Qimq5Pyw24vtpC1wVScteP414MpC3+xGsHqHd8Tj+hdLfHQSFlUXiKs4o2NkdDWZvPbuMBexj8sGdQ+VGv1iKk48VN9vxQ4oUhXiDjeo0gjsrITZEdNkWQNiJSG0pT8eWt1zeMOk2ITZfj67om0DSBLkQ/EhVEkiCMjY6N6/3/PQeHpsXRLzZek02vjeiPQRCLvNx5bGM8AvrRNlPXGC9sNaJ3407xQ0naNvDCiCCIcENJPmFAJKh2fOq9ZtmaECQMjZFs3KMpIFZVWqh1EGjUHQ+vJ22eT5oIYDhrYxs6jh/xk5tlCkmLhVqXoaxFJD1G8nZ/sdhIT+16IZWWx0QpyXrTZa0Vb56rvbSLjhcvqhDX+JTSO6tjHMhYLNQ6GJoWj0+Iu1KFnyRur0YtCOUjcxQ4D/k0EbdTOxOGhkAgiWi7UdyvyYuwLEndCRjLWhwfyZM0NTq95seaEIwUbCKZYzibIJQRI7kkI1mbUMbvsevFXuF80qTpBAxkLHIJi5VPiDa8N1ej1omN7DeO3a6DMTWNxbqDF0QsN9z7vr9qLxUJYk2VzV7nrG32f++pB5RN/6SI4Wy5Q8sJaDkB1YJ3z1oGIQQvHtzZenYnSzWnr2hW7/r911hr7sx73QvSkzQ1EpaOH4S03YiQOOOkaAkCXaD3Isi2rrPS9DA0Ea/Rmoibb9smBwop2m5AGMm+M2S8kLxnJC+bMOl6LYSIMyoqHY/hp8A5+DzhRw+2MkgRKx5acmvMyvUlkwNJbpUlgrheLgwlbS9kthYr7mlaXB+rCUExafZS9zVcP0ISR4VyCYsIyasTBa6stCimbKYGk7w/V8PQtF5EK27g3u0ZIseGMxQzcS2lqWusNty7jKcoktR668N2qcsZ26DSic/bSnv7OrDd4PWiTkBfwOZB8COJlALHi1iqO0+sBut5MJ4KwM3e5TpwZvONQohvAN8AmJyc5NToozECBLH3WBcaEGGbOpYu6HoRfhShC0ExbSERJC2Nc4dKpCyDhuOTTRoMpCyabtwDShdxTdUXjg1yfCTL61NFzk9XubnW5PJKk1La4tzhEkt1h5QVp1glLYPPHSnxtRdGcf2QQwNpBPGEm7ENgijC0jXKbY+Pwzqj+QSmppHaYffk3mfHC/dQX1E83Zh6bChk1Xp6X75yLM/3rtcf+HEDKZ3Dg1kQkrlKl4ytM5xN8MbRQcptn9WmQxBKJgspqt1YyvqXXp9kvt7l0lKDsXyCrG0ggeMjmV7xseCrp4Y5PpzB0ONi/vWmx/HhLEEYoonYM/epg0W+dGKwLzqykZ46mLE5UIw33l4oAcFA1uLsgXjesw2dlK3TccMHal8wmLH50vGh2Dh+CurxTo1mmSl3KKasHXeEvx+fOpjhwvz9vc26uJ1doAtImZBJWBSSBlODWY4Mpem4Ae/N13GDEAmcGomL/f/s5w5xoJgimzD4tTfnWG+5FNMWf/r1CZbrDldXWizVu4zmEgznbOrdgAPFZF96+qdODRNEksODaUxd40y0vYgA0BcVidNabqfjJCydVyYKVDrejjy1lqGh9cQo7/ys8ymT//S1gyxUuwxkrB1FnXbCUNZmtelgGw8n4b0TxgsJym2377DY4OfOjPIv3l7+xMfqAo4Pp+OmqKUkutCwTY3vX16l7QdkLZMjw2kEAoSMN7emzkDG4txUkY4bRyayCYPRfIKEqXN8JEvXC3ekenhsOMNAxuLmWhspJRPPUM3hs8Ife2WSv/fdmfveL28LLNMgbekMpC1MQ2el4TBX7cYKqsUE/93PnODKSosf3yijC0HXD0kYOqdGc2hC44++PM6HC3WCMN5LvjCWQ8pYFv21ySI31+NYtC4E2aTJ53vOED+M+OqpEaYGWhweyqCL2ABJFnVKKYuXJwoIAatNDzcIOVi62xjXNMGJkSzLDWfb+WCylOKNo4M0nQeP7u6EhBmnKK+3XY48RA3VhogO8EQzbsSz3jFYCPHLwJqU8jeFEH8cOCil/Pvb3ffcuXPywoUL/PqbN/kH37lOs+Nj6pBPJ5koJillTN66VSVpaHztzAgnhwsEMuTCdJWZcptDg2lOjmZouRHFpE7SiotB8ymLXNLEDSQaIIRkMJcga/eKvaOIthsynLNpuQHltkutHWDokE9aICBlxjr9Gwuh44dcWW7QdAIOD6U5UEjh+HFhYaPr44fxj8rYYbpKxwtw/Ej1ewLOnTvHhQsX9noYiqeAjXPhr/3mRX7r7WUiYsdIQkApZ5K2TSZKSaYGMkgBecvAsASHCymG80kOltLYhs5bN9eZrzn81KkhxgopVhoO6804VccPwDYFZ8ZyGL30qWrbY6XpYOpxIflEMXVP9UXHDzE00ROW0fCCaMtcsUG949PxA0ayCTRNsNpwcPyIg8WtAiRRFEcc93OPjjs5d+4c3/3Bj/i5v/sdFpux0aEDOQtG8klKGZtDAylemxrACWJv8JXFJglT4+XJPH6vvm28kKLp+gymY2NnvhoXhJc7HseHM1ua5za6PtdXWxwa2KoStVH8v1sFunrHZ6HWZSR3dy8ZP4xoOgGF5L37u2ym5QY4fvhEVfn8MHZCPklj/dy5c5w/f56v/91vc2X1dlQupUEhrYOmMTWY5k+9NkkuZfHCWLYXEYg99LfWWvyrdxc4PJCKxUJ0jULSpNr2SVgauYSJrX53Tz0b68Lf+OY7/PO3FvvHT4+kcP2AhKkznE/x2mSRo8M5hnM2+aRJ1jbo9PZp11aaVNo+nz06wBd6xs58tYsfRqw0HBKmxiuTJcKevHnS1Flvu6RMneFcgulym1zCZLyQpO0GzFY6DKStuyKMcZrwbTW9G2stWk7A0eHMI3NmbLzO09p0eb7aIYzidfRRzhdCiItSynPb3vYcGE+vAn9BSvkXhBD/CPhnUsq3trvv4OCgnJqaemJji6TE8WOZb7VReXqYnp5mJ+dBGEncIETXNOwHrKlQPBvs9FxQPN9snAduEBFGEbahP7UbBcXjY3p6mkNTUzi9NKKEqfeFLRT7h83rgtrH7V8uXrwopZTbbv6e+bQ9KeXbQghHCPH7wLv3MpwApqamnmjE4cOFel8C85XJwhPVoFfcm51Gni7OVKj2cnw/d3RA9WV6DlFRSAXE58EP/+BNfnhtHYBc0uTTh5/NvnaKh+fcuXN88z/8oF/jdXQ489Ay6opnl83rwseLDRZrcUPZlybyDKtc+H2DEOLte932XLjTpZR/SUr5RSnlX9zrsWym0GseaRqa2ng/g+STcYpj0tJV5Gmf4Pgh/+KtWWbKn6y8pnj+MPXbNaHFZ6zxr+LRkUsaaFosQrO5FkqxPymm43PA0AVZW50Pihi1o3+MHCzGvXo2ivcVzxbHhjOM5RPYhtaXsVU83/zP//4S/88fzDBZSvGtX/nyA0tgK55ddE3wmSMDOH6onF37mELK4o2jcY2KStNSbLR80TWh1gNFH3UmPGZSlqEMp2eYtG0ow2mf4Pghv3VhnkLKZLbS4ftX1/Z6SIonjK4JZTgpek3HleGkiEn2GswrFBuos0GhUCiA89MVun7I3/4TL5FNGPzHjz5ZrlihUCgUCsX+QxlPCoVCAbw9U0MI+MKxQd44OsCbtyp7PSSFQqFQKBRPGcp4UigUCuDSUoOpgTRp2+C1Q0VmKx3Wmu79H6hQKBQKhWLfoIynT6DlBkyvt+l4wV4PRfEYaTg+0+ttHD/c66Eo9pDLyw1Oj2UBeHWyCMA7s9W9HJJij1isdVmodXnW+yAqHh1dL2R6vU3T8fd6KArFJ7LScJirdNT89RhRxtMn8PZMleurLd6dq+31UBSPiTCSXOx9zx8s1Pd6OIo9ou0GzFQ6nBrNAXB6LP5/ebm5l8NS7AHLdYePFxtcWmyw0OvvolC8O1fj+mqLt2dralOqeGpZb7l8MF/nynKTmXJnr4fz3KKMJ4VCse+5td5GSjgxkgFilcWJUpIrynhSKBQKhUKxCaXJ+gm8eqjIetNlJKc6Sj+v6JrgtUNFKi2P0bz6nvcrc5XYQzdRSvWPnRzJcXm5sVdDUuwRo/kEEkkkYVzNCYoen5oosNJwGMzaCCH2ejgKxbYMZmxePJjHCyIOFpN7PZznFmU8fQIZ2yCjen489+QSJrmE6hy+n5mr3m08nRrN8t0rqzh+qHq+7DPG8mrTodhK0tKZGkzv9TAUivuiHP6PH5W2p1Ao9j1zlS755FYj+uRoljCS3Fhr7eHIFAqFQqFQPE0o40mhUOx75qqdu1IcTozEynvXV5XxpFAoFAqFIkYZTwqFYt8zV+kwUUxtOXZ4MI2uCa6tKONJoVAoFApFjDKeFArFvkZKyXy1y0Rpa+TJMjSmBlJcXVGKewqFQqFQKGKU8aRQKPY1a00XN4i2iEVscHw4q9L2FAqFQqFQ9FHGk0Kh2Nd4YcTPvDDSb4y7meMjGabLbdwg3IORKRQKhUKheNp4aONJCHFRCPHLQojioxyQQqFQPEkOFlP8X//FOV6fKt112/GRLJGMm+gqFAqFQqFQ7Cby9IvAOHBeCPEvhBA/J1TnOIVC8RxxfDgDoEQjFAqFQqFQALswnqSU16WU/z1wAvg14P8GZoQQf0sIcbcLV6FQKJ4xDg+m0QRcU6IRCoVCoVAo2GXNkxDiJeB/B/5X4F8CfxJoAN/Z/dAUCoVib0mYOocG0lxTohEKhUKhUCgA42EfKIS4CNSAfwL8dSml27vpTSHE5x/F4BQKhWKvOTacUcaTQqFQKBQK4CEjT0IIDfiXUsqfllL+2ibDCQAp5R9/JKNTKBSKPebESIbp9TZeEO31UBQKhUKhUOwxD2U8SSkjQBlICoXiuef4cJYgkkyXleKeQqFQKBT7nd3UPH1LCPGXhRATQojSxt8jG5liz5FS8sF8nR9dX2e95d7/Ac8BTcfnD26UuThTwQ9VpEERp+2BUtxT3I0fRlycqfLjG+s0HX+vh6N4DKw1XX50fZ0PF+pIKfd6OIonyKWlBj+8ts5y3dnroSieMnYrVf7LwA+Ai72/C49iUIqng4YTsNJw6Hohs5XOXg/nibBYc2i7AdW2T7nl7fVwFE8BR4cyCAHXVpXinmIr5ZZHte3RcUMWat29Ho7iMTBbadP1QpbrDi032OvhKJ4Qjh+yUO3i+KHKOlDcxUMLRkgpDz/KgewV9a7PWtNhJJcgmzD3ejhPFRnbIJMwaLsBI7nEXg/nsVJuuVQ7HhlbR9PA1DUKKXU+KCBp6UyWUko0QtEnjCSzlQ6RlNimhh9GDGXsvR6W4hGxUOvi+iGTpRTD2QTVtk82YZCyHnrLpHjGsA2NTELn2kqLF9K5vR6O4iljN2p7KeBXgEkp5TeEEMeBk1LK377P46aAN4FLgCel/FkhxF8B/igwA/w5KaW/m2MP8j7ema0ShJLlussXjg8+yEOfe3RN8JnDJSIZX35e8YKI9+ZrRBEU0yZfOTGMEKB6Pis2OD6c4bpK21P0uLXeZno99ka/dDDPYMZGe47nyP1EueVyabEBxEby8ZEs44Xkc70GKu5GCEHKMhjJJah1fDpeoIxnRZ/dpO39U8AD3uhdXwD+px0+9veklF/pGU7DwFellF8A3gf+2G6OPeibMLT4IzB0NTFuhxDiuV80tE2Gkq5paJpQhpNiC8eGs9xcb6k6OAUA5qb1wtQ1ZTg9R2zsCQAMPb78vK+Biu3RNYEmBEKApvYEik3sxow+KqX8RSHELwFIKTti5zvOrwohfh/4JnAF+F7v+LeA/wxo7+LYbz3Imzg3VaTc9hhIWw/yMMVzhKFrvD5Vot71Gc6q1BvF3RwfzuCHkplypy8godi/TJZS2IaOZWgU1drxXJFPmbx2qIgbRIzk1Hqwnzk1mqOYssgkDBKmvtfDUTxF7MZ48oQQSUACCCGOAjuRZFsCTvTu+2+ALLDau60OFHp/jYc8tgUhxDeAbwBMTk7eNZiEqXOgkNzBsBXPMxnbIGOrkLxie06MZAG4vtpUxpMCIQSj+ee7DnQ/owxiBcSRp3G1P1Rsw27S9v4m8LvAhBDi/wW+DfzV+z1ISulKKdtSygD4beAGsFGNlwNqxIbQwx678/V+VUp5Tkp5bmho6IHfpEKhUBwdTgNKrlyhUCgUiv3OQxtPUsrfI26U++eAXwfOSSm/d7/HCSGym65+HrgOfLl3/WvAT4DzuzimUCgUj5SUHSv/RAAAIABJREFUZXCwmFSKewqFQqFQ7HMe2ngSQvwnQCCl/J2ewl4ghNiJYMMXhRAXhRA/BhaklG8CPxBC/BD4FPCvpZSrD3vsYd+PQqFQfBLHhzNcXVG9nhQKhUKh2M/spsjjb0op/9XGFSllTQjxN7mPASOl/PfAv7/j2N8G/vajOva0cWOtxUy5zWguyQvjT6ZfQL3jc2m5QcY2eGEsp9Sg7sGlpQZL9S6TpfSua1mCMOLDxQZeEHFmPEda1VA9V5way/H719Zx/FAVD+9DFmpdZsptxvNJpgbT973/fLXD1ZUmpbTNywfzSsHzGUFKyTtzNWodj5OjOQ4UkkSR5OOlBi034PRojrzqAbgvWGk4/ODaGi0n4EvHhziq6l0VPXZT87TdY9VucRsWql2iCBZrXaJIPpHXnKm0aTkBy3WHeveBWl/tG6SU/e9modbd9fOttzzWmy6Nrs98dffPp3i6eG2ySBBJPlio7/VQFHvA9dUWHTfk+moLKe8/j2/MLetNF8dXEvfPCh0vpNLy+ms2QL3rs1x3aDkBM5X2Ho9Q8aRYrHVZqHYptzw+XKjv6Hev2B/sxni6IIT4O0KIo72/vwNcfFQDe1ZpuQGOH245NlFKoWuCA8XkE4sADfa63SctXUVA7oEQgoOlJF4YMZzZvbpSPmliGhqaBiWl1vTc8eqhIgAXZ6p7PBLF46TjBXS84K7jg705YjBr7yiKdLCUQtcFQ1mbhLmbpVbxJElZOoNZG10XHCgkcYOQSEqSVhxtHsgo+fL9wkjWJmnoZGydg6Wkih4r+uxmV/0Xgb8B/Ebv+u8Bv7zrET0BZssdZisdDhSTHO6lX3y82KDa8Tg+kmE4e1uCtuMFLFS7DGTs+26Il+pdPlpooGnw+lSJbCIO7R8eTPdf50kxXkgymLExNKFS9u5BEEbUOh7XVpr85MY6Zw7k+alTIww9ZK+npKXzhWODRFJi6mqz9LxRSlscGUwr4+k5JYok37+yyr99b5FswuDPfOYQp8Zup1mfGc9zbDiDtcPf9oFCUrXBeAYRQjCWT/TbV/zBjTJBKDk8mGailMIyPvn7r3d83luoslRzOVhM8tLBfH8voHh2iCLJrXKHo8MZhrIWLx28qxPOA1Fte3znyioZ2+Brp0f6jZejXjZD2w04PZZTMvnPCA9tPEkp28Bf76nnSSnlMyNDdWOtScsJ6XoBhwfTdLygH56fXu9sMZ4+mK/TdALmqh2+dHyo33F8O5pO7K2MImi74Z5PmPeb5Pc7N9bafLzY4OPFBkEkMTSNI4PphzaeIO4LoaOM1eeVVyaLfO/KKlJK5YV8zqh2PC7OVpmrdkmYGm/dqnCgmNwyj9uGqnV73mm5Ae/MVAkiyXrTJgjjVK22F+xoTZ2rdlipu8xVOpi6YKFmcWpUGU/PGn4U0fXiLCLHj4gkdFyfjG081Nz/1nSFW2txyudkKcXpnmOm3vVZa8YtUmcrHWU8PSPsRm3vRSHEO8CHwEc9Bb2zj25oj4+mE3Jlpclay0NKScLQ+wWgd3YU3zCWdE1Du88P5tBAipFcgoOlJMO72IDfj5YbsNpwnlj91POKrgnStk4hZSAAJ4hodO9O11EoNvjM4RLltsdV1e/puSNjGxRSJmlLp5AyCaKIN29WuKYUFvcVQRBxZaXJ5eUmThAylI0zOI7sMHtkOGv3o1Zp2+in0CueLWxD5+RolpStU0xbnL9V4c2bFd6ff7ia1+GsjRBgGxrFTYIjmYRBytIRAoZz6lx5VthN2t4/Bn5FSvldACHEV4BfBd54BON6rAxkLF40cuiaRiTjTfS5Q0XCSN4VWXrpYJ7VpksxZd43/c02dF48mO9fD6NYkCBl649sAnX8kLdulYmiuJbq5GgWKSVNNyBl6p8YGVNsJWPrCDRenxoglBGFpEXS3t6z7Pkh11ZbDOdshjZFJhX7iy+eGATgB1fXODmavc+9Fc8SC7UuY7kEr0wWePVQgY2yJyW4s7+IgKnBNK4fkTR1lupdglCy3HA5dkc2Sa3jUev4jBeS/ajUcC7Bz54ZRSCRiH56luLZo5Ay+falJgtWl7YXcLCYouE83HzwymSRkVwCSxcMbtpDmLrG544O9PeiimeD3RhP6Q3DCUBK+T0hxJMt7HlITo5mmSl3GMnZ/ZNVCIGh333imrr20Hnr11abzFfidMDPHCk9kjQ+P4yIesJNXhBfuLTUZLHWJWXpfPbIgKpx2iF+KPt1bLmkga5pTA2ktr3vb7+/xM31NpmEzp/97JQS4dinjOWTHB/O8INra/xXXzqy18NRPEK8MOLySouba226fsjXz44hgaODSp54P1FMmZwey9F2A3IJgx/fKBNGkkzC2NLOwgsi3p6tEkVxyucrk8X+bfG+Qq3Dzzr/8aMVzk9XMXXBT58appi2mCg9fB3j+D32kkIIttl+Kp5idrMDvCmE+BvAP+9d/8+Bm7sf0uNnMGM/dCSo4wUYmnbP3Ocwkqy3XHL3MZQqbQ/HDxnLJx4ofzabMHlhPEfLDZgsxRv9DU9IxwvxowhbU3n5O+FAIVbaQ0psQ6flBXhBtG09S8uN3dAdL9zuqRT7iC+dGOKf/2SGrhf2FbgUzz5HhzJkEwYDGYuEaZBNGD3hlwdPj15pOHEajopSP3MIITgxksXxQz5cqGPpgmTSoJh6uFqUMJJ0vOCha2UUe0cYRRTTBpW2z6mxLMdHHm+fzkrbA5Ra77PAboyn/xL4W8A3iVeX3+8de2aod31WGg4j2cQnNr3buF8YShZqXQxd8NkjA9s2yvxosc5qw8XQBZ87MkDKNEjZ+paoU73r83ZPsavrhxwdejDP5p3ei5MjWW6V2wxlbFXQ/ABomiBh6py/VeHSUp1yy+P0eI4vHh/ixEicktV0fJbqDq9PFZkud5gaSKmo0z7nyyeG+Cc/vMWPrq/ztRdG9no4ikeEqWv80qcn+fH1MsWUxdXlJv/h4xVsQ+Ov/NzJHafrLtS6XFpsAPDSwTiNS/FsIaXkrVsVLkxXaLkBJ7NZTo5mabmxuNRA2mIgY/PqZJF610cA11ebTJbSdzlWL0xXaDoBo/kEZw/kt39BxVPJl08OcX66Qto0uDBT5ehQlvlqFz+KmBpIP9I0u9WG06+neulgfsfzRq3jsdp0Gc0n7uu0Vzw6HmoXKITQgW9KKb/6iMfzRPn2pRVurbU5WEzwi58+dM/7vTdXwwsiFutdxvNJglDSdoMtxtNGtGIjlS6MJAiY3CYNbLPQQ3iH6EMYSW6ttzE0waGB1I48VcW0pRRaHoJax+P3r63xkxtl2q6PqWuEoex/hxCrLbZ70cavnx3tfx9tN2Bh0yKq2D989sgA+aTJ73ywpIyn54xswuTnzo4C8D/+9kdcX2li6Brnpyv8oRfH+/dbrHXpeAGHBtIYmtgyT2+Z3x9DU00pJbOVDpGEQ6WUStN+DISh5NpKk5vrLTK2QTZhkjB1fnKzTMsJmK92+PKJYQopC00TvHWzAsSqbJsNpDCSfRXee9XOKeXOp5e0bXJ4MEPHC2k5IcsNh6srTaSULNa6DGcTSCkpZawHijJX2x5rLZfxQpJMzxnrbtp3bL58P96dqxGEktWGyxeOD+78zSl2xUMZT1LKUAgRCSHyUsqHkx7ZY+pdnw8W4ihRvetRbrnbboK9IKLa9tA0OFhMUkhZpCx9S1j148UGi7UuI3mbbMLo3Td1zyhQMW1x5kAOx4+YKG6NIs1WOkyvx3KWCVNnNK+8lo+LphNweanBStMlnzA4e6DAG8cGOD5yOxJY7XhcXm5STFt8haH+8Q8XYgn7G6stTo5mGc0nSFkqIrUfsAyNr58Z5Xc+WMLxw20j0IpnjyiSLNa7JE2dgYzNgXwSXRMIAZlN6Zn1js/HvcjSpaUmSVNnajDdr4c5WEwiJQgBo48h6rRUd7jWU3vUhdjWQafYHYt1h0rbo9kN6LgB1bbHB/O1fqTB0LR+RVPcSzFuUXJn1EnXBCdHs6w2HSZLd5eEL9a6XFpqkE+avDpZVIbwU0a96yOEpOX6/OGXRkmYOi03YKHWoZi0+GixTillM5Cx+Pwxc0drQRRJ3p2r9Us83jgaGzwHCkn8MOpf3immrhGE4bY1+4rHx252ey3gAyHE7wHtjYNSyv9m16N6zKw2HW6ttRhKW0gJE6Xktip1UsbNyyxDo+0F/NTJEultwqJL9VgU4sfXyxwdymAaGoNpi+W6Q9LUt00JHMtv/+PYPPma9/kxKI/V7sinTAxNkDI1BrMWX3thhKmBNLfW2yRNncmBFPmEQT5hkDZ1HD/q17iYve9putxG1wSLNUd5ffYRf+TlcX7jwhzfu7LK18+O7fVwFI+Am+ttptfbdD2f0XySo8MZjg9nMQ2BvymapOuCSEqCMHasJQtJFmvdvvEkHrNBs3mTpDZMjwfL0EiaOkITeFHE7364hBMEfHpqgIMHchSSVt/QSVkG56ZKdNyQwU1OVccPsXSNiVKKidL258NS3UFKqHV82l6w570hFVuZr7SZLXcQwPvzNb580kIACUPHDSNMTYt7O2o7V1UUIv7dhpHs1VTGaJrgyAOWcAC8dqhItePtqk4qiqQy3B+Q3RhP3+z9we2K2qf+0/fDiO9dXuXScpOMpfEzp4d5YTxHPrl10rq60mS23KHSjk/KgbSNdQ+vwqGBFPPVbr+3k5SSG2ttZsodhIBPH7630t5Hi3WW6w6HBlIcG85yoJDE0jUMTXxiKt58tcOV5abyWO2CXMLk5YkiQRixVHf43pVVDg+mEb3TWBNwZbXFh4sNjo9kaLl+33h68UC+39gOQG4qKl9pOHy0WCdjm7x2qKjkR59DPnukxFDW5rcuzCvj6TnB9UP+4OY6H87XOTmaYyhrkUsa2He0gDA00RMBiDg8mCaUkkOfYCwFYcTFmSptL+DsgfyuRSSGswlemRREkl019Fbcm9F8gj/88hiGAT+6Vmal4fKtj1c5NpzlxYOFu+6fNHW+d3mNG2stzh7IM1VKMVPpkLYNPnO4dM/1eaKYpOUG5JMmaZW58NQxvdbm48UGHT+k3PZwfMlg1ubQQJqEqXFiJEskY7Vec4dtYoQQnDtUotrxHkkLm4Sp39MZvxOuLDeZq3QYKyQ4M75/a/KCMOLCTJXODufpB/61CiH+KHBQSvkPe9ffAoaIDai/9hBjfqK4fsiVlRa31tpYhsaJsRwLNYdb5Q4vjOX6YdfFWhxNyiYMjgylKaWte/44jg1nOTacpevFObEDGav/eCnpdyjfwAtCLi010QTMVbtYusZCzeHYcCxSsJMFcXmTx6rjh/28WcWD8enDJa4sN6DhcnW5Sdoy4khSvUvL8UkYGgeLKfIJizCKBSSSpo6pa4wXkuSSJqsNZ8t3tljrEkXQ6Pq8O1sDITkxkt1iQM+U2zS6AUeG0kqA4hnE0DX+9OsT/IPvXmeu0rmnZ1nx7BBJyY21FitNBz+UnDmQ49yhUmz0bNpUNJ0AU9copDRKGeu+G46ba20+WKgzkLZYqjn3XZS7XogQfGIKkKqzfHz4YcR78zX8IGI0m8Q2dTIJg6x9bwOn3vVZqHVouwHfubzCRCnF4YE0bTfADaItqpyOH3J9tUXC1Dk6lFaCIk8xC3WHXNJiudkkCCV1x+crp4YIozg99849oZSSy8tNOl7IqdHsPdf2pKWTtB7e4NlMxwu4sdomlzQ4NPDg3YI2MqeW686+Np4aTkCrV5+4XL//PP0wu7a/CvzpTdct4DUgA/xT4Lce4jmfHELwqYk8a00HP4h4b6ZOGMbd5WfKnX7jy6mBNDOVDlODqU8MpYaRxPFD0rZB0tI53OtCnhzSMTSNpKX3I0hSSlpOwPevrXF5qclw1mY4Z2Pooi87vlMmSyk6XpNiyiKt5JIfmpFcgtNjOWpdn4xt8Opkkdlqh7Sto2sahZRJ0jI4NZLju5dXWG26nB7L8bXTI2iaiDvJ33F+xI30AgRQabsIIbi51ublidhj2XT8fs1CKCWfmrjbk6l4+vmlT0/yD797nV97a5a/9vVTez0cxS5JJXSytkEUgRuGnB7L8cJ4jkJqqyjMQNqimDbxg+i+m5VY3KFNGEkW6w5fOjH0ifcvt1zenashBLw6WaTwkPLYiofn6nKD3zg/h+eHTA2k+ZnTI3y81ODVySKnxu6Wqnb8kKSpcWwow2qzzFg+wWjWJupFJO9sZ3Brvc1y3QHiJqyPIvqgePRIKbF0jVrHZSBtoesaL47ntq1d26Dc9lioxsbIrfX2E1FXvLrSYr3pstKIJc4fNPXz0ECa2UrnofuZPi/kkybFtEnbDXf0WTyM8WRJKec2Xf+hlLICVJ6FJrkZ2+Azhwfwfcmb02XWWw4XpkOOj2R58WAeL4iodT0OFpNMDaaZr3b49qUVCimLVyYKW8LvUSR581aZjhsyOZDqy1tDXMS3uaFeveNzYbaC44bMVjpoGr0c5wyRlA+c7zicSyiP1S5ZaTi8N1fjnbkqjY0u8aaG74cs1h1eO1TktUNFhBCcv1Xh/HSVSEoyloEXRiR6/bTqHR+JJJswWWu65JIGXz4xhBdEvHmrjOtHFDbVvVmGhqELglCSsZXh+6wyXkjytdMj/Ppbs/zyV4+p6O8zTilp0fFCmq5P0tRYrHWptD3G7lhIF2pdqm0f29Sw7pOqI4QgkzA5OpShuANlzsV6l1rHI5c0aXQDZTztAS03oNn1Wah1ub7SYCiX4g+9OMovfGp8S43xTLnNR4sNqm2PsUKCTx8e4DNHB3h/ro6hC16ZLGBqd58fG/OEpsXpfoqnk3LL5epqk7oTYOoCTcCl5Sa2qXNuqrRtJlLGNvpr+4bT3PFDGo7PQNreVQr/veqSMrbOejMuHfhwsY6paZz9/9l77xjJsv2+73Nz5Vyd88Sd3X0bZjY+vkA+BpGURFISYMMSacs2KcGWLcmQIcB/2BYIAxYMw7JsSgZpA5JokZZlk5Ieg/wY33t8y919m/PM7Mz0TE/nylU3h+M/bnVN90xPntkJfT9Ao6tuV3Xdqjr3nPNL39908ZaFjBZr2ZHT/yCjyBIn5yu3/Pg7We3Lu+8IIf7Grrs3dqs9JJheiC8iQKLnBERAGEac3zZ5f+UyhbTG0fE8pxYqo4LOtunRGLi0LY9yRmeskMILIyw3bprasfbKkH602mW771LP6lxoWlxqWwwcn7lKnAI4X80yU0pzdrtPFMGFpslCMoC/UN652OZPPm9weiNWO9ro2vyz712g6wRIEizVs6PF0g0CsoZC1w54YupKemdj4MapecQGsx9GqIrEq4eqbPVdpotpxgoGuV3eIENVeHmpyrmtASstG8sLeXq6mIh/PIL8Jz94mG/90vf4p68t85/+4OEHfToJd8HpjT7LDZMgjNjsOXy02kFCwnQDfvD42Oj6bFtxI0vXjzDdANuTeP9yB12VeX6uPBL92eo7IODUfJmeE1xTV3s1phvw/kqHs5sDnpgsMHUscY49CJ4YL9AYuKy0rLi+TUj89ofrbPddDo/lObVQppozRlLmfTtgvJCi5/jMVjIj4aDVjs1n6z3yKY1T81fqkmcrGQopLRalSLJGHlrcMGKtY9NzfAxFJogEphPwzsU2Z7cGLNayPDNb2tNbKaUpfPlwjSAUpHWFKBJ8f7mF60fU88Yo++R2iCLBO5fadCyfYxP5PSnin6732Og61PM6GT3OnoKQ9a5zQ4PIH85xpYyeOP3ukDv51N6QJOnnhRC/svugJEl/DXjz3pzW/WW9ayNL4AYhkYhQiAUYShmNj9Z6VDI6iixxaqHCTDmN6QZUsjofXO7w8VoPWZL4889OMV/NslTP0jK9Pal9XhBxqWny3uU2b5xvo6syk4UUh8Zy6KrMK4eqo0a3Xcdnoxs36oV4UJ/Z7KPKMkfGcokQxH3E9kNsP6A18OjaHj3LJ0TQtX1OTBbZ7rm4Qchby20+XovFOY6M53l27soE6Pjh6PbA9THUWMr0X7+3yuW2w6GxLM8q5T3GE8STbN8NCKO4P4M7Ht2R5LUbhISRSGTSHxDPzpb4xvExfvk75/nZV+aTJoWPMMsNM64hdSNSGqx1HExvm57jEUSCH30y7v+0UMviBhFZXaWU0Ti92ccLIrwgomV6TBRTexpenpgqXNPYfD9sP2Cj65JPaURC7KsAm3D/6bgBHcvDC0LMUOCHEQL4YKXLhYZJx/b4qWen6To+lhsgENTy+p62ImEkOLfVJ4oEPftaJb39FHgTHi7yuoquyNhugE08H0wVUpheQN8JSGsKEwWHQkpjq++MBLyeni6OolKhiMs6HD/Ecu/MULb9kI7lEwnBh5c7GKrMWCFFFAlW2zaCWKDsSzNFFEUCAZWbRKw/XO3SGnioisQPHK4lc80dcCc7rr8N/CtJkv494J3hsZOAAfz0vTqx+8lsJcN3z2xjKDI5QyOSACSWmyYTBYNyVmepHlvtk8X0SMnkm++tYboh+bRKx/KZr8JSPcfSrnibEIKzWz3++ZsXudiwUBWJcsZAV2ReXqpwcr6yZ6A+NV3kicnCKJz72UaPDy51yRgK+ZR6S4vu/cQNQhwveiwn+6eniyxvDzhr9HD8iI2ejSTJhCIiiiIcL+T1cw0aAw8hBEEkUIZKWztMFdM4fogQsULTWsfB8gLOb5ujBonXCyhNl9Kc3epTyRoY6u1PXqYb8OZyi3BY3H43ijsJd87f/pGj/Ln/9U/4H/+/0/y9n3rqQZ9Owh1i+1F8LQNuAD0rvu5zukrb9AiH139GUzgylqOQ0pAkiYlCio2ug67KlLPxPBncoBH69ahmDZ6YzNMYeJw4wIXbDxpNiR2gkZBACGRJ0HM8WpZKMaux0rboWj7TpQw5XcV0Q2bLmdGGeeD4vHWxTXPgYnkhz8yWyBkqbhDiBVEiR/6IkDFU/DCeDxQgCEMymkI5p+GFcfp9OaPTtXwuNS1cP2LLdxnUrhjKmiIjBGz3vTsWecnoCuOFFJ9t9JAl+OByl+fmJKo5g6lSmg9XO/iBYLlh8eRUgXreGO0xu5aPJHONU2+nkXckdusEXx8/jLC8kEJKTTJkhty28SSE2AJelSTph4Anh4d/Wwjxh/f0zO4jrYHLZxt9Vjs2aVXiufkKiiIxUUzz8mKFgRdybFf9EsRF/qoikTUUFocRp52ow6frPfxQsFTLst61+c33Vmn03biHkK7w0mKFn3t14bqG0I7htNVzeO3zBu9c6qDJElldZaKQuuPoU9f2MVT5jpt4ekHE6+db+EG0pwnk40Ipo7PasVhpOYRCDIU3AooZHZBZ7zm8cbGJHwhqOZ1DY3kMRcb2w9HkKMsStZzBRs8hjATHJvI4frxIZgyF4+MFZsr7f+836v9xK5huQDhUcuzaPpPFNFEksIcCJglfDE9NF/n3X1ngn/7pMn/+2anbyptOeHhYqKcJoogIiAS0bB8riPhwrctPPjM1mqffuthm4ATU8gbPzpYoZXReWqyiKdJo0zJZTBFGAiFiVa6e46Mr187FO72AZFlCkiR+6NgYAy9IRAQeIEEoqOQMbC+k50SYnsALQ0qTGs9MF9nsO7y30ma8mMJWFWw/4r2VDtWMzqcbfWwvpG17LNayHKrnWKxl6TsB71xqE4Sx8mrS2Pjhp2v7dOwABDhDpV07jCgMe4OenCvx6UYP14/QVRlJgnxKQ5Mk/vCzTXRF5tVDVRQ5FgTzw1tzolyNJElMlVJcaAzoOT67faQnpgrkUyqnN/pAvJfcmYN2R7+fmyvtMd6enCqy2rFvqCK9QxgJ3rzQwvZCpstpnthHNOUgcsc7rKGx9MgYTLtZads4fogfCsbycRFfOaMjSxKbfRfTDXH8iBcXKwghuNi02Oo7qLLEk1NF5qoZOpbP6Y0+phcgS3C5bfPh5Q6hEFSzGmlNpZRR+HPPTPJXXl64pfPquwFZXSOjK6Q1hdWuxUbPuaPo03LD5POtAaoi8fJS9Y5Twvwg7njdd/ybPPrR4/sXmrx9Kf7ONFViopgiEpDWZJwg5KO1Do2BTzmjMVlMMVfNoCsyhrr3s3z/chcvCLnUtPiRE+OkNIWXlqr3/fxrOYPpcho3iFgYqn69falN1/IPfM+GL5q/82PH+L1PNvkbv/Yu/+Zv/EDSf+cRZLGSpZ5LsTVwCMO4zQRComP7+IFgu+8SCYHpxnK2O7K2l5oWZzb7GJrMS4vV4UZKGjlGdv6uKBIvL1ZHdS47c3TGUDg1V6Zl+Xy81kUI+NJMMREEekBoiszJ+TKqJHGxOaDnhiiyRG9Y32y6IZ9t9smnNKZKacJI4AURv/vxBue2B9heyIuLFQxVJqMrvHG+hROEBEFERlfpPYZr6eOI4wX0bJ8IUGWoZnT6jk8+rfH5lslWz2WxHveFVGWJL82U2e67/NtPNvl8K1bTLaQ1npgssN51mL2OE/VW2JG2t7yQI+O5PYbQTDkdN96V5T1zhuVdKSmwd5UXQCyVfqvOcD+MsIf/qz+c8xLurknuI8tCNUMhrbLVtckZMhOFFIu1HII4hzStKfSlOAXv880B3/xwDUOROTyeZ7qYop4zeO1cAz+MuNSyeH+lg+VFzFUynJwv0RxEvHKoxtPTBRZrOU5v9PHDiCPjuWs23ruZLWcYzARoqsRKy6Jvh3y23mNsVxj2VtkZ5EEY59zeifGUT2kcGsvRs30OPWZRJ4DzDZMwFEgIpgppDtWzuCFEoUCVJeLWZR5rHZt63uD4RJ5aziCjKXznzBaaovDKoSq6IvPZRo8gEIwXUhyfzCPEjfu03AtkWdrjBQojQXcoXHK1gEnC/SVnqPzyz53kL/7j1/jZ/+MNfvU/eikxoB4xChmDhVqWIIotJzeMZ4Aogn/97gqTpTSSJHFiqkDG0Jgtp9nuu7xxoYlEHMm2vABd3Vtv0HfjazEMBX3H59ONHrYX4ofxhsTZwHAdAAAgAElEQVRyQ/70QovNrkPf9ZmvZOk5fmI8PSAmimnqOR3Xj7NNdEVCU+PN9K9//xL1vMGJqQKzlQyTxRSqEm+ez20PYudaRma6nObHnpzgk/UeXdvj9OaAlCoxVkjz6uH771hLuAcM94BhBBKgazI//5UlXj/fojFwkSSo5fQ4OyeMeGu5hRtE9Ie1z4aqkNUVpkrpuy6/KGd1+k7AfDXLbHlv1FKSJGbK10YyZ4aOVVmKywvulJSmcHQ8T9N0WarlCMIIL4wOfJ31gXz3TdMDIZFLqTTNgItNk/lqlu2+Q8P00BWZn/zSJKttm//zjYtcbJpMlzI8PV3CCyO+9ckGqizx9sU2YSQYDBc6RYkHeTmrIwQs1DIUUjofrcahU0OVOXJVOuBudFXmmdkSz8yW+NNzDfpOgCAuOrzdL+rQWBZBLCRwN3K3j7OE5WI1QzWnkdIkZFmm54S0LY/xfIqG6aIpMookWKhlkIiNk3xK43c/XOe3PlhHkiCI4gjlWsciq6tcbls0TReAZ2fLZHSFnuNTyxr3XfxDkSWOjufZ7DvMJ2khXzhPThX5lZ87xS/8s7f5s//Ld/nFn3qKHzkxnuSIPyKYbkDb8rB8QSQiZoopel5IPqVyqW3ji9gpZfsRP/70BNWcwbfPbGNoMusdh6dmivsq6i3VckNRFwVZlmgNYrW+OMNAIp/SWOvYZFMKXhAxVjCSpssPkLcvtviNd1bZ7MXNkms5g7QqEUQCNwwJIsFsOTs0nGTmKhk+Wu3y1HSBxWqG+rB3oKrIaIrEmxfizfZMOcOXZlJJcf4jgiTFEWQJiID1rssnaz1+4ukJvvnBOilN5mLTJp9S2ei6bHRtTC9kLG/w9WN1ZkoZ5of7p53muT3b5+h4fiRjvpuO5SEh7VtffnQ8z0w5jaEqt7yPUBV51Lf0bpmrZpirZvDDuJTD8UMOj+UOtEL0gTSeEFDMqCw3Bc2BjesHXNge4EWCtKZyZCxPGAk+2+yjazKGplDJaby30uZCw+RC06SeM6jl44K9UAgmi2l+7MlxpksZ/uj0FllDZbqUIRICWQY/EFhegOkGt1SP8vRMiXcvtill9BtGq65HRlf50kzSfPVGtEyPrZ7HwPMppeMJru+GWF6AJGC6kmG8kMYPoZTVMVSZ89sDLjbNUcHlua0B44UULyxW2Oi6KDK0zdjT3Bi4rHVsglB8YWl0O5NcwoPhK0fq/Mu//gr/xf/9Hr/wq29zdDzHTzw9yTeOj/PkVCFRz3yIyekK2wMX0wkIgZWWRSlnYLo+xbRKGMb1hLWcQXPgcXgMsrrC55suuhpnMAyGKX27RQHSujKai10/JKMrOEHI4fHcqIv9wPV5+2Kf2XKGhWqW5Yb1UAgGHUSCUGB5IZYXEgpomy5q3kCEEZoikzVUNro2v/3helycL0l0LB9Zljg2WRylQ8VqaA6KIqMOpa6ny+nbykiIIkHH9smn1JvWpiTcW+o5nWJKZbMfOzt6tsfvfbrBK4drzFczSEhYnh/3hnN8NFkircnoqsRkMc30rjS9vhtcaZ7bNK8xnjZ7Dh8O65OenSvtW/P4ICM9612b5sCjktVHtf4ty2OBxHg6UNRyOhPFNGfWB6y7Nk3TQ1dlxvI6G4GDBPyrd9c4tVBmvpxlsZplqmDw9791hu2eiywLUmps1X/9WJ2coTFZiguELzatUaM0TZFjafKlGu+ttNnue7StFl8+XLvhRBhGgsbAwQ1iLf5aV0+U1O4DH6/3CMII24sQkYtEHKJfs1zCEOwgTsX8d16YoWG6vH2xw1rHZrGexXQD0rpMWlP4eLXLy4eqPDGZ583lFpc7FsfG80wUUlxqWgji9M+dYuHdvT22eg6NgcdsJX1bKkzNQbxh23lOFIm4cW/SdPGB89R0kd/6z77Cv3l/jV9/8xL/8x+c5R/8/lmqWZ2vHq3z1aM1vnZ0jMo+3seEB0cxozORN9gabpbMAIJenJ5zar7C0ckCK02T0xv90cZoqZaNU711hfcvd9nuO6y0bJ6ZLfL1o2MjY3mnV0vX9jk+WWDyKiEgQ1U4MhZ7iT+83B3VKBTS2n3pw2K6sSOvlrv/EfFHjZNzZdKaTBDFaZt9LyLs2owV08wVMhypZfHCWDa67wRMFtMUMhoL1Qwdy+P9lQ5HxnNkdJVKTudIPYsmQSVn4IfRbZ3LB6tdGn2XjB6niF8vii1EbPCltVuPTCTcGEWW9yhlOr7gvUst/ut/9SFz1bhX1585MU5aUymkNE5v9CipOtIwhXPgBjwxWeDj1R5nNnu0TI+ZSoZaNjaMupY/6vVlewFd28PQFLb7Dn4YMZ6/c7Gwe4njh3y82gPi2qm5aiYu5ag/fqUct8OBM548P+SPPtvms/U+2wMH1w/xwzj9qudI6HLcWd4NI07Nl/iZZ6d461KT//53T7PcMJEliUJaQ5ZikYmleg7LC/mV75wnEjBfSVNIx2l7kYgvvLSuoKsyphv35Nk5vh9+GPHG+RarHZsgjDBUeeTNTLi3fGm6yDffu4wfge9FIDyKaTVWrAsiNrouthfy7qUWAonVto0E1PMGY8UUthtyZrNHKECWoJZPISKYKWWYKqUppDWenC5wdrOP44Vs911URRpFoPww4sPVuEC87/i3LDJxsWlydnOAJMGLixXSmsKbyy0sNwmlPyzoqsxfOjnDXzo5Q2Pg8t2z23z79DbfPrPNb767OkoN/rlX5nlurnzzf5hw3/lorR03tt2FG8UCAYK4YPyDlQ4yEt89s80zs0XyaY163qAxcMkaCo1BLGm+0XUYeAGFlEYQRnx/ucVby20Wqhk2ujbTw4hSx/J47fMGfS9Al2WOTuRBwNp6nA6k3ofNk+OHvHmhRRgJZippjk8k6lm7+WC1TdP09kg4hyKWIL/csVntOByfyFLKGoQinsefmiowX83wzsVOnO4tSzw1XeToWI5zWwOcIMIPI1bbNkfH8/s6uQZuwGbPYSxvjJxi1nDtt/2QSIByneHw3konjgzkdJ5P5pN7gukFNIcptjv03Yj3Lnc4t21yfKLA9sClkjUoZzSOTeTRVZkwAj+I+GCly1bP4dz2gLWOw5OTBQ7Vc8xVM1dEZGSJl5YqOH6E6YZs9ByiYd/GXiW4pbS7rb5Dzw6YraSvm6UURXGrFX1XSxTbi7NsKln9hqnlqiyhqzJeEJEe1j89THSsuA/fF61QeuCMJ8ePeGO5xdmNHgPHJ4zifFY5igdTy/eJIpfLHZv/9psfYygSAz9kYPtIkoSqwAvzJZ6aLuGHcYf5t5fbfLzaw49CXC/kqZkii7Us57YHzFUy5FMaJyaLfPvsFrYbstKyr6t0YrkhthdQSKmsdmwUWeJyy2Kukrmj9L2E6xNEEbvt0r4foSghURARRBBFIaWMwqWWRc7QKGc1Ts6XKWcM3rnUZq1jI4aGlumFqJZHMaOhSPIoHac58Ljctmn0PU5MFUb9Fhw/5LONfhxZzBm3FTFy/Nh7KQS4QzVEa6gE1TTdxHh6yKjlDH7muRl+5rkZokjw4WqX33x3lf/n7cv85rurPDNb4q++usBPPD25Z3FL+GL53pltNvrXCq2UMzr1nMFzs0X++LMtXr/QYKyQYq1tU80ZFNMqLcvjvZUOQSDIGQqltEbX9IYNNF3Obw+41LJoDlyyhsqn612OjRf4ozNb/MEnW6RUmR9/epInp4q8vdxCkuJCcP0+pGqFkWC5YdK2PLwwumvjyfIChOCxaY/QML1rHJZuCKEZ0LcDIgn6jsfSWA5dkaln48yQc9smr51rkNNVfubkDBAr+3asWEDA8kKKae26Pf3eX+lgeyGrbZuvHo2bRz4xWWClbTFeSI2k8vejY+8IBXnXfUzC7dG1vJHCIkAIqLJARsL2Ay63TXqORiGlUUhrfPVIHaRYYOYf/sEZtnoOAkFa11BlCTeKmC7tpOnG4yuMBG3T48xmn7bpsT1w2eg5fPlQLRaXWe9RTGvXTd+1vIAPL8cOWMsL9i3V8IKINy/EdUo7DbsdP+T1C03CUDBfzdywFl9VZF5crDBwg5s23/2iaZke71xsA/DEVGHklPoieDxmu9sgQuD6IX03wPT3RoD6bjTyNjl+xMWmBREYmoSmKkwUdJ6YLFAvpvmTzxvUCynevNDinYtNVjsWsiTx1SMGH1zucKEx4FA9z4WGyauHarGeviyjGjKX29bIeOpaPtsDh4limpyhktZltgcunaHcdN7QCKNbb7SYcOv82482CK76WDvOlckyIjZQDE1h4PgYmsx8NUc+pXJ2a0A1F+IHIZoX0bE8xvIpfuBwfc//O73ZZ60T94BaqmevyBe3LBp9l1JGZ7p8c++v5QUM3IBa1hg1cDZUeeRtma3EKSNLtRuH0tc6ce7yXDWzb3F7wv1FlqWRKMzf+bFj/MY7l/kn31vmb/2L9/jvfudT/uLzM/zQ8TGemyslNQ5fMP3rRPiDMGS14/AP//Ac5xoDLD+gYXp8+/Q2h8fzXG5b2H7IWsfhudkSaUPhs40+pzcH/NkvTTJVSmP7ERPFFAjBt89sEYm4Ps60Q3KGShBGo+vRjwSltI4sQ8t0SevqPTVM0ppC1lCRZO7aWO9aPm9dbMXy6rPFkdPoUWa2nMELrz0eAENfFW3LZ3nLpF6Ie/yd2ejz6UaflZaF40fMVbMcrufY6Dr0HI+xvMEPnxjn+A165LhBXDtT3/UZ7ghQ3YzjE3lW23Y81rxw1MMnSQ2+c3pWLFO+myiCQ/UMbctnteMMW7jEfZx21DHfWm5yuW3F8uKqzGwly6mFMoWUyveX2xwdz7NUzxIJQUpTaJoeqiKz1XcQSOhSHLkUwGrbZrVtU0yrZI1r12tZkhBC0Bh45FLKrvMUnG+YCCEoZa7UKTUGLlOlNH4YjXpEWvsN9qtwg4isrj4UaYS78YYXZMfyuNQ0mSqmvjCBpgNnPGmyhOn6ON7eyyIg7iK9M4wEVyZK4Qsmijo/8fQElVyKgeNjBxHNgctKy+JC0yZjqNSzBi3To2nG0QbbCylndd680ORrR8eYKWdY69gjWUkhBO+stAlDwVbP5dXDNWwvYiyfYiyfIp9WKaV1imntwMtC3g9W29ZNH7Pd9/j0cpdiVmemmuV8Y8Crh6qcmCqw2lZ5b6VDSlcIhqqLf/TZJofqeQxNppDSmCtnWB8uZLujS/lU/H2mNJn5avaGXkU3CHnjQoswFKMmdVeH828lvO8FEZ+sxbnLlhd8Ib2oEq5PzlD5uVcW+CsvzfOds9v8k9eW+d+/e57/7dvn0FWZY+N5npwqcHgsx1I9y1Itx0w5nah13Seu57Vf77ixDLUqEwqBJMmEYcSZzS4N06Oa07jYMFnrOrRNj1MLZZoDl+bAo5bT+AvPz/KTT0/y/kqbD9d6rLQcvDBkopDi1cNVCmmNUkZDCMH3zjYYLxqUMhpeEPHeShdJghcWK6Oo9d0iD1PKNnt3r8o5GEadIO57NfZwZfTcEZea5g3/HiuvgiJHZIcZCac3+zQHLo2Bx8Dx+TfvXcYNAmwv4nA9z1jeIKOrdG2fQkrFDfbWp1pegB8K3CCikrv973mymB7VRb+13KJj+VxqmXzlSD1xwtwhPffaKLQbCD5b7zHwIlRZQpFhvetwdmtAx/QoZXXeWo5ro3u2j5rVQIIgEqy2bI5MqKwN03afmo7T9z+43EGVJKZLaS62LYopnWPjBUwvoGv5tC2P755tUM8bPDdb3mPApDSFQlqjafoMnBDbC0nrChs9h+XGlXFseSFd2xu9Zj4Vpxn2HP+mDteVlsXpjTjF8MXFykMVYR4vGKx2NNa7Nn0nYKVlf2GCWQ/Pp/AF0bR8ekM1pavZ75gEqErsAfze501yKRVJwGIlQ88JsPyArK5ieSHPzhdx/XiDGkSCrC6z3DT5bKNP3lBZrGc5OpGnZbp8tNploZZFlSXCUIw2z7oq0bE9vCDixGSd9V7s3ShltFtK7RJCJNLIt8hW373pY4SAla7DtunStQOyuowbRCxWM7x/qc1Gz0WWJKSKxGVsQiE4t73BeN5AkWW+cbzOeCGFJMFk8YpHcbIYC0SosrTne40icY13J4wEfhAhcSVN707YeS3HDx+qCfCgI8sSXz82xtePjdFzfL53tsG7Kx0+WevxrU82+b++vzJ6rKbEXs6lemxQHaoNDat6LvEy3yWqvP8m0xfwwUqLlxbrfPlQlZWmTYRgq++y2nUppRQutmy2+i6GqoxaRAC89nmTMxsmlazG4fEctazOWEHHdAOmSxkmimmem6uw0rT4YLXDmc0BtZzO146OIUvxiiREnOZ7r4wngBNTBY6M5/hkrce7l9qcmCrcUVr4RCFFx/TY6rv39Py6dpyylNEVnpoq3heP985rZHV1jxLmdu/G64Igrj1SZZVSWuWTtR6y1OeZuRLljEqj73KxafFrb6wwXjB4abGKH0a0LQ9Jktjo2vScgCcm8hyfLDJbSeP6EYokUcsZXF0SvdKyECLu23Mrn8POXkIeymwn3BnlfVLUvAg8J16Dg0igBxFeEPH2cotvfbLOn3tmircvNmn03WGPJRldkREijih//0ILXZXp2T4vL1VZ7zpsdG1alsdMJU1l+P2ndRmBwpNTBT7fHuD6EW3Tx95n7c7oKtWsjiSBGOZO7U4NNd1gpADYtrw4Ag633A5hd4rhfq9/u+y3x7lTJElitpxhu+8S3kBL4H7wWOygJEn6n4BTwDtCiL95o8dWMhrrbedGD7nyf4knSj+M66HODrtGg6CSMTg2kWelYeH4AYiIPzmzzWbPoefEDRB/9yMLIQSaKtPoWszV8sxVM6y2HcYKOp+tGyzUcowXUsyW4wG92nEopeMw65nNPutdl3xapZozbtpz6dzWgPdW2sxUMry4UKFt+Viez9lNM07xyhssVLO3nKohhODM5gDHD69RiXuU2Og6mF7AXCUz8sIJIbBvQYcjBBBg+gKvbfFrb1wko2voMrQsHyEEc9UsR8dzHB7L0bZ8Nro2ax2Lyy2bM1s9fvqZaeaqWUwv5MK2STmrMVPOkDNUxPCCX2tb/NqblzBUhZ9+bnrPxGZ7IV3bxw0iXlio3NJ7trwAWdprmMlDz9HADSglKXsPJYWUxo8/PcmPPz05OtY2Pc43BpzbNjm/bXJ+e8D5hskfn97CD68sGKWMxng+RT6lkkup5FMa+ZRK3lDj38P7laxOLWdQzxtxOnHimQZgrTO47t+sAD5e79B2HEQEGx2LjhOiKjI5Q8X1Ayw/IooE612Hn3xqgtObfc43LGw/4uxWCBLkdJUnp4poisSXZoukNYXf/WidruXHIgVCkDNUBm7AUi3LVs+hOKy5gliJr225PDFZpJrVMb2AnKHu6zDrWHEGxEQxtW8x9UbXYXvoQLrctu9IPUuRJVQlViV7/3KHl5eqt7S52kkrAsFiLXdN5P1S02LgBAycgHbJo3ofisF3v8ZUKTV6jZZ5c6daIGC162AHPoqixoJBOQPLDfGCEDeMCIVAUyS2+jYXmiZ+KKhkVRp9H8sLOLc9wI/iViYz5VhkqGt7o+/B9UO++f4aFxoms5UMrxyqMl+9sgcQIv4MXT/i8FhutK7vRBVLGT2JUt8FbfPG+0RBnNK73bHpOS7/9LVlzm72We04BJFAEtAcONRzOhlNJj1MzzXdgN/+YI2tnsNiLcfFhk3DdBkvxNFJXZX4F2+tIAnBM7NlZssZfvPdy6Q1hWdni2QNFdMNeH+lgyJLHJ/IoyoS1awxctpUcwYvLFbomB7vrbT5dL3PE1MFSvv0kIJh25a+w3TpWtXfuUqG1bZNPqVQHTroTDfA8kJquRuLTexmR3G0Y/kcGc/tGcv70Xd8OpbPRDF1wzUqrSuYXkgQRmT0L268P/LGkyRJzwM5IcRXJEn6x5IkvSCE+P71Ht80XW5Vu25nWxIBTghOeCU2Zbo2XctBkWW8UKAocuzpkQSeHzLwxOj5ahjy+baJrKr4UcTADeg5Hu9e6nJiyma1ZbM9cDk0luOHT4yz1rFomj5BFDKwQ7IphS8fqgHxhPoHn26y3nVZGstybDw/KiZ87XyDza7L5bZNRpP5cLXHGxdalFMqLdvnzzw5iR9Gt9xvqDHwWGnFqW2aInNi6tFTZeo5/qhJsetHo/fg+bcfwfEF9JyIruOi7povVlo2v/PhGj3bQ5UVJssp3l/p4keCPznT4MK2yVeP1pEkicbAo5rVqT5t0LE9Pl3vkU9pfLLa5ULDQpLg9XMNunaRqVKaSlZnq++OvGDuLUjdbvXjnhGSBKcW9qb76KpMRT2YEYqzm302ey6L9ewXWlh6t5SzOiezFU7O7zWcgzDictvmfGPA+W2Tc9smzYHLwI1Voi42LfpOHGn3bhCxLGc0ajmDak5HVxUUKZbphXiDFgpBJIa3h2qhkYgXw53bkgT6sDWDoca/dUUeKY9dzX5OQsG1B4WI5+H4t4h/C7Hr2PC+uPb5EtLIA+aHEUEk8MPYUxxEgr/5jSOjwnyA757uXPczAtga+GwN/JFTDeLr0fU9VEVCJk719oOIj9f69ByPgePRtT00WeazjR4//MQEa22b5WY8r6qKzOvnmviR4CuHaxwfz3Fm2+TT9S7//I1lIgFfO1rnyFiOvuPzq68vM3ACvvGEy3w1S8fyqecNnpm9tlD8o9Uejh+rfH79WP2aTU4hrQ1rK8RNnSk7n/F+HuMguiJgcyMl2d2sde1RWpGmyNdspOp5g62+g6EqN23hcLlt0bMDFmvZ23Lw1fL66DVyqStbofcut27p+YGArUGILofomsIfn97EHYoNqTKkVIm+7fHHpxsUUgq5lMZ8rUIQgu0HuEEsGjRTyqDIEhs9myiCrZ7LbCXNNz9Y451LHbwwJJ9WkXd9fy3T443zTda6NqW0xkrb4gcO18gacT+ondKAhJtjugHvXuogEDw/Vx4Z/4p88+3xsKUjrhNxfmtAs+9SzRkEkcAT4HmCs9t98mkN0w1xg4ie42G6IR+v9fjZl+dZ61q0LA8/jBjLGZzZ6vP6+XgMLjct/sLzM4QRDNyQj9d7vJzW+IPPNjmz0aec0VntWIRRnML3zEyJrb5DJASH6lm+c3ab91Y6jOVT5AxlT8sbxw+RJQlVlnh/pUMYCVoDj1cP1/a8x7VO3J+q78RO3JSmjNQ6F2oZDt9irq4bRHSs+APb6Dp7rvlP13vD3nk5Joop/DDireU2YSRomh7P7jO/7dBzAorDOaJjB9S+oNThR954Al4Gfm94+/eBV4DrGk9b3ZvXudwKEdBxBTvJfqocockSoRCIkD3LuKHKpA2FiUKKpXqWjK5wdrNP3wk4vd7n9GYfVZHY7rscnyigyDJPTOZ57fMGbcvH9GTCKOJi0+S1c03ePN9CluBia8Anaz2OjOV4cbFCJaPTHHjIksTvf7LF5Y5Nz/JQpdhDKElcV+lnP9JanHbYdwLq+Udzw61I8fsWAtRdOq+3ushfzc6zQgGKTGxESYK+G/H6hRahgPlqhmdnSlxqWWz2HNqmz+vnmowVDT7fNDG9gM+3+nxpJhYF6Fo+1ZxORpeRkPCGUseNgcvXj40xXY7D7bois913uNSyODqW37cTOUDPDoabTOg7wT1Np7kTPt8a0LZij+qDSi3zw6EADLDcMB8p4+l6qIrMQi3LQi3LDx2/8WPdIGTgBPScgJbpst33aAxctvsujUH80zI9erZPOJS1lQBZjtN/4p/hbTm+rarycF6Ji5bdIKLvBDSDCG9opHhBtK9RBEPj5upj+zgxJeL0jFiBLn6eJF11fOf28Dk7RtUO2tCQ2+m/l9KuNepkGa6pEN+Hq99NIEAEcQRBRrDcNNnuOURI+GGErkjk0hpBKPCDuCahlFE5uzmg5/hEkaBre7x+oUnL8uhYHue2BggBmhr3fdmpmVhpWfih4PRmj9LQodK1r63NgLie0vFDDFXe1ztcTGt8+XBtVLh+Pbwgllp3g5Cnpq8VhdiR3s4Z6i33qtudIrjfa08UU1RzOspwvF2PgRvw2Xo/Ps8wuuEm62omi2mqWQNV3vsanwzVu26VIAIpiHB3RYHTikQla9AwffwgZKMXMK+rRCF8+XCNj9c6hFGcivfZZo/zDZmBFzBZSGMOo1IXmyZhFFHJ6Hz5cI2ZXU1Xl5smQRhvdrd6Lou1LB+v9Xhx8dYyExKu0Bi4I0GF7b47Mp5M9/aUC+0QhOvvGQcAlhux3nFoDefW2BEhaJkeqx2blxarfO/zBoW0Rs/1GbghYRQBEi3LRZVlUppCEEbUc0acSeMEXGxatE2PBZHD9ALSmsL57QFeEJE1VD5c7XK5abPesSlltD3R262ew4erXWRZ4tR8GU2RCaNw36yk3VOHhIQXRiMBM+c2nNBpXWGylKJlensUgR0/HDUQXm6aTBRTe5xhNxNLG88bNAuxwbr7GrnfPA7GUwk4P7zdBZ680YPvZRPReOMMkYByRkVGQpJl3CAkCgVuEHKonmO8mOLlpQqaqnJsPM/z82V+4+1V6vkUKy2LoxM5LmybTJZSFFIq5ayOrsYbo3B7QEZXudyxCUJB3lDYSc3PaCp+cCVV5GvHxliq51jv2mz1XDb6Di8sVlisZTlcjzfb9fytpz+EAqZLacJIEN6ZrfHAyRoqJ+fLWF5coL1D6jZTEGXiPHdfxLfLGZXpUorxQoZzzQEZVQEJCrrKeC7Fs3MlfvTEJP/vOyv0HZ/xYpp6Vmet7SAE2H5Ex/aYLmXiflCTdZ6bK5PRFc5sDug78WQIcSrXq4dqdG2f71+IPVIXmibPZvbfKMxW0lhegCJLe97zg8D2wpGH+fOtwQNb3DVFppLTaQ08xgtfbD+IhwFDVTByyi2l/x5UfvrkFL/+/bXbfp4qgy7L6JoEQiJiqGInyxhCJq3KFDIa0+W4Vk2WJaQVia7lc1Y55k8AACAASURBVGwiz8WmRTalklIV1js2YSSo5Q2iSFDLp/jKkTo5Q6WeN+K+gm7A83MVjk8W2OjazF4nyvDsbIm25d9QVfNWUrh7jo89VOTa6rnXGE+aIt92yl89b3BqoYwQXFdN7lbSSTVFQlHiuuH0Hazt+73/Us5gw7lx6l5Bl7D9eF3MGTIpTWVge/giPu+5appvnJjge5836FgeiiJzcq6MoSloqsTT02XWunELkq7loyoyuhZvLpfqWZYbFgvVLKWMzg8dH2PxqqL+es6gNfB4bq6E5YdkNDVpc3CH1PMGl4eb97Fda4Nh3Np4UokdL6oikTHi/Zvvh6x1HSQBhyfyzJYz9Nd6aAqMF3T6dkghrfLiQpXJUhrBlX5KcWZQXF/0wkKVp6YLccmBGhvkXcunkI6bMh8ei8spmqZLRlPZ6MWphm4QMVlK0TZ9Do3leHmxukfRt2P7CAFhKBi4AacWynSGTtyrWarlMFSFlKaMHLbHJvIM3OC215L9sp4MVaac1WibPuPD/Yquyjw7W6ZteTd1dKqKvK9E+/3mcTCeusDOqCgAe3IvJEn6BeAXAObm5jg0VqSSkmk5VyzmjApIEroqISMhEyEr8eb4R0+Mc7nr8J0z22iKwnQxxZbpUTRUylkD2/MpZ/W46Ldlsdww0VSJmXKG5+dKZFMaGU3F9AIiITgy9NIdn8rTGhg8PVNCUyTSmsLhsTymF3d9V2SJxWqW3/loA0OVmCqlkaXY6v/Zl+eZqaTxAsGZzT6SJDFZTJEzVJ6YLMRNz+jxIycmeHKqsCdUezvkhwt2z/GZusP/8TBQyuiUrtpfSJLEf/OTh/l7v/35NY+vpGTKOQ0JiWMTRbxhsW9aU0FEmJ7giakcT0yWKKc1vDCiljPwgpDVrk3W0HhmpkQ+pfEXTs4wcAKOjOewvZCjk3m+fXobXVV4abHK0q5Nx/RwE/T8vEbH8q/JT87oykjw4Ub9FgxVeSCTyX4YqkzGULDckEr2wUbAnp8rE4RRUgeQsC9/98ef5HfeW6O7TyCnnpHJpzQMXefJyTynN/ts9100RaaW06nnUxydyA9TXASVrE5aUzFUhdlqmqemCqR1lfFCGkWWeGGhwvuXu7RMlxeXqny+OeDT9R6TxRTFjEZaVzg1X9nj7JuuZPjrXzuE5QUcGcsjy9INNxaqIt+Ws+x6lDM6lZyO44XXNdTuhNI96BljqAovL1YxvWBUj3G3/MpffZGv/A/f3fdvWR2Wann+1g8f5VufbHGpZfLlwzWWallOb/bp2z6WH/K1I3V+5MkJfuBwjUstk5yu0nEClupZarl4s35iaoLZSobz27Gz7NBYjtww6rFUz6LIsbN3vxS82UqGiWIKVZaw/ZCeHVDbZ+ObcHMyusqXr0pVA3hlaYyUDM51gispBb56tE4laxAKwXjBQBJQzqeYKaVoDOKsk2MTsTrud8822OjGzXKFEBi6wnNzZUoZnRNTBcLoinDYn3lygobpUUzHQmHpXWrLxYzGjz45wQsLFYJIjISoLC/E9AIutywqOZ35SpZP13ukNGXPPgPiOqaBG6ArcU9KRZaYKO5vLMqydI24xK2KTdwKkiRxcr6y5/0DD73UviTuMH3pYWFY8/TXhBB/TZKkfwT8EyHEm/s9tlariYWFhdH9IBKjtK6Eg8Py8jJXj4OdtKSEg8XVY2E3O/U8ajIwHntuNA4SDg77jQMhIBQimQcOEDvjIPnuDzZvv/22EELs62195CNPQoh3JElyJEn6LvDe9QwngIWFBd566y0A3rnUpjXwyOjKNQVyCY83p06dGo2Dz7f6LDcsFEXilaXqPU3rTHj42T0WdmO6AW9caBJFcHgstydHO+Hx43rjIOFgcfU4EELw2rkmthdSyxu3VVOV8Ohy6tQp/vSNN3ntXBM/iJgqpR9JwayEu0OSpHeu97dH3ngCuJk8+X7s5HA7QXhPdecTHi12umuHocALo8R4SgDinPGhiNgtdWBPSEh4/IiGPbYgbv+QcHCIBV7iRcD2k+8+YS+PhfF0Jzw5VeBy22asYCSG0wHmyFgeRZbIG9oDV6VLeHioZHUOjcV1akv1JOp0kPCCiP/4n73FVs/h13/+5esKGiQ8/iiyxNPTRbb67j2t90p4+EnrCk9MFWibXiKyk3ANB9Z4ikUEkkXxoJPWlVvue5VwsEgWzIPJtz7Z4DtntgH41dcv8p9/48gDPqOEB8lYIcXYA1YtTXgwTJfSj0Vbi4R7TyI7lZCQkJCQMOR3P9pgvGBwar7Mtz7ZeNCnk5CQkJDwkJEYTwkJCQkJCUPevdjmhYUKXz1a5+O1Hm3z9pplJiQkJCQ83iTGU0JCQkJCArDetVnrOpycL3NqPm7i+uFq90GfVkJCQkLCQ0RiPD3C9B0fP7xOB7eEOyKKBD3HJ4oe7f5nCbePF0QM3ERV6SDz2UYfgKemiyNp4k/Wew/ylBIeYoSI14sgWYcfW5J9VsJ+HFjBiEednf5EKU3h5aUKqpLYwfeCdy616Vg+1ZzOc3PlB306CV8Qjh/y+vkmQSg4Op5nrpooax1Ezm+bACzVspQyOtOlNJ+sJcZTwv58st5jveOQNVReWqwkyr2PGWc3+1xsWqR1hZcWk31WwhWSkfCI0rV9IN70uUHiFblX9Jz4c935fBMOBpYXEoRxtHFnDCQcPC40BhRSKpWhPPnxiTynh9GohISr2VknTDcgFEm2wuPGzvdreyFeEn1K2EViPD2iHB7LU8npLNWzZI0kgHiveGKyQDmrc2Iy6SZ+kChnNOaqGao5PZEoP8Cc3zZZqueQpDiCsFjLstw0kzTehH05PhGvF8cm8mhJVOKx48hwn3VoLEdGT/ZZCVdIRsMjSjGt8XySVnbPmSymmSwmfR0OGpIkcXQ8/6BPI+EBc6Fh8spSdXR/sZ7FDSLWe07S7yXhGipZfRSlTHj8KGaSfVbC/iSukoSEhISEA08UCZ6fK/PiYmV0bCcKudwwH9RpJSQkJCQ8ZCTG00NOc+DSGLgP+jQeW9wgZK1j4/jhgz6VhIeMru2z0XUQSS3DgUCWJX7pLz/Pv/vi3OjYjvF0PjGeEvbBdAPWuzZhktb5WCKEYLPn0LWSOtiEvSRpew8xWz2HDy7HPUaemi4yUUw94DN6/HjvUoe+E5DWFb58uPagTyfhIcF0A95abiEEDNwMh8eSlL6DyHg+RVpTkshTwjX4YcSbyy3CUNAoeDw9U3zQp5Rwj7nQMDm/bSJJ8MJihUJKe9CnlPCQkESeHmL8Xd6spM/A/cEfKqwln2/CboJQsBNw8oLEq3xQkWWJ+WqGC4nxlHAVYSRGQiKJEtvjSTD8foVgpMaakABJ5OmhZqqYwg8iBCTFyveJL80W2eg6jOWNB30qCQ8RxYzGiakClhcwX03U9w4yC9UsZ7cSufKEvaQ0hadninQsn9ly0hfucWSxlkWWJFKanAiDJOwhMZ6IPUjKQ9jcTpIkFhLZ5PtKIaXtG4qPIpE0PDygRJFAkmAqcVgkAPPVDH/42dZDu04k3B+EiKPPN1oHxvIpxvJJOv3jiqbILNWyyV4g4RoOvPH00WqXja7DTCXN8Ymkt08CXGpanNnsU8xonJwrJxPnAaJr+7xzqY0sSZycL5NLeqgdeOarWbwwYiORKz8wOH7IW8ttvDDkSzMlarkkM+EgstF1+HitS1pXeGGhkvTyShhx4EfCZs8B4oskIQFgsx+Pha7l4wSJCt9BojlwCUOBH0S0Bt6DPp2Eh4D5apySdbGZ1D0dFHq2j+OHRBFs9RK124PKZs9BCLDckIETPOjTSXiIOPDG00Iti6HJI0nahIT5SgZDk5koxkpbCQeHiWKKXEqlkNYYKyTe5oTdxpP1gM8k4YuiktUpZzUyusJ0OYk2HlTmKhnSukItb1BMJ0p7CVc48Dkph+o5DtVzD/o0Eh4ixgopxgpJHvtBJKOrvLxUfdCnkfAQMVlMoylSYjwdIFRF5uR85eYPTHisKWf1pIVJwr7clfEkSVId+HlgYff/EkL8hzd4zgLwBvAp4AkhflSSpP8S+CngIvAfCCH8uzl2N+8pISEhISFhB0WWmK1kkrS9hISEhATg7tP2/jVQBH4f+O1dPzfj94QQXx8aTmPADwohfgD4APjpuzl2l+8nISEhISFhD/OVTBJ5SkhISEgA7j5tLyOE+Lt38LwflCTpu8BvAKeBPx4e/33gLwPmXRz7l3dwPgkJCQkJCfsyX83y5oUWQggkKVHfTEhISDjI3K3x9FuSJP2EEOJ3buM568BRwCWOXOWBreHfukBp+NO7w2N7kCTpF4BfAJibm7uN07x1gjCi5wTkDJULDROB4MhYPukJ8ojQd3w+W++TSyk8MVl80KeT8BCw0XXY7rvMVTIUM3GhsB9G9J2AYlpLru0Dxnw1g+mFNE0vka0+AJhuwIWGiSJJzFTS5PfpBZhwMOhaPgLBasfGUGUO1XOJAyXhro2nvwn8V5IkeYAHSIAQQly3YZIQwiU2nJAk6beIjZ/p4Z8LQIfYEJq5w2NXv94vA78McOrUKXEnb/JmvHOpQ8/2cYMQQ43V2TKaylw16Tr+KPDupTZvLbeJBBiqwlIiIHKgCcKIj9e6CAEDN+CVQ7GAxNsX2wycgHJW5+R8+QGfZcIXyW658sR4evw5s9nn/LbJhYbJ8ck8ryxVqSbf+4FjpWVxeqPPetemnNFJaQqFlJYISiXcXc2TECIvhJCFECkhRGF4/4adZiVJyu+6+2Xgc+Brw/s/DLwOfP8ujn3hmG6s/x+KK7ZZWk8krh8VZEkmEqApEo6f9HU66MiSRGooUZ814t9CCCwvvs53rveEg8N8NW5lkdQ9HQyyhoobhCiyhCpLWF6yLhxEzOGcr6sKbhAhy8neLiHmbtX2JOI6o0UhxC9KkjQLTAoh3rzB074iSdIvEkefviuEeEOSpO9IkvQnwCXgHwghvDs9djfv5055arrIetdmqlTCUGN7NAnzPzq8eqhCSpNRFYnDY/mbPyHhsUaWJV5YqDBwA0rD3h6SJPHUdJGNrsN0Ken7ctCYKaeRJFhOjKcDwZGxHOWMxlrHwdBkppJr/kCyWMsShIKFWpZaVkfXZDL6ge/wk8Ddp+39IyACfgj4RWAA/BLwwvWeMKyP+p2rjv194O/fq2M3I4wEax2bfEqllNFv56n7Us8b1PNJSP9RZLvv4oURJ+fLSR7zAaY5cHGCiMlCClmW0FWZirp3bhjLpxjLJ+kaBxFDVZgqprmUyJUfCCRJop5PUR9e7wM3oG161PPGKCqd8PhjqApPTcd10JYX0Bx4yHkpGQMJd208vSSEeF6SpHcBhBBtSZLu3hq5z/z/7L13jKRpft/3ed5Q9VYOncN0T57ZmU23+fYySd2dQB4VSJEARWWIggELtGFBTqItGyYEwQYEUBYEyjIlGbQpkuCRImmS8t2Rt+Ld8W73dvc2TU6du7q6ctWb3+fxH291zczOzE7omZ30foDFVld3VT/T9b7P84vf36nNLhttFyHg1QPjSRr2MaU18HlnJW6T80PJvvHcfV5Rwv2gYwe8vRxfB44fcXAy6XlLuJbFsWySeXoMkVLx/UtNwkix2XV5cW8yPPdx5M2lFl4gWW05oz7YhMeX3c55CoQQOqBgNDRX7npV95grWpNQ3BMNiYSHAHnFhXDl44THiyv3AJVcBwk3YHEsx3IzcZ4eR3Z2BSmT/eFxZeejT86IBNh95umXgN8GJoUQvwj8JPCPdr2qe8yR6QK5tEE+bST1q48xY/k0x+eK+KFkTyVRRnxcKWdTPDVfwvEj9lST6yDh+iyOZWkOfLpuQDHpaX1s0DTBcwsVtvses6Wk9+lx5bmFMls9j+lEaS+BXTpPSqn/WwjxJvDDxDLlf1EpdfKurOweYupaUqKVAMBMchgmAFPJgZhwE/YO5cqXG/aoDyLh8aCUMSllEof5caZgmYkQWMKIXZXtCSH+T8BSSv0LpdT/rpQ6KYT4x3dnaQkJCQkJCQ8GC9U44HYpEY1ISEhIeKzZbc/Tl4B/J4T461c89+O7fM/HGjeIeGu5xburbcLogW8feyzY6rm8frHJxe3EaHpcCCPJu6tt3lpuJbO/EoArB+UmfU8Jd0bfC3lzqcn7a52kf+oRIIgk76wk58TjyG4bfraALwC/KoR4Gfh54vK9R44T6x3+7EKD+UqWLxyZJGXs1u+8Pqsth2bfB2As7yUzZe4hUireXevQsX00TZBN6RybKV2jvniu1sf2I7pOwHwlg6nfm88+4cGh1vPY6noArLbs0fyv1sDnxEaXbEonZWgMvIgjUwVK2aSc41EnlzYYz6dZSjJPjxUrTZuvnahRzpp85ekZTOPO1XmXGgNagwAImCpayYiThwClFB+sd2nZPoenCleVeG92XOq9+JxYbzvsn7gzpdaOE3Cm1iOfNjg6XUjGpjwE7NYKFEqpjlLqK0Ad+CbwyBWDS6l441KL1iDg1GaX7b53z35XOWsiBOi6oGglYhb3kq4bsN3zqPU8Tm30aA0CVlvXRpUruVh9v5gxMbRkU3scKFoGui4Qgqtmwa20bBw/Yrlpc2azR9cJuLDdv48rTfg42TuWTTJPjxlvLjVpDnwu1Adc3OVnXx2eJaahUUjO94cCJ4jY7Lh4gbzm3i9lTXRNoGnsambope0BHTtgreXQcYLdLjnhY2C3d+/v7jxQSv3joXjEf7nL93zg0DTBQjVDo+8xlkuNNsB7wXg+zacPjSMQ9yy7lRCTTxvk0gZeGGFo1xrKOzwxU2RxLItl6ElE6DGhYJl8+uA4kVRXDUScKlps9z2quRRSKYJQMZZLosePCwtjWb5zrnG/l5HwMbJ/Is+F7QG5lLFrpbWZUoZKNoWuiaSC4SHBMnTKWZO2HVzz+Rctk08dHEehSO8iI1nNpaj3PCxTTxSgHxJ2q7b3PwohpoAXh099Tyn1Q7tf1oPH5w5P8tLeMbLp3RvQSikiqTBusHnu5iZMuHUMXeOFvRV0IYiUQqobb4DJhvb4sNOLYOoaHx4kP1W0mMin0TRBJBVBJJNp848R+8dzfPWtNXpukChvPeKEkUTXBE/Plzk0mcfQtbvi8CT7xcOFpgle2FtFSoV2ncqTjwpyR1Ihhu/xUeypZpkopDF1DT2pbnko2K3a3k8BrwN/Bfgp4HtCiJ+8Gwt70NA0Qc4ydu047ZQAfvN0Pamdv8+cqfV47XSdd1bbmLqWOK0JdN2A187Wee1sna57/fKJnYNQ10RiCD1mHJ+Nq9JPrHfv80oS7iWXtgd883Sd7y+1kFKRSRlJpugx52YO0Idp9D1eO7PFt85t4/g3F5OwTD1xnB4idrsb/PfAi0qpv6GU+uvAS8Av7H5Zjy5OEAsPAGz17l3vVMLN2REEaPT9RNkwAYBm3yeKFFGkRsItCQk7HJ8rAvB+4jw90uyczR07wAuTsyHh9tnu+0gJfihpO8lZ8qixW+dJU0ptXfF14y685yNNLm0wW86QSekj6duE+8O+iRyZlM7e8ewNSygTHi+mSxalrEkxYzJdSgbnJlzNZMFiqpjm/bXO/V5Kwj1k71iWTEpnrpK5Rn01IeFWmKtkyFsGlVyK8XzSF/uosdtGjj8SQvxH4NeGX/808Ae7fM9HnmOzxfu9hARgrpxJpOATrsIydV7cW73fy0h4gHlytpQ4T484k0WLyV2KQyQ83uTTBq/sH7vfy0i4R9xxuF3EzT+/BPwy8PTwv3+llPqv79LaHkq8MOJsrcdmx73fS0m4DVoDnzO1Hn0vvN9LSbiPrLcdzm31CJIyzoQb8NR8iXP1fiIp/AjTc+O5O207KbdKuDErTZvz9T5RMvD4seOOM09KKSWE+AOl1FPAV+/imj42HD/i5GYXy9A5Ol247YbA63G21h85TnnLIJ9OVNoedKRU/GClTSQV232PVw+M3/Q1232PS9sDJgsWC0n55SNBxw5GQgB+qB6oDHG957HUSK63B4GX9lVRCt642ORHjk3d7+Uk3APeXe2w2XFoDHy+fHyahbHc/V5SwgPGVs/l9GZv9PWB2xiQu9K0qXVdFsayTBaSDOfDyG4t+7eEEC8qpd64K6v5GPFDyddP1qh1XAIZsdV1efXAGGe2+gy8kELGIAgV+yZyFG9DktbQYwdM00gGqj4krHcc3l1rE4SKI9OFq77XsQNO13oUrKsnf5/Z7GH7EW07YKZs3ZISUxBJztR6GJrGocn8XXHWE+4Ojh/x2pkt/uR0nYKl8+RsiWou9cD0PZ2p9XCG19ts2Up69O4jzy1USBkaf3ahkThPjyBhJPlgvcMbF1vMVzKcqfWxTJ2Njst0yWKqaHGh3qfe89g3kUuM30eY1ZbNm0stcimdQ1OF0Xk/WbAwtct78JWPb4aUauR0OUHvtq8fL4x4fy0O8j05V0xUgu8Tu3WeXgZ+VghxCRgAgjgp9fRuF3avWWoMcIKIC9sDsqbOoBJyth5njfxQ8v56h8VqjiCSvHAbPRCHJwuUMylyaT2RMX4I8EPJqY0eQSgJIoWpCZRSIyfpwnafrhPQdQJmyxlKmdiRLmdT2L5D3jJu2UlebtpstOOsZMGKhUMSHgzO1/u8vdKm7wY0+h6HJwuc3eo9MM5TOWvi+BEFy0jkbO8zlqnz/EKFb5/bvt9LSbgHbPd9em6AZQoGfkDBMjhd6+EFksbAo5wxuVCPx4ycq/UT5+kR5t3VDmdrfTQNlpoOi9UszYHP5FGLSi7F84sVgkjeVn+cpglKWZOOHVDJpm57TZsdl9YgLifdaLvsHU+yoveDO3KehBALSqll4Et3eT0fG3nLoJpN8exCiZSmkbUMZksZtnseW10fIeJhtrnbLLvTNPHAGFwJN8fQBAgwDY1yxmCyZI0cp7btk0sZNPDJpHSyV6guPTFTYGEsS8a89aHJOyWcQkAuGbr7QJFPx/tBvetSsHRShk41Fx9sSinqPY9s+v6V4R6bKbI4liN7G9dbwr3jh45O8ot/cJLlhp2UUT5ilDIm5WyaxTE4OFXguYUK3z6/TSglZStFytAoZky6TsDYXVRR67kBThAxkU8n9/gDwnguRc8NKGdNqrk4cHqlTVjJ3b7zA/D8QgU7iMjdgZJjOZsaBdDuxPlKuDvcqSXwO8BzSqklIcRvKaV+4m4u6l5zbqtPy/Y5NJVnojCGrgk0ITB1DcvUWW87GLpGYSYu1fowAy8kY+o3LLuSUnFmq0ckFYenCrsarhdEEkMTyWZ6j/AjSXPgEUaKhekMz8yV6DoBWz2XS9s2uiZ4frFCMWMSScX7ax1MPS67u11Deqpokd0fD8LLJs7TA8Xe8Rw/9vQMmx2btKEzVUyPBqKe3eqz3LDRNPjk/nEyKZ0gkqP7WimF7UdkU/fOsRFCJP2TDxBffnKaX/yDk/zh+xv8vc8duN/LSbiLZFI6f+nZWb5zfhshBL/19iq5lI6hCZ5fKCOE4IXFCn4k71p1ycALeeNSEynjvejg5K33zyTcO5wgZKPtcGG7z8v7x3hiukjBurwPK6UIpbptG0/T7nw/L2VMPnNoHAXJ4Ob7yJ2exldaCPvvxkI+Lmw/5NL2AIVipWlzYCLP4akC6ZSGG4S8udRkuWUzXYxrWj9sDJ1Y77LedihYBi/tq17XWNrouqw2HSAu8ShnTNpOQDVrUsmlubQ9oGX77J/Ij8rArsdK0+b0Zo+8ZfDi3mpSrnMPWGvZvHGxhaEJXr/Y4s2lFn4YG8bHZ0vk0gYK0DXBOyst3lhqUUybFDMGM6Wry+6kVDRtn3zauOGhWriN/rmEjwelFOe2+vzG91e4sG2TT5sst2wAOk5A245V1aSEQErOrvbY6nrMlC2Oz5b4wUqbRt9nvJDm2T3lq9574IUIwTXO8sALqfc8UobGZCGNG0rO1noULDMxnB4C9lSzPDNf4qtvrfFzn92fBLceIZRS/Mq3L/Cd800sQ+PQVJ5c2sDQNKq5NC/uraJpAkv7aMfJDSJOb8bKncdni2Q+ImAWRBI5FPj0k6G8DwzfOFXjzeUWAP/+9WX+9qf3c2gyP+o5fWu5TWvgsziW5dDUtYH2e0XS83r/uVPnSd3g8QNP2tDJpnUubffpOCGmLtCF4OhMgT8+tcWpjR5rbQddExy+Ttapbfu4QcRmx+XwVJ5K7tq0fT5lDMv+4ubTb5/f5mytz0zJ4sW9VZYasWEWyd5H9lPtTDnvuyG2H17X8L64PcAPJfsnckkU4g64uD1g4AWst12EUPScCKHB5w9PYpkalZzJcmOAlIpa16PnhAzcEP06xtLJzS4bbZeUofHqgbFkg3tIaAx8/vjUFpe2+4RSIpXilb1VNjsu76y0WW4OGMvHRlPRMqkP78ud/7ftANsPObER7wnZlEHfC6l1XC414t6ITyxURmWAUiq+v9Ti3dU2hiZ4aV8VQ9No9H0afZ+JQvojgyoJDwZ/9eVF/uFvvct3LzT55IFknsujQr3n8adntlnvuASRxDIFhUyK5/dU6DixhHk5e7WYzErTpuME7BvPjcq6LjUGvL/eYaPtstqy+fKTMzcMqpWzKY5MF3CCiL2Jst8DgRdGfLDWHY0kOLHeYWl7gC4ET82XCCI56j26uD1gsmjd8r6d2G0PP3fqPD0jhOgSZ6Ayw8dwWTDiwdH4/RC6Jnhipkit6/DdC00+WO+yWO2yPRij74X03QBDFwjgbK3Hc4tXOzcHp/L83jvrZEyd99a6fPbwBJFUnNzoEkrF0ekCpazJJw+MEUmFG0iCsINSceQ6kgrL1HGDiOJNbrS9Y1m8MKKUMa+b4q33PM5v9YG4j+bwxxj5eFTIpg0MIcimNM7VB5iawErpTJfTvLRvjG+crHFxe4AXSubKGWZKFuP5FB3bJ1KK6aKF7UestGzWWw5CCPxQEkpFIoLzcHByrcv7q216XsTeao7js0XWkkTwgwAAIABJREFUOy5+06be9+g4IaVsCk0TSKnIWwZnNnoUswbLDZvDU3n+3/c2KGdSvLPS4cm5Iq9fbFLruggEE4U0fTe83EMFRJEkiCS60LH9iLlyinrPwzQ0MonQzEPBjz87yz/5w5P8q/90PnGeHiEsU2OikKZp+6Q02OoGuIHiB6ttFh2fWtdFKnhqrgQCbC+i5wWYmkYQST6xUAGgaMUiL5oAQ9Pwgo8u89tTTXrnHiS6ToAbyKFRC4aIM1FCxAI+4/k0e8eznN7sMfAi3rjY5BML5VEfnO2HCASZD/U1bfXckd2mCT7WjFXC3eOOnCel1EN9ugeRJGsaRFIx8ELeWvZJGTppQ+PgVIHzWz2KmRQX6jZHZ4pXldxM5NNUMikaA4/Tmz0mCmkKljGa7bSa1jk4WRi9pmDBy/vHmChYjOVT7J/Ic2ASnCC6qQT6WD7Nqx/RkJo2tVGGy0os9dvG9kMaA49iNkWE4gACN5Q8v1Dhp15YwNQ1AilZaztsDzwsQ+PYXJGBH/Ef3tlgumTxucMT1LoubTuIHaxKhqmilSgtPkRESpK3DNxIMlW0eHetw2rb5YmZApOFNFIqKlmTrKlzsTFgqWHz5nKLyaKFrml88dgUR6aLBKFEE+CFEqXixuLlhk0urTNdvHwf65rgucUKBctEiHg+SCWXYqKQJm3opIwkEvkwYJk6P/fZA/zTPzrFd85t8+rBm8+HS3jwKWZS/MwrC3z1zXVObXZoDFyc0GRPNYNlGpxc71HKmkRSUsmmyJg6XTdgLJe+Skxgtpzhx5+ZZalhU82nKGWTbPLDRMEymSllaPQ9pFJUsik6dsAfvr/Jqc0uByYK/MTz8xiaxrmhM+QEERDPgXxnpQ3Eow2uFJZIG/pluy2xEx5aHssO5MmCxYHJPEemC5yt9cgTz3lJGYJDUwWEiHX7nTDkw4Oja10Py9Rp2wGljMFSY8CTcyV0TSCVopgx2eq59JyQ1bZDNqXz7J4y85Wro0p3I1VbtExe2lfFD+VdVf15XHh7uc3pjT4Fy+TAZJaLdRs/lDw1W0QpRcv2+fzhCWodl6yp4UYR1WyK1Xbcz+b6EbWuy3trHcJIcWgqz1NzpaRc7yFjppRhqpjBMnUuNnoMPEnBioMrXzgyge1HnK71eP1iE6UUjb5H2tCIpEQfCs28sFihOYhL7gxNULAMOo4/qo/vuCETVxyU5WyKF/ddndVO+uEePv7Wp/byq99d4n/6vRP8h//8U4kx9Iiw3fNJGYKBF5I2NEoZgxf3jiFRnKlFmJpJNm1g+3FlyOcOT5AydCofcpAmi9ZtyVgnPDhYps5ffm4OqRSaBqWMwcCTtGyfSS/NasvGDyNMXaOYMVhrO5yr9cmmDDpOwPn6gCCSzJZjWfO+F9J1AqaK1k3ttjCS+JFMhKUeYB7bT+bARJ7jsyUqmRRKQCglJ9a6vL3cYe9YlsmiRdY0sAwNKRWaJggjScf2QcSKJ+tth0AqXtk/xqsHx1Aq7p84ud5lqTmgnElRypi07YCJwr1xbhKD686ZKKQRIi55bPYCmgOfWt9l4IdcaNg8NVdiopDmy0/N8CentyimTaaGh2E5m2KhkqXt+MyVM3TdgKfmSvTccJjWTyREHxYquRRPzpU4udFl4IakDEXBMilZJqc2+0wU0rx2us5qy8EwYKESl/Y9OV/i8GSBes+jkkuNym7eWWkPr4NYJdM0tKsUmhIeHSxT53/5i0/yt/7tG/xv//E0/+jHjt3vJSXcBS41bN5abuEEknLW4NUD4/zE8/P8u+9cZKpo0XZCZhWM5VPMlDNMl5KZfY8aSil6boBUCh2NZ+Yr2IEkZ+ooAQvVLMsNm0sNm54XYAiNUCrW2w7VrIkuwDB1wigWAXnjUpMoUjT6Pk/Nl274e8NI8r2LTRw/Yv9Ejv0TiYDQg8hjeaK/u9Lm7FYPx48IpKKYMei7EkVc71zJpqhmTZSAP3hvA8vQmSymObnZG0YO0jw5V2K+mkUflunsGMthFCvlVLMpJPE8qfJ10vU9N8APJV4o2ey6zFcyd3XYXhBJVpo2+bSRRL5uwP7xHJ/cV+GPT29xrmbjywjHk7gZyenNLmEkyZg6X35qmkMTcV1ypBQHJwujDW2t7bDZaaIU1DoO6x0PJwjJpQ0WqjeWnLX9kIEXMZ5PJUpd95nJosVT84oL9T4N22eulMYytVg1s+0wW7IIo/heVULEJZpBxIHJAt+70EQR18DviL8Ewz2gnDWZLWdI6RqpW8hGRlLRGHhkTH0kKnNkenejDhLuPV84Oslfe2WRf/2tizyzp8xXnpm930tK2CX1nocGpA2NnBWX5n39RI3NrkdrEDBVsoby5RpKxYb22a0+G8MqhXBY5rV3LMv5+oC0oXNgIjfa6xv9WGkzCX4+uDhBxB+d2OS9tQ4ZU2e2YvHZg5PkLANdg2fnK5zfjsv1MmZ8Leh6POcznzY4NFUgiCRTpTRSKeSwjCmQH62m6IYSx4/L/1pDpdePQinFdt8nl9bJpgy8MMINZCI6dAecrfXoeyGHpwo3nfH62DlPfhjxjVNbLDcHbHZcPnVwjLQhCCOFhmCmaPGlJ6cxdI33V9uc2OwhAH9Z0uh7cUYqrfMjT5Q5s9UjpWtMXJF63VPJIhXoQrCnmkGIOGO11XMpZUzShk7PDXj9YhMpFdsDj4m8xcALY+OpH8te7nZTPVvrsz4sL3t5v55s0h9CKcV/OlvntdN1vnehwcALRyp5QmgUMgYX6wMWqlneXe3w0r4qXihZ/FBT71w5w8VcGjeIeG+tSzWXYrPjUbAipOQq5TQ3iFht2VimztmtPlGk2FPNcuQ6qo4JHy+tQcA3TtboeSFSKcq5NK9vNEAJvLkSR6eL7J/Mo6Ox2XXouAFnal3CCPaN53CDywfi8dkSqy2bIFKjkQWGpt10mOr7ax3qPY+241OyTIQQFC3zrg9hdfy4wX08l77hrLqE2+Mf/dgTnNrs8l/95jtMD1VVEx5O/DAijCShgpSh0XVC3l/rsNpyePXAGI2BzxeOTHCq1scNItKGxrfOblPruiw1bWw/ZKqYYf94jp4b0hkawKWMyUQhHlVybquPpsGLe6vJ2fyA4vghm20XO4hw/JClbZs3U61RmV4uZXJwModAkLcM5sqZK14bUc6YZFL6KCj+xEyR719qkg91vDAifYM+9XzaYHEsS8cJODBxc+XFnTmEui54fqHC2yttglCybyLHgSRrdcu0Bv4oaHlBG3xkdhAeQ+fJ0AQrzQHfvdAgreu8t9rliZkibhhhpTSadsCfnKzxhaOT2ENFvJ4TMFfOxOVYGZMXFqvkLYPnFipIqTi12WPgh2gCMqbBkenCaCbT6c0er53ZIpPS2T+e51MHx/FDSd8NRwNwIY5cfLAWixY6QbTrw3fn9wsBWpLZuIZIKpr9gB8stzhf76OAtC44W++zfzxPNWviljOkTZ182rimZ+1KsulYPXG+kmWqZJEydbwgIjVUTtvquiBgteXQ7Pu4YTTqlXGHDaYJ95f/6zsXObnZRap4BtN4Lo3tRQy8kK+dcPlbry7w55+Y5ly9TzGrc74ey5dPFiyKlnnVwZlJ6RyaKrDVc0cBDO2K5NFW1+XERpeCZfKJPeWRA7NzLRiaQBKrO+VvUO631XMxNe22J9wHkeR7FxuEkRrNqUrYPWlD55f/2gv85L/8Dn/jV17nV/7mi7yyP1HgexjpewHvrLZp9D2UlGTTKXquz5OzZbb7Hp85PEkg4wCp0gXfX2pSsEw2uy4CGMul0UXseFWHIgOaFle1ALhhfJ9Lmcx0epDRNQ1NgzCIq5Iu1AccmsxzbqsfB01LfdqOj+NHHJuNBaaVUgghOLvV43Sthz3MIK21HWpdF1Q82mKj7bJ3/MaO0e0o8O1kqaIoLjMMhtdU3w3v8F/+eJJJ6Rh6nEi5lazdY+c8RSqOACEVThQQhBGmLqj3Q95ZaaFQ9N0AL4woZ9PMliw+8+I8F7dtXj04Ri4dNwMuNQZMFiy6bsB622Gj6yAjmKtkKGVjY0qpeBCvF0gGXsRcOUJKhWloDPwQP5K8tHeM+WqGjKHzZxca+KG8K1LFhybz5C2DrKnfNP34OGLoGocmc9hhhAACCaFUfLDaxg8llqHzxeOTTBYzV83zuJIgip3gp2ZLdN2AYsbE1DUOTubpuQFpQ6fe9zi5HjvFph4bybmUwd7xLI4v2fcRG2jCx8OFep+3VzoEQURELB9rByEHxnOc3OyTMhQnNnqsdz36bsREIcVPv7AHhMD2Q5YbNuWseY2a1mTB4uk9sZF05TW01nYII0Vr4NNzw9Hrjs0WWWk6jOdLo2j0h2Vu4fLwbIDnFi/Pj7oVIqkIo7h85MpsWcLuqeZS/NrPvcLP/B/f5W/+m9f5pz/xNH/h2bn7vayE22Sl4eB4IV4oCSXIyEczNVbbDls9n4OTeRp9j2UtFpYqpHU0AZ88MEYlm0LXBNVsamiMaYzlU6QMbdT8v388zgZYhv6RQk9SKqRSdJyAgmUmKpwfM6YumMqnuWgMcAJFx3Zp2AGL1QwdN0RKhe3Fjstmx2W97dIceBydLuKFEee2+limzrsrbbpuyKmNLumUzkzJuquBlZ3S7mLGYK6SxQslPTfk4GQeN4gwNJGIWN0Clqnz6oFx/EhedzTQh3nsrGpT16jmUiyOZ1lp2iy3HXpntnhiukjfC6n3XGodj54XcGiyyJ5qlkLa5Nk9Zc5t9fjNN1YJpUTXBEdnirywWEHXBVlTJ9JjVZZ82kAphR/F0tVOEGLqOuP5NG9ciqNUO6lcQxcjyfKX9lXpeyHVuyA2oGniqmh4wrXMV7PsH8+yvB0PMhWAF8W9L9t9n5Wmzc//ucOjoadBKGkMfHRNkNYFv//uBkrB0ZkCnz08cVXv0o7xK6+Qa9w/kUfXBMUbzO26W+wInCTcGqc2ugz8kEACQwlZ249Imzq1nksoIwqWwUFNx48k57f6nKn1+cRCma+fqLHctHl7pc3Pvrx4jQM1notFSa5ktpyhbQdYpkb2CueoYJkcm715xGunp+rDj28Fy9Q5PlekNQjYO57MlbnbTBUtfv3vfZL/7Fff5Of//Q94e7nNP/zykUQ16yHiyHSRUjbFZi8egBoJKFsCXcCpjQ6/9r1LpIeGVmPg84fvbSA0wedy41yoD8ilDarZFO8Oe2WOTheuOhtShsbR6Y8ehVnveby31mal6TBZTFOy4tmRt9IfK2WsFJu3jBuWhiXcHFPX2TdZ4PWLDRTgBIr3V1vsH8+Tt0wGfshCNcfAC5kqpvnGyS1qXY/zWwMWh3vrXClDytT44EKH9Y7L8wtlDkzkRz3ya22Hs7Ue4/m4jz6MYtuy4wRsdl2mh+JUH4Vl6qPMFzDqx15vO5xY72IaGi/vqyZKoLdAytBuOUjxWO7olqnTcyPcUBKpAEMIzm71aQ18XF8RhAFrLZvDUwVmy9bIEF1pOijigbggcMMIoeIm70hCwTLQEGRMjTeXWrTtgMWxLF95Jo4+fuNkDaXisryjMwXcQLJ4RT+DZeoP3AW+1BjQdUIOTOYeOQPg3FaPi9s2UoJGXFqVMTSCQNKIPJZMjd98c5n3VotkUjoDPyKlx4IijYHLu2tttno+ax2HyaLFEzPxBrbcsDm71aOaS/H0XCmWOhWC+UrmnotDvLPSpt7z2Due5eBk0kt1K0RK4fohoYo3xO2+h2VqnK316Q1LH+o9j2OzgkAqUqbOt85tj7JCUklag4i3V1p8+mAcueq7IbomeHe1g6ELXtx7+fCaKlr4oeT0Zo83LjV5aV/1IyOD0dAYKgyNocWxHIo46j11B2IwM6UMM7tUB1NKcb7exwslhyYLSVT8Csbzaf6fv/sK/+QPTvEr377I10/W+J//wnG+cGQyEYd5CJCoq9QxBVDOWARR3KP8z752hmre4tK2zdGZAiBQEk5s9oaRfg1Dh44d7x2VbNy/WMnGGSgvjGj0faq5FGlDoznwyaWNq87+rZ6LlPGg1nxaJ6XHwhS3cvmc2Oiy2XFJmxqvHhgflfAn3B6GJqh3Xfxh9Vuo4tL7rb7HdDGDVLFohBMItvseAoGhxyNrBPDUfIm5coaiZXKm1qeUNRnLp0ZDlCGuIggjxWbHxTI1Lm3b8cxBPyKU8fOfPzJ5R+tvDmLnPwglfS984GzLKzm31WO773NgIn/PlKnvNo+WNXwLSKl4/WKTra7DwItV0bpeSD6tI5UkIi6zadohXiB5ed/l9OpsOcN6J1bfutgYUOu4/H+9Gp4f0fNCSpkUcxWLQkanPdw4631vVL9ayaVo9n3GcumP7KF5UOi5AWdrsZpMpBTP7inf5xXdXX7rzVXWGjbBMDlkilhdKVISKeNyie+ca/DeaofxnMXnjozjBTtqimkyho5lxJlM279cX7zecXD8iG9vbGP7ES/srVwVAVxu2PhRxN6x3F1Np4eRpN7zANjseInzdIv0nFj5EOIDcuBLLm0P0HQNDQlo6JpG2tBwA0Gr71MoG9hByI8+PcPXTtToOD5BKFlq2Cy3bKJIEUQSU9fi/rqBz+wVmeB6P/6cbD9i4EeUMtdeBzsZxB0hiZSu8elDsTH0cTcCK6XY6LiYusZEIU2953FpO26uNXWNw7dRo/84YOoa/8NXjvGl41P8t7/9Hn/7336f5xcr/P0fOshnDk0kBu0DTK3rstl22KkZCGScIdA1jSiSREohcDm/1eenXphno+2SSxvMVSz+7HyDnhuSTWuUMyksU+dMrY8fSnJpg08eGONPTsUZioVqHMRYbTkYuuDVA+OjIMR8OUvbDnhqvkQ5E6t23mo1wcCLzyIvkMMqmQfXaH6QCaTktdM1/OGFIBW4gUIqycALyaY0/vTsFhcbNik9LvNflFmyKZ1TG12WmwNaA5+X91f53OEJem7Ac4vVq/ppZksZznpxoLXrxMIifTcc9cjuJnO4dzyHG0RYpn5XqpnuFW4Qjc6S8/V+4jw9qISR5FJjwPYgRAFBGJI2I7Z7sWFgaoBUWLrADkK2+/EMlxPrXdY7Dk/OFHG8kJ4fEYaSKJCcr/exUnqs0qMkl7ZtpooWkVRXGTnjuRQ9N6CSM6n3PDY7LrNl654OuF1rO5zf6jOWT912c3jK0Gg7Pj0nTks/SiileHulzSC8XFbnRTAIJNlhhEZKxVbXI4oiCmkD25c8NV/k6HSRNy42yaQMDk6YPL9QZjyfpjXwR/N+LtT7ZFI6jh+x3fcZy6XwQokfSs7UeqPfeXCyQBjJu+JEGXqs6FbruldlNBM+mndXW9hX9P8owI0gIxTlnEUpa2KZGhfqA56ajT+vSjaePu+HEc8vlDmz1UcIyKZ0wlAiRDwoV9MEAmj0ffxQjpqE943l8MNYMOb0ZpeMaXB8tjiaJ/fGpRa2H3J8toTtR2x0HLZ6Htm0PpJE/zhZatic24oDKc8tVsikdDQtDjQlPZU35uX9Y/zRz3+W3/j+Cv/iT87xN//NG0wXLX7k2CTPLVTYU80yVbCYKKSv29+W8PEz8AO2h1F7iPeDnifRkFimhkCQTRuM5UwGXsjf+cx+IHa6vnm6zrmtPqtNm0NTRT51cIxIxWeMF0aj/X/gRZza6HJwKs9EPk02ZRBEcuQ8lbImnzo4fkfrf2K2yNK2zVg+lZTt7YL2wKfnqauek8SVAEhJo++PPstSxuSHj07ymcMTnNvqUet6vLPS5VLDYbPr8jMvLVy1b4eRJJSKhbEsC2NZ3CCi6wS4QZ9ixuTQZJ62E4zG3JxY79IYeByczN9y1UA+bdyXs+J2SenxHMSeGzKef3CdvA/z2J16dhD3roxuCRHfDJECTYKhgRRxad0H611++bXzfOnJaRp9n9W2PRyiqWNoAssykUoyX82SMS8bEwJoOwGWodN1AjIpnTCK50AoBee2YnW3KIpL/m43LVvvefS9kPlK5oYzYPxQstQYcHozllPfkVL9xJ7KLSt0BZEimzIwNA2pbv7zDxNKXZ7JdfU3oJI16Plx6ZWpxf1sL+ytMlfJ0PdipbzVtkMxExvVlXx6lKGbLMYH4RePTfHeehddCNKG4M/ON4ikYuYK4QBT13hzqUlrENw1WdHDU4UkC3CbOEEsGvLhSzySimf2lDF0QdcN6bkh//rbS2RMjRf3VXFDSWsQkE8bfOn4FOWsycWGTb3vkUvrHJ2uMl2yOFfvs9p0qHXj0t6xfJpKLsUr+8fioEzboeuETJVi9b6+F46ix7Wuy7HZIufrfRbH4mj0TkbrTlBKsdy0CaVi71juljMgOwYggFSKghWvP7hFZaLHmZSh8bOvLPJXXpjn6ye2+Opbq/z2W2v86neXr/q5QtpgspjmmfkyrxwY44vHppJh2/eB1y+0CKJrDzxFfG7MlNKESvHNs9tECv7Bl45gaBr1nsvrF5rU+y5pXWOmnGWpYfPnjk3RdgJmShaaiANmZzZ75NMG00ULXRMcmb75XJlbpWiZN5VZTrg5gVRogmtsH12D7UHAhe0+mhCkdI2uF7LSsPn115cY+JKe6+P4IY2BR2vgc3y2SCRhYSxL1/H59TdW8ELJF49PkTENTm/2sEydl/dXR3v71DCI6wbRSLV1qWHvuuR6B8eP0LTdZbfuBpoWl7X7kXygSws/zGPnPJl6rHCz1nIIFBRSsWOQEgKBJFKCKIo3ymbf50/P1nGCgKKVZr1t4/gRpWyKAxN5QqloOxFBGBszQRAb1pcaNpapMVPKsNy0WW7aBJEkCCWZlMF4Ps3AC+lF4UdumKstm4vbA6aK1sggHngh76y0R4+fnLv+Jnl2q8dG26XjBLE3N3QSV1vOLTtPhibIpHRMTTxUF/WtoGmCUubav71EMV606NcHKKVQAuYqWRp9l5MbXSYKaWodhwPjOYSAPeUs1nDz6TgBzUFcy753PMfnDk0gRFx7HO3swCKuhXaCiOmSNXK6al03mclwn1gYy8a9BB86JDNpjbmyxXTJ4v31LmdrfaRSeKFku+dh6vG90bJ9vn2hQdkycENJretR7zk0ej7H50qjviRNg/SH7qOxfIqNjoOhayPhmKIV18bvBEhKGZPPH5kY7QW7GZpb63qja04T4pbVHveN5TA0QcrQGB9myh+1Hsh7TdrQ+dGnZ/jRp2cII8nF7QEbHZda12Wr51Hveay1HV47U+erb6/x32mCTx8a58eenuWHj07etix9wp2RNQXhdYKFliEoZmI5Yx0NL5S8t9rhd95eo+2ErLdtTEMjmzLJp3WKlsHhqbgfUNfi0RSGrvH5IxMcmy2w1nIQQvDMfDnJ3j6ApA2NjAk9/+rn3RAMFE4gOTZTwAsVWz2Xb5zeRBMah6byWKZBNZfCcENyaX1UQgmw3HToOHFw7NzWYFTO7fghZzZ7ZNMGi9XsqEwzbcQjKVoDn+nb6HGVUnFhe4Am4lmEV/ZbbnVd3lvroAnBi/uq91TA6lbQNIH1kJWX3tJfTAihAx8opY7e4/XccwwBte7lPpe2F1/QuZQgCBT+MMKqC4WpCbp2xH98b4u0qZFJa+RTBkKLp0j7ocT2YyWuomVwru7ScyOWGzbH54qc3eojlMKXCqGgnEvxUy/u4fhsEdsLObHRZb6cYeCFXKgPKGVM9lQznK51sT3JcsPmYmNAyTLZN5bFNHSEANsPsYfG9/VQSjFwQ7wgYqZs8dxCmRMbcTPr7ZTfaULE7+VHVHMPb3Q5iCRBJK8x9pbqvWt+1gkU7yy38EJIG4KUpvHOSoc3llpYhoYbKsZzDf6LHznEVCHNdy40WGnZHJspUsmZnN7oUeu68ayQlTYzZYtcyiCfNsilDWZKFu+sdogihalr7Klm2e577BuPy7jutPG+4wT03IDposXAj/jBShtDEzy/WHnkHN+7TdkyuU6gmY4j+dXvLlPOmuwbz9JzPASQ0k0+dXCM5iAeWRBJRcfxqGTjSfKXtm36XkCt6+OEIc/tqdL3Ap5bqGDqcRZypTng2GyJJ6YLvLi3Emd4h06Rpgmemiux2XVpDHxOb/bivaGSpWX7fPXNFVK6zjMLZfZUry3P7LoBGVO/rpO1I5f/4cc3Q9MEi2OJrP7dwtA1Dk0VrjvPRSnFB+tdfu/ddX7/nQ3+wW++gxDwxHSRF/ZWODJd4MhUgcPThZHDnXD3uDLLeiVOqJB2gB9KShkTO5CUsyavX2pRyZrYQchEIc1cJcPnD4/xiYUxytkUv/HG8iiI+ZWnZylYJvWez4GJwlVneDjsp/pwJkAphVJc1fMkpaLWc0dOV2vgM12y7nsW4WHECyPeX+sA8YDznfMya+oM/Ou/JgQ22w7PLZTwwpBoqMIaybjnef94Dj9U9LwQFFTzJmlD473VNrNli+mihR2EPD0fj6UIIonjR3FJvxD03YCJgsVUMY0Q8Tl+IxXd9bbNe6td9k/kRmXhpq5xuhYH/CwjlsxfuOKsaDsBSsXXet8N77vz9DByS38xpVQkhDgthFhQSi3f/BUfL0KIfwa8ALyllPr5j/rZpZbNavvaO2LgX71hOiE44eUBpmEgGQSSnhHhhZJztXgw7qWGTc8NWRzL4geStuvTGfgsNwekDZ0gkghNMF+2eDpd4fsXm8wOM1IdJ2Sj08Ib/p5SxmSjY/Mvv3mO9bYHKMbyaZ5ZKOOGEoRguWnT98KhY3Ptv0+puDxwq+dyutbj5X1jlLNpXj2Qvm0J67bjI2VcO7vV85go3L6y1/3GDSK+d7FJEEqOTBeuMjZb3vVfM4j7NgkDxSC4LARhinhOmOsH/NIfn2WiYOFHiveWW9h+hBdGtO2AnhuyZ1ji9+5Km+lynDl8fm+Fth0QDS31pe0BAy92cLd7Pr/63SXShs6ff3KarhswV85e4yAPvJDWwKfjBKRNnQMTObxQ8uZSEykZSWAHoSQAGgP/vkvWb3ZcmgOfxbHsfY+wXu9qgyXYAAAgAElEQVQe+ObJzRv+vB1K7K7Hejd2nNIGWGbEP//GOfxIxpPiNQiUYO9YloKVAgHbfZ+BH3FqU+NPz25zadtmLJ/mh45M0HVD+m7IW0st5qtZjkwX2D+R58BEHtsPMXWNkxtdlrbjeU5Pzhd5d63NfDnL107W6Ng+UsGFRp+/8+n9V/1Nz231uLRtkzY1Xtk/RiRjJ32nPG8sn+b5xQqBlKNxCQ8jfihZazuUMuZtzbl6GBBC8ORciSfnSvw3Xz7KO6sd/vRMnW+f3+arb63R9y7vSeP5FAvVLItjORbHskwU0mRTOhnTABRBpAilJBgKmAShxI/ir/0wDioJASldH8n0pgyNtH75cUq/LN8rVTx7SMqdx/GZEw0fA6R0Qdq4/H7p4f8NTYsdgeH7KBWXwcnhQbbznBz+jBq+9/X/Rlf/vXQh0DWBNvp//PzOkHhNgEAQyrjXJIgk4fBvM5G3WLiiR/SdldYNPxsvAs+J6LoRlg6X/IhW32eyZA3LfxUKQc8OWG44bPd9ztcHrHcc8imDvhvy6oExTF3H9nuj/d0NIl6/2CSIJMdnS0yXLLww4q3lFqfWe0yXLT65f2xUxnlqs8d624mHog7Lz0MJP3R08oZB1YTrs9lxaQ0P/c3O5eG1XTfgowZB+BJ+9webjOd0Om5EJqWTTxvYXsgbl5qkhIbQIGfq/MYbqygVi1B8Yr7CX3pulomCNQqYFS2Db5/Z4t31HmkdvmuZFLMpxvNpDkzm2e56hEry545NMVW8fJ5fqPf5X//oFH6kmKvEir9dJ65YOF/vc3KjSxgpXmpW+cvPzY/66+fLGd5ZiWdaPrOnhFIKN5A37Ltcb8fVU3squV2NQVlt2aMxGYW7FPhZadq8t9ammk3x9J7yx1YRcTu/pQJ8IIR4HRjsPKmU+vG7vqrbQAjxHJBXSn1GCPEvhRAvKqXeuNHPb3UHN/rWLeGFio2uz6+9voKhx8a0krDSHDCWS2F7PvbQ+L7S8F7vuESqTccNKVomui4QCN5cbnK+1mfgR7yyv0oubXB6o0/PD8mYGpap4/mxtGnXDVhu2qy0HBaqsTDAHjuDE0Sc3xrQ9wJaA59gqBR3cdvG9uPb/6n58m33JlSzKbwgomUHHJt9OPtoHD8aTdxu2wF7dtE/uZOttEM4UxvEKjsaSDRajk/G0Oh4EWP5NKvtAYWUwdmtAZomeGV/lfF8moJljLJN3zi5ScsOmatkKKSNkeKMF0R8YqFC1+kyXYoHMf+n03X6fkgxbbLVcxEinuOla3GUacfGiKRiqmix2fHQNcHYhwzL1sCnaccO1ceRkXKDiA/WO0OJ/pDnF+9fA+uOjPuH+8u+dbFzS69XxCUbbnj15PbB8LsnN/oYOkNjU2csn6fe9ThV69FzQhp9j42WjaELNKHIpU1+sNLitdOxmtZL+8YY+LHK52bXpd71KFg6hYxBdlg+a2hiaCzGRqETxAf1UsPm6bkSHTfefBw/4nfeXuM75xpMFFL81VcWR5mjR6H86+RGl3rPQ9Pg1QPjt3UtD7yQtbbDeD79wDteQgie3VPm2T1l/v4PH0IpxVrb4Uytx5lan6XGgEvbNt+70OB3frB23YDaR2FoIu6/fdSaWm+Dv/PpffzCjx0bff3uUvOmr4kUDEIgjOh6EbWui1KMlNkM0eP9jQ4DL0RJRSTjsl0viPj8kYk46i8lay2bnhcP2t7ue3hBXCExXbL41tltXjtTZ+CF+FJyaPLyfKBQxopvcR+1wvYjZkoZTm50E+fpNilnU+i6iPudr9gPfv/dtZu+VgJbg7hnVvgRQkn6nhrZCikNvFDS6Lvoho7thaw0BpyudXlipsgXj0/z3Qvb/O4P1qn34wBdGCmEJrAMnWf3lFlt2Zzd6hNGkqVtm59+aYG91TiQ9vqFBvW+x3bPo+P4mJqGAk7XYhGiMFL03YCvnaxxod7n7372APsn8iw3bdZaDkXL5HsXm6y3HdKGzgt7K9cIi33/UpNffu0CfhTxs68scny2xKXtAZWsycGpwi2XkbtBxKmNuNrHDSNevImYhRtEdN2A8Vz6hg7bVs/lm6e3eGOpSSWTwjINnl34eFShb8d5+oV7tord8QrwteHjrwOfBG7oPLnB3TkkIiCK4vlAEpBRHOVP6TvPXE0+pQ8zAIrTtS5HpoqsdRzO1vqc3+pjGhpLDZsDk3lSpk5WKaq5FAen8ry4t4IfyTh1L+Lo2YV6Hy+IJS11oRFEktfO1ClZJrommC5aVHMpeq7P+a0+QaT4zKHx21J1c4J4UOh0SWer5zNbfvgU3MpZkz3VLAM/ZN/E5bKjIIg+4lU3RxI70gGgiYilpkM5oyM0nb4XsH88j5SSvheQTZl8sBYbe/Wex4t7qygUuhbXzYeR5OhMgdO1HtmUzmwljiztDFw9v9Xn1GYPP4pIGxqzpfjfsyNqYhk6E/k0+YzBfCVD2tD59KFrlZqCSPL2SgspYyfq41Di0bU4EhxG15ajfJwEV8m4X91fdjd2hOHZSxSBIyW6pmEZOvMVi3Nb3WGJBHSG859MTRCpCC/0ydjhSGlos+PRcnxsLySTMshndNKGxkI1x96xLIemC2x2HJwgYt94Hqng/bUufTfg9GaPF/dWSBnx/Kdvnd1mpWWzPfB4f63zSJXdXZ15uL3Xvr/WoeeGrLZsPnto4q6OC7jXCCGYr2SZr2T5oaNTV33PDSI6ToDtR9h+iEBg6gJD1zA0QdrQYkVZQ8PU40b3nT6ISMaZKD+UeFE0euxHcvRYiMtZHu3KrI62k92JGwf9MB4Q7wXR6PVeGGd8BIxeK7g6OySIHQxB/M2d5z78+V7pIO5ksaRURDLOikXyyuzV5WyWVLGzaOgCQ9NGf5s9lasz8+e2b1CrdQMUsZz5lad+qOIZTZGMf0AJ0AQESpE2NaaLGS7WB7y51MIdlv/FBmmKluPH/x4lKVoGXiCpZlNXCQUcmS7ghRGBlJiaxvbAY7aUoZiIt9w2pYzJZ4bKhlfuBe8uN275PTRA1zXG8mn6vjM6VAIJfS8ib+m4fR+EYq0V0nZC3lvrDBV4I4JQDR3q4UtlXE64I86jETtVjYHH+a0ey80BH6x3aTo+USQxDZ1iJsXAD5ksWFRzJqamkzVju7LtBIRS8f5ah/0Tebb7HoYeB32tlKDrhAgRjmZDXcmF+oCWHT//+sUmXig5tRGXkku4ZRVnQxOkTQ0vkORukh0KIzmqGJouWTfs7Y//VAo1vPki9VG5wrvLLTtPSqnXhBCLwCGl1NeFEFngQSiwLQMXho87wPErvymE+Dng5wAWFhZ4Ye+dyX9ej6whyGcM+m6AVBqWqVG0DKRyR6VfADlT4ytPzzBVylHI6ICgYJnknICJfJqtnoepC/ZO5JgtZ/jc4XFMQ/DFYzOM5dOxxPHQ8NE1gR9I6n2PYUKFqWKa1ZbDfDmDF0qq+RQ/+cI8P1hpc67eZzx3ZzLjKUPD0GPDN/eQyugKESsZXe/5O0EjbihWYqisqAmkVFimzlQxQzmbYr6cYX4si+2FrHVcglDy5Fw8QNfQxfDwtPjEYoXZsssr+6scnSnx1FwZJwiZLmYY+OFog5kuWRi6IKWbHJ0psDCWpZwx8UM1kj3PpvWbCk78/+zdd5BlWV7Y+e+57nmX3pV3XdVd1TPdNW1nprsHZoABDewAfyBpBYgVRIhgJ2BXEQKtYjfERrAKLUKwihGLNCtMCIQZBMMYAc24nmlb1a7alM+q9O55d/3ZP+7LV5VlM6szK7OyzieiuzJvvnzvVL377j3md36/5c4KrC1884MwdY3H9/RSd7w7Pg/Xqx1jPQkWas6K2G+AHz46yF+emr+j543rUc2vbNLEDwMqLR+JYG9/kk8+OMRAJsZU2ebiYgPbi8oj+CGkYzqFlEXTCbB0QS5pcnAwgxdF5xLTNfoyMUbzCYZyUdmDHT1Rdry9V73Pjh+QT5rU2i65RLSvbiSfYP9AmhOXSkyUWuST5rZLRnJ4OEshaZONm2selC93kHRN63T4t4cPUmRd7yQHisJ27u8O+JN7srwwXrvt45b/pU0dUnGDhhPgBVEnOG5ExXGbrozSm3dWi48MZRnORdl5hYgSsEiigeLRsTwJUycVi0ocPLKzh4F0gkLS7CS1uXKuxgydj+zuZTgX3fN35BPYQUhaJXG5IzeaQPmpp3bzV+/cfgBl6pBPmOzqSdKTjmHoGmfnm0ggYUJ/xmIom6Bme+idwruWoZGM6WTiBn2pJI4fZfdNJwwabZ9i02X/QJpHdhZ4ZFeB1y/nGV+q05uOo2sa+YSJqQtGcgn296e5uNQkZRl89EAvHz0wQNP28aVkJBfn7Fydv3xrmoRldPtCO3qi9OiFVIxMTOd1UUbTNA7coDbks4f6eX2ijB+EfOxAL003mkgxdbGmenWGrvHYnh6aTkAheetrTCBlNxuyfYuJ7oFMnOcODVBIWBQSJoeGsqtuzwclbhZTfN0DhfgnRIOQHinlPiHEAeC3pZTfs5ENXEW7fh5YlFL+iRDis8CYlPK3bvTY48ePyxMnTvD2RJlf+eIbLNRscimThu1jeyGP7C6QjcU4OJzCD6IZrtmazVy1TX8mwbMHemm4kjPzVXQh2NOf5hOHB3ltvMS5+TpHRrNkLYPxUpvz83VMAzwPHhzL8qOP7uy2o9KK9qzETZ3zC3WmSy36M3Ee39dL0wloOh496dhNNwNPFFsUmw4JU2egs8IUdOK456o2hZTVDdFz/IDZyspja2F7AS036FZJ3w6OHz/OiRMn+Ou3pvmf/+hNlrc+acCOgsVoNo4XghMEHBzIUG77jOQTPL6nwJ7+LDvycb58aq4bonVyoszOnhQPj+XIJkwKKQtD06i2PRZqNpYheHAkT7tTsO5OOjj1tkfLC+hPr1zCvlxs4vghe/pSq1o+r9selZbHYDZ+x8kptpPjx4/z0iuv8m+/9h5fPjXNfNXHJRpoDqdNvv/oEIWkxfhSk7rts28gKjzY9EL29CTIJuM8e6iPsZ40rhfw3myVuapNLmGxrxNmc3a+xkLVoZA2GV9sUmm55JMWPekYdBKyPLorz1AuSbXlRqE4oWQonyAd05mu2AxkYgzcJNNSGIbU7Kgmne2F7B9IEzd1XC9gqtImnzCj11KAK6uQ+aTZjY9fviYo97fjx4/zyiuv8ty/+VsmKlfCc3sSkE8YJCyLdNzg0V29jOQT+MFyv8HknZkqZ+YaCASjhWif6/KG/ELKImHp9KZi3X0n053000PZOF4Qoncyd+YTlro2b7Ll68H//ucn+b1Xr+yJHUxqHBzOkk/G2NWbYkdPgqRl8OS+Puq2Tz5pkTJ1vvL2JJeKbR7eWSCftKi2PVKWwWLDoT9tcmq6Tm/K4ukD/d2isGEoqdkeNdvD0ARNJyCbMLvZWiEKU7N0jXzSYrocnT/ZhMFspY0XhozkkjcMy/Y6K8BX74+VUq66T2d7AU3Hp5C0aHtR3cG4qTOSW33x5rVa3iu9sze5aQkthBAnpZTHb/izNQye3gQeA16RUn64c+yUlPLourX0DnT2PP2clPLnhBCfB35XSvnqjR7b19cnd+/efdPnivZlRKPcaGZoAxqsbLpLly5xq/NgmQRsN+jMIKnzYTu6+lwIpaTtBWhCkFAZCu8rN7smLCdVsDohb8r2ttp7g7K93e48UNeF+8PJkyellPKGb/BahnOOlNJdHqkKIaJ0PptMSvm6EMIWQrwAvHmzgRPA7t27bzm7eLnY7NZA2T+Q7mZdUbaX1c4yT1favD8ThW/s7kuy/wZL2sq97epz4Z3paNUI4EM78916Rsr2d6NrQhhKvn56AYhCmD9+sH8zmqbcRWoFUoHbnwd/9/48UkZh+M8eGriLLVPuJiHE6zf72VqGzN8SQvwKkBBCfBL4U+CvPmjj1oOU8nNSyo9JKX/hgzxPPmFFaU61KNGAcn/LJaKsiJoGheTWzsqlfHC96eg9tgxN1b1Q0DTRDYHZ6ln5lPUnpeS/vTHFuzOry8ap3D+Wrwe9m7iPV9lca+kh/HPgZ4BTwM8BXwX+00Y0arPkkiYfPdCHlKiYY4V0zOCj+/sIb1C4UNl+hnMJCkmrk5FLff4VeGRn/pb1T5Tt69XxEr/4x2/Rl47x2r/4nm2z51f54D60I7ouxE11n7hfrSXbXiiE+D3gFaJwvTNytRum7iEqflW5mjof7i93o/aVcu8QQqiB033q62eikM2lhsP4UnNFlkvl/qauC8qqe4ZCiB8ELgC/Bfx74LwQ4gc2qmGKoiiKoiib4excvfv1OzO3T12uKMr9Yy3T6r8OPCelfFZK+QzwHPAbt/oFIcSIEGI5oYPROfYbQogXhBC/edXj1vWYoiiKoijKnTq30OD7HhxEE3B+vn77X1AU5b6xlsFTXUp5/qrvLwK3u6KUgO8BXoZuWvG0lPJjgCWE+Mh6H1vD30dRFEVRFGUF1w+ZKrd5YCjL7t4UZztZeBVFUWBtCSNOCCG+CvwJ0Z6nHwde6xSmRUr559f+gpTSBuyrNlo+Afxt5+vngScBf52PvbaGv5OiKIqiKErXYiMqnT6Ui7O7L8VkubXJLVIUZStZy8pTHJgHngGeBRaBBPD3gB9a5XPkgeXg4Wrn+/U+toIQ4meFECeEECcWFxdX2UxFURRFUe5HC7Wo3ttAJsZIPs5Mpb3JLVIUZStZS7a9n16H16sC2c7XWaACBOt87Np2/w7wOwDHjx/fdtkBFUVRFEVZPwv1aOVpIBNnJJ+g3PJouT5JS9V/UxRlbdn24kKInxdCfF4I8f8t/7fG13uJaA8UwPcS7YVa72OKoiiKoih3ZHnwNJiNMZJLADBTsTezSYqibCFrCdv7A2AI+D7gW8AYt0kYIYQwhRDPAw8Dfw2YRHugXgACKeWrUsrX1/PYmv72iqIoiqIoV1ms2WgCetMxRvLLgycVuqcoSmQta9D7pZQ/LoT4YSnl7wkh/hB44Va/IKX0iFaErvbKDR73ufU8piiKoiiKcicW6g696Ri6JhjJxwE1eFIU5Yq1rDx5nT8rQoiHgBwwsP5NUhRFURRF2RwLdYeBTAyAwWwcIdTgSVGUK9ay8vQ7QogC8C+BLwHpzteKoiiKoijbwoGBNPv6UwCYukZfOsZcTe15UhQlsqrBkxDiR4jSgD8mpfxrYO+GtkpRFEVRFGUT/PKnD6/4fjgXZ67mbFJrFEXZam4btieE+Dzwi0Av8KtCCLXapCiKoijKfWEwG2e+qlaeFEWJrGbl6ePAw1LKQAiRJEoS8asb2yxFURRFUZTNN5SN8+p4abOboSjKFrGahBGulDIAkFK2ALGxTVIURVEURdkahnJxqm2PthtsdlMURdkCVrPy9IAQ4u3O1wLY1/leAFJKeWzDWqcoiqIoirKJBrNRuvK5ms2evtQmt0ZRlM22msHT4ds/RFEURVEUZfsZznUGT1U1eFIUZRWDJynl5dU8kRDiJSnlkx+8SYqiKIqiKFvD8srTvEpXrigKayuSezvxdXwuRVEURVGUTTeUuxK2pyiKsp6DJ7mOz6UoiqIoirLp0jGDdMxgTqUrVxSF9R08KYqiKIqibDtDubgaPCmKAqzv4EmlMFcURVEUZdsZysZV2J6iKMAaBk9CiJQQQut8fVAI8RkhhHnVQ/7HdW+doiiKoijKJhvMxlXCCEVRgLWtPH0biAshRoG/IRos/e7yD6WU76xv0xRFURRFUTbfUC7GQt0hCNX2bkW5361l8CSklC3gs8DnpZQ/Djy4Mc1SFEVRFEXZGoaycYJQstRwNrspiqJssjUNnoQQTwL/APhK55i+/k1SFEVRFEXZOoZyCQCVNEJRlDUNnj4H/DLw36SU7woh9gLf2JhmKYqiKIqibA1DWVXrSVGUiLGGxw5KKT+z/I2U8qIQ4oUNaJOiKIqiKMqWMZiLAaikEYqirGnl6ZdXeUxRFEVRFGXb6EvFMDShwvYURbn9ypMQ4geATwOjQojfuupHWcDfqIYpiqIoiqJsBZomGMyqQrmKoqwubG8GOAF8Bjh51fE68Isb0ShFURRFUZStZDAbU3ueFEW5/eBJSvkW8JYQ4g+llN5daJOiKIqiKMqWMpSLc3quvtnNUBRlk61lz9NjQoi/FUKcFUJcFEKMCyEurvUFhRC7hRDzQohvCiH+pnPsnwkhviOE+C9CCPODHlMURVEURVlPg9k48ypsT1Hue2sZPH0B+LfAR4GPAMc7f96Jv5VSPiul/JQQYgB4Tkr5UeBt4Ec+yLE7bI+iKIqiKMpNDWXjNN2Auq2CcBTlfraWVOVVKeXX1ul1n+ukOf9z4Azwzc7x54mK8DY/wLE/Xac2KoqiKIqiAFHYHkSFcjNxFeiiKPertQyeviGE+DdEAx5n+aCU8vU1vuYscLDzHH8JZICFzs+qQL7zX+0Oj60ghPhZ4GcBdu7cucamKoqiKIqirCyUe2Aws8mtURRls6xl8PR458/jVx2TwCfW8oJSSofO4EsI8WWiwc9o58dZoEI0EBq7w2PXvt7vAL8DcPz4cbmWtiqKoiiKogCMFhIATJbam9wSRVE206r3PEkpn7vBf2saOAEIIa6ernkaOA880/n+e4GXgdc+wLE1qbY9qi0Vv6zcGdsLWGo4hKEal29nLden2HBu/0DlvqTOj/vDSC5BzNC4uNjY7KYod1HNVv1EZaVVD56EEINCiC8IIb7W+f6IEOJn7uA1PyaEOCmEeBGYllK+AnxbCPEd4EPAX0gpF+702FoaUmw4vDZe4rVLJRZU7QZljbwg5JXxEm9OVFT62m2s7Qa8crHEGxMVzi+oTpOyUsv1u+fHBdWp3tY0TbCnL8XFpeZmN0W5S0pNl1cvRv3EedVPVDrWErb3u8B/Bv5F5/uzwB8TZeFbNSnlV4GvXnPsXwP/er2OrVbbC2749Y1MlVs4fsiuniSGvpYkhcq9yA9CLhVbJCyd0XziJo+ReH4I3P78Ue5drh8SdFYW7c77HIaSy6UWuhDs6EkghNjMJirrrNrymK/bDOfit00McPX50XbVdWC729ef5t2Z6mY3Q7kLbC/g/Zkq1bZLLmHRUp9vpWMtg6c+KeWfCCF+GUBK6Qsh7ukzyfVDFuoO/WmLsULypo9bajicno1WFqSU7B+4/UZRLwhpOQHZhKE6Vltcy/WRElKxKx+HC4tNJkstAJKmTiFlEYaSt6er1NoeDwxnGMjEOTySpdx02dOX2qzmK+vA9UPenKzgBSH7BlJkYmb3fMglTQ4OZmg4Pnv7o/d5otTiQmcVyjK0bhYuZXv47oVFam2fctPliX29PDyWR9NufB3PJy0ODKZpOkH3/FC2r339Kb72ziyOHxAz9M1ujrKB3p+t0XQDWm7AwcEYOwo3nkh9+WKRhuNzZDjLyE0mW5XtZS2Dp6YQopcoSQRCiCeIEjbcsybLbQYyMUIpmS63SMYM+tKx6x5naldWmgzt9qtOYSh5dbxE2w0Yzsd5cCS3ru1W1k+56fL6RJlKy+PgYJqHRnMIITD0qKMkBOidrxuuz1I92tcwVW4zkIkzmk/cdGVKuXcUmw5LDYeZSot3p6vs7U9zbEeOgUw0KNrZu3JyZfn8uPZr5d43UWxxYaHJ5WKTdNxgstxib1+aXPLmK1C7etWg6X6xtz9NKKPzRGXc295MXUMTgrFCkkND2RtGHb03U+U755YwNEHc0NZl8LRYd7C9gNF84qaTNsrmWsvg6ZeALwH7hBDfBfqBH9uQVt0lw7k4E8UWXiA5Ox/NIj++t+e6MI1c0uTRXQXcIGQgc/3g6lp+KLvhG3XbX/+GK+um4fjU2h7jS01sLyATN9ndl2JvX4qUZRA3NbKd8yFlGWQTJnXb66asVbaHQtJirtpmumxjGhq7+yQN2+dmi8xjhSSWoaELQe8NJlyUe1fd8dg3kGax4SAQzFRs4qYK1VYi+/rTAJxbaKjB0zZ3eDhLT8oimzCxjBtfAxw/JJMwqLd9elIf/F5QbXm8NVnpPHewqkgn5e5b9eBJSvm6EOIZ4BAggDNSyns6/cjBwQwHBtKcma8z1Uk9erOcaYWUterntQyNQ0MZik2X3b03DwdUNt9wLs5gLk655dGbtrrvvxDiulAsXRM8tqcHKaUKxdxm4qbO0bE8o7kE8w2HoVycHT23/uwur0op28vevjRBKHlkZ56kqWMaOrqa/VU6DgymMTTBO9NVPn10eLObo2wgXRO3XUk6MJhBE4J0TGffOgx05FW9UKmS+G5Zqx48CSE+e82hg0KIKnCqk/XuniSEYF9fmoSpk7SM7irDjbTdgJbr05Oybtt53tGTvG3nS9l8hq7x1L4+9val8YKQ0XwC2wuo2R796dgN32c1cNqejo7mmK3aPJGySMcMSk2X3C1mHJfJzh1OnRfbQ8LSOTaWZygbZ75ms7MnteokQepc2P7ips6hoQynpu/pXQvKGlz9ufaCkErLo5A0MXSNdMzg4R35dXutfNLi2I4ctht264opW89awvZ+BngS+Ebn+2eBk8AeIcS/klL+wTq3bUNJKZkut3l/roauCR4cydGXtnhnOsqscmgwS99VIXqOH/DyeJEgkOzsTXJQLddvK8urTG3H5/PfuoDtBTy2p4dPHhm6K68fhpJ3Z2rUHY8jw1nyydWvdCrrw9AE/WmLS6UWr42XCKXk0GCGp/f33bQzXGm5vDFZwdAEx3f1kLDUBvJ7XRBKvnZqltNzNfb0pRjMxYFbZ9yDKAT41fEimhA8uqtw2yx9yr3r2Fier56aVVEI94Fqy+P1yTKGFn2u35qs0nR88kmT47t7VjzWD8J1yca8nlENlZaL7YUMZm88GXw3nZ6rUWq47B9M3/ORG2sZPBnAYSnlPER1n4DfBx4Hvg3cU4On8aUmb01WuLDY5MBgmvmaTdzQmSq1OLfQ4L3ZOj/88AgDnTrNpI4AACAASURBVL0tXiAJApWOdrt7a6rKxcUm1bZLre0zVkhyeDi74a9bs71uDYnLxZYaPN1lU+UW783UuLjUQMoom15vKkal7RFKuFlOiMW6Q9C5NpRaLqOWmim81705WebV8RLllotlaNhuuKrfO3GpxOuXK2QTJrt6U2rwtI0dG8vxR69OcKnYUplWt7nFhn3lGt90u+Uqrk1bfn6hzqWlFj1pi0d2Fjajqdep2x4nL5eREhpOclP3T7XdoLs95tJS654fPK1liLxjeeDUsdA5VgLuub1PfihJWQaZuIGla50NgQIpwA1CMjGDhfqVivHpmMGhoQzD+fiaV52kClzd8sJOnZZUTGNPXzJKSd+fumtF8VIxg6SlIwT0ryIpibK+5msOoZS03IC4oTGQiTGST/DozgK6Jrrnx7K67eH6IcP5BElLJ5sw6UurAe+9LgglTTdgMBsjmzA5MJBedehMEEoSpo7rB/SvUxIRde/Ymh7bE604vHhhaZNbomwkxw9ImjrJ2JVr/NGxHEO5OEdHV2ZRnq9F/cVSw8ULVjfhstGCUHb3Tfnh5l5LYobWzVi6Hfo4a1l5+qYQ4svAn3a+/9HOsRRQWfeWbbC9fakoXG8sR8P2OT/fYKrU5tkD/SzVHYoNp5uietla9zCFoeSNyQqVlsvBwYzaA7UFBaHkxKUSDcdntJBgruYShvDYnl50Q2NvX/qutMPUNZ7c10sQSlWEeRPs7k1iuz69KQsBfO+RQR4aidLWz1Vt3p2pkooZHN9VYLLc5sJCA9PQeGJvD0/t79vs5ivr5MSlEk3bZ7iTMCRuGlRa7qoyKh4ayhAzdIZycdLxtdxab6zUdHlrsoKpaxzfXSBuqpDQrWJvX4rRfIJvnVnkHzy+a7Obo2wA2wv40lvTTBTbHB7OcGQ4y3fPF+lNx3h4LHddCNzuvhTji00GszHMLXIPzyctjoxkabkBuzY5eZmmCY7vKuCHcsv8+3wQa8m290+FED8KfLRz6PeBL8poauy5jWjcRjJ0rZty9LVLJQAuLjZYajhICYeGsrSc1aUZX6w7zNdsRvIJeq7Kymf7AeWmC8Bs1VaDpy2oYfvddPJn5uqEoWS62mYkG+eh0RyFlMk701V6UtaGF7+7ur6UcncVmy5NL0ATguFcgrrtd2+OczU7Cnuw/W5qewDPD7G9cMMLZVZbHpPlFv2ZGIMqRf6GkVIyU2lzudhCiChNcRBK5mr2TQdPC3WbhZrDWCHBWCF5y2Lra7VQtwlCSRAGVFoeQzk1eNoqhBA8c6ifL705g+uHt00qo9x7bC9gpmKz2LBpjntcWGxiGRphKHGDzHXX/a1a83ErFe0VQmBukz7OqgZPQggdeFdK+QDwxY1t0t0lpUQXglIzWnKt2x4TpSbD+dunKl72znSVIIziYT9+sL97PGHqDGbjlFouO695LilltJdCpcDdVHFTo257tL2AJ/b18uL5IiO5OJah0bB9nn9/nkzMZK5q05Oy1m32V73/W8tkqYWGYL7m4IeSh8dyvDVZoT8TVZWv2x7pWJSNc99AGkkUyptLrO++lhttOH5vtkbT8Zmv2fSmLLUyuYGajk+17bF/II2ha5i6uK5DJKXk3EKDluMzV7MxNI1q2+PpW6xA3slG8pF8glIj2nfVq0JCt5xPHRnkD1+Z4Pn351XK8m0on7QwNFio2gghyCVNbFeSTZgbPmG2VkEo0YTK8nk3rWrwJKUMhBBnhBA7pZQTG92ojVa3Pd6ZrhE3NaSUvDpeoj8TI2HpTJRa7OhJMZxLrHpDW8LSadg+yWsybUkZ5eyPGxqp2JWfOX7Aa+Nl3CDg6Gh+RfynlJKpcntV9QWUD26y1KLYdJipRglDhnJxqm0PTYOYqTFdaeP5EkTUsVqPwVMQSl67VKLp+DwwnN2Ss1X3Eymjotbvz9VIWwY7Ckm+eXaRWttDSvjxR8f42IErkyLpmMGH1jE17bILiw3GF5sUUhaP7Mx3b4RJS++ee5q6OW6YUtMl0dkHa+gaHz/Qx8WlJu/P1tk/kO5ep5caLpeXmkyUW4wvNulJWewfuHl476mpKvM1m7GeBA8MrT75TDZubnhI6HSlTRhKxgoJ1fFao48d6Gc0n+APXrqsBk/bUBiGtN0QJwhpeyHnFpo8NJq9rl+42Z+h6Uqb07O1bli5mly7O9YSmF0A3hVCvAo0lw9KKT+z7q3aYJOlNk3HZ6nuM1Fq0XID3EDy6aNDxE2dhu2Ril35p2k6Pn4gu5vdaraHpWvdjvSjuwrU2h65hEnL9ZkstSmkTASChc4mwolSiwdHog2G1bbXzdiyULdXDJ4mSi3OzTeAKHXygArT2VALdZtTUzVabkBvMsZiw2E0n8DxfAwt2vPU9gIE8NZkhf0DGfwwZCSfWDGQ8oKwew7c7uLVcHwanVDB+ZqtBk+brO74CKJ9T/M1h5bns1h3uLjQwNQ1XrywxJ7+FKnY9atMjh/QdAIKSXPFjfPqa4brh1wuNklY+i3DupaTk5SbLm5wJRzw6GiOcsslEzfR1ErlhklYOjFDIwgl+bjOXLXNGxNRimLtqkQuqZhOw/EpNz0sQyNmaMQNHS8Ir4vll1J239e5qr2mwdNGm6vavD9T636vwsrXRtcEP/30bv7Pr7zP10/P84kHBje7Sco6qtsBpqHhBSFxQ0MISSFpRiUM+qMMi3NVmzcul7vJGK79DPlBSMPxyW7gtXv+qrDyphuQS6z/4GmhblNueuzoSZC0Pvh+zu1gLf8K/3LDWnGX9WdiTJSanLxc5o3JCrqQfOJwdOE7PVulZvuMFpLs6UtRbrm83kn1OFKI88qFEnXH5+hYjif29FJsOlTbHnv6okKKUfKBgKkyPLa7B6vz4eu7Kma+J2nRk7awveC6zpRAXP2NsoEcL+D59xe4VGxgez4Pj2WZqzq8eGGJY6M5nn1ggFDCN08vEjMEU2WXvzu9QL3t8fFDffzQsVHipk4QSr5xeoFQSvrSsetqP1wrGzcYzMap2R67VIflrokyqflkYsaKgY7tBpxdrHNhvsme/iTTpTa1lovjB5i6xmLDZarc5tDQlcFTy/E5cbnM+YU6Q9kEu/qSDGXjjC81aXsB5xcaDGRiHBzKUG/7lDp7H9Mx46Zp6Pf0pbiw0KQ/E1sRFqJpYsWem0rLZa5mM5SNq5T268jQNL57fpGXLhT5s9enODqcptL2ScUMPnqwn129KYZycZKWwbOH+omZOhPF6P22DO2Gm6CFEOzpT3FxobmqDHxtNyCQknRs4zsoahz+wf2jJ3fzx69N8kt/8hZf+MmP8OiurZGiWlkfs5UWE8UWhgBI8vx78xwezvKhnXmGcwlars/Z+TqhhExcZ6nh0J+Jdft1Jy6VqLQ9BrLxDUtfvqsnSdsNyMZNsuuQqOZajh9waqqKlFHU1u36N/eLtSSM+JYQYhdwQEr5vBAiCWytwM9VipkaLcfn7cky81UbNwg5MV5mtmJzfrFBzfax3YC5WpuLi00ycYNDg1leOLPExaUmDcenL22y1EhzZq4OgOtHs46npmtoAvYNpElYOk/v7yMI5YoNpYau3fSDtKMnga6LaNXpHs+Dv9VdWGpycanB5WILpOTrpxdw/ADHj8K4Dg5lo86w6xNKyQNDWc7ONwgkVFoelZbLYDbOm5MV3p2pYeqCxCpmZYQQHB3L3fZxyvqRMgqVbNg+Q7koGciycsvFcUPGiw3enq6QNDX6MjHGepKkYwb7+1NMldss1B1MXeOh0SzPv7fA6bkalZaHrkWPf+HcEqdna0wUW+zsS1JpuZRbLiBIddKZL3ewXT/kwmKDmKGxt5O4ZjiXYDiX6Lb3ZpkX35qq4vkh8zWHZ67aY3mjv3Ox6ZK0dDVbuAoTpRavjpeZ6NQiecV2SMctcgmLiWKLd6arZBMGSSsaAD93aIDvnF+M0gETrT4HobwutLcvFeOS1mS2alO4ReKZmu3x8sUlJott9g9keHp/74aG4Axk4xwdiyYVhnPqXnMnLEPjCz/5Ef7+f3qZH/0PL/LcoX5+9uP7eGJvjwqDvMcFMuTNiQrFpouQ4IUhe/oyvHB+iRD4h4/vIh032NmbJAyjcF4pBcWGSyFpYXs+//3dOUoNl6Nj+VsOnlquH0W/pKwbnjfTlTblpsuevtSKqCiA3nSMp/ffemKm4fi4frgiodlq6UKgawI/kCoxylVWfUcVQvwT4GeBHmAfMAr8NvA9G9O0jfOFb1/ky2/Psli3ScV0/EByeq7K+YVoBqEvY1Fuu8xWbAxNEASSwWycpboDSNJxnR2FJIWkiaFHJ1XC0pmt2OzqTVK3fR7b09O98a0lKYAQ129Q3kxBKKNl622YJrfe9qi1fNpugAwll4pRNKoEkCHvzVZ5d7rKA0NZckmLJ/ZGqcSrbQ9NwJfenOHQcAZdaOzsSVJtezw4vDFF6PwgxA1C1Qm+Q0Eou6GSy9nylmViBrmkSdsNsd2gM4AOaToBGoKFusOxsRy7eqLCp/M1G0MXxAyd3rRgd2+KB4YzXFpqoGmQsDQKCZOYqdOXjqFrgmw86nSfvFzuZsybLked9Ezc7IaEhaHE9gPenKzQdgMOD2ev62zHDA3PD7Fu07F+Z7rK6xMVMnGDTx8d3paf4fXUdn0atsNyhRY3AEuParwsv4+aEFRbLl98fQpNEwxl4xiahpTwnfNLhKHk2NjKfaxtL8q62nQDhnPxmw6emo7PYs2l3IqSFu2tpjY8lE5lb/zgdvYm+ernPsZ//s4lfv+lS/zEf3yZp/f38mv/wzF2bnJ6aOXOJU2dSssjDKM+gS40ig2XdNyg1vKYqrT58I48h4eyCCFw/IBiw8UyBd89v0jNjpLPxEwdNwhx/ZBLxSYJU1/xuW67Aa9cLBGEkt19qe7+SccPMDUNxw/59plF6rbHUsPh2UMDa/p71G2PV8dLSAkHBzNrPicNXePhHTmadsDwFuqbbra19MR+HngMeAVASnlOCLG2d3GL+O6FReaqbVw/ZCgbI2VoTNcchIBswqTphiBDFuo22bjFMw8OMJiNMVeLCqQVEhaOH9Vw+vCOAicnSnzn3CJtLyBlmeztT/LX786Rsgwe39t704xcYShpuT66troVi7VoOtFycsvxCST0pq3unqvV8oKQb5xeoNx0+cienu4M+Xbxd+/PM1Vu4gRRvHLL9kknTJKWQSgEf/H6NH4QMlls8Q+f3E3c1Pix4ztw/IDPf+MCQSh5d7rGjx0fI5SSJ/f10tdZLVy+8C3HOV9YbNB2A/YPpNfcifWCkFculrC9gL39qW33PtwNhq5xaCjDQt1h9zU3j8FcglLDodxycPwQIUEXkvElj6Sls9R0qLc9XhJFjgxniekD7CwkGMzE8cIoJDdtGTxzcIDcZIX8QZO9/SkyMYP//u4cFxcb7OxJRa/dl8IttdjbiZnXtCjjI0SrUa9dKlFsOMzXHLIJg8W6c11n+5GdBUpNl0Lq1pn+zs7XWaw7LNaj0GI1eLo13w+otK6UpwgluEHA7p4Uj+7K86GdPVxcaPAbz59lqtyiN23x8I4Cu3tTDGQsmk5AwwmY7qSVX2Zo0XshBRy5xeTKYCbOvoEUjh/Sn4ndldA9ZX1k4yaf+94D/Nwze/mjVyf49b85y/f9u2/zr374QX7s0TG1CnUPkgikkN3JlECGHBpKoWsaSw2Hly8u8Y3T82RiBsf39HJ8V4GZis2p6QovnlsiYWmM5pPETY2n9vZyYbHRnTDTNRjKJtA0QbXtcmGxQdzUGOqsAE8UW5ydr5O0dB4cyTJXi8oWLBfiXVX7peRyscXJy2VmqzZ7+1O0O3vtr2Z7AUsNh95UlDTtWst1Dg09irDQNZ25qk3D8djZk9pWq1FBKPHD1ZUfWcvV2ZFSussXASGEQWeS/l4ipaQvZRESZVALwpCq7QOSIBQMZGOYmsH5hRazVY/Hdhdw3ID3ZmrMVW0GMrHuhdDxQmzf5+3JKrPVNqGETx3JslBzmCi1MTRBPml1q5Ff6+REmdcnyphC4/F9PWse3NzKxcUmxYbL6bkaOwpJXD9kX//aOu7llss701VCCYZR2Vad9uULi5TRpVEAbghNx8MPJb0pi0rLJQTcIOSd6SpjPUk+eXgQU9PYP5BistTm8HCW8cUmjhdw8nIZIcAPJGfm6iQsncf29FBre4wvRqtamhAcGVnbpnHbC7oJRsot7zaPVm5mR0/yhjP5FxcavD1dpdH28SRoAG1J3DSwdI1ASqSUuKHk3GKdhhvwwHCGY2N5Wk7AhNMiHTPo7+xxysYNetMxpsotzs41ODVT5fRcncf39NJ2A0YHEuztT5NPWliG1u0k122PthtQbnm8dqlEOmawpze1oq3FhsNSw2W0kLjtBX7fQJpa2ycdX/+U6tvRhcUabnjleynB9kKmKzbpmM6ZuRq/9+IlJkpNKm0fTdMwhMZEqYUgqgdm6BpzNRvbC4ibOmEYXQsW6g5eIJmp2jd8bSmjle/eVIwfezSLqes37MgoW1vc1Pnpp/fwfQ8O8Ut/8ib/7M/e5sULRX71Rx5Sg+F7zPIE6LKGE3K53ObZA/1UbZ+Tl8pU2h75hIUE9g+kObtQ58ULS5yarhIzNf6XTx3i+O4ohPPk5RILdZu5qs2Z+RqHBjN8z+FB5msOKcvA9gIGsp2Mnp3SOS03QAIf3pmn1HQ5NHT95Eul5TJfcxjKxVdc5y8sNnllvMhc1SYfN4kbGnv6ovtJEEouF5uYusZUud3J5trioweuz+5ZarpIGdU1rNkeXqc/BNH18eoQ+HuZ64e8Ml7E8UIOj9w+C/JaPs3fEkL8CpAQQnwS+KfAX32Atm6ah3cUeGuqRrnlUmp5UQ0OTSMZMwgCyXy1ieNHdTnOzNc4OJRhpmqzpy9F0tRBCObrNkeGcyzWnSgmVgjyCZ18yiKXMJmrOSQtLdrcXbXJJ02mym0KSZPedIwglFRaLvW2jy6iOFmIlnDfm61i6hqHhzLM1aKivTt6VqbBrNse40tN8gnrhsuwuUQUXjSQjWMaGj1pi9gaZwjSMYOetEXbDRjJbq/l2qjIYR9vTpbRCK6E6vgQSp+6DsmYQcv10YTg3ZkK1bbLTKXFTz21h08dGcL2Q7Jxg2+dXWSh4bBYc0iYerfQbdsNaDkBCUtH1wRBeGcbwTNxk919SSotj/334ABWSrmlq4prGtRbDl5nKigkGgBn0jqmIehLxCgkTWptj1BGN1UvCAmC6KwpNhwWalGx1KVGtIL91L4+MjGTuuORNHWaro8m4JOHB8gmo2Qxy9k5Xzi7SMLSOTqaYyAbY7LcZGdPMkpGIq/MTwWh5K2pCmEYTWw8sbcXiM6z6Uqb3pRF4aqY9mOj0abmVMxQq06rkIqt3Dfgd0pNWAa8dKFEsekyW7XJJy0SlsmnHxpkKJdgpmKTiRvM1eDSUoOWG/D0/j5MXePV8RJn5utRraaUwWD2+r0JXhDy/kyNqUobS9fQNbGtJqruhBeETJZaJC2jOxt/M5eLTaptj3396ev2g2yWkXyC//I/PcG///p5fvPvzvLmZIX/5yc+vG06mvcD/5rtCl4Q4jo+xYZDNmnhBRIkpCyNQsrC9YNO/UZJ1faIBTrfOb/EwzsKBGFIueliaBrzNZv+TJz3Z+s8c2iAdDyaeDN00R387OlN4foh2bhJLmHy9P4+Wm5ww4QQb05W8APJQt1eUVLDD6P+yWJdMFRI8Nje3u4q0aVik7cmKwSdVZakZay411xtZ2+SlhuVyuhLxbD9AE2DMGTL3tPvRMPxcbwr9/T1HDz9c+BngFPAzwFflVL+xzts56YRQrB/II1l6Ji6wAslpqZhmVFBxNmqg+sHmLogCENCCZeKLXKJKOXwV96ZZanusrc/xZGhKDvbk3t78MOQTz04zELN4ex8nQ/tyGHqGg3H553OLITjhUxo8NH9/ViGxqHBLGfn6zQcn6CT6nKy3KLcjFYXglB2B1VCrEyDeXa+QbnpslBz6MtY1+2F2dmbpCdtgYRS06Fwk42It5K0or0StbZ/XZHf7eDTR0f48lszVNsujh8towYAITTdkF2FOEKL03I95qo2pabPTMXmwzvyFJtet67CsbE8Dccn3lkJ2NmTZLHukImbZBNRZrcn9vbi+mE33f3yeWHqGsfGcre9CO0f2Ji9VBstDCUnLpeptT32DaS7M19byUy1jRtGq4/Ltw+jM9hNaBq60Dg8nEMXgsvFRqfOT4uxfJIDg2nenCxzqRTV+9lZSGIaGkJALmnyj5/ew9+8N48fSHb0pJip2VRtv7syOV+zubgYZWIbySc4Npbn4GCab5xZREpW1JMSRBnh3DBcESrxzkyVamefzMcP9Hf3WmqaUHta1uDAUBrLAOdK5B5hEEQZN88uYuk6/UkTw9D4gWPDPHMwilr3fEnd8Ti32EATGg0nun47fsBMpYXrh+zoSfDIzh4ODGY4ebmM4wU8OJIjlzQ5canEZLHNXN3myHD2lgPdasuj2vYYzse3VcflWucXroQ4JSz9piunddvrlvYIQsmHNyij2Z3QNcHnvvcAj+/t4XP/9Q0++/kX+ZVPP8BPPrVbhfHdA6L+25VIjyCE8VIbO1ji7z08yice6KfUcslYBucXGizVXR4cyTKSTdCbsnD8kPmazcsXlmh0svIFgSRpGcRNjQODaUxdY19/mr5UjJipdaMJCimrOzkWtUXcNAW5pWv4QXDdHth9/WkMTePDOwuM5ldOvo8vNvjG6QUMXeMzDw+xoye1ItT4aumYsSLDXtIyeHRXDy3XZ3AbJTUrJE2GcnFabsDuVfRT1jJ4+gUp5W8C3QGTEOJznWP3jErL5dXxMm3Xp+2GxA1wAC8IsD3wicJ2MrGoIGXbDXh/tspju3soNhxaTsBSw6VquwxkY8QNnVzc5NBwljcny53ityHpmMGjuwsIRyBE1Blbsj1qts+JS0VAcGAww+HhLGEYzWo0bZ9LS01OTVcZzMYYysWRUiI62U6ulo4ZlJvuTVPkLj/m5OUy5aaLrgs+tr9vzdmbBjJx7tF++219+e0Zzs83sP2VxwMZhWReKrbQNJ1QSjw/JAh9XF/nzGyD3kyMhZrNixeW8AKJpQmkoXF0NMdgLs5gNk7c1LsXrIS1MgxnutzuJjAoNtzbzq6uVqXlstRwuisOm83xw26ChsW6syUHT6+Nl0mYxorBU9OTNCsOhYRP2/X59jmfphMiCCk23M4gyuFHPjxCKCUXF5uUmy796RiP7+1FSknT9kAIHtvTwyvjJS4Vm934dYj2JdpegK4Jmq5PoZN2PG4a/MBD1xfd1DTBkeEsl4stDl1VlHW5cK4mhOqUfQCvjZcJrrkWNF24MF/j4HAWx/eZqYa0/ZClly4xXWozkI3jh5I3JsqMLzWImwZP7+sjaRnomsDxQ4IQdhSSPLWvl8WGw8XFRlRPzPV5al8fb0xUqNsehqYxlIvdNKGE4wecnCgRhlBpuxwbW/9CzVuFoS1vD7h1wqWYoUe1ePyQzAakaV4PT+zt5Wuf+zj/65++xf/xV+/x9TOL/F+fPXrT91nZGrIJk4Z9ZfAUdv5XbLp85e0Zjo0VGMrFOLVUZbHuMpSNYxkiilSq2ZwcL/L2RIWpcpuBTIykZdB0fJ49NMBIIc6x0Suf3+VJ1bUKQ4mhC5qOz+HhldsBTF27afFuTQj60jE0DbLx2C2LfN9ILmFuu1BwIcSaVobXcrX5SeDagdJP3eDYlhY3dRbqNnXbxZfQuMEWkhBougFepUUowQ7g5QsletMm6ZhJPmnSm4wxVWojBcR0ja+9N8dCzSGUElMT9GXitFyfB0dzPDyaoycV4y/enCZp6bx2ucyDwzkuFZvs60/z+uUythfy1XdmkUR7cWY69QUyCZPvPzLISD7BTKXN6bka+aTFw6M5+tIW6bjRHTyFoaTcirLBFOsuXz+9QKnl8MBglmrb4/xig3396W09Y7laUkp++xvnWWjeeA+RL8H3obMWFQlCmm7AiYkSD43lmK200RB4YciBgQyFlMVSw+HE5ShzzkLdYX9/msMjGQY7YY8zlTZJS6cvbTFZitLerzWc8mbCUPLGRIWW4/PCuSWOjeVXtaq1kRKWzmghQbnpsrtva65e7ulL8P/O1wlv8LNqO6DtBsxWnSj0UoYEAVTaPk23jOeH7B9M02h7DKYtLi02+a6+xKvjRWptjyMjOXRNoydpkombTFfaTJVbnJmv05O0eGRnnp09SXb3pVYMrqWUSBkNmNpu0D1H3pmp4geS9+fq3dnAo6M5FupRONntMnuGoeT8YgMvCDk4mLlnrwWLdYdz83XySWvNewhv5uJClWvGTgTAXMPHmarxoR15ivUWTTegZjv8106Yru1JXD8qULm7L8nu3gTFhkPc1Dk0GCUpiRkaL10sEgSSs/M1ZqtR5tblcJ2JUovhXIK5qsNw3sHxQvJJc0VEgZRRiKbnS/puMku8UWwvwA2iMKK7YTkEL2nptwx1tgyNx/f0YHvBlq551pOy+MJPHucPXr7Mr331NM/+39/kRx8Z4zMPj3B8d+Ge/RxuZ9Wmy7Xdg6hvKGmVbGrtBRACQxed/bGCi0tNwgDOzTWYbziYuk5INNjwfRfD1DgzV+VyqcV7s3W+/8EB3pyokU+ZHBuN7hVNx+e1SyW8UHJoMHPLgU2x6TBRivbcztVsRgsJvCDk7akqXhBydDR3w0nUh8Zynfp0Og+Obp3C3XciDEO+fW4Jzw/5+MGo/t7dcNvBkxDiJ4C/D+wRQnzpqh9lgNJGNWwthBC/ARwHXpdSfu5Wj42bOk3boX3tXfIaVzrPETeUzNZcEoaLRoJDA6lukoiz87WolpOuA5JU3OS18SJvThQ5OZ7mH39sL0/t72M0l2Cq3CJhRKsZ+YTJrt4USw2XctOlbntMlFos1W3qTkDSatOXu7v33wAAIABJREFUjtOTtNjRm2Km0iYM4cJCg6W6jR9KXF+yo5AgGTNYrDnM1Wx6UhbVdlRI0w9CQhliaIKpUvT7q+1sSCl5b7ZGre3zwFBmxX6Ke10QSqaqq89cA4CEmu3z8oUihZRJbzrO+fkGoZTM1WyklNF703TJxAzqts/ZuRp/+ZbkuUMD9GdifPfcEk0v4FOHBzsbL2u8N1Pnp57ahd3JspVZRQfF9cNO6uQoK9hyp1nXBMWmi9NJj7xQXxm7u1C3KTZcdnRqGN0N186IbTVfe3u2m3HxWiHR5AnIaEnyKg3H4/R8lbbnoQmNt6drZOMGk+UWFxabeEFIte0TNwUNx+fgQIZ8ysTzo8/wnGXScnx+6OERBq4qoFpuunz99Dynpmtk4zqHBrP0ZmKMFRI4XvS+u0EY7dXUo8xPrh9SbjnMVaNyCcudscW6Q6npdivDz9VsJootIJq1X+uM4zI/CDk1XcX1ow3Dd3uV83KxScsNaLltdvUm1+X1X7pw89tZw/EZX2rgh9Fqqut7LNU9BFG2RD+UaEIjCCTfPrfEF1+fwfZ8Prwzj65Fae1jpk7D9hnJJrF0nWzcJGHpUWKaIOTMXI3ejEXc1LC9EDcIGMjEySdN9g9kcLwQL5A0PZ/cBxjEhKHkK6dmmSy3+Oj+vtuuYLXdgJfHo4HfnaQ6vhOaJla9MhM39Tva02d3ilknLf2u7DETQvCPntzNc4cG+Pw3L/DF16f4o1cnMHXBvv40o/kEPSmLnrRFJhaVNkjHjGgQGdMpJC1G8nF6UzG8IKTtBjQcn7rtY/vRfphswiSfsLZVBrTN8v5M7aY/k0CpHU2smhrEzZBUzCATc3mpYlNpO/iBRIYBQ0MZPrKrwPhSk6rtcWa+QRBKQglzlRa6plNqOXzt7VkSls5gJk6p5aIJgaUL9vYlObfQYLZqM5iNr7ifnp6rM1tuM1+3eWRXD0lL59RUhXLLZTSf5NtnF9nbn+bAQLqb+ReiiKIfPDay6n+Ly8UmxabL3r7UlpukeH2yzCsXi+iahmVoPLPGVO53ajV3nBeBWaAP+PWrjteBtzeiUWshhHgESEspPyaE+A9CiI9IKV+72eNLTYfnz9z5mK/tw5nFNvP1OdLxaJNdse4iBMQNjaQhuFhsdx8/Wy1RtV2C4ADvzTW6oT3VlsuJyw62F4XxXSo22dmToidlUUhaaJpHEEqSVrQXK5SS0UKChbrNqakKNduLaozoOpeLTfJJi3MLdTIxk9lqmyPDWaSU5JImH95Z4J2ZGlJGsbOrVbN9Ts/WowLAhuB46v6uLO1LwA9ZrNv81Zsz5JMmLcdDCI3LxQZP7e3nW+fm6UnGeHgsR8PxOHG5RCZmYmrw4Giequ1RaricXYjSSC+HcP3Z61Ps7U9jzgs+eWSIuuOTiRndC14QSgRRFp5LS03KTQ9dFwii0JaDgxlihs6ju/L0ZWJMlloYuiB/1dK6F4RXVQr3b5oF8n7z4sXiHf2e7UOx4bFYq6LrUSz4aD7BfN2m0orCsHQBpZaH64ecX2iSiek4fogXECWHKDU5cbnEsR0FfuETB2g6Ps+/P8+3zy5G9efaHnNVBwQM5+L0pWMcHEzz7myNmUqbJ/f28v5snabrU2l5jOYTuH7IkZFs9H5PRwkmarbHR3b3kLIMhIhWMT7I4Hmp4Xb3Y06V2zfMArWRBjJxKi2PTNwgsU4zjTOV5k1/5oVwqWQjiMK6r0746zshMR0MM4pYeP69ORzPx/Gjyad8yqQ3YWEYGgcHswRhgJTQ8nx+/7uXOLvYoFR3yCUt3pqosFBxGMhanJlvsKs3xUMjWQaycWw/IGXpxA2NC0sNnCBgZyFJ8ibvo5SSthcQN/QVHaeq7XWLu5+4XL7t4Knl+gSdiYO6s3Iq3vED3p6q0nSigWIusfqO1ULdBhkV690M5xcazHWyHxaS1l2bHNzRk+TXPnuU/+0HD/PCuUXemqpydq7ObNXm3ZkapZaL699oHXz1EqbeDa3KJUyyCTNavRZRyJYmroT7QnSudL/uHuMGx65/HCsed9XP5Y2eR970uVcev8HzrHicvMXv3ri9N36cxPVDHD/k8FCWf/1jx7o/O7t488HT1bwQAidgqtik3nLpSVtMl9o0vBATmCo2+Is3HWYrDr3paHA733BxvJB0TGNHT5pLS008P6TYdOhJxvjI7h4qbY9swuDPXp9ipmwDkgODGXb2RJNjJy+XOHm5TLERrT5JBH/z7mwUsSA0FmoOQghOz9U5vjvPQCbB7r7kqtJwX832gv+fvTcPjiy77vS++7Z8uScSiX0pVKG27uquavbO5iqSkugYUdJohprFGlsTkqixNJKtiPFIHi/SjB0TMQqFNQpJMwxJtmWNZNqWJswYUgxKJEVRXLub3c3eu3ZUFXYgE7nn26//eAl0LSgUqoACUMD9IhCVeJn58qDyvvvuueec3+HcfAMh4p6m92PdEIQRHT+8YeNYShmXRGywEdBwfC4stLi20mEgmyC3g6mEd7x7SimvAFeA9wohDgHHpJRfFkIkgSSxE7WbPAt8qfv4y8B7gds6T3/11uy2fGjVCak6N2rmu2HEzcGMCHh9tsmn/vgVelIGx/pznNcbNJyAdMLgz747jROEBGHEXNXloyf7cYMIKSUpS2e+1uHV6Rofe3iQoXwSfyjii2/M03JDdM3lkeECbhin9fRnbZKmRhjFNzVDFxwfyJBNmjw5UaTjhfTfRbpHEEbM1jq4fsRo8cHMz5ZS8vZcg7YXcGIwu3ZxyujuVfYl4EvwQ5ire8zVvbXnFupxU+WWF3JtJY7uJEyNWjuIFR0jyZmxIlEk0TTBUsPl1FCOuhPvIhu64Ox8A0MT6LoGMi4afeJQD8tNl9emq3HD4kCyUHeIkHHOcXcR/NV3FhnKJxnpSfLwUI7j/Zn4JnndokkTAkOP6wO2K1VwP9D07r3jQlechzCEyAm4VmnFASoJo8UklqERdNM9ZRTRdjW8UGJogrrjg4S+rEWtE8SKhFqsuNSbtlisuxTTJsW0xWszVRqdgCtmm1zCoNL0qTR9DnWlzHVNYGiCWsen3IpFb5wg5J35BqOF5FqaVy4Z72SXW+4NC5070VoVODE0To/kySdNTEMjjO6ta/1WGe9NMVSwMbS7r/NabDhcKbfpyyRuKAyurK8ifgNrojLXEQGdEHwZEtUcAinpdDXP666L48eqm7EccZVKy8PUNfqzsZy9rseL2qSlc3ahwdtzdfwwYqyYwgsjDpfSJE0dXcDbc3WurbR5aCjP5aUW6YTOY2M962YTvDFTZ6Hu0JM2eeLQuwuevG0yUrCZr7sc20TksZi2mCilaHshkzdFaBbrLhcWmsxUO8zVHH7s8ZFNLc4W6g6vT8dyxw8Py12p/1mNVuqa2BU1ynTC4OOPDPHxdeobvSCi7QU03aDbPyyg0vKYrXaodGudk6ZO1jbI2sZaVLPa8am1PWod/4afmWqnm4USpwNHUhJKSbz9FnP9ZSTWjolbjrHZ1113ztt9zrvHbn3/Dfbc4TxinYPrnmedz7N0jXQ6Vha+Hj/YfFuQiFi2O8JjueXhBvHc6gOXyw65ZEAniBvdRwiiKCJlaRi6zpFS3H/pS2/O03R96p2AWsdjrCe1pppcbcf18roQWLpGww144XKFpKlRacWO2LmFBv2ZBJou6EmaJBM6c9W4P9TZuQauL/HD9aXFVzcSDvXe2s6j1vE5t9ggiuCDx0u8MVOj3vE5MZilN7P19OEokrxwuULbCxktJjk5mLtBaGqj3pZ1J6CUSfC+yV4G8/aOCsZseutRCPEzwKeAIjAJjAKfBj56f0zbNAXgUvdxDTi10Ytb7q1NwraL1ctxvSVJHLSQuGFIXy5Fw4lrKWxLo+1JIB7wlqEx0pNkuRnLYhdSFtW2z8XFBsXDvWSSBuPFFE035L1Hirz/WB9tL8DtLohX2j6z1U73oon/3vmaw5G+zF0X+BmaxsmBLKGUDD6gql2r/x8AU8ttHh2NJw79LnPMV8UErhcVuB5Dj0PsgaHhR/GOb9Q9XkjE9S6aEDx+qLjWhO1QKcMHTvSvSdZ/71qVnG2w3HApZRLx4po49SqKYlWvThDQl03Q9kKOlNKEEppOQKFbcLraD2o9YRBdEzxzuEit41PahklP8S46kDTjZtcdPyKMInpSCZ6YyDNc7nBuoYkbRvh+iB9JXD/CNmNVvoh4p7jciNsSmJrG958a5NRQjuWmy2IjdtLrTkAhZXColGau7qBpgmP9mbgfURCSNHVeuFxBEDdltnSdQ8UUOdvkke7iuu2FNJ2AhK4zvdJhKL+5Rev0SodGV+BkuStw8v6jpbjGc5fqNe71cy8sxHLitbbPSE9y7TwarFv3thECMAVEAkxNgABTaER6rNSq6xoJQ2MwZ5O14wL0QtKi7njYlmAwl0QKyemRPBO9Kf7khWmWmy6a0NCF4EhvhicnCpi6xsxKBy+U5JImV8stMrZJMW2y1Fw//XilHY+battfEx6COCXu7z89jhdurhlkrFC7fmSxmLZwg1j0JGXq3fq8O58zvG7zKryHjazt4HApTU/KvOe0v/uJZWhYhrXnUqQOEiu3qYe+GQGYelz7nkqYNF0fDUlIfF9IJWKxKCEEvWmL8Z4kji+RAg6XMjwykme+7nBiMMvFpRZBEIEQtP2IphdwfCBLKRPScAIO92VYarosN1z8MMIyBEf60pQyFj3pBA8NZpFSkktaVDsehtDozVhrLRJWG7JfTxRJppbjqPtUuXWL87TcdDnal8UNQjK2udaz8kqlvS3OkxdGtL143VLr9rH0whuFpm7nPA1kE5RzCYoZi4d3uDzgbvI2fh54GngeQEp5XgixM8mFG1MDVv/XckD1+ieFEJ8idvoYHx/nx5+a4Fc/f3ZTJ+5J6hBJfCQJQ2con6DeCZlbcQiJB2LS0DBNnZSlk07oRFGEJjRGikkWV1pcXG7jBZKMbTJeTPOLHzvGUsNdkyp+dCRPvePhBhHvO9bHSCHJ+FSF16ZrPDyU4eqKQyFpcKS7Q1hMJ/jkk2NU27Hnb5v6Dfn+fVmb4UKS16erIGLFmHstLs6nTM6MF3C8iNGeBzPylE7oazLxPel3nUdNE+RNqG0wP5oCjg+k6M8luVpps9j0iaKIQtIkjCJaboSpQzFj8chwgZNDWd6Zb1Dv+KSsOOXu5GCWSEoeH+/hoaEs+aRFzfFx/JCxYpJMIs5rD/MSocULiXzSvKFWabQnSbXtU8xoHCqmcIKIwZx9gzjATLVDre3fUZRhLy4Udpuffm6UP/jW9Iav0QHLiFM+DB2KSQs3lBiGxmQpSz6pc2o4z3zT5VsXyhRTFj/9gcM8d7REre3zn16dpe0F1Ds+bS+k5QW0vYBiKsF7J3uJpOT1mTq2ofHoWJ6nDxdJGDrFTILjg3B6NM+bMzXGe1MMF5IMF5LYln5LAf9DQznOzjcYyNlIGW/YPDycW3OmU5ZOMRM3gL6b3f7ejMVMtY2uaWubMLom0FlnG3mP05O2aHsdsraxpuoG8AsfmeC3/mrqtu+zNEiYgoSu4YcSXdc43p9hqJDgwmKb4Z4k7z9aYq7q0PZDvjtVAQkfOdlHPp3ADyUnBjK8fKXKQN7meH+aaicgZemcHMrF8wrwxdfnySUNnjnSy1OHehkpxNf0UN5mMG9T7/g8caiHpBVHG9Zr/AxxKu+1lTaDOfuW6JwQ4q7Td9YjnTD4scdHObfYIGebm17sD+VtwiiOguzmvUU5J4rb8U8+dIzf/ZurG76mYGsM5GwmetOcGe9hutJmqeERybidhC40To/lGS4kWWq4zDVcbENwciDPcMFmoltDlLENnj3Sy7n5Om/M1ml5AYM5m3/4zCFySZNzCw1sQyeI4lKMOOU6VvZ7z1iecwtNUgmdR0cKWIZGw/HjlNyxPO8Z68HQBR0/pG8dZ0fTBH3ZBEsNd93WFqOFuMdkybQYydss1l1abnBXWUwbYZs6xwYyLDfjmqrVY2PFFOXmxgq9hq7tmuqoWC8ndN0XCvG8lPIZIcQrUsr3CCEMYoGG03d8832kW/P0s1LKnxVC/DvgD6WUL6z32lKpJCcmJnbUvjshZbxgXq1fUdx/pqamuN/jIC4gvzGvXLH32ImxcC+s7sbfST1PsT3c73EQybhA3FDf555mK+NAfcf7h716X1DsLC+99JKUUq6b4nA3kaevCSH+BZAUQnw/8HPA57bDwK0gpXxZCOEIIb4OfO92jhPAxMQE3/3ud3fQujvzrQvLtL2QQsq8oRGZ4v7x5JNP3tdxcG6hwdVyG10TvHeyV0V69jD3eyzcC4sNh9euxfUgp8fy9O+jRoR7lfs5DjpeyLcvLRNFMFFKPbANrw8C9zoOWm7A85fLRBEb1mgoHgz24n1BsfMIIV6+3XN34zz9CvBTwOvAzwJfAP5ga6ZtD3eSJ9+rSClxu6o67hbVdRR7h9W6ozCKCzSV86S4G1w/Wvex4sHECyOi7tfoqO9zX+IF6jve76yKPSkUcBfOk5QyEkJ8FvislHLpPtp0YBBCcHo0z0L9xl48igeb4wNZLEMja5ub6tmkUFzPSCG5tpmi5oUHn3zS5MRglpYXMNF7+/x9xYNLT9rixGCWthduWKOheDD5g69f4te/eJZf/OhR/ulHju22OYo9wGaa5ArgV4F/SixIhBAiBH5bSvmv7q95+5/eTGJbFEsUewfb1Dk5uLcbwyr2Lpom7rl5rWJvcjtRB8X+QX3H+5PFhsOv/8VZvDDiN798nh95bER91wo2o/X6S8D7gKeklEUpZRF4BnifEOKX7qt1CoVCoVAoFArFLvAXby7gBRF/+I+fIowkn31lZrdNUuwBNuM8/SPgH0gpL68ekFJeAn4C+C/ul2EKhUKhUCgUCsVu8ZW3F5joTfGh4328Z7zAV95Z3G2TFHuAzdQ8mVLK5ZsPSimXhBCmEOI5YOL6c0kp/2j7TFQoFAqFQqFQKHaOKJK8NLXCJx4bRgjBc5O9fPprl2i6QbfXkuKgspnIk7fBc0PAbwDvB57q/jy5DXYpFAqFQqFQKBS7wlS5RcMNODOaB+DZI72EkeSlKyu7bJlit9mM63xGCFFf57gAMsD75GY77SoUCoVCoVAoFHuc12e6/fZGCzf8+8ZMjQ8d79s1uxS7zx2dJynlbZvUCCH+FBgE5rbTqJ3EDyPabkguaRALC+7t8yq2l1rHxzY1Esa7w7zpBuhCkLRUf6aDys1joOOFhFKqVI0DgOOHeGGEjCBp6VjGZhI0FPudStPDCyMG86pp9UHh1Ws1bFPjWFf9NJ80GSsmeWt2vXiC4iCx1ZVACXhLCPEC4K4elFL+8BbPuyNEkeSFyxUuLzfJ2SY/cGpwWxqaht3zdryQ4UKSh4eVbPVe5OJSk8tLLUxD49kjRRKGznzN4VsXllnpeHzkZD+HS0oy+qCxUHd4fbqGpsETh4oAvHSlQhTBo6N5hID5msNIIanaDOwzOl7INy8u89JUBcvQeXy8wPuOljB05UAdRBbrDvN1B10T/OWb84QRfP/DA5wZK+y2aYod4Kc+cJgPn+i74fo/NZTnzdnaLlql2Ats1Xn6te0wYrcIIslSw2W+5lJrB1xYbPLISH7L5/XDiI4XAvEOtmJv0nTi78YPItwgImHoNF2fq5U2QSR55WpVOU8HkEZ3XEQRtL0AKePHq89dq7QJI8lK21epG/uMthewWHdYrLsYhmCuZuOHEkMFoQ8cUkremK0RRTBb6xB254ClhrO7hil2jJFC8pZG5aeGc3zxzXkajk/WNnfJMsVusyXnSUr5NSHEIeCYlPLLQogU8MDcZixD45HhHOWmS28mQXqbUnJsU+fEYJZyy+Ow6ii/Z1ltRJq1DXLdSXCsmGK4kKTtBwznkxu9XbFPGS+mcPwQQxcMZOMUnbrjE4SS8WKKctOl4QRkEg/MVKfYJMW0xbH+DJWWhyYEDw1lVfruAUUIQcoyaDoBDw1m6c8mcPyIZ4707rZpil3koaE4k+jcQmMtM0Fx8NiStyCE+BngU0ARmARGgE8DH926aTvD0YEso93FUiFlbdt5x4op1YV6j5NOGLekXyQMnR97fIS6E5CzVX3LQcQytFsi0CcH3029feJQD3UnIJ9Uu477DSEETx3u5eRQDiGEqnE74DxxqIdG91rXNVW7rHh30/XiYks5TweYrd4Zfh54GngeQEp5XgjRv2Wrdhjb1Lel1kmxPzB0jWJ6+xxpxf5CjY/9j0rHUQCY6lpX3MRoTxJL17i41NxtUxS7yFarYF0p5VofKCGEATyQsuVuELLS8lCq64rtou0F1Dr+bpuhuAuiSFJpeXhBtNumKHaBWsen7ak61YNO2J0H/FDNA4obMXSNw6U0FxaV83SQ2Wrk6WtCiH8BJIUQ3w/8HPC5rZu1s/hhxPOXKnhBxEhPci2nVaG4V+qOz3enYoW2h4dzDBdU/dSDwFtzdeZrDrap89xkL5pK1TkwzFY7vDVbR9PgyYniWh2k4uDx6nSVStMjnTB476SqcVLcyGR/WsmVH3C2Gnn6FWAJeB34WeALwP+wVaN2miCUazvNatdRsR10vHBNoa2lFBcfGFbVMR0/JIhUFPogsXqdRhG03XCXrVHsJqtjoeMHKhtFcQtH+zJcrbRxAzVPHFS25DxJKSMp5e9LKT9JLBzxvNzETCOE+CUhxDe6j39TCPF1IcRvXff8PR+7G5YaLlfKLUxdcGIwy0DO5vhA9l5OpXiAWWw4XCm3CLdxsdyfTXCoN8VQweaQUlx8IHCDkLSlk7Q0Hh7OqeaoB4xDvenu9ZpiILf5/l21js/l5RaOrxZS+4VjAxmCKGI4n1RN7hW3MNmfIZIwtdzebVMUu8SWVgdCiL8WQuSEEEXgJeD3hRC/eYf3JIDHuo8fBzJSyg8AlhDiqa0cuxvbG47Pq9eqnF9ocn6xyVgxxaOjeVUofMCodXxeu1bj/EJzWwtAhRAcG8hyajivFuEPCG/N1lmou7hBREk1vz1wWIbGqeE8xwaym14wh5Hk5SsrXFxs8saMapy5X1hueBiaxky1o7JRFLcw2ddV3FOiEQeWra7q8lLKOvBjwB9JKZ/hzjLlPwX8n93HzwJf6j7+MvDeLR7bNEIIVu+PamPp4KK+e8XNCNSgUNwFarjsO9R9QbERR/ribBIlGnFw2apghCGEGAJ+HPjv7/RiIYQJfFhK+e+EEP8KKACXuk/XgFNAsIVj633mp4hTChkfH187nkkYPDZWoO2FNxTzh5HEDyMlXX5AyNkmj40X6HjhLZ3Edxo19naXU8N55msO+aRJJCVhJFVvlwNKFEncILpjg1xdEzxxqIdqy2cgr6KV+4UTA1myCZOsbZCydq/Xl7on7E1SlsFIIakiTweYrc4K/wr4C+AbUsoXhRBHgPMbvP4fAf/Xdb/XgFVpuxxQBcItHLsFKeXvAb8H8OSTT95Q1NKbSXC9js6q6p7jh5wYzKomtweEvZCi5QURz18u4/qRGnu7hGVojPemuFJucX6qSdLSefpwEVNXaZcHiSiSvDBVoekETJRSHO3fuA42Z5tKmW+fYejxXLCbBGHEC5crtL2Qyf4Mh0uqdnYvcaQvrZynA8xWBSP+VEp5Wkr5c93fL0kp/84GbzkB/FdCiC8SR4pKvJvm9zHgO8C3t3BsS7TdcK3ot9zy7vBqhWL7aHsBrh/L81XU2NtVVq/9jhfSUSIABw4vjGg6cZ1LuamuRcXu4AQRbS+efyotd5etUdzM0f4MFxdbREqV9UCyVcGIX+8KRphCiK8IIZaEED9xu9dLKX9ZSvmDUsqPA29KKf8l4Aghvg6EUsoXpJQv3+uxrfwtALmkwUhPknzKVLs8ih0lnzQZLnTHXp8ae7vJkVKaXNJkrJhSEYUDiG3qTJTSZG2Dyf7MbpujOKBkEgbjvSlySZMjJTUO9xqTfRk6fsh83dltUxS7wFbT9n5ASvnPhRB/G5giFo74G+CP7/RGKeX7u//+1+s8d8/HtoIQQjXIVewKQggeHlZjby9QSFk8fbi422YodpGj/RmOKsdJscuo1il7l+sV94Z3uV5asfNsNZl/1fn6W8CfSimVVqtCoVAoFAqFYt8y2a8U9w4yW408fV4I8Q7QIa5l6gNUDFOhUCgUCoVCsS/pyyTI2YYSjTigbFUw4leA54AnpZQ+0AZ+ZDsMUygUCoVCoVAo9hpCCCa7ohGKg8dWBSNSwM8B/757aBh4cqtGPWj4YUS56RKE0W6bothmOl6o1O8OEKvXcqgUlA4kjh9SbrpIqb5/xd1T6/g0HH+3zVDsEJN9GRV5OqBstebp/wA84ugTwAzwv2zxnDvCXK3DS1dWWNgGpZSXr6zwytUqr1xbt9WU4gGl44V851KZl6+scGmTE2QQRrwxU+P16RpeoJzpB40XL1d45WqVV6fv7Vq+vNzi5asrVNvK4X7Q8IKIz782y5+9NM0LU5XdNkexS0gpOTvf4JWrK7S9YNPvW6w7vHi5wvOXKpSbSlr8IDDZl2Gx4VJXDvOBY6vO06SU8tcBH0BK2QbElq3aAd6eq7PS8nh7ro7jh1vS6m93e8Gs9mTY6vkUO4vjh7fsNEeRpO54axGI1e/2TszVHOZrDgt1h5lqZ9ttVdw/okjiBN1r2b27/k6OH9J2Ay4uNqk0Pc7fVETsBqGKZu1xOn7I1HKLlbbHa9eqag4/oJRbHtcqbcpNj8vLLaSU694jbub6e8R6/eHCSOIGqm/cfmKy21bk0pJK3TtobFUwwhNCJAEJIISYBB6ILZd80mSl5XNlucXrMzUOFVP80OlhgkjyxmyNKJKcGs6TtPQ7nuvRkTzzNYehvM2FxQZTy20ytsHTE0U07YHwJQ8sZ+cbXKu0WWl7jBSSnBjMUkhZvHC5QssNsAyNYtpaV7bY8UPemKmwoo1XAAAgAElEQVQhhODRkTyWoZG1DTQNpIScvdXLS7GTaJpgtJDipasrHC6lkVIihKDcdDm30KSQMtdtZfDOfJ3pSods0iBp6XS8kHzy3f5Qs9UOb83WSZgaTx8ukjDuPKcodp6cbZAwdZ4/t0QkJQlT4yeemVBz+AEjbRmUWy5LDZdC2uSNmToLdYe+bIIzY4Xbvm+0J0mt43NpuclcrUMpk8A242vdDUJeuFzB9SMeHs4paet9wuq64MJik8c2GBuK/cdWI0+/BnwRGBNC/AnwFeCXt2rUTvCesR6ePlKk7YW4fsSFpSZuELHYcKg0Paptf9ORg1ImwSMjeXozCZa7HembToCnaqD2POWmixOEXCm3qTs+l5dbuEFIy43TNZKWziMj+bWb4PXMVDtU2z4rLW8t/bOQsnhussRzkyV6M4kd/VsUW6fpBfRlEjSdgLoTj4HLyy1absDMSoeme2saT7l7zTc6Ae8ZL/DMkeIN/VlWa+ZcP6LpbD4NSLGzCCE40f3eNOCVK1U1hx9AbFMjlzSZKKVpuSHLrXg/uNzaeF/Y0DXySZNswqTWDm4oCWg6Aa4fj6XV+ULx4DNWTGHqQtU9HUC2qrb3l8SNcX8S+Ayx6t5Xt8Gu+46mCXK2yaOjeZKmzvGBLElLp5CyMHSBpkFv2rrr8072ZcjYBhOl1LoLbsXe4mh/hmLK4kgpjaFplDIJUlbc2T1jGxwppW/73t60ha4JdF1QSL0babBNfVMRS8Xeo6/r8KYSOunud9iXjY+lEwbJda7po/3xNT/ZnyFlGWRt84bnD/WmyCVNBvM2Pam7n1MUO8fDwzkeHszRk05w6jabJor9jRCCwZyNbej0ZRIc617fx/rv3LC254Z7wrvXek/KYjBvk0uaHCql7qf5ih3E1DUO9aa5qHo9HTi2lFckhPiKlPKjwJ+vc+yB4P3H+njqulSaTMLg/UdLSOIL427pyybWFluKvU9/zqY/ZxNFEj+K1sbBZjq7F1IW7z9WQhDvOioefMaKKQZyNoYm1tK1DvWmGczbmJq2bgrXQM5mIGff9pxZ2+Tpw8X7ZrNi+xjtSfFrP3KKphvc4gQrDg6PjRXwwnfvB6M9m3N48kmTDxwrATfeEzRN8MhIfvsNVew6k33pW2pcFfufe1rxCSFsIUQRKAkheoQQxe7PBDCynQbeDxw/5PXpGu/M14kieUsNgqFr6EJQ6/iqyHufE0aSt2brvDVXR6yjddLxwg0Vl0xdU47TPsINQs7ONzi70LhBMCBh6Dta+3Kncae4f1xYbPLGTE0pJh5gLi41eWeucdfXYN3xkajNtIPEicEcU8stOpsUlVLsD+418vSzwH9D3NfpJd5V2KsDv7MNdt1Xrlbaa/nIPSlr3V3jV6erlJse+ZTJUxNq13i/Ml93mO3WtiUtncm+d4Uhqm2Pl6+uICWcGStQUjVM+55r180NhZTJUH7nC7vVuNs9luoun3ttFimh1gn4+CODu22SYoeptDymltsA6HcRMTq/0OBKuU3C1Hj2SO89Za4oHjweGc4RSXh7vs7j4z27bY5ih7gn50lK+VvAbwkhfkFK+dvbbNN9J2sblFsetY7Hkf4ba1q+8vYCc7UOhq5RSidUw7t9TsaK1fGiKB4X19NwAq6U26y0PK6ttOlJWTwykr/BwVLsD66W2yw13bU6J02La5zW442ZGstNl6P9mU2n81yP44dMlVtkbZORdVS3Gk5AFL37WDlPO0fL92l0AmptD4lkIJfgzGgBpxuRTFo6JwayCKEU+PYrKUvH0AVBKMltkLq5VHf5ytsL5JIGwz1J3p5rkOvOGV4QKefpgLDqXL85U1PO0wFiSzVPUsrfFkI8AjwM2Ncd/6OtGnY/GczZpBM62USK6UqHI6V4MbzUcHjlatwcM5uMRSSGd2HnWbFz5FMm7z1SIpLylsVyX8aKe3sIODvXoDeToN7x6csmNrypKh4s3CDk3EIDAD80eHayF12IdUU/3CBkvhZHpq5W2vfkPJ1baLBYd4EO+aRJ5qZxN5S34/QfGcsfK3YOgWC4YOMGIf2ZBOWmR8sLuNrt+wOxuqpyaPcvtqnz7JFevDDacJ7/5sUlpqsdnKWQStsjlzRxw4iHR/K33XhR7D+G8jbFtMUbM/XdNkWxg2xVMOJXgQ8TO09fAP4z4BvAnnaehBBkbYO2e2M/lpRl0JM2qbZ9Tg7m1S7CAcHQBZq4dZfQtgyePtzL1HILAUQyjkZYd7GjGDdYjLBNTe1W71FMTSOV0Nfmg5udGT+M0EUsIGHpGoWUSbnpMlK4twjkao2lrgmMdeqoDF3j1LAqLt8NkpbOcCFJ0tJJWTqFlEnaMsgnTeaqDoYuSFtqYbzfsU2dhKHR8cLbzt39WZsrlTamblBMW1i6zkOHcmvR5DCSRFKqCNQ+RwjBqeEcb87VdtsUxQ6y1bvA3wXOAK9IKf+xEGIA+OOtm3V/+e5UhRcvVWi6AZ98chQ/jJirOuSSBj/+5BiOH1HKKEnhg8By0+W16Sq6pvHURA+GpnG10iKdMBjKJ3lkJM9AzubEYAZT0ynlEnclX7zaYLGYsZQzvkfRNMHTE0U6fogbRLwzV0cTgkLaJIrgzdkalqHx1EQRN4hoOAGmod1z9PH4QIaedLwoV1LYe4tGx+fN2RqVlscHj/UxVEgiRKy21pOyMHUNy1CL4YPAK9eqVJoeAzmbR0dv3cx4+nCRyf4M+aSJJgRBFKFrgivlFglT4+x8kzCKOD16b3WLKy2PpabLUN5Wyo97nFPDef63b1zCCyI1PxwQtuo8daSUkRAiEELkgEVgbKM3CCGeAX4TiIAXpZS/JIT4b4EfAa4APyml9Ldy7E5GvzZd5aWrK9SdgJYX8NBQjqF8koSp8fThIn4Y4fiR6tVzACg3PcpNj7mqQxhGXF5u0XADTg5mSScMpIRXr8WpnIN5m8VZFyklp0cLmxofq40VV1pKuWsv4wYRn31lmnfmG4z3pIgkHBvIkrZ0pIR62+fCYpOkpa8pcFY7Pj2b6AXX9gJem66ha4LTo3kShk5/9vbS5ordY6HustTwWGw4/OG3LvOea1V+4NQAbiBJJQxObyAeUGv7nF1okLUNTg6quqgHmZWWx+WlFk034G/OL3Fxqclzk730XycuZejaDWJT9abPF16fAwlp2yBj6eiaRqXl3bXzFEWS712rEkaS5YbLc0dL2/a3Kbaf06N5/FDy5myN96hN0gPBVl3k7wohCsDvE6vuvQx8+w7vuQJ8REr5fqBfCPEh4Pu6v78G/KgQov9ej23G6N50AkmcUlXrBDSdYC2f/fWZGm/N1nlxqsKlpSbfurjMlXKLuVqHpqukg/cTHS/E0OHiYpP5hsM3Ly5zbqHJ+YVmLBqiCbhOqb7S9Kh3fBpOwFyts6nPOD6QJWsbm+obpdg93pqtM11xWKy7TJXb6N10upGeJGlLZ6npMlftUG66lLIJihmL4cLmHKDZqkPTCai1/W6tk2KrlJsu375Y5u257a0zeGgox3DepuUGVDs+l8ttvnp2mbYXstxwWdlAvvzScpN6x2dmpUPdefde0XTj+UK1vXgwWGl5vHRlJRZ2WW4RhnE7ixcuVfjWxWUuL7fWfd/FxSZtN2Cx4ZI0dHozCXJJ857qFoWI08kBTBXJ2PM8ORE7TC9cruyyJYqdYquCET/XffhpIcQXgZyU8rU7vGf+ul994BTw193fvwz850BrC8f+9E52nxjMcnIgy0LdZbTHJmHq9OUs3jPWw9m1wvGIi4tNhBD89dklRgpJdF3wvsmSCsvuA6JI8uJUhabjs9R0MXUNGUlKGYuMrfPkoSIpywALTo/lcbyIfMrklasrzNUcOn6I40c8PJzb8HOGC0mG11FUU+wtIhnx+mwVXQhODmb4wPF+0gmDgZzNUCFJJwiJoji//bGxwl2duy+T4NpKG00IijdFqq5V2lRaHhOl9A31l4qNubzcouUGtNyA8WJq2wr0e9IWP/qeUTp+wFffWabe8TlcilP3kqZOboPvqDcdC0ys1ktBrLr24lSFMJSU855qlPoA4HelLgdyNkEY8dlXZ0joOoYmeNzq4eJik0PF1C1933ozFuO9adwg4r2TvZuKSt8OIQRPTRRZaXv0ppU4yV6nP2tzpJTmhcsVfvZDk7ttjmIH2KpgxN8G/kpKWZNSTgkhCkKIH5VSfnYT7z0N9AFV4hQ+gBpQ6P7U7/HYHSmkLJ6bLFHreFxd6TCcS6ALjaSl8+hInsvLLUqZBPN1h+WGSyYR3wijbgHozbS9APu6JpphJHn12gqXy20eHclxfODWBXa56eIEEUM5e0ebbypiJBBEEZW2RxBG6BocKeUY700x3JPkaH8cKQojiS4EQwUbU9f44LE+vn5+CT+UzFY7nBjMomuC2WqHqeUW/bnE2ns3otb2abg+Q/nkWpRDsXu0/YgjvWlW2j5Jy+DIdXL0pq4xnE9SaXuc6jrLcdRSbKoYPJ8y+dCxPgBmqh2WGi7jxRReGHF2Pt6s8cKIM6MFFuoOhZR52xoHL4hoOD49KetAzxulTIJq2ydjb1/dWMcLeeXqCpeXW1TaPqM9NpqAVMLkwyf60QQbpuKN96bozyUwdW3tmo6kpOMF1DsBGVsJTTwI9GdtRnpc5msOmpAYQtDxA9wwboLakzbp+CEpS18bDx0vpDed4CMnU1i6tuG1GUWSubqDbWj0bpDOZ5v6rvSZU9wbzxwp8vnX5uI1wwGemw8KW53Nf1VK+f+t/iKlrHYV+DZ0noQQReJmuj8OPAGMdp/KETtTtS0cu/mzPgV8CmB8fByIJz/T0Hjxygq1js+lpSafOD2CqWu0XI+FusNiw+GJ8R4eGsoiZSxLXEiZt9yo35mvM13pkLENnjlcRAhBpeXx+kydpYZLreXTn7UppN7dhaq1/TVJ9I4XcrRf9Q3aaXRNcGa0wLVyG8ePU3KaTogUMHyd/PSr03HRcCqh89xkCU0TjPemubzcZCBnr02Sl7sdxqeW20z0pjfsMO/4IS9drdB0AkJZ4clDRcaKdy95rdg+xospDEMDAVPLbRbrzlp9w2LdYXolTtNcaftUWh7vzDUwDY1nDhc3tXjXNMFC3VlzltpegONHVDsehaRF2jJ4fabGSsvD0AUfONZ3yw1Yyjha2vFC+rIJztxlBGw/MVFKM1xIYmhi25zI6Wqbr55dZLbqEIQRc/W4vvEb55aYKKZ56A5RZuCWsWCbcY2cG0R4QXSbdyn2GpVWnGL78tUqlbaPpWsEkWSyP0256fHti2X6cwlOjxZw/JDvXC4ThpLDfek79gG8tNxiqpv699Thooo47xOePdLLZ164xmvTVVX3dADYav7Zeu/f0CETQhjEinz/rJvC9yLwoe7THwO+s8VjNyCl/D0p5ZNSyif7+uLd38W6SxhFWLqGLuK6lotLDV6+usL0Sptq2yOMJHUnIGHo2Gbc82m9Iu+VVqxP0XQC/DCOSuWS8W6oEJBLGbcsgq6PXsl1IlmKnaEnZTHck+RQb5pEd9EzvdLh2xeX+e5UhSiStN14t9HxQy4sNPjWhWVMXfCRkwM3yEn3ZeMdxGLG2tBxgvj7lzL+rErT4+x8A8cP79NfqdgMQ3mbQtLCDyPcMOSrZxfXFjjhdddoFEmq7fia94OI1l3UQV4/D1xb6VBpeWSsWFwg3qSJP0fK9eeFMJJr46TlqfpLy9h4h/9uySUMrlbaXFxsMlftMFKwSVrx/N307r1Z+moz5PVk6e+WjheyUHdU/dR9RErJ2fk6L1yu4AYhvWmL/lyCjGVwYaFJuSv+s9KdB1w/Iuze+1fvF3c6/yqR+h73DR86Hm94femthd02RbEDbDXy9F0hxP8K/G73958nFo7YiE8CTwG/3g15/3fA3wghvgFcBf6tlNITQtzTsc0YfWm5BQgm+9MUmyZOIElaOgs1BzcIKbc8kpbBYP7OBeHHBjJraX6rtVAJQ+fvPj7CbL1DNnFrCk5P2uKRkTyOH6qIwy6iaYKTgzlsUydtG7TdAC8IKaYsqm2fhhtwajjH9EqHvuy7TfAuLbVuaY56fCDL4VJ6U2lcKcvg9GiBKJKEUmKbuuoFssssNzxMXZC3TZYaLk+MF7m03GSilGYon4x7tkRx09qetIUbRKQs/ZYapo0oZRI8PJzDDyP8UDK13CKZMOjP2QgheGQkz0y1Q296fQd8tf/TatqfYntJJgwOl1LISGKbGmPFNE034EMn+nh05N6jfI8f6mGp4TKY25rCYhBGvDBVwQ+itaiHYvuZXumw2HDwoghNaLz/aAlDExzpz5BOGIz1pFhoOGv37nzK5Gh/hqYb3DHqBHCkL4Opa9imvqW6KMXeopCyeHqiyJfeWuCff/zkbpujuM9s1Xn6BeB/BP6f7u9fInagbouU8jPAZ246/G3g39z0un9zr8fuRCltcW6hwZFShsWES93xSRg6ERJD0zhSyjBcSG5qQXu7bvO6rjHWk77t+zbjmCnuL44fEkSx7LgmBIt1hzdn67w2U+WpiSLZhIGmibUb3HzdZbnh0p9L4PghdcenlE6s7X7fjQPUl03wsYcHqHV80olbo5OKnaUvm8DQNMZ702gadPyQ0eK79QbXO8uZhMEThzafljFb7RBJSdY2ODvfIJKSM2MFjg9kydj62qaLbep3XHwN5m01d9wnkoZO2opTs/tzCT58vI9HxwrrpmWutDw0TWwq5Spnm/fcE+x6Ihk7UIBKAbyP6Dq03JAwjOjP2TwymqcnZZJLWowXU5i6xljvjZsXE6Ub7/W1jk8YRkjixurXjyFdE7e8XrE/+IFTA/zLz73F+YUGx5TC7r5mq2p7LeBXtsmWHSOUcaTpe9eqeEGEber0ZROkTIMLS01MTeCHEYsNh/6sfUdFNcWDyRszNaptnylNcGY0T9sL6M8lqHcCKi2fN7rNMseKKSb7Mjw2VsAPIzQh+OaFZbybdoDDSPK9ays03ZBTw7k79vYQQtxQC6fYPZKWzt9/epx35ut8/fwy11baTPaniSLJazM1qm2Ph4ZyN/R12QzzNYe3ZuOIZT5prqVbvTNXx/EjNA2ePtxLZpvU4hT3ToTk5FCWhuPz0pUK5xeb/Njjo/zwmeEbhCLmah3e7EahHz/Uc1fRx61gGRqPjuSptD3GelTk8X4xnE8xnLeJIkkuaXK10ubykuRQb4qBnH3HTbJVqfOZaodk1xF/Tqn0Hgg+cWaYf/2Ft/nMC9f4nz7x8G6bo7iP3NPVLIT4t91/PyeE+E83/2yvidtP2wtx/QjHD+nLWiRMwWDW7iojhfSkLC4sNml7IbPVDn544y6flHEztG9dWKbSVH1bHlQiKal1fNp+wIWlFhnbIJ+Mf3JJg8tLLYJQcrXSXntPGEnaXrA2Jhz/3bFR7/istHz8IGJmZXN9oK7HCyLcQNU+7RaWoeH4IV4Y4vghsysOLS9gueEShJIr5TavXqvy/KUyDefua2D6chYDOZtSNkE+GS+4oyiuY1HsPglDZyBnU3d8gjDuz/Xi5cotdW3XX/PX1ypePy9sRBjJe6517c/ZnBzMbZs0u2J9hntS9OdtpisdLi02mal28CNJ2w3uWG+21HBp+wFOEOKFEUEoNzUuFA8+pUyCHzw1yH98eVrN6/uce52B/0P339/YLkN2klImwZuzNUZ6kliGhhlE/OWbC7Q8n8FcMs5d7s9g6WLdnaZa2+fbF8rM1zucXWjwD54e3za5XIh7TF0pt0knlFTp/UQIgRvE6XeXFls4fkjDCQhlxOnRArmkyWy1w0i3T9Ny0+XVa1U0ITjUm8LxQyxdY6HuMJCzydoGWdug5QUMbbKB6ip1x+elqRUkksfGdm43WxHj+CF/8vwVvvTWAgu1DuPFFIO5BNOVDoWUSd3xSVka87V4s+RapcNID1TbHkP55G13lVdT7EIpGc7baxEMNwjRNUHC1NbERhS7y1LD5VqlTdY2aPshrh9vnr14ucL3PTSw9rqxnuRaBHqo+/1eLbc5t9DAMjSePdJ72/EwV+vw1mydlGXw1ETPHcVlFLvD1XKLr59dwjQ0To/kSScMXD/ki2/Mc7gvzfu6yqs3s1B3uFJuUW8HPDSYI580KaatbXd2F+pxRDuXNHjPWM+Bbluw1/jJ5yb4/Gtz/IfvTPGpD6qeT/uVe7qipZQvdf/92vaaszM4foCpaeRtCycImSq3ma62CKPYscraJh8/NYgQcHahwYtTFY73Z7AtnYShM1d3uFZts9zwGCkku/1GJG/M1HD8kGQ3DfDIJopH1+P8QpPZahy5SJkG+ZSSMr0fuF7I1XKbhUasXnVluYUXRoz1prmw1OATZ0YwNLEmWV1t+0i5mvZpYOoa5xeaUOmgjwtKmQTPHOm94TP8MKLjh3eseai1/bUdzWrbU87TDuOHEZeX4uuu4wVU2j5CaCw0HI6UMpQyCVKWxvOXKjTcAF2DK8sthAbllsfj4z003QBTFySMGzdS1qtRShj6PacDN92As/MNUpbOycHshr2HFJvH8UO+c6nC69NVoihOqVxqOJxbbJCwdEqZBMcHshi6xvHr6hncIO4P1fIC+rM2HS+8rfO0UHeRElpuQNMNdi1tN4okQSRVKtk6TK+0+fbFMgsNBz+M6EmaPDqa5535BoamoQnBUxMRtnbrhmnHCxFCMJi3OdKXvkVYaLuYqXYII8lKKxY2UnLne4cnJ4p88Hgf//6vL/L3nhxX67d9yj05T0KI14n7jN7yFCCllKe3ZNV9ZrHhIYnTLJ6d7KXh+Lw1W2Oh7tJxA3ozCWZrsVLedCV2Yr745jy96QSjxbip6ePjBS4vt5nsz9Cbsbi41KTpBJxbaNCXTfDGTI0Li03ed7R017tOph4vhoQAXVcLo/tFEEmurrQJw4ipcotGxydlmTQ6PitNj//3hauM96aZrTl86Hgfoz1xVNLQBAPZxFrvH4jlpW85fxjx/KUKjh8y3pu6YcF1M4N5m0rLiyMUBRVt3GmytskjIzm+enYpVl+0dIIowtQF5xbi3kxSxql9i4sO89kEb87VKSQtHuHdyIOhC5490rutkeibmVpusdLyWGlBfzZx20abtY7P+YUGuaS54dhTxPRlEnT8gFon7uVlGoKsbXJ5qc2RUoa2G1JImtSdgL5MYm1RdHGxhaZB3Qk4PmBuuFgaL6ZouQGZhLEtIhL3wqpqX9sNOTGYVYqvN2FoAsvQWGn7yEhyqdyk0vEQCI4NZHn/sdJtr2/LEAgRz+crLY/FhstDgzmS1vbOB6OFJLWOT842yaoUzj3HL3/8BD/8O9/kf/7zt/iNT57ZbXMU94F7vep+aFut2GEsXWOkkMTUBVPlNr1pK264qGsgY6Ut29RJWnGPp44XEEVxqPzcQoOPPTzAe8aKvHeytNb7qS+TYLbaoZA2cf2QN2bjhpduEPKJMyN3Zd/R/gxZ2yRp6qqQ/D6iCTCEoNIOAEHaNunL2BzpSzFVbuOGEaahc6zbxNg2dR67rjHpeDGFrglMff3UKz98ty9PvbNxjYypawe66ele4HApy/cd7+NSucXR/gyFpMnLV6rYps5Ebwrb0pmtOnT8kOWWx3A+ST5p0pO2qHdroIJQ0vbC++o8FVIm8zUH09A23Ji5tNSk2vaptn0G8/auLdYfFBKmxumRAi9ermDogrSpM9aT4rGxHEIIUpbO2YUGrh9xbaXNh4/3IYQgaekkTYOkpVNpeUyvtG8bcSimLd53tLTDf9mNtP1wrR/RUtNVztNNDOaTfP9DA1wtt+l4AS0nJG+DG0YsN9y1VM2biTdh442WctPFC+IdtSuVFicHt1d0qj9nr2VEKPYep4bz/JMPHeF3v3qRD5/o44dOD++2SYpt5l7T9q6sPhZCHAKOSSm/LIRI3us5d5InJ3ootzwWag7fvLBELmnSl03gBhETvSk+cmKAUiaBH0YcLqUxtDhV5otvLtCXSTC90uYjJ9/NgXeDkEvLLSxd54ceHabcclloxOkZpn77RVQYSZpusCaJvcpq2H8zzHd7U431pDbMe15uurTdkJGepJLF7jJYsDk6kKGYMjm/2CCbNHlsrICG4JsXK/RlLYbyNo/fJEvddAO+faFMueXy3NHe235XSUvnaH+GSttjsnRvKZyK+4+Ukplqh5bjU3M8ikkTUxcstzySZtzL6Uh/hv5sgqYT8PBQjmLaYKbqUHcChvNJejMWQSRJWTo99yFNo9r2uFpp05+1Ge1J0ZtOYOhiQ+WvnpRFuenFG0H30ZnbL0QSwijENjRyiQR9uQQ//tQoHzzWjxtEWIbG51+dZWq5xeTAu9fz4VKapBmLjWhCcLV8e+fpdkgpmV7pIASMFJIbpmKGkeTCYpNISo71Z+66biqbMBgq2NQ7ARO9SjJ7PX7osRHemq/x+rU6Y8W4WfLFpRaGBt+dWuHQTf9vUsZCQh0/IGka5JIm1W4qdo9SVD2Q/OJHj/GdSxX+2Z++ykRvmkdG8rttkmIb2ZKjI4T4GeBTQBGYBEaBTwMf3bpp9w9L14giydfOL/DSVI2etMnjYwVGCkkOlzKcGIpTXF6brvHqtRUW6y7fd7KPj5zsZ2alw2DuxrSq5aZHrdttfLHhcLQ/yyefGKXS8ji1wQXz4lSFphPcc8PDSsvjjZkaEEc5jvavv0BvOD7fu1oF4qjaiUGVwiOl5OJik2uVNlPLLQZySUoZi6xt8q2LZZabDroe7/JfH0WIIsmFhQZnF2Kp6e9cLDOUv31PsIlSmgnUAmUvM1dz+N61Ff78tXnOzjVougHHvSx92QTllk9PxmKiN42uCd472UvbC5FS0vElxXSCjh+SsowbopLbzVuzddpeyFLDpZSxNpUG1J9L4AURoz2b61l30Hn+Upk/e2mGcsujP2fzd54Y58lDRTQtji7V2j6Xyy0qbY9cw0HKOLUa4mjFSMi4SmUAACAASURBVI9DuekxmLcJI4km4tTglbZHPmneUgt3PTPVDmfn46iFJsSGqbuz1Q7XugqgSVO/655BQghODauF3O2IIsn5hQbLDY+cbTBf9xjMa7hBxIWlFqdG3DUZcr3b6+uFyxW+c6mMqWs8Nl7gcG8arU+sNcNVHDwShs6nf+IJfuR3vsF/+b+/wP/9qWdV76d9xFajRD8PPA08DyClPC+E6N+yVfeZ701XeeXKCt84W2ax6VJpGcxX2+iaxlgx2S32zOAFEecXmpRbHsvfdfnBRwZImQapmxYuxZSFZWiEUq719hnvTTO+wa5eGMk1Cdx6J7jt6zbi+gDSZoNJct1StYNHJONF82Ld5cJSi7mag64JrpTbgKQ3kyBjGXhBhBdEfO9aFTcICQJJzfGpdXwyiVjM47XpKkIIJnpTnJ1vYuiCM6MFVYz9gLDUdPn2hTIvTVVoOD66Br4vmVrq0Js1KTc9HC/g9dk6QSg5M5bH1DUSZqzQmNA1pJQsNV3OzjfIJ00eHclvq5BDOmHQ9sK1BdudaLoBn31lhvmaw+FSmk+cGVbj8Q6Umw7XVjo4foihufzHl6f58lsLfOhkP584PYxEkjA0craJbRrc/PWeGS2w1HBZaDp8+a0FEqaGkOB3I5LPHS0RhPFc0vZCHh3JrzXg1q47mXaHcZNOxJ8tJaQSamG+3Sw2HD736izXKm2Wmh6WLmg4PpoQ9GYtFuoOf/X2AqauIYDnjvbyrYvLXCm3GelJ0nACXpxaQdcFzx7uvePnKfYvfdkEf/zTz/D3fu87/MM/eJ7P/MwzHO1XDtR+YKvOkyul9FYXCUIIg/WFJPYUsRy1ZKXjUu92Ao+kiW3Aq9dq/OsvvM1HT/bzweP9TJTSBFHcSPet2QbjxRQdP97NXU2XSFo6HzhWIggldcfnnbk6VyotbFPn+EB2XblxAZwcyrFQdxi/x5zzQsrizFgBL4wY3iDNL2ubPDZeWEvbU8Rd3k8M5nh7rk6+bFDv+HhhiB9GDOds+vN2LFHd8fnm+WU6foCha1xcajKQs3nf0RKPjuRZrLv89blFkLDccNcWPktNd03i/H7hhxGvdhs9PzKaVzUt94ila9SdgKgbSrBNnVLaYKKU4sJSk44X8dVzSyzVXbK2QcbWEQj6MwleubbCd5oeTS/A8SNcP2LRd2mWArI3fR9Xy22myi2G8jbHBrKcW2iw3HCZ7M/csfnuoyN5qh2frG1syinreCFtL96UaTg+TnB7BThFzEAu2XVKJG0/4PJyk3zCwtCXeO+RIgO5JH/r0WGev1zmcCn9/7f33mFyXNeB7+9UV+eenjzAIAMkGECKpEhQFEVlmbbXK8v5OWrXsj/b8lreZ/v57dPus+X8Wf68lp6DLEvPluS09pODgmXlQImmGUFSIEESIHKaHDp3Vzrvj6oZDICZwcwAmKmeub/vG6C7urr63HtPhXPvCXiBzib3AXhpuMKBU5NRCukkSVvwI4+AhJVGVZluhDFoEK42zRhPW7qyWBImG7iSLvTkU9y3pxdVvUzHLiUI1KSxXiaJhDBcblJqulRbHpaEiWJu2txBXz5DVy7FS8Nlyg2XQiZJMZtgoCNDpemxuZihJ5+kVPfwfWWk3MBX2NKZodTwLvNkMKx/9vQX+Lufuo8f+vDjfN8HH+XDb7/nsqy8hvbjao2nr4vI/wCyIvIg8F+Af7l6sa4vt2zq4Knjo6HhFPiUmz7JhNBs+bR8n8NDZaotj5rj8/33bOOx4xO8PFLFiWp72Al4YahMNhnGtIgIIsKTpyb42oujlFsu3dkU23typO2LazUFgfL06Smm6y43b+7g7h3di0h6ZZZaI6avkAYTdnMRkzWHQ+emGSo18ANAIWX7DHZmKOZSlJseX35xBFUhacM9O3vCbGvlFjf05+ktpBkuN2m6AYqSTydwPCVhyXWJe5lP/tkHsakGxUFjPK2E/kKaZEJwfcVxAxw34LlzJXo7MhRSFsVMgi8dGqHl+XRkbM5O1ak5HqmEhR+AnbDo7Uhz62CR6bpDRyZJLnX5pfXUZA3HC2u4bevKcnoidL06Pla74gOzZcmy0tf3FVK8ek8vR0er7BssGsN6KYiQTQrVBnheQOArQ+UmSVv48NeP88ab+zlfavLUySmOjVU5dK5EOpngzu1d3DpYpOX51F2ffNpmqtYiaVvc0J+n4frs2xKmlO/MJsmlEpwYr9GZs5muOYzXQle/pca5AktKJHRkpMLpiTqbOzMm3mIZ9Bcy5JMJpmsODVcRoOV49Hdk2Nuf5+GXxzk33cTzA24eLJKyLRKW8Joberl3V1jj68hIBT8I+OxzQ9SdgIQFr9jaRTpp8dob+0x5gQ3GjQMdfOK/vIZ3fOxJ3v4XT/Cr37mPH7tvh9GDNuZqjad3Az8JPAf8DPBZ4M+vVqjriR8oH/n3Y/z942eotXwswFeYwKEjnUAsi+mGR2K6wdePjNKRTpCwLBBlb3+eybrD2ekaDSegN5+mO5ekL8q4d2ayjusFDJeajESJHGZWemotj1MTdbJJa/aBd7jcNJmO1gg/UD5x4Cwnxuu05hQCty3lm+dKuAHkUxaWWGSSFn2FNEPTTXb15SmkbToySV44X+bUeB1LQFXIp23u39OFCLMXxdFKk2rTY3tP7qriTp47W6LcdNg3eMHVpzMbzmK6fsCAKbS6YuquhyWC43nMqMJotcWXDg2RSibwfCVhWXTlktRaHs+fL5G0rNlkItMNj4xtMdCRZrA4cNFM/8Gz03z98BhburLcvqWDM1NNBoppMqkEXbkwqHxmAsT1A85M1smn7SsaU1dCRLhjW9eKYik3KuW6w1TFxQfqHoyUmgx0pphuODx9eorJmkN/IUWl6XJqvEbatkjaFifHawx0pNnalcW2hEI6wdauIl6gnBxv8OobehktO2wqhrFn23ty1B2fUt3jSy+O0J0LXcGudRa+oVITCJMK3balaB7UlojvB0zWGtTc0IlGAVcDTo3VefToOJWWR9a2SCVtHMfj88+N0J1PcXhEOXi2RG8+xc6+HBM1l5eGK2wqZmYz77l+QKBgKpBsPLb35Pind76Gn//7Z/jVTz7PV14c4T1v3bfieqCGteWqjCdVDUTkk8AnVXXsGsl0XWl5Pl97cZy66xMAyQQkEFRBxWJTMUs+7eB6StPxefLEJJmUzWilScZO0PQCxsotAlXGqw7dR5Pcf0Mfm4oZXrWrh6HpJlv8sD5MTz6F4wUAvDhUjoymMJ6m2vJW7K5nuHoSVriCOFOYdna7QsMNEKDU8Ll1sDi7jxDWSNnVl2Nbd45vHBkjYUGp6XDn1i6mau5FD87VlsfBM2FCj7rjr3j299hohS++MExCBJDZh6xMMsFr9/YZ15yrJGlZlBou7hwj2g8ET6HZ9BAgbYPjBRQzNo4fkE/b7N1U4M5tXZwvNRkpt3j29BTZlE0qYTFeDV2CnztfQhROjNd43d4+9m4q4vgBXqDcs7M7cv0KjeqLimPvSVzRJctwbWl4PmrBjAXtBeD5UGu5iMJ0w6XpBTRdn8GuLA3Ho+GG3giuH3B+uomo0JVL4fgBmzsz2AmLVMLCC4LZ38kkE1RbHo4XkE6G5+31yIC6qzfH6ck6g50ZYzgtgzNTDYYrzkXbUokEZ6Zq1Bw/dONLJnjFYAe5jM1Y1cEJAoanW+TTCdxAeXDfJoTQ3dbxAnb25EgnLfYNFpc01i3P59hojWwqwe5lJgQxxJfOXJK/fMe9/NWjp3jv517iwfd/g7fduYUfuGcb9+3pNZmQ24iVFskV4NeAdwFWtM0H/lhVf/PaiXftyaVs+jpSnJkUfFWK2SQKBAHs6c1x46YCCkzVQn/nyboLdZfefAoNFD8I3bMGOtKUm2E9lzOTdXKpBMPlFnft6KLa8njq5CQnJ+r05NOUm27k5+yStBO8YmsnvipnJhskrNZskokZqk2XhGVd88J6hov51tsHefbMNGNVFwWSAn2dGXwVpusuadvG9ZWbBgqUmi6VlsOREY/OXJJiJslgV4bHjk+QS9ocH6/zllsvnkGyhNnA7qVcFFV13oecphuQSoTZntLzxK3E3XCqOx6VpkdfIR3Lm0NfIc25Uh3bCh+Ws0khaydI2RYddoKMbXHjQIFdfXlsy8INwoehO7d3019I8+TJKaYbLi+PlNm/q5cjoxUmqi1KdTcsrOz4oZtnPsVIpcmhc2XshHDf7t6LzvGZvhGZP2nAQvphuDa8alcPm4sZTk+FKzYJC8pRQdu6E1BuOBTSOfoLabb15LhxIM9UzWVzZ5ruXIrnzpWYbDicm6rzhr39dOdS3L+nl1LDY9ucWNOUbREE4bm8p69Adz6J4wU8fXqKHT25y+4HK2Vnb/6ylNqX0nB8AtVlF3Jfz5QaLoVUEiFcdUoACRE6c0kcX+nJp/iPt2/CUeX4aLjq2FdI05tLc3a6QSFtUUzbdOVSdOVT1FseNcdjvOqQsi0qTfeKWfiOj9VmJ1KKGXvBQtgnx2scOl8inbS4eVPReLK0ASLCf37NLr7jFYN84GtH+acDZ/nEM+coZmzuv6GX+/f0cs/OHm4Z7DBZUmPMSq+Yvwg8ANyrqicARGQP8EER+UVVff+1EvB6cNNAgZfOlwgCn6anqPr05tKcnKwzUXfZ0pXhpoEiw+UGSdvi0LkSQ+UGk3WHwc4s3fkU33vPNl4erVJtegx2ZcM6MS2PiUqLY+NVRspNtnfnKTVcgkDZN1hkoJimmEliJyyePzPNeKWFCDxw44WK5UdHqvzLwfPYlvDgvk1MRmlu9w0uz+3iWjxoqSovDVeoND1u2lSga53Vq2i6PhpcyD/oKpydalFI2+TTCbZ2ZZmuexwdq1Jv+Rwfq7KlK0cubdOZTfKq3b04XsBE1QGUmy5JQ5pL2ezqy3NkuELqChfBw8MVzkzWGezKXJZGeHd/nlc7vVgW3LX96mLkVhvXD3jixCSer2wqZnjFtvjFXjxybJxqw8eJFgcaruK6HknbYqCQZLAzjSp0ZZPs6i+wozvHy6NVjo1VySYT9BZC165KK4ji0ByOj1VxfeW2rUV++L4dnJ5s8OJwhZkz0vOVSsu9yHjaO1CgkLHJpxKXPcyeHK9xeLjCQDHNXdu7jBF1HWh5Ab2F1KzxBOB6AVO+y5ZiGssSTk7U2N6d5aWhMuW6RzolnJ1qMFx26CukuG1LkWzSIhcVzD092eDmzR2z1/eW5/PosQlOTNTZ0ZPDTgiDnVkeOjyKKtRbPjcMBJwYqzFQTC+amWuk3GS41GRbd3bBh+vFmK47HDg1hSrcub1ryfGz652dvVnG683Z+4IIjJRbTNQd7ITFtu4Mh4YqTNYcCtkkg2mbd77hBo6MVPjEM+douh6d+fBBOG0neP5ciZeGy1SaHl94fphiJkkyaXHf7p55YyOB2Yy+lgXpBYyssUqLF4fLvDhUob8jTS5lG+OpjejvSPPrb7uNd/+HW/jyiyM8fGScR46N84VDIwBkoqLdr9zZxSu3d3P3zi4GOkxh5LiwUuPp7cCDqjo+s0FVj4vIjwFfBGJrPLVcn+NjdSotHzeAVsMjAag6+EHAVN1lotrE8wI6c0nOjteZrDk4bkCl4VJzfHYHeb5xeJSeQhpQSnWXzmwSy2pwaqpGyw+oOz7j1Sav2NYxa3QMdGTw/IAgUOxoljlQ5dxUg/7IsDo9VcOPVrgOnJ6iMxNmfNvRk1uyG89wqckLQyUcL+C2LZ0rvqBWWh7npsLZr+PjNe7esb6Mp6+8MMxY/eI08VMNj7rjkbah0vDoLSQ5MdHCFrCtMBuW7yvTNYfDw2VuHSxy6FwZx/d57PgEY5UWO3pyvGJbJ7mUzUi5STJhceDUFG4QcEPk3+wHSiaZYLruMFFzOD1ZQxCGS01sy+LsVFho8+bNHeRSNvfu7rkmbZ6sOUzWHLZ2ZVdlZXNGlwEc37/C3tef+SYVTk9WKTdc5npweoR9ZRFQrrdwAzhwepptnRm29eXoy6cZq7T4+pEx7trWxZauLH35NIlEWLpgZ0+BZEK4ZXOR4+M1JisO6WSCvZsKdHspLIHJqkMQMJsowLJk3gyNTdfn8RPjnJls0jFhc+tgB5mkWSm41hweKfPC2fLs+1ZkTFsofhAw0JFhc2ea586UaXgex8ZqoeGST6EKaJi2em9/gUrTY6TSZLTSxPUDXh1l16o0PWxL2NGTo5AOCyqPV1rYCcH1lM5skhNjNeqOz8nxOjt78/POPqsqh86XCAIoN11et7d/2e2ttrxQbsKMjMZ4Chmrtjg7fsGA9jT8cxzFEp+XR6qUmy5JKxFOsHRkODRU5kuHhjkxXmOi1iKfttnZU2BPf4FbN3cwVAoTTAyXmuTTNpav1B1/QeNpZ2+ejkyStG0hEo7VpUlC0snQJTSsIWZd9+yu6xXHC3hhKDzv90UJQFaTTDLBW+/Ywlvv2AKEWTifOT3F06emeebMFB/9t5N8yD8OhF4SfYXUbAKgQDX6C1dJVZWMHRZ27ymk2N6dY3dfnhv68+zozS1aa86wPFZ6B07ONZxmUNUxEYm1o74fKIeGpnGDOduASivABjwCGm7AgVOTWJZFwwlmg8jLLY/pusvhoRKPHh/DwmJ3Xw7LCjPoDBQzNN2Ab54uUW052ALfODzO9p4cW7pyHDg1xVi5xZ7+Aq/c0UlXLsnpiTonxmucnqzzwI19vHJ7Ny+eL+Op0pdL8dz5MsWszRsTFn6gjJSbdGTseQ2pM5N1jo1Vmag6BKqcmqjTcgNEWHbFewgLMGZTCRqOT19+/d1YnzgxMe/2lh/+1V2Haius59QCMtkk+XSSc9N1Xhwu05NLcffOLs5PN2l5AYEqlsisYVRpejx8dBTHVbIpi86MTdP1KTW8MFPTpg5eHq3iB2F8XWcuxZauLKcna6jCuen6ggWNHS8gYcmy3OBcP+DZM1MEQTjrvH/XtTHIFiOTDN1Up+ou23vW9uZ+8Ow0Y5UWu/vyFwXpnpmsM928vNaaG8BwxUMJJ1hs28LzA+quz0i2SbnpUmt5nBmv8ta7tnJDf57z0036OzJYlrCjO8dk1eHZs9NYIuzdVKCYSdKdT/GJp89Safps7c5w57auaBXi8pv2S8Nlzk42GCqFD9ijlSYPHR7jpk0dCwYatzyfpGXF3p0zbrx0vkxrnkIbAXBu2gGZ4uWRJNWWy3TDpTNr4/spJmotDp0v05NPcW6qxr4tXYgFQ9NNhsoN9vYXGK+0KGaT7I3S0ndkbBKW8OUXRjgxXuemTXkeuLGPrd05jo5WOTVRpzufmp1km8H1g9nrSy5lU216K3a5G+zMUm6EKfqvNMHmB4oXBBvi4evrL44wX+VFJUwuNdXwaHlhsfl0wqInMoBbrs9EzaHl+BwZrnJ8vMrRkSovj1bY0pWhM5vi3t09eH4QZs+8JCNr0/XxAp01knryKUp1lwOnJwkCuGNbJwNzEskUM0nu3d3DXdu7VrTyaAgZKjUYr7QAOJ9tLLvo9LVma1eWrV3ZWWOq5fkcOl/m6VNTs3VHZ+qOJS1BkNkkVQI0XJ+jY1UmTrSYipKTQRhGsKUry+6+PLt68+zqy7O7L8dARyY0tvIpk0Z/GazUeHJW+Nl1QUTeD+wHnlbV/32xfVMJi4na/EVp524NFySCiz73FepOQABMNXxySaHhuHTlUjx5UkhYCV4erTBZbVJt+ZyPCu8ePDfNd925FUVouD49uSQjpTDT3milRbnp0nACWq7H0dEyCmwqpHl5tEqgARnbwvECjo5WGS418VW5bTDM5tSZTc5mXzszVafa9NBAEQnT2SrKwTPT0YmzPAMqmbB49Z5eXD9YlydVzV38cy+AqqNUHZeUFcYePfLyaBiDZIeFUV84P81gV5YtnTm8wKfaCsgkLW7ZXGCi2iIhFrYV4HjK80Nlzk7XoxkiQVQ5OlEjn7S5ZbDIPTsvuOSdmaqzfQGDd7Tc5LlzJZIJi1ft7pnNuNd0/UVXJ4UwliZgdRNMDBQzF9301wLXDxgthzfIoVLzIsPjqy8OL/i9mWdpH7C8gHLToTOTIN+V4syUx3i1xXi1RaBCKiHUHJ+zUw0euLGP/o4ML5wvEwSKT8CxkSodaZumG1CquzRdnydP1DkzUWfvpg4e3LcJzw9wAmW41OTUeI1yw6Uzl2KwM8tAR4ozk43ZlcldvfnLxvHURI2XR6rk0gnu2z1/ALKqohr/WLnrhapSbnjk04mLDNZD50sLfscHTk+1EFqkEuG1YcJzOOSWSCdtJmsOZ6eF42MVzk03yaQsNhXSiIYTI0+dnKI7nwSU198U1pH/l2+e45Gj40zUHIZKdaqOz+tu7GOo1MQSuGng4oe4WsvjiZOTBIHyim2d7N/ZTbXlrSgNfaXpMl512N2Xv+IKdNP1eeLEJK4fsG9L8bK6heWmy5HhCvm0zS2bO9repfSFc9NX3KfhKkdHKpybrHN0tMKW7iyg5JMW6YTNtu4sz50tM1xqMFppMX6oxZ3bu3jzLQN0ZZOcn2zScDzu2tHNualwn6m6Q9KyuGWwY3ays9xyKdVD995Ky2PgEjnmG3s/UCZqraiY8/q7b19rQq+h8HXXKpQYWS5pO8HdO7pXVNam3HQ5OV7jxHiNY2M1To7XODlR45PPnqMyz4RhLpWYnZS1RMJ7BWHc9sxrITTs+zvS9EfxfjPGV08+RWc2GR5DLkzuBhrqpUarZIEqvkbvAy68nvksCO9RM6tqQXBhhe3C9y7sH8z5rirR5FJidgFg7v+ZpEWgoev8zG/50fFmvGSWUodrpcbTnSJSnme7AKv6lCQidwMFVX2diHxQRO5V1ScX2v/I2HxiL5255lTTVRzPZaji8tJIDQuwLWZXtYLo38MjNT740Mvs7M+zq6fARKXJPxw4Q1c+xb7NRb7+8hiOF4QZ1SzhpeEytmWRsoW6E7C9J8d9u0MjxvF8Pn9omH946szsrPUbbxpgtNpipNTk+HiNzcUMr7upj48/eYYvvzjN9u4sJ8Zr/ORr95BZpqvWZ587z0i5yXfesZVNy6hDEieGS02qLY+dvRfShavOM8W8CE4ATtOn1PRnA4kFmKy5nJ5qcOugx9auLGOVJiOVBkPTDUYrDoEGZJMJunIpkgnhiZNT+IFyY3+ec1N1sqkE6c4Eu3svGEo3DhS4cWD+VYWT4zUOnp0mYYUZIssNl4QlPHZ8gpYbzkorSssL2NqV5Y5tXbNuCHbCYv+uHqbrzlWnwm43kgmLLV1ZRivNy4zSY+OtJR3DBVwPXh5v8PJ4Y3a7BTxxcpIXhqbIJFMEqvzrwSHefEs/tZbP4ZEKlaaLbQmHh0sMVxyablg3JmGFLrFHRqIkEw0HyxKODFdoeWEmvs2dGfqLKd5y6wCbO7M8emyc89MNhkpNvvPOLZyZrHNirIZtC2cmG3RHbsJ1J0zBXmqELlnJhEXd8fjioRHKDZcH921icImuPp4fcHKiRjJhzSYhmKo5OH7Qdrp06HyZ4VKTXDrB/Xt6Zx/2Hz1y5YSxCrOlDXyF8brPTHq+phfeDx4/PgEyc4WAXb1Zys0ALwioND2ODFfozCWxxaKYCVeyT467BEHA5w4OMVF32FRI86lnM+RSNg/u28Sbb93ERK3Fs6emqDoexYzNwO7MiuJQVZUDp6bw/NCT4dVXeFCYyQwIMFF1Lqtb+I3DY4xVWwx2ZthczMxO5i1GECjHx6uohkVELzXym67P0dEq+bR9xWxzw6UmlabL9p7csowFVWWs0iKTSlxkhAxNV678XaDiKBXHY6zmMVZxGCimmao71Fs+R8dq3NhXoNx0OFdqEvjKeKVFLpWgmE0yPB2uXL8wVKHh+GSSYYbOQjpJTyE5azyNl1uUmi51x+dNNy98rpbqLsPlJpuLGU5N1hgtt0jZFg/c2BfLJD1xoiuX4rU39qPoultZLWaS85asUFUmag6nJuqMV1uz7vzTdQcviAwJ1QurWlwov6KqTNVdxiotjoxUeeToBKXGFWai24hcKsELv/ntV9xvRcaTqsZJw14NfCl6/WXgfmBB4+lrzy88y7xclNAXeua1T5i1b75LVcVRTo3Vydo2Y5YVPeS6fO3wGCPlJk0voNx02dGdC10FAx9QUnZi9ib3qj29jFaa1Fo+Y5UmpYZLZzbFM2emUYXzUT0P27L414NDnBivc3qyTjGTIpO0CViewXBkuMwXDo2gCk0n4F1v2Xt1HbYGlJsuz58LZ5QdL5w5hctTlC8HJazT4evMaqTP4eEyZyfrZNNJhHBmO51MkE8lGOzKUcwmmKy55JI2bhCQSCToSydpegGd2SSFJcwel5suR0ersw/Et23J0VtI03D9yHAKODlRJ5tMMN1wyadsxqqti3zhC2l7SQU21yP7thTZR/GaHzcgnFkrNZW62wINM3l+6tnz5FI2Ld+n4fiIhDXkUrZFy/VD48gSPFWGSg1yqQRNNyCdTHBktEpCLAqZMC5muubx9OlJ3nzzJg6cmiKTtDk31eD4eI1vHB5joubQdDxeuaObuuNx8+YOsskE/3Z0HM9XegspXrmjm+FSk6OjVQCePDnJ2+7auqQ2npyoc3I8LOqbTSVIRXF8AM1N/hWzusWJcjO80ddbfpQqPrxil+Z3SFgyUdgTLT/AEmg6PnZCODXRoOUHEMDjx8c5OVFnR3eWGzcVuG1rkbFqk+Fyi+eHKpRqLgEwXnEYqzoUc+Es7u7+PEEAw5Umvq+cnqxz7+4rz44uRPggtLRrYE8uxebODHXHZ2fvxRMPQ+VwYmqi6pBPX57oZCHOlxqz+pSyrcv0Z8bLAsJELQsZZLWWN3t9rzs+d25fel2zmZl4EXj1nt5Z2R873bjCNy9GgZrjM1lzqLY8fAWn7nF8vEbTC2OrPU+xWh5HRyps68lyZrJB3fVJnithidCZsRmttkjbDoW0zd07QpfqJPg7dgAAG5lJREFUhuuzrSuHCPO69c7wzbPTOF7AcLlJNjIgZ1w8jfF0ZVY7zmmtEZEofurauHt6fpgvYKruUG64swaYF3lBWRIaYQkRLEuiTMTh6tTsZ9Fq1+xn0X6Xfj57nJnvWlx0HICWG9BwfeqOR8MN77/he5+WF0SrYuGxE1Yo08xK2aWu0guxHp6iuoDj0esScNvcD0Xkp4GfBtixYwev2dsHXzl21T+aSsBAIcVY1bmoyGoxnSCXThIEAdWWS90NlzptgaSdYFdvHscPa4P0FFIkLOHASZ9y0+P2wSJ37ewmYVlRrJKStC1eub2LWwaLZJIJHrihjydPTiGibOnMctNAB8VsklI9TCrRHd3oxqstkglhV1+eO7Z1cs/O7gWDUxcin7ZJWoLjK135+C1nL4VEdEKpgj2nMuFiN6Ir0ZlJ0FdIMVlz8HwFETJJm658inwqQWcuRcvxcQPl9i2d7OjNcfuWTlK28IUXRsgnbb513ybGag6uF3DH9s4lXbzTtoWdEDIkuGWwOLs6VUjb7OnPM90IXUiHS03shJC0Lbpj6IYQN7qzwlRjZca0LZC2w3MkbQsDHWkmai5+oGER1YSQSaawCFeetvfmqLU8SjXYXMzQ8oLIvRYyKZvejgSFtI0lF1YPEwmLrmyKjG1jibBvSwflhstAMcOWzgx2QkjbgiU2nblwpnFTMRMV5AzbNTNZsKmYoTNr0/KULcsIMJ+bIj+dSOD4F9bgXX/lExFrwS2bi5yaqM2uxs2wtWhxrhws8k1IWYCCc0mTkwL5tMVNgx10ppMowotDZVK2hW1Z9CUtKk2PYjZJxrZAhPv39LGlK8NE1UGkREfGBoW6G9CVtenK2WSiVetC2iaZsNjWncX19KrcYEWEe3Z2M1FtLWnV0LJkwRp1uWSC/o40xWySO7ct7ToGXLRClJ1ntWjGkElYsuhq0oyLkT+nXtpSmVlN08iFZ4a9vWmOTFx5NdoinDhJCuQzNvft6uHpM1PUmmG9sL5CiumGixsojgV9+RTbunPsHeggZSWYqjt0ZZNs78nSkUmRm6iFBXTn3KduHSxyZqrOpmJmUSMomQhd+5MJYd+WIqcn6vQVUhvOKDCsDXbCmnXjiwOZZIJOru+zjyzXfSluiMjPAWOq+nER+V5gm6r+0Xz77t+/X5966in+5t+P8YdfPkq95ZFOgp1I0JtPU0hZJBJQbgakLLh5SydvunkTdc9npNTkfLnFru4MbhDOvt4yWKTWcHnk2ASVhsvtWzvZ2pOn0fLIpBJ05WweOTpOreGxrTfH3k0dlBs+t28tsjValnc8n/PTDWpNl4Filv5ihmOjVQ6PVNjZk2Nbdxax5CK3gmrLY7rmkLCEjuhmPF4NU5rP+K/XWh6PH5+kr5DijmXMxl3K0dEKY+Umd+/qadsl7VLdpe56bIoC+ffv389TTz3FNw6P8JMffYq5C84dqbBwsmCRsRO89qY+OlI2mXSCobJDdy7Jj79mN2IJ56fqTNddXC9grNair5Bh/64eunMpatEYdeVTF82aBtFMzErjApquT9P1r+iu4wcaxjiZWcdF2b9/P1/9+sN83wcf5fh4AwUKCUjasKkrSzqZZHNninwywVClietBbz5JTyGNr7C3v8BNmzsp1VuowE0DRRzf46HD4xSzNtu7c5QbLq6vVB2PbV057tnZzamJKsNlh1s2Fzg0VCEIlFsGi+zoyTJRc6k1PeyE0JtPkU/bjFcdunIXYhjmFkaerLYYKjXZ3ZcnnUxc9JA1EblkbO3Ozk6e1B2PalR3azn6MVZphdm9IoP8zGQdxw/Y1Ztv+9nt/fv389jjT/D63/kc5+sXtg/moJjLcN+eHu7e3cdkLfQOODZW5ehoBcuCnlyGGwby3Lq5iBOEJQtGyk0qDY+phsOOnhyHzpaotDzu2NZJ1fHYVMywuy+c/Cg1HE6N16i0fKoNh2rLZ0dPjh29Ocotj85scjZF8VStxXTDZWtXLjYPxtWWhx/F3y6HUt1F0QWvZVM1h0wUq7AYlaZLreUz0LE8fXa8gFMTNXJpe3Z1fv/+/Tz55JO88tc+y3QUvZ0kNJIKCejtzrC5I80b9vbTk0/TmU9xbKxOMWtzx7Yu6i2Xg2fL7OnLMVprkU8l8Twf206QTVrs3dxBxraZqLZI2hZZO0HSFjoyYdKJk5M1bhss0rfMlNQtL1z56smn2vY+HSdmnhEMGxsROaCq++f9bB0YT3cDP6OqPyMifwp8TFWfWGDfMeBU9LYPuCxj4BoQBzk2mgx3A0+vwe8uRhzkiIMMYHQhLnJAfGS53nLEUQ8WIu7yQfvK2E56cDWs57bB1bevnfWg3eSF+Mq8U1XnrQPR9m57qvq0iDRF5GHg2YUMp2jf2U4QkacWsihXkzjIsZFliEPb4yJHHGRYSzk2evvnIy6yrKYccWnzQsRdPlgfMrZDG1bKem4bXNv2tVtftZu80J4yt73xBHCl9OQGg8FgMBgMBoPBcLXEw2naYDAYDAaDwWAwGGLORjaePrzWAkTEQY6NLEMc2g7xkCMOMoDRhbjIAfGRZTXliEubFyLu8sH6kLEd2rBS1nPb4Nq2r936qt3khTaUue0TRhgMBoPBYDAYDAbDarCRV54MBoPBYDAYDAaDYckY48lgMBgMBoPBYDAYlsC6yLa3FETkHuB+oAuYBh5TVVMFbYNh9MAwg9EFAxg9MIQYPTCA0QPD0tgQMU8i8n4gDXwZKAFF4FsAbzXTnItIAXgn4YnZSXRiAh9S1coqyZAAvptLLg7AJ1XVWw0ZIjlWvS+MHlwkw4bVg+h3jS5cLsuG04m46MFixElH5iMuerMYV+rDdtCDldIO43O1XCuDp930oB3Hdr0YpxvFePqGqr5+qduvoxyfBv4a+AoXn5j/SVW/c5Vk+Gvg4Dwy3KmqP7YaMkRyrHpfGD24SIYNqwfR7xpduFyWDacTcdGDxYiTjsxHXPRmMa7Uh+2gByulHcbnariWBk+76UG7jW27GaeLsVGMp/cBeeBLQJlwwN4CtFT1F1ZRjkeA16lqMGebBTysqg+skgwPq+rrlrr9Osqx6n1h9OAiGTasHkS/YXThclk2nE7ERQ8WI046Mh9x0ZvFuFIftoMerJR2GJ+r4VoaPO2mB+02tu1mnC7Ghoh5UtVfEpFXAq8G9hJavB9W1WdWWZQPAA+JyEHCE7MTuA3401WU4VMi8hngoTkyvB74l1WUAdagL4weXMSG1QMwurAAG04nYqQHixEnHZmPuOjNYizah22iByulHcbnanhKRD7E5QbP08s9UBvqQbuN7TUbq7VmQ6w8xQkRsQlPyk7CE/Pl1fZNFZF+YP8cGZ5S1bHVlCGSY837Yq2IQ9uNHsSDOLXf6EQ8iXt/xEVvFiPufXg9aYfxuRrmGDwz7XssxgbPNaXdxna9jNWGWHmKC1HQ6s8AryEMlpsCHhOR1U4U8PpLZMiLyFoEha9pX6wVcWi70YN4EKf2G52IJ3Hvj7jozWLEvQ+vJ+0wPtcAi/B5Ngkkor91T5uO7boYK7PytIrEIfA3CjB8jssD9tZtUHjciEPbjR7Egzi13+hEPIl7f8RFbxYj7n14PWmH8bkaoiQEKS4f27ZLQrBc2m1s19NYGeNpFYlD4G9cAgzj0BdrRRzabvQgHsSp/UYn4knc+yMuerMYce/D60k7jM/VsJ6SECyXdhvb9TRWxm1vdYlD4G9cAgzj0BdrRRzabvQgHsSp/UYn4knc+yMuerMYce/D60k7jM/VsG6SEKyAdhvbdTNWZuVplYlD0GpcAgzj0BdrRRzabvQgHsSp/UYn4knc+yMuerMYce/D60k7jM/VsF6SEKyEdhvb9TJWZuVpFYlD0GpcAgzj0BdrRRzabvQgHsSp/UYn4knc+yMuerMYce/D60k7jM81YF0kIVgubTq262KszMrTKhKHoNW4BBjGoS/Wiji03ehBPIhT+41OxJO490dc9GYx4t6H15N2GJ+rYT0lIVgu7Ta262msjPG0isQhaDUuAYZx6Iu1Ig5tN3oQD+LUfqMT8STu/REXvVmMuPfh9aQdxudqWE9JCJZLu43tehor47a3usQhaDUuAYZx6Iu1Ig5tN3oQD+LUfqMT8STu/REXvVmMuPfh9aQdxudqWDdJCFZAu43tuhkrs/K0yswJWu0iXLY8YhIFrF1frBVxaLvRg3gQp/YbnYgnce+PuOjNYsS9D68n7TA+V8N6SUKwEtptbNfLWFlrLcBGQkS6VNVT1ReBXuBtwPeIiKyiDDMBht8CPEho9b8hurGsGnHoi7UiDm03ehAP4tR+oxPxJO79ERe9WYy49+H1pB3G5xqwLpIQLJc2Hdt1MVZm5WkVEZGvquqbReR3CWe/PgU8AGxT1XeskgyxCDCMQ1+sFXFou9GDeBCn9hudiCdx74+46M1ixL0PryftMD5Xw3pKQrBc2m1s19NYxdk6Xc+8RlXfEL3+vIg8tIq/vUtV337JtmdE5OFVlGEua9kXa43RgwtsZD2AeLTf6ES8iWt/xE1vFiOufXg9aafxWQn3zJNs4BMi8o01kWZ1abexXTdjZYyn1eXuSEn2RW4E01HGn45VlOHTlwQYFoE3sPoBhndHJ/ita9gXa4XRgwtsZD2AeOjCDEYn4kmcdGQ+4qI3i7GRdaodxudqWDdJCFbAQmP76bUUahHWzVgZt71VRkRuB/zI9xoRyQF3qOpjqyjDTIDhPcAx4KiqPrlavx/J8F3Al1S1PmdbDtirqt9cTVnWAqMHszJsaD2AeOjCHFmMTsSQOOnIfMRBbxZjo+tU3MfnapF1koRgJYjI64F9wDShQfIksEdVH19TwRYgGqv7uJC4pU9Vf2ttpVo+xnhaRUTkD4ABwAP6gJ9Q1bEZf+xVkuHzqvrtIvILhL6mnyH0/T6rqv99NWSI5DgPnAJGgE8An1bVqdX6/bXE6MFFcmxYPYB46MIcWYxOxJA46ch8xEVvFmMj61Q7jM/VIiL3AK8hfCCfIjSenlpbqa4/cb82XEq0+qvA3EQt+4BD87jzxRrjtre63DujICJyB/APIvLLqyxDKvr/e4A3aVg08M9E5N9WWY7DqvomEdkNfC+h32sL+JSqrvfaG0YPLrCR9QDioQszGJ2IJ3HSkfmIi94sxkbWqXYYnxVzSRKCFwhdwd4hIm9vtyQEKyDu14ZL+WfgTuBjqvoQgIh8TlX/w5pKtQKM8bS6JEQkpaqOqh4Uke8B/oawWN9qsU9E/gq4AUgDjWh7ZhVlmEVVTwB/APyBiGwCvmst5FhljB5cwgbVA4iHLsxgdCKexElH5iNWerMYG1Sn2mZ8Vsi6SUKwAuJ+bbgIVX2/iKSAnxSRdwL/a61lWinGbW8VEZFXASdVdXTOtgTwA6r696skw845b8+rqisiBeB1qvq51ZAhkuPbVPULq/V7ccLowUVybFg9gHjowpzfNToRQ+KkI/MRF71ZjI2sU+0wPleDiLwPyHN5EoKWqv7CWsp2vYn7tWExJKxF9XbgZlV991rLs1yM8WQwGAwGg8FgaEvmJIyYSULwKGCvp6QYhnhhjCeDwWAwGAwGQ9shYcr5yzYDn1fVB1dbHsPGwMQ8GQwGg8FgMBjakSpwacp+Ae5YA1kMG4T5LHZDGyEivog8O+dv11Ue76SI9F0b6QxrgYioiPzNnPe2iIxJWEwPEXmbiLw7ev3rM9l5ROQhEdm/NlIbloOIbBKR/yUix0XkgIg8GgULGzYw1/p+YDC0AS8C36Oqb57z9ybasPDqpcw5nw+JyDdF5P9YYKVt7nd2icjz0ev9IvJHK/ztX5CwFpphHszKU/vTUNW75vtARITQNTNYZZkMa0sNuF1EsqraAB4Ezs18qKqfJr4VyA1XIDqvPwn8par+SLRtJ/C2S/azVdW7Dr+fUFX/Wh/XcE0w9wPDRuOtXMggOJe2S389D7Pns4gMEGanKwK/tpQvR7WuVlrv6hcIM/fVr7TjRsSsPK0zolmHw1Fq0ueB7SLyf4rIkyJyUER+I9ovLyL/Gs1mPC8iPzjnMD8vIk+LyHMicsuaNMRwtXwW+I/R6x8G/m7mAxH5cRH5k4W+KCKWiHxMRH77OstoWBlvBhxV/bOZDap6SlX/OBrbT4vIV4GviEiPiHwyOvcfk7AWCCJSEJGPRuf4QRH5vmj7t0arWE+LyD9EWblmVqR/T0SeBt4d/U/02d657w3xYYH7we9H1/znZq77IvKbc1arzonIR6PtPyYiT0TbPxRl8kJEqiLyO9H94zEJ034bDKuOqg6pqjPP9ms+cbSWRBn1fhp4l4QkonN55tnuZy79joi8cY7HyULX/A+KyFPR6tbM8+F/BbYAXxORr0XbFro3vFdEXoiO+T+jbT8QXWO+KVHK+IXkjWR8SET+UUReEpG/jSZ6Yo0xntqf7Jyb3ieibXuBP1XV24Cbo/evAu4C7hGR1wPfTpi29E5VvR34/Jxjjqvq3cAHgTgXXDMszN8DPyQiGULf78eX+D0b+FvgZVX9leslnOGquI3FXVLuBr5fVd8A/AbwjKreAfwP4K+ifX4VKKnqK6LPviqhu+6vAN8Snf9PAb8057gTqnq3qv4OUBKRmRWOdwAfvVaNM1wVV7of7Ce8D9wJfAvw+yIyqKrviWa43whMAn8iIrcCPwg8EH3mAz8aHTMPPKaqdwLfAH5qldpnMGxYVPU4kAAGgJ8kvIbfC9wL/JSERaAX4rJrfrT9/1bV/YTPCW8QkTtU9Y+A84RFld+00L1BRHoJiy/fFh1zZsL1PcC3RdeHGY+IxeR9JeFK1z5gD/DAijtplTBue+3PRW4aEvq4n1LVmQDKb43+noneFwhvpg8TFgr8PeAzqvrwnGP+c/T/AcJq7IY2IyqYt4tw1emzy/jqh4CPRw/IhjZARD4AvBZwgA8AX1LVyejj1wLfB6CqXxWRXhEpEj44/9DMMVR1SkTeSnjzeiSa+EsRpvyd4f+b8/rPgXeIyC8RPmC/6nq0zbBsrnQ/eC3wd5Hb5YiIfJ3wQebT0Wzv3wDvU9UDIvIu4B7gyUgfssBMPRkH+Ez0+gCha7DBYFg9vhW4Q0S+P3rfSfhsd2SB/S+75kcv/zcR+WlCe2CQ8B5w8JLvvpr57w0loAn8RbTCNXNNeAT4mIh8nAvPkwvJ6wBPqOpZABF5FtgF/NuSemGNMMbT+qQ257UAv6uqH7p0JxG5G/gO4LdF5Cuq+pvRR63ofx+jI+3Mp4H/STib3LvE7/w78CYR+QNVbV4vwQxXxSEigwhAVX8umhmc8W2vzfutKyOEhtcPL/D53OP+E6Hf/VeBA6o6scLfNFx/lqoPvw6cVdWZVUQhjKv77/Ps6+qFOifmPmEwrAIisofwfBslPD9//tLiz7KMJDHRys8vA/dGE2gfAzLz7coC9wYJC/W+Bfh+4F3Am1X1nSJyH2HowAERuWcRed/IhWdOaJPriXHbW/98AfiJOf6pW0VkQES2AHVV/Rvg9wldfQzri48Av6Gqzy3jO39BuFL1cQkrgBvix1eBjIj87JxtC2VFepjI1Sq6SY2rahn4EvBzMzuJSDdhut8HROTGaFteRG6a76CRYf0FQtde47LXPjwM/GAUf9APvB54QkS+k3Bm+r/O2fcrwPdLGKiOhPFzO1dd4nWArDxr2o+slowLyHCXiHzHCr63S0QaUZtfEJE/u1J7DYsTna9/BvxJNHHxBeBnRSQZfX6TiOQXOcR81/wi4eRKScK4xblJNipAR/R63ntD9FzZqaqfBX6R0B0YEblBVR9X1fcAY8D2Fcgba8zD0TpHVb8Y+a4/Gi23VoEfA24k9HcPABf42YWPYmhHomXwZacpVdX3iUgn8Nci8qMmO1e8UFUVke8G3i8i/43w5lQD/i9C16q5/DrwERE5SJg16T9H238b+ICEKW19QiP7n0Xkx4G/E5F0tN+vsLAbyN8S+rt/8Zo0zLAafAK4H/gmoMB/U9XhyP1yK6EhBfBpVX2PiPwK8MXowdclfPg6tTaitzUryZq2C/iRaN8lIdc+w+ZdhHFyy3H9nuGYqt4VTcJ9FfhuLrhwXTOuQ5vjRDZyY0sCHvDXwPuiz/6cUEeejlxuxwj7eCEWuuY/A7wEnCF0t5vhw8DnReR8FPf041x+b6gAn4piq4ULMbK/LyJ7o21fIbzeHFymvLFGLqy8GwwGg8GwNCSsD9apqr+61rIYDHFGRKqqWpjzfg/wJNBH6AH0XkL36jTwAVX9kIg8BtwKnAD+knAibL793gj8FjAF3BL9/QlhVs4zhEbvR1T1HyP3qfcRxj6PAz+uqkMi8hBhUqE3AV2Ewf2PA0cJJ2TOAb8LDAN/GDVDgderamWe9u4ijKW+PXr/XsJEJFOEGeNS0bHfrqr1yF2sSWioFYFfUtXPSJjd8YptVtV5V8gNhuuFWXkyGAwGw7KQMJPbDYQPaAaDYRmo6vHIMBgAvosoC1k0q/+IiHwReDfwy6r6VoAoqH++/SB0u79dVU9EAfm7CAP8BwiLyH4kcpf6Y+C7VHVMwjT1vwP8RHQMW1VfFbnp/ZqqfouIvAfYr6rvimT4F+DnVPWRyGXrinGxEhZafQthBrYnVPX/jbb/NqGR9sfRrrsIE8/cQJgi+0bgPy2lzUvrdYPh2mGMJ4PBYDAsC1X9nrWWwWBYJyyWhWyp+z0xx4h4LfAPkbv1sER1egjLltwOfClyzUwAQ3OOPzfL7q4FZH0EeJ+I/C3wzzMZ0hbghsjlTIFPqernROQNkdHURbj6NTd5wMcjmV8WkeOEK2hLbbPBsKoY48lgMBgMBoNhlVhi1rQ3Xvq1RfZbSkZFAQ6p6v0LfH7FLLuq+l4R+VfCLL2PiMi3qepLCxzv2Ny0+REfA75bVb8ZxdC8ce7hL/05rr7NBsN1wWQ/MRgMBoPBYFgFlpE1bW62MxbZ71IeAb5PRKwog9obo+2HgX4RuT/6flJEbruCuBfJEGVRe05Vf48wZuuW5bQ9OtZQ1IYfveSzH4hkvoGwUOph1lmGNsP6waw8GQwGg8FgMFw/VpI17SDgi8g3CVds/nCB/S7lnwhjjF4gTBjxNGHckBO5v/1RlE3VBv4fwrpxC/E14N2R7L8LvFZE3gQE0fc+t8x++FXCRBRj0f9zjcPTwBOECSPeqapNEVluRjmDYVUw2fYMBoPBYDAY1gkiUlDVqoj0EhokD6jq8FrLtRBRtr3PqOo/rrUsBsNSMCtPBoPBYDAYDOuHz4hIF2FK8N+Ks+FkMLQjZuXJYDAYDAaDwbAsROQVhC6Ic2mp6n1rIY/BsFoY48lgMBgMBoPBYDAYloDJtmcwGAwGg8FgMBgMS8AYTwaDwWAwGAwGg8GwBIzxZDAYDAaDwWAwGAxLwBhPBoPBYDAYDAaDwbAEjPFkMBgMBoPBYDAYDEvg/wf8P0Nsbe/etAAAAABJRU5ErkJggg==
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
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f2b8251b510&gt;</pre>
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
      <td>9.690604</td>
      <td>7.090077</td>
      <td>6.413459</td>
      <td>8.907612</td>
      <td>9.496722</td>
      <td>5.135798</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.814164</td>
      <td>7.264030</td>
      <td>7.603399</td>
      <td>4.110874</td>
      <td>3.091042</td>
      <td>6.490724</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.297252</td>
      <td>8.263590</td>
      <td>9.475086</td>
      <td>6.938284</td>
      <td>9.785436</td>
      <td>8.550048</td>
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
      <th>51</th>
      <td>4.442651</td>
      <td>10.421865</td>
      <td>4.442651</td>
      <td>7.085064</td>
      <td>7.108244</td>
      <td>5.736572</td>
    </tr>
    <tr>
      <th>52</th>
      <td>2.197225</td>
      <td>8.463792</td>
      <td>2.197225</td>
      <td>7.258412</td>
      <td>8.993800</td>
      <td>5.765191</td>
    </tr>
    <tr>
      <th>125</th>
      <td>4.442651</td>
      <td>6.324359</td>
      <td>9.021840</td>
      <td>6.842683</td>
      <td>7.086738</td>
      <td>6.061457</td>
    </tr>
    <tr>
      <th>126</th>
      <td>2.197225</td>
      <td>5.690359</td>
      <td>8.523970</td>
      <td>7.830028</td>
      <td>5.820083</td>
      <td>6.620073</td>
    </tr>
    <tr>
      <th>175</th>
      <td>4.442651</td>
      <td>7.542744</td>
      <td>7.525101</td>
      <td>8.767485</td>
      <td>7.232733</td>
      <td>8.759669</td>
    </tr>
    <tr>
      <th>176</th>
      <td>2.197225</td>
      <td>8.243019</td>
      <td>7.841493</td>
      <td>8.010360</td>
      <td>7.785721</td>
      <td>4.867534</td>
    </tr>
    <tr>
      <th>205</th>
      <td>1.098612</td>
      <td>6.706862</td>
      <td>6.995766</td>
      <td>6.742881</td>
      <td>5.693732</td>
      <td>6.546785</td>
    </tr>
    <tr>
      <th>206</th>
      <td>3.135494</td>
      <td>6.306275</td>
      <td>8.632128</td>
      <td>7.235619</td>
      <td>7.117206</td>
      <td>5.849325</td>
    </tr>
    <tr>
      <th>305</th>
      <td>4.574711</td>
      <td>8.252446</td>
      <td>7.881560</td>
      <td>7.424762</td>
      <td>6.952729</td>
      <td>7.167038</td>
    </tr>
    <tr>
      <th>378</th>
      <td>4.844187</td>
      <td>5.616771</td>
      <td>7.095064</td>
      <td>8.832588</td>
      <td>7.336286</td>
      <td>7.344073</td>
    </tr>
    <tr>
      <th>387</th>
      <td>4.584967</td>
      <td>6.198479</td>
      <td>9.169727</td>
      <td>7.962067</td>
      <td>3.218876</td>
      <td>7.970395</td>
    </tr>
    <tr>
      <th>393</th>
      <td>4.890349</td>
      <td>8.321422</td>
      <td>10.209758</td>
      <td>7.054450</td>
      <td>8.052296</td>
      <td>5.808142</td>
    </tr>
    <tr>
      <th>395</th>
      <td>3.218876</td>
      <td>7.527794</td>
      <td>10.150582</td>
      <td>4.867534</td>
      <td>7.695303</td>
      <td>4.990433</td>
    </tr>
    <tr>
      <th>481</th>
      <td>4.418841</td>
      <td>7.606885</td>
      <td>8.904902</td>
      <td>8.562931</td>
      <td>6.812345</td>
      <td>7.005789</td>
    </tr>
    <tr>
      <th>489</th>
      <td>4.941642</td>
      <td>8.397959</td>
      <td>6.972606</td>
      <td>9.534523</td>
      <td>5.897154</td>
      <td>6.775366</td>
    </tr>
    <tr>
      <th>492</th>
      <td>4.477337</td>
      <td>7.416980</td>
      <td>7.394493</td>
      <td>9.979059</td>
      <td>6.683361</td>
      <td>6.391917</td>
    </tr>
    <tr>
      <th>582</th>
      <td>4.919981</td>
      <td>7.815611</td>
      <td>9.225721</td>
      <td>7.102499</td>
      <td>6.570883</td>
      <td>2.397895</td>
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
      <th>109</th>
      <td>8.510571</td>
      <td>4.605170</td>
      <td>7.311886</td>
      <td>8.125039</td>
      <td>8.033983</td>
      <td>5.214936</td>
    </tr>
    <tr>
      <th>216</th>
      <td>7.282074</td>
      <td>4.025352</td>
      <td>7.668094</td>
      <td>5.575949</td>
      <td>6.995766</td>
      <td>6.680855</td>
    </tr>
    <tr>
      <th>314</th>
      <td>9.744668</td>
      <td>4.262680</td>
      <td>7.957527</td>
      <td>8.830251</td>
      <td>7.856707</td>
      <td>8.851663</td>
    </tr>
    <tr>
      <th>318</th>
      <td>9.142597</td>
      <td>3.988984</td>
      <td>7.191429</td>
      <td>9.489713</td>
      <td>8.012681</td>
      <td>9.923241</td>
    </tr>
    <tr>
      <th>319</th>
      <td>7.264030</td>
      <td>4.025352</td>
      <td>7.746301</td>
      <td>5.393628</td>
      <td>8.612867</td>
      <td>9.188606</td>
    </tr>
    <tr>
      <th>333</th>
      <td>8.095904</td>
      <td>11.437986</td>
      <td>7.307873</td>
      <td>6.742881</td>
      <td>9.737197</td>
      <td>7.696667</td>
    </tr>
    <tr>
      <th>408</th>
      <td>8.439232</td>
      <td>4.510860</td>
      <td>8.386857</td>
      <td>6.726233</td>
      <td>9.509407</td>
      <td>6.621406</td>
    </tr>
    <tr>
      <th>609</th>
      <td>8.506132</td>
      <td>4.605170</td>
      <td>8.732305</td>
      <td>7.849324</td>
      <td>8.693329</td>
      <td>7.962067</td>
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
      <th>51</th>
      <td>4.442651</td>
      <td>10.421865</td>
      <td>4.442651</td>
      <td>7.085064</td>
      <td>7.108244</td>
      <td>5.736572</td>
    </tr>
    <tr>
      <th>52</th>
      <td>2.197225</td>
      <td>8.463792</td>
      <td>2.197225</td>
      <td>7.258412</td>
      <td>8.993800</td>
      <td>5.765191</td>
    </tr>
    <tr>
      <th>199</th>
      <td>10.122784</td>
      <td>7.237778</td>
      <td>3.931826</td>
      <td>8.694502</td>
      <td>6.829794</td>
      <td>6.359574</td>
    </tr>
    <tr>
      <th>224</th>
      <td>9.800568</td>
      <td>7.250636</td>
      <td>3.610918</td>
      <td>7.046647</td>
      <td>7.864036</td>
      <td>7.054450</td>
    </tr>
    <tr>
      <th>404</th>
      <td>9.609318</td>
      <td>7.836765</td>
      <td>4.574711</td>
      <td>5.313206</td>
      <td>6.079933</td>
      <td>5.117994</td>
    </tr>
    <tr>
      <th>459</th>
      <td>7.227662</td>
      <td>11.116886</td>
      <td>4.317488</td>
      <td>7.308543</td>
      <td>9.060331</td>
      <td>8.321422</td>
    </tr>
    <tr>
      <th>480</th>
      <td>8.266421</td>
      <td>7.843064</td>
      <td>3.951244</td>
      <td>8.787220</td>
      <td>6.804615</td>
      <td>5.252273</td>
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
      <th>17</th>
      <td>7.867871</td>
      <td>7.623642</td>
      <td>7.867871</td>
      <td>2.197225</td>
      <td>6.242223</td>
      <td>8.171034</td>
    </tr>
    <tr>
      <th>46</th>
      <td>9.058354</td>
      <td>7.482682</td>
      <td>9.058354</td>
      <td>1.098612</td>
      <td>8.572249</td>
      <td>8.772920</td>
    </tr>
    <tr>
      <th>47</th>
      <td>10.489662</td>
      <td>6.192362</td>
      <td>10.489662</td>
      <td>3.135494</td>
      <td>7.967627</td>
      <td>6.180017</td>
    </tr>
    <tr>
      <th>337</th>
      <td>9.053920</td>
      <td>9.460632</td>
      <td>10.248672</td>
      <td>3.218876</td>
      <td>8.250620</td>
      <td>7.731931</td>
    </tr>
    <tr>
      <th>360</th>
      <td>10.181119</td>
      <td>8.349957</td>
      <td>10.013910</td>
      <td>2.397895</td>
      <td>9.061840</td>
      <td>6.028279</td>
    </tr>
    <tr>
      <th>363</th>
      <td>9.327501</td>
      <td>8.076515</td>
      <td>9.908724</td>
      <td>1.098612</td>
      <td>7.880048</td>
      <td>6.719013</td>
    </tr>
    <tr>
      <th>379</th>
      <td>8.371936</td>
      <td>5.429346</td>
      <td>9.948365</td>
      <td>2.890372</td>
      <td>4.584967</td>
      <td>4.709530</td>
    </tr>
    <tr>
      <th>409</th>
      <td>8.034955</td>
      <td>8.922125</td>
      <td>8.530109</td>
      <td>1.945910</td>
      <td>5.594711</td>
      <td>6.077642</td>
    </tr>
    <tr>
      <th>572</th>
      <td>7.594884</td>
      <td>6.242223</td>
      <td>8.083946</td>
      <td>2.890372</td>
      <td>6.249975</td>
      <td>7.273786</td>
    </tr>
    <tr>
      <th>602</th>
      <td>9.894245</td>
      <td>8.416931</td>
      <td>7.142827</td>
      <td>1.945910</td>
      <td>7.156177</td>
      <td>7.191429</td>
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
      <th>177</th>
      <td>9.899128</td>
      <td>8.741456</td>
      <td>11.405808</td>
      <td>5.789960</td>
      <td>2.890372</td>
      <td>6.618739</td>
    </tr>
    <tr>
      <th>181</th>
      <td>9.814164</td>
      <td>7.264030</td>
      <td>7.603399</td>
      <td>4.110874</td>
      <td>3.091042</td>
      <td>6.490724</td>
    </tr>
    <tr>
      <th>210</th>
      <td>9.358243</td>
      <td>7.142827</td>
      <td>6.605298</td>
      <td>6.804615</td>
      <td>3.931826</td>
      <td>2.890372</td>
    </tr>
    <tr>
      <th>235</th>
      <td>11.437986</td>
      <td>8.411833</td>
      <td>7.758333</td>
      <td>7.659643</td>
      <td>3.610918</td>
      <td>5.313206</td>
    </tr>
    <tr>
      <th>324</th>
      <td>8.535230</td>
      <td>8.784468</td>
      <td>7.389564</td>
      <td>7.956477</td>
      <td>11.627601</td>
      <td>7.952263</td>
    </tr>
    <tr>
      <th>387</th>
      <td>4.584967</td>
      <td>6.198479</td>
      <td>9.169727</td>
      <td>7.962067</td>
      <td>3.218876</td>
      <td>7.970395</td>
    </tr>
    <tr>
      <th>396</th>
      <td>6.938284</td>
      <td>9.064389</td>
      <td>9.802174</td>
      <td>6.618739</td>
      <td>3.850148</td>
      <td>4.532599</td>
    </tr>
    <tr>
      <th>526</th>
      <td>10.367599</td>
      <td>7.121252</td>
      <td>6.731018</td>
      <td>7.970049</td>
      <td>2.708050</td>
      <td>7.761745</td>
    </tr>
    <tr>
      <th>544</th>
      <td>7.981392</td>
      <td>9.832099</td>
      <td>10.117510</td>
      <td>6.921658</td>
      <td>2.197225</td>
      <td>8.678632</td>
    </tr>
    <tr>
      <th>587</th>
      <td>9.594378</td>
      <td>9.021840</td>
      <td>7.977968</td>
      <td>8.759669</td>
      <td>3.828641</td>
      <td>7.526179</td>
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
      <th>10</th>
      <td>10.027783</td>
      <td>7.239215</td>
      <td>10.027783</td>
      <td>8.722091</td>
      <td>7.696667</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>89</th>
      <td>10.671000</td>
      <td>8.720950</td>
      <td>9.696894</td>
      <td>9.513182</td>
      <td>9.468001</td>
      <td>1.945910</td>
    </tr>
    <tr>
      <th>96</th>
      <td>10.307452</td>
      <td>8.542081</td>
      <td>8.850947</td>
      <td>7.700295</td>
      <td>8.226038</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>111</th>
      <td>8.115820</td>
      <td>8.434246</td>
      <td>9.084097</td>
      <td>5.986452</td>
      <td>10.192456</td>
      <td>2.079442</td>
    </tr>
    <tr>
      <th>141</th>
      <td>7.867871</td>
      <td>8.446127</td>
      <td>7.769801</td>
      <td>7.674617</td>
      <td>8.144389</td>
      <td>2.397895</td>
    </tr>
    <tr>
      <th>144</th>
      <td>7.314553</td>
      <td>9.569133</td>
      <td>9.606092</td>
      <td>7.427739</td>
      <td>9.835369</td>
      <td>1.098612</td>
    </tr>
    <tr>
      <th>190</th>
      <td>8.854379</td>
      <td>7.585789</td>
      <td>6.692084</td>
      <td>8.476788</td>
      <td>6.944087</td>
      <td>1.945910</td>
    </tr>
    <tr>
      <th>240</th>
      <td>7.401231</td>
      <td>7.525101</td>
      <td>8.957511</td>
      <td>6.818924</td>
      <td>6.499787</td>
      <td>1.945910</td>
    </tr>
    <tr>
      <th>582</th>
      <td>4.919981</td>
      <td>7.815611</td>
      <td>9.225721</td>
      <td>7.102499</td>
      <td>6.570883</td>
      <td>2.397895</td>
    </tr>
    <tr>
      <th>585</th>
      <td>7.813592</td>
      <td>7.859799</td>
      <td>6.490724</td>
      <td>6.513230</td>
      <td>8.676587</td>
      <td>1.098612</td>
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
<pre>[[51,
  52,
  125,
  126,
  175,
  176,
  205,
  206,
  305,
  378,
  387,
  393,
  395,
  481,
  489,
  492,
  582],
 [109, 216, 314, 318, 319, 333, 408, 609],
 [51, 52, 199, 224, 404, 459, 480],
 [17, 46, 47, 337, 360, 363, 379, 409, 572, 602],
 [177, 181, 210, 235, 324, 387, 396, 526, 544, 587],
 [10, 89, 96, 111, 141, 144, 190, 240, 582, 585]]</pre>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>[51, 52, 387, 582]</pre>
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
<img src="data:image/png;base64,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SZuYZjHEbunSpWy77bYmR81ARLDtttvaWyhJkqT10iwSJMDkqBnxZy1JkqT11WwSJEmSJElam2ZxD1JtnYbf06DHqx511FrrVFRU0L1791XrEydOpFOnTut9zpUPxN1uu+3W+xiSJEmSVtcsE6RyaNOmDTNmzKhzW0qJlBItWtihJ0mSJJWTn8jLpLq6mr333ptTTz2Vbt268corr/DTn/6U/fffnx49enD55ZcD8N5773HUUUfRs2dPunXrxvjx41cd44YbbqBXr150796dZ599tlyXIkmSJDUZJkiN5IMPPqCyspLKykqOOeYYAObNm8c555zD7Nmzee6555g3bx5PPfUUM2bMYNq0afztb3/jr3/9KzvvvDNPP/00zzzzDF/60pdWHXO77bZj+vTpnH322VxzzTXlujRJkiSpyXCIXSOpPcSuurqa3Xffnb59+wJw//33c//997PffvsBsGTJEubNm8dBBx3ERRddxA9+8AMGDhzIQQcdtOoYgwcPBqB379786U9/asSrkSRJkpomE6Qyatu27arllBI//OEP+fa3v/2petOnT+fee+/l0ksv5bDDDuOyyy4DYPPNNwcKE0AsX768cYKWJEmSmjCH2G0kjjjiCH71q1+xZMkSAF599VUWLlzIv/71L7bYYgu+8Y1vMGzYMKZPn17mSCVJkqSmq1n2IBUzLXdjO/zww5k7dy4HHnggAO3ateO3v/0t8+fPZ9iwYbRo0YLNNtuMm266qcyRSpIkSU1XpJTKHUODqqqqSlOnTl2tbO7cuXTp0qVMEakc/JlLkiRpTSJiWkqpqna5Q+wkSZIkKWuWQ+wkSZKkTcKI9utQd3Hp4mhG7EGSJEmSpMwESZIkSZIyEyRJkiRJykyQJEmSJClrnpM0rMvNbkUdb+03xEUEJ598Mr/97W8BWL58OTvttBMHHHAAd999N3fddRdz5sxh+PDhjBgxgnbt2nHxxRdzyCGHcM0111BV9akZCCVJUlPmzflSWTTPBKkM2rZtyzPPPMMHH3xAmzZteOCBB9hll11WbR80aBCDBg0qY4SSJEmSHGLXiI488kjuueceAG677TZOPPHEVdvGjh3LeeedV+++H3/8MUOHDuXSSy8teZySJElSc2WC1Ii+/vWvc/vtt7N06VJmzpzJAQccUNR+y5cv5+STT2bPPffkqquuKnGUkiRJUvNlgtSIevToQXV1NbfddhtHHnlk0ft9+9vfplu3blxyySUljE6SJEmSCVIjGzRoEBdffPFqw+vW5nOf+xwPP/wwS5cuLWFkkiRJkkyQGtnpp5/O5ZdfTvfu3Yve55vf/CZHHnkkJ5xwAsuXLy9hdJIkSVLz1jxnsSvjVJgdO3bkggsuWOf9LrzwQhYvXswpp5zCrbfeSosW5raSJElSQ4uUUrljaFBVVVVp6tSpq5XNnTuXLl26lCkilYM/c0nSJs/nIAlsByUUEdNSSp962KjdEJIkSZKUmSBJkiRJUmaCJEmSJElZWROkiPhSRDwXEfMjYng9dU6IiDkRMTsiftfYMUqSJElqPso2i11EVACjgQHAAmBKRNyVUppTo86ewA+BfimltyJi+/JEK0mSJKk5KGcPUh9gfkrpxZTSR8DtwNG16nwLGJ1SegsgpbSwkWOUJEmS1IyU8zlIuwCv1FhfABxQq85eABHxGFABjEgp/bX2gSLiTOBMgN12222tJ+4+rviHtBZj1pBZRdV7/fXX+d73vscTTzzB1ltvTatWrfj+97/PMccc06DxSJIkSVo/G/skDS2BPYFDgBOBX0bEZ2pXSimNSSlVpZSqOnTo0MghFielxFe/+lUOPvhgXnzxRaZNm8btt9/OggULVqu3fPnykpx/xYoVJTmuJEmS1JSUM0F6Fdi1xnrHXFbTAuCulNKylNJLwPMUEqZNzkMPPUSrVq0466yzVpXtvvvunH/++YwdO5ZBgwbRv39/DjvsMP7973/z1a9+lR49etC3b19mzpwJwJIlSzjttNPo3r07PXr04I9//CMA999/PwceeCC9evXi+OOPZ8mSJQB06tSJH/zgB/Tq1YtRo0bRq1evVeeeN2/eauuSJEmSypsgTQH2jIjOEdEK+DpwV606Eyn0HhER21EYcvdiYwbZUGbPnr3GhGT69OlMmDCBRx55hMsvv5z99tuPmTNn8h//8R+ceuqpAFx55ZW0b9+eWbNmMXPmTPr3788bb7zBVVddxaRJk5g+fTpVVVVcd911q4677bbbMn36dC655BLat2/PjBkzAPj1r3/NaaedVtqLliRJkjYxZUuQUkrLgfOA+4C5wO9TSrMjYmREDMrV7gPejIg5wMPAsJTSm+WJuGGde+659OzZk/333x+AAQMGsM022wDw6KOPcsoppwDQv39/3nzzTd555x0mTZrEueeeu+oYW2+9NU888QRz5syhX79+VFZWMm7cOF5++eVVdb72ta+tWj7jjDP49a9/zYoVKxg/fjwnnXRSY1yqJEmStMko5yQNpJTuBe6tVXZZjeUEXJhfm7SuXbuuGhIHMHr0aN544w2qqqoAaNu27XodN6XEgAEDuO222+rcXvO4xx57LFdccQX9+/end+/ebLvttut1TkmSJKmp2tgnaWgy+vfvz9KlS7nppptWlb3//vt11j3ooIO49dZbAZg8eTLbbbcdW221FQMGDGD06NGr6r311lv07duXxx57jPnz5wPw3nvv8fzzz9d53NatW3PEEUdw9tlnO7xOkiRJqkNZe5DKpdhpuRtSRDBx4kS+973vcfXVV9OhQwfatm3LT37yEz744IPV6o4YMYLTTz+dHj16sMUWWzBu3DgALr30Us4991y6detGRUUFl19+OYMHD2bs2LGceOKJfPjhhwBcddVV7LXXXnXGcfLJJ3PHHXdw+OGHl/aCJUmSpE1Qs0yQymWnnXbi9ttvr3Pb0KFDVy1vs802TJw48VN12rVrtypZqql///5MmTLlU+XV1dWfKnv00Uc57bTTqKioKD5wSZIkqZkwQWpGjjnmGF544QUeeuihcociSZIaUPdx3YuqV45RNNKmxgSpGbnjjjvKHYIkSZK0UXOSBkmSJEnKTJAkSZIkKTNBkiRJkqTMBEmSJEmSsmY5ScPcfbo06PG6PDt3rXUqKiro3v2TGWYmTpxIp06dGjQOSZIkSRumWSZI5dCmTRtmzJhR57aUEiklWrSwQ0+SJEkqJz+Rl0l1dTV77703p556Kt26deOVV15h2LBhdOvWje7duzN+/HgALrvsMiorK6msrGSXXXbhtNNOA+C3v/0tffr0obKykm9/+9usWLECKDxM9pJLLqFnz5707duX119/vWzXKEmSJG1qTJAayQcffLAq0TnmmGMAmDdvHueccw6zZ89m6tSpzJgxg6effppJkyYxbNgwXnvtNUaOHMmMGTOYPHky22yzDeeddx5z585l/PjxPPbYY8yYMYOKigpuvfVWAN577z369u3L008/zcEHH8wvf/nLcl62JEmStElxiF0jqT3Errq6mt13352+ffsC8Oijj3LiiSdSUVHBDjvswBe+8AWmTJnCoEGDSCnxjW98gwsvvJDevXtz4403Mm3aNPbff3+gkHxtv/32ALRq1YqBAwcC0Lt3bx544IFGvlJJ0qZu9FkPFV333Jv7lzASSWp8Jkhl1LZt26LqjRgxgo4dO64aXpdSYsiQIfznf/7np+puttlmRARQmBhi+fLlDRewJEmS1MQ5xG4jcdBBBzF+/HhWrFjBokWL+Nvf/kafPn3485//zKRJk7j++utX1T3ssMOYMGECCxcuBODf//43L7/8crlClyRJkpqMZtmDVMy03I3tmGOO4fHHH6dnz55EBFdffTU77rgj1113Ha+++ip9+vQBYNCgQYwcOZKrrrqKww8/nI8//pjNNtuM0aNHs/vuu5f5KiRJkqRNW6SUyh1Dg6qqqkpTp05drWzu3Ll06dKwzz7Sxs2fuSStP+9B2kiMaF901e6ddyuq3qwhs9Y3GpXLOrQDRiwuXRxNUERMSylV1S53iJ0kSZIkZSZIkiRJkpSZIEmSJElSZoIkSZIkSZkJkiRJkiRlJkiSJEmSlDXL5yCty/SlxXCKU0mSJKlpsAepkVRUVFBZWUnXrl3p2bMn1157LR9//PEa96muruZ3v/tdI0VYtxkzZnDvvfeu837V1dW0adOGyspK9t13X84666y1Xq8kSZJUbiZIjaRNmzbMmDGD2bNn88ADD/CXv/yFK664Yo37rE+CtHz58g0J81PWN0EC+OxnP8uMGTOYOXMmc+bMYeLEiQ0a20oNfc2SJElqvkyQymD77bdnzJgx3HjjjaSUWLFiBcOGDWP//fenR48e/OIXvwBg+PDh/P3vf6eyspKf/exn9dabPHkyBx10EIMGDWLffffl448/5pxzzmGfffZhwIABHHnkkUyYMAGAadOm8YUvfIHevXtzxBFH8NprrwFwyCGH8IMf/IA+ffqw11578fe//52PPvqIyy67jPHjx1NZWcn48eN55JFHqKyspLKykv3224933313rdfbsmVLPve5zzF//nx++ctfsv/++9OzZ0+OPfZY3n//fQCGDh3KWWedRVVVFXvttRd33303QNHXLEmSJDWEZnkP0sZgjz32YMWKFSxcuJA777yT9u3bM2XKFD788EP69evH4YcfzqhRo7jmmmtWJQtjxoypsx7A9OnTeeaZZ+jcuTMTJkygurqaOXPmsHDhQrp06cLpp5/OsmXLOP/887nzzjvp0KED48eP55JLLuFXv/oVUOiJeeqpp7j33nu54oormDRpEiNHjmTq1KnceOONAHzlK19h9OjR9OvXjyVLltC6deu1Xuv777/Pgw8+yMiRI+nTpw/f+ta3ALj00ku55ZZbOP/884FCj9lTTz3FCy+8wKGHHsr8+fP5zW9+U9Q1S5IkSQ3BBGkjcP/99zNz5sxVvTyLFy9m3rx5tGrVquh6ffr0WZUoPProoxx//PG0aNGCHXfckUMPPRSA5557jmeeeYYBAwYAhd6ZnXbaadXxBw8eDEDv3r2prq6uM9Z+/fpx4YUXcvLJJzN48GA6duxY73W98MILVFZWEhEcffTRfPnLX+aRRx7h0ksv5e2332bJkiUcccQRq+qfcMIJtGjRgj333JM99tiDZ599tuhrliRJkhqCCVKZvPjii1RUVLD99tuTUuKGG25YLVmAwjCymtZUr23btms9Z0qJrl278vjjj9e5ffPNNwcKE0rUd1/P8OHDOeqoo7j33nvp168f9913H/vss0+ddVfeg1TT0KFDmThxIj179mTs2LGrXWNErFY3Ijb4miVJkqR10SwTpHJPy71o0SLOOusszjvvPCKCI444gptuuon+/fuz2Wab8fzzz7PLLruw5ZZbrnaPT331auvXrx/jxo1jyJAhLFq0iMmTJ3PSSSex9957s2jRIh5//HEOPPBAli1bxvPPP0/Xrl3rjbV2DC+88ALdu3ene/fuTJkyhWeffbbeBKku7777LjvttBPLli3j1ltvXS3+P/zhDwwZMoSXXnqJF198kb333rvoa5YkSZIaQrNMkMrhgw8+oLKykmXLltGyZUtOOeUULrzwQgDOOOMMqqur6dWrFyklOnTowMSJE+nRowcVFRX07NmToUOH8p3vfKfOerUde+yxPPjgg+y7777suuuu9OrVi/bt29OqVSsmTJjABRdcwOLFi1m+fDnf/e5315ggHXrooYwaNYrKykp++MMf8uijj/Lwww/TokULunbtype//OV1+j5ceeWVHHDAAXTo0IEDDjhgteRrt912o0+fPrzzzjvcfPPNtG7dut7vjSRJklQKkVIqdwwNqqqqKk2dOnW1srlz59KlS5cyRVQeS5YsoV27drz55pv06dOHxx57jB133LHcYdVr6NChDBw4kOOOO65Bjtccf+aS1FDW5YHq5R6V0aSNaF901e6ddyuq3qwhs9Y3GpXLOrQDRiwuXRxNUERMSylV1S63B6mJGjhwIG+//TYfffQRP/rRjzbq5EiSJEnaWJggNVG1J3golVmzZnHKKaesVrb55pvz5JNPrtNxxo4d24BRSZIkSevHBEkbpHv37p+aqU6SJEnaVLUodwCSJEmStLEwQZIkSZKkrKwJUkR8KSKei4j5ETF8DfWOjYgUEZ+aZUKSJEmSGkrZ7kGKiApgNDAAWABMiYi7UkpzatXbEvgOsG53/a/BtV8b2FCHAuCi8XevtU5FRQXdu3df9RykU089le9973u0aFF/jlpdXc3AgQN55plnmDp1Kr/5zW+4/m6OknwAACAASURBVPrr1zm+n//855x55plsscUW67yvJEmS1JyUswepDzA/pfRiSukj4Hbg6DrqXQn8BFjamME1tDZt2jBjxgxmz57NAw88wF/+8heuuOKKovevqqpar+QICgnS+++/v177SpIkSc1JOROkXYBXaqwvyGWrREQvYNeU0j1rOlBEnBkRUyNi6qJFixo+0ga2/fbbM2bMGG688UZSSqxYsYJhw4ax//7706NHD37xi198ap/JkyczcGCh52vJkiWcdtppdO/enR49evDHP/4RgLPPPpuqqiq6du3K5ZdfDsD111/Pv/71Lw499FAOPfRQAO6//34OPPBAevXqxfHHH8+SJUsAGD58OPvuuy89evTg4osvBuAPf/gD3bp1o2fPnhx88MEA9cY7efJkDjnkEI477jj22WcfTj75ZJrag4glSZLUtG2003xHRAvgOmDo2uqmlMYAYwCqqqo2iU/ke+yxBytWrGDhwoXceeedtG/fnilTpvDhhx/Sr18/Dj/8cCKizn2vvPJK2rdvz6xZhadhv/XWWwD8+Mc/ZptttmHFihUcdthhzJw5kwsuuIDrrruOhx9+mO2224433niDq666ikmTJtG2bVt+8pOfcN1113Huuedyxx138OyzzxIRvP322wCMHDmS++67j1122WVV2S233FJnvAD/+Mc/mD17NjvvvDP9+vXjscce4/Of/3ypv52SJElSgyhngvQqsGuN9Y65bKUtgW7A5Jwo7AjcFRGDUkpTGy3KRnD//fczc+ZMJkyYAMDixYuZN28ee+21V531J02axO23375qfeuttwbg97//PWPGjGH58uW89tprzJkzhx49eqy27xNPPMGcOXPo168fAB999BEH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
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
      <td>1.9663</td>
      <td>-1.9600</td>
      <td>-1.1364</td>
      <td>0.0464</td>
      <td>-2.1428</td>
      <td>0.8599</td>
    </tr>
    <tr>
      <th>1</th>
      <td>1.6225</td>
      <td>4.4908</td>
      <td>2.4379</td>
      <td>-2.4733</td>
      <td>0.3923</td>
      <td>0.6217</td>
    </tr>
    <tr>
      <th>2</th>
      <td>-1.6882</td>
      <td>0.3503</td>
      <td>-2.4615</td>
      <td>0.3731</td>
      <td>-0.1350</td>
      <td>-0.5319</td>
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
      <td>1.9663</td>
      <td>-1.9600</td>
    </tr>
    <tr>
      <th>1</th>
      <td>1.6225</td>
      <td>4.4908</td>
    </tr>
    <tr>
      <th>2</th>
      <td>-1.6882</td>
      <td>0.3503</td>
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
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f2b91fa0d90&gt;</pre>
</div>

</div>

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,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eOBp2nnnD+gd75COP97W9fVJ9903I2XXtfHjLTNKyuw3bajAb1+fBU/e9z4LssQfz5oa+y1+9FHrRiANDnymOrcj/e3x3oJGyQIRUvbBGam4AVpmRQKQLoIRQPj1Slpd7EIge4UIGJRSf8tMb2TL6cY3fjyNl16ylumaGgtATJpkFelFi3LX6jnSylYmaeKZppTHl+3ppwcGFLZutfWrV9v7PvusdMYZsfcKggsNDVYxi++TH1Tgqqpi+3fppQMruo1vxIIRue4Slc5xCK6DtWst+BJkxWzYMHCWjiBg9fzzFmCYOFF66y1bH3++Ghtjffz7+ixws25dbJaJ9est4BN8l/r77b0iEenzn5dee82CP83NNsXno49K1dWH6dBDPzXoWty+fXAGw/btEUUifVq7tnpA5T+T7+tQgd+aGtun73xn4PE85hgLYD36qO33kiXWxeWAA+x4ppN9MNLfnnTGFcomOFPsAG2pDrAMIPcqht8EQJH9UNJFziUmymK0qa62ys9orxDnW/yNbDKJN7KZbh92PT3WgptsesagwlVRYZW/YPumJmstnzHDKiytrbkri5ReZStRkCbe1maVouZme2xrs+VdXbF9XbVq+G2HKlskMjCgEEw1uWmTtebvvLNt+/DDsfdqabHrYdUqa50OxgrYuNFaxoPKfCRiXR4iETvus2dbOv/O7U/vKEe2gZ9k5zmdYybFroPZs21Mg54eK3tzs1Wyq6tj3U9Wr7YAxcSJFqx5/XVb3hs3F1NlpR2Lt9+2a6my0lrj6+rs395boGP7dqvYB8eruVn67GdtHIzjjrMARmd0OI3dd09+bLZsuVHXX+/U1naPFi++TD/72Tt0+eXj9fe/36baWmnePK+f/OQaHXLI4aqurlZtba2OP/543X///YOO20033aQjjjhCkydPVk1NjY44Yi8tXjxf3/rWOn3vexZE2rLFromJE9fo8cdP0//+7xSdc0613vWuk/SHP7yovfaSPvhB++6sWCH96U82jemcOcOf25H+9gTZTh0dydfHZ91k8v/HSL63uZDJfgEob2RGAOH3XknvlvR+59xzkrbGr/Tef6QopULGSnnKyVzKdODPUplZJN3MgAkTrNW+pcUqO/Fp5VJuWz1H0sKZKk18xQrpooti5X7+eUulP/LI2OcMl1IelG3LFnsMsgPWrYtNNdnXZ5/R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
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
Cluster Center: [[-0.93434539 -0.36771708]
 [ 0.94407233  0.37154518]]
Sample predictions: [1 1 0]
Silhouette score is: 0.31814779368918294 

Number of clusters: 3
Cluster Center: [[ 0.41979636 -0.55816608]
 [ 1.10527264  0.76782112]
 [-1.31165859 -0.17946643]]
Sample predictions: [0 1 2]
Silhouette score is: 0.2704381467232564 

Number of clusters: 4
Cluster Center: [[-0.37570851 -0.40682557]
 [ 0.7174986   0.55905705]
 [-2.35762842  0.55364022]
 [ 1.88060253 -0.58487164]]
Sample predictions: [3 1 2]
Silhouette score is: 0.2499558618196399 

Number of clusters: 5
Cluster Center: [[-0.65340884 -1.61336608]
 [ 0.9982023   1.20004129]
 [-2.21883926  0.68166555]
 [ 0.1923722   0.3721106 ]
 [ 2.06229747 -0.68243763]]
Sample predictions: [4 1 2]
Silhouette score is: 0.3146565690893971 

Number of clusters: 6
Cluster Center: [[-1.06792029 -1.36851645]
 [ 0.58419744  2.27042068]
 [-2.30724421  0.70833283]
 [ 0.24419855  0.43769928]
 [ 1.23608743 -1.63114748]
 [ 2.51088877  0.61838843]]
Sample predictions: [4 1 2]
Silhouette score is: 0.3473783797961688 

Scores: {2: 0.31814779368918294, 3: 0.2704381467232564, 4: 0.2499558618196399, 5: 0.3146565690893971, 6: 0.3473783797961688}
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
<pre>Cluster Center: [[-0.93434539 -0.36771708]
 [ 0.94407233  0.37154518]]
Sample predictions: [1 1 0]
Silhouette score is: 0.31814779368918294 

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
      <td>3846.0</td>
      <td>3023.0</td>
      <td>3043.0</td>
      <td>2403.0</td>
      <td>2855.0</td>
      <td>3107.0</td>
    </tr>
    <tr>
      <th>Segment 1</th>
      <td>5869.0</td>
      <td>2237.0</td>
      <td>3576.0</td>
      <td>1383.0</td>
      <td>1606.0</td>
      <td>528.0</td>
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
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
      <td>631.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>9450.231379</td>
      <td>5300.768621</td>
      <td>6886.977813</td>
      <td>4793.882726</td>
      <td>5033.161648</td>
      <td>4124.787639</td>
    </tr>
    <tr>
      <th>std</th>
      <td>10508.945983</td>
      <td>7687.322837</td>
      <td>9423.846276</td>
      <td>8089.537416</td>
      <td>7756.395420</td>
      <td>7207.473100</td>
    </tr>
    <tr>
      <th>min</th>
      <td>3.000000</td>
      <td>54.000000</td>
      <td>9.000000</td>
      <td>3.000000</td>
      <td>9.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>2175.500000</td>
      <td>1226.500000</td>
      <td>1495.000000</td>
      <td>729.000000</td>
      <td>894.000000</td>
      <td>423.500000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>5567.000000</td>
      <td>2611.000000</td>
      <td>3136.000000</td>
      <td>1809.000000</td>
      <td>2317.000000</td>
      <td>1360.000000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>13328.500000</td>
      <td>6335.500000</td>
      <td>8321.000000</td>
      <td>5564.000000</td>
      <td>5877.000000</td>
      <td>4112.000000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>92780.000000</td>
      <td>92780.000000</td>
      <td>89842.000000</td>
      <td>76237.000000</td>
      <td>112151.000000</td>
      <td>56159.000000</td>
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