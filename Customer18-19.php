<?php
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>project_customer_segmentation18-19</title><script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>




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
0          1       3   2067  ...    5241               317          6746
1          2       3   3655  ...   11874              2121          7683
2          2       3   3009  ...    6536             24653           432
3          2       3  14403  ...    4533             10253          4686
4          2       1  11009  ...    4945              1020          3242
..       ...     ...    ...  ...     ...               ...           ...
504        1       2    514  ...    3620              1777           447
505        1       2    286  ...    1916              2077           342
506        1       2   2343  ...     848               559           558
507        1       2  45640  ...    1530              6340           296
508        1       2  12759  ...    1181              1730          2235

[509 rows x 8 columns]
     Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
0     2067   2098    19746    5241               317          6746
1     3655   1744     4734   11874              2121          7683
2     3009    497     2121    6536             24653           432
3    14403   2931     4627    4533             10253          4686
4    11009    602     2615    4945              1020          3242
..     ...    ...      ...     ...               ...           ...
504    514   5509     2155    3620              1777           447
505    286   1989    13430    1916              2077           342
506   2343   3830    19816     848               559           558
507  45640  17773     6536    1530              6340           296
508  12759   2861    19805    1181              1730          2235

[509 rows x 6 columns]
&lt;class &#39;tuple&#39;&gt;
(509, 6)
Wholesale customers dataset has 509 samples with 6 features each.
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
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>8267.895874</td>
      <td>12131.147348</td>
      <td>8660.746562</td>
      <td>4514.172888</td>
      <td>5708.933202</td>
      <td>3597.620825</td>
    </tr>
    <tr>
      <th>std</th>
      <td>11421.044155</td>
      <td>47228.516675</td>
      <td>10598.063967</td>
      <td>6679.375003</td>
      <td>8782.276737</td>
      <td>5769.794855</td>
    </tr>
    <tr>
      <th>min</th>
      <td>25.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>1498.000000</td>
      <td>1375.000000</td>
      <td>1795.000000</td>
      <td>797.000000</td>
      <td>727.000000</td>
      <td>609.000000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>3613.000000</td>
      <td>3843.000000</td>
      <td>4692.000000</td>
      <td>1981.000000</td>
      <td>2157.000000</td>
      <td>1721.000000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>11009.000000</td>
      <td>10868.000000</td>
      <td>11442.000000</td>
      <td>5249.000000</td>
      <td>7005.000000</td>
      <td>4469.000000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>92780.000000</td>
      <td>761843.000000</td>
      <td>92780.000000</td>
      <td>67298.000000</td>
      <td>76237.000000</td>
      <td>83861.000000</td>
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
      <td>2067</td>
      <td>2098</td>
      <td>19746</td>
      <td>5241</td>
      <td>317</td>
      <td>6746</td>
    </tr>
    <tr>
      <th>1</th>
      <td>3655</td>
      <td>1744</td>
      <td>4734</td>
      <td>11874</td>
      <td>2121</td>
      <td>7683</td>
    </tr>
    <tr>
      <th>2</th>
      <td>3009</td>
      <td>497</td>
      <td>2121</td>
      <td>6536</td>
      <td>24653</td>
      <td>432</td>
    </tr>
    <tr>
      <th>3</th>
      <td>14403</td>
      <td>2931</td>
      <td>4627</td>
      <td>4533</td>
      <td>10253</td>
      <td>4686</td>
    </tr>
    <tr>
      <th>4</th>
      <td>11009</td>
      <td>602</td>
      <td>2615</td>
      <td>4945</td>
      <td>1020</td>
      <td>3242</td>
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
85   26870   4591    21203     203               403          8752
181    610  14682     5963    7647              1682          1646
338   4324   2921     2134    2380               993         11103
&lt;class &#39;pandas.core.indexes.base.Index&#39;&gt;
Index([&#39;Fresh&#39;, &#39;Milk&#39;, &#39;Grocery&#39;, &#39;Frozen&#39;, &#39;Detergents_Paper&#39;,
       &#39;Delicatessen&#39;],
      dtype=&#39;object&#39;)
     Fresh   Milk  Grocery  Frozen  Detergents_Paper  Delicatessen
85   26870   4591    21203     203               403          8752
181    610  14682     5963    7647              1682          1646
338   4324   2921     2134    2380               993         11103
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
      <td>26870</td>
      <td>4591</td>
      <td>21203</td>
      <td>203</td>
      <td>403</td>
      <td>8752</td>
    </tr>
    <tr>
      <th>1</th>
      <td>610</td>
      <td>14682</td>
      <td>5963</td>
      <td>7647</td>
      <td>1682</td>
      <td>1646</td>
    </tr>
    <tr>
      <th>2</th>
      <td>4324</td>
      <td>2921</td>
      <td>2134</td>
      <td>2380</td>
      <td>993</td>
      <td>11103</td>
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
      <td>2067</td>
      <td>2098</td>
      <td>19746</td>
      <td>5241</td>
      <td>317</td>
      <td>6746</td>
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
0     2067   2098    5241               317          6746
1     3655   1744   11874              2121          7683
2     3009    497    6536             24653           432
3    14403   2931    4533             10253          4686
4    11009    602    4945              1020          3242
..     ...    ...     ...               ...           ...
504    514   5509    3620              1777           447
505    286   1989    1916              2077           342
506   2343   3830     848               559           558
507  45640  17773    1530              6340           296
508  12759   2861    1181              1730          2235

[509 rows x 5 columns]
&lt;class &#39;pandas.core.series.Series&#39;&gt;
0      19746
1       4734
2       2121
3       4627
4       2615
       ...  
504     2155
505    13430
506    19816
507     6536
508    19805
Name: Grocery, Length: 509, dtype: int64

X_train:
     Fresh    Milk  Frozen  Detergents_Paper  Delicatessen
25    8906     395     429             15168           615
255  42786  761843    2080               834          1117
42    3412     301     247              2779          2884
393    108     821    4657              1031          3909
195   8656   19805    3389               707           830
..     ...     ...     ...               ...           ...
106   4710    7595   11072             20049           442
270   5007    1304    9602               659          5609
348   5679    2069   18664              1894          3688
435   2507     232    1117              7558          4827
102   8887    2010   20782             18044           706

[381 rows x 5 columns]

X_test:
     Fresh   Milk  Frozen  Detergents_Paper  Delicatessen
79    2474  21632     375             12754          2208
317   2713   6964    6633               290          8323
486   1989   1677     405               950          1201
397     84    228    5429             15348          6846
167    834  32114    6360               201          1398
..     ...    ...     ...               ...           ...
336    220   8620    6939               290          3354
384   1431    257    3417                98           764
346     98  12746     134               249         13316
507  45640  17773    1530              6340           296
148   1215  13462    6235               398           597

[128 rows x 5 columns]

y_train:
25     11635
255    10362
42     26539
393    40827
195    31276
       ...  
106     1668
270      403
348     1145
435    12144
102     4955
Name: Grocery, Length: 381, dtype: int64

y_test:
79     2787
317    7425
486    2022
397     454
167    4324
       ... 
336    8604
384     529
346    6956
507    6536
148    2583
Name: Grocery, Length: 128, dtype: int64
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
[4.4560e+03 1.5400e+04 7.3530e+03 4.0827e+04 3.8810e+03 2.2925e+04
 5.3400e+02 8.0250e+03 7.7800e+02 1.6380e+03 4.2312e+04 1.1323e+04
 1.9020e+03 1.4220e+03 1.6010e+03 2.1203e+04 4.4200e+03 1.7830e+03
 8.7600e+02 1.1243e+04 8.2000e+02 8.1640e+03 8.0250e+03 9.6020e+03
 1.2020e+03 1.2126e+04 1.1519e+04 1.2126e+04 2.3810e+03 9.6180e+03
 2.9610e+03 3.4120e+03 1.1620e+03 3.5760e+03 1.3000e+02 2.0521e+04
 2.5180e+03 1.2060e+03 3.1400e+02 9.6700e+03 8.2580e+03 2.0060e+03
 1.4570e+03 1.3980e+03 1.1720e+03 7.7800e+02 6.8990e+03 2.7167e+04
 1.8601e+04 1.1450e+03 4.4560e+03 3.2114e+04 1.0850e+04 1.1030e+03
 3.4500e+03 2.1770e+03 1.5380e+03 2.7167e+04 7.6770e+03 6.8990e+03
 2.6373e+04 1.7063e+04 8.5900e+03 4.2312e+04 3.0000e+00 1.3700e+02
 2.9729e+04 3.4792e+04 1.0850e+04 7.3880e+03 3.0840e+03 7.6770e+03
 7.8180e+03 2.4171e+04 7.3050e+03 1.8073e+04 6.2520e+03 2.7167e+04
 1.2144e+04 8.6200e+02 9.7000e+01 1.7770e+04 1.4100e+04 8.8610e+03
 1.6010e+03 1.4886e+04 7.0300e+03 1.2020e+03 6.3530e+03 1.9100e+02
 3.9679e+04 1.2144e+04 2.6870e+04 2.1770e+03 2.7329e+04 1.9100e+02
 7.8640e+03 2.7329e+04 2.6373e+04 2.2272e+04 3.8810e+03 1.6770e+03
 1.6940e+03 8.5330e+03 2.1770e+03 9.1700e+03 2.4904e+04 6.8990e+03
 2.8986e+04 1.3000e+02 3.8793e+04 3.2930e+03 4.5150e+03 4.0200e+03
 1.9600e+03 1.5400e+04 9.6700e+03 1.4060e+03 4.0827e+04 2.7329e+04
 4.2312e+04 1.7830e+03 2.7329e+04 4.9830e+03 1.4980e+03 9.5290e+03
 2.3130e+03 2.2615e+04]
&lt;class &#39;dict&#39;&gt;
{&#39;Actual&#39;: 79     2787
317    7425
486    2022
397     454
167    4324
       ... 
336    8604
384     529
346    6956
507    6536
148    2583
Name: Grocery, Length: 128, dtype: int64, &#39;Predicted&#39;: array([4.4560e+03, 1.5400e+04, 7.3530e+03, 4.0827e+04, 3.8810e+03,
       2.2925e+04, 5.3400e+02, 8.0250e+03, 7.7800e+02, 1.6380e+03,
       4.2312e+04, 1.1323e+04, 1.9020e+03, 1.4220e+03, 1.6010e+03,
       2.1203e+04, 4.4200e+03, 1.7830e+03, 8.7600e+02, 1.1243e+04,
       8.2000e+02, 8.1640e+03, 8.0250e+03, 9.6020e+03, 1.2020e+03,
       1.2126e+04, 1.1519e+04, 1.2126e+04, 2.3810e+03, 9.6180e+03,
       2.9610e+03, 3.4120e+03, 1.1620e+03, 3.5760e+03, 1.3000e+02,
       2.0521e+04, 2.5180e+03, 1.2060e+03, 3.1400e+02, 9.6700e+03,
       8.2580e+03, 2.0060e+03, 1.4570e+03, 1.3980e+03, 1.1720e+03,
       7.7800e+02, 6.8990e+03, 2.7167e+04, 1.8601e+04, 1.1450e+03,
       4.4560e+03, 3.2114e+04, 1.0850e+04, 1.1030e+03, 3.4500e+03,
       2.1770e+03, 1.5380e+03, 2.7167e+04, 7.6770e+03, 6.8990e+03,
       2.6373e+04, 1.7063e+04, 8.5900e+03, 4.2312e+04, 3.0000e+00,
       1.3700e+02, 2.9729e+04, 3.4792e+04, 1.0850e+04, 7.3880e+03,
       3.0840e+03, 7.6770e+03, 7.8180e+03, 2.4171e+04, 7.3050e+03,
       1.8073e+04, 6.2520e+03, 2.7167e+04, 1.2144e+04, 8.6200e+02,
       9.7000e+01, 1.7770e+04, 1.4100e+04, 8.8610e+03, 1.6010e+03,
       1.4886e+04, 7.0300e+03, 1.2020e+03, 6.3530e+03, 1.9100e+02,
       3.9679e+04, 1.2144e+04, 2.6870e+04, 2.1770e+03, 2.7329e+04,
       1.9100e+02, 7.8640e+03, 2.7329e+04, 2.6373e+04, 2.2272e+04,
       3.8810e+03, 1.6770e+03, 1.6940e+03, 8.5330e+03, 2.1770e+03,
       9.1700e+03, 2.4904e+04, 6.8990e+03, 2.8986e+04, 1.3000e+02,
       3.8793e+04, 3.2930e+03, 4.5150e+03, 4.0200e+03, 1.9600e+03,
       1.5400e+04, 9.6700e+03, 1.4060e+03, 4.0827e+04, 2.7329e+04,
       4.2312e+04, 1.7830e+03, 2.7329e+04, 4.9830e+03, 1.4980e+03,
       9.5290e+03, 2.3130e+03, 2.2615e+04])}
     Actual  Predicted
79     2787     4456.0
317    7425    15400.0
486    2022     7353.0
397     454    40827.0
167    4324     3881.0
..      ...        ...
336    8604     4983.0
384     529     1498.0
346    6956     9529.0
507    6536     2313.0
148    2583    22615.0

[128 rows x 2 columns]
Prediction score is -0.9392344860088642
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
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f2b84e7f790&gt;</pre>
</div>

</div>

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAawAAAFLCAYAAACKibiWAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADh0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uMy4yLjIsIGh0dHA6Ly9tYXRwbG90bGliLm9yZy+WH4yJAAAgAElEQVR4nO3deZwdZZn28d9FAFnCvqgQMCxBDMi+yIASEBCXARQQEWfEYYyj4AKjI84oIOqMjqPvuIAQERhQkd2JEAVkESayJOwEjCKCBBdA9kVCuq/3j6qWk7a7zzmdTldV9/XlU58+9VSdOvdpOuc+z1N3PSXbRERE1N0yVQcQERHRiSSsiIhohCSsiIhohCSsiIhohCSsiIhohCSsiIhohCSsiIgYcZJOl/SwpLsG2S5JX5d0r6Q7JG3X7phJWBERsTScCew7xPY3A1PKZTrwrXYHTMKKiIgRZ/ta4LEhdtkfOMuFG4DVJb1yqGMuO5IBxsh68dH7GjUNyRu2PqLqELq2yD1Vh9C1e554sOoQuvJi76KqQ+haE2cAWvjCAi3pMbr5zFl+nU0+QNEz6jPD9owuXm59oPWPeUHZ9vvBnpCEFRERXSuTUzcJaoklYUVERKF3VEccHgI2aFmfVLYNKuewIiKi0LOo82XJzQT+vqwWfB3wpO1BhwMhPayIiCjZvSN2LEnnANOAtSUtAI4Hlitex6cAs4C3APcCzwHva3fMJKyIiCj0jlzCsn1om+0GjuzmmElYERFRGMEe1tKQhBUREYXRLbroWhJWREQU0sOKiIgm8MhU/y01SVgREVEYwaKLpSEJKyIiChkSjIiIRkjRRURENEJ6WBER0QgpumguST3AnS1NB9i+fwmOdz+wg+1HlzC0iIiRl6KLRnve9jYDbZAkQB7JybciIirkmt8fLrO1d0HSZEnzJZ0F3AVsIOkTkuZIukPSZ8v9VpZ0qaTbJd0l6ZCWw3xY0i2S7pS0eSVvJCJiIO7tfKlAEtbQVpR0W7lcXLZNAU62vQXw6nJ9J2AbYHtJbwD2BX5ne2vbWwI/aTnmo7a3A74FfLz/C0qaLmmupLmnnXXOUnxrERH99PZ2vlQgQ4JDW2xIUNJk4AHbN5RN+5TLreX6RIoEdh3wFUlfAi6xfV3LMS8qf94MvKP/C7bexbOb21VHRCyxmp/hSMLq3rMtjwX8h+1T++8kaTuKe718XtKVtk8sN71Q/uwhv/+IqJOeF6uOYEj5wFwylwGfk/Q9289IWh94keL3+pjt70p6AvjHSqOMiOhEqgTHLtuXS3oNcH1RNMgzwHuATYEvS+qlSGAfrC7KiIgOZUiwuWxP7Ld+P7Blv7avAV/r99RfU/S++h9vcsvjuRS3j46IqIf0sCIiohGSsCIiogmcoouIiGiEnMOKiIhGyJBgREQ0QnpYERHRCOlhRUREI6SHFRERjbAoN3CMiIgmSA8rIiIaIeewIiKiEdLDioiIRkgPK4brDVsfUXUIXbn29u9UHULXVt9wz6pD6NoaK0xsv1ONPPrcU1WH0LXlJozTj8b0sCIiohFqXiW4TNUBRERETdidL21I2lfSfEn3Sjp2gO0bSrpa0q2S7pD0lnbHTMKKiIhCb2/nyxAkTQBOAt4MTAUOlTS1326fBs6zvS3wLuDkduFlSDAiIgojV3SxE3Cv7fsAJP0A2B+4u2UfA6uWj1cDftfuoElYERFR6KLoQtJ0YHpL0wzbM8rH6wMPtmxbAOzc7xAnAJdL+jCwMrBXu9dMwoqIiEJPT8e7lslpRtsdB3cocKbtr0jaBThb0pb24FkzCSsiIgojNyT4ELBBy/qksq3VEcC+ALavl7QCsDbw8GAHTdFFREQURqjoApgDTJG0kaTlKYoqZvbb57fAGwEkvQZYAXhkqIOmhxUREYURunDY9iJJRwGXAROA023Pk3QiMNf2TOCfgW9LOpqiAONwe+h6+SSsiIgAwL3tr6/q+Fj2LGBWv7bjWh7fDezazTGTsCIiopC5BCMiohG6qBKsQhJWREQU0sOKiIhGSMKKiIhG6GBS2yrlOqxhkGRJ321ZX1bSI5IuKdf365udWNIJkj5ePr5G0g7VRB0R0cbIXYe1VKSHNTzPAltKWtH288DetFzFXV5j0P8iuYiIehvBsvalIT2s4ZsFvLV8fChwTt8GSYdL+uZgT5S0jKQzJX1+KccYEdG5np7OlwokYQ3fD4B3lfNfbQXc2OHzlgW+B/zK9qf7b5Q0XdJcSXP/+Gzb2fYjIkaMe3s7XqqQhDVMtu8AJlP0rmYNvfdiTgXusv2FQY47w/YOtnd4+crrLXmgERGd6nXnSwWSsJbMTOC/aBkO7MDPgT3KnllERH24t/OlAim6WDKnA0/YvlPStA6f8x3gDcB5kt5he9FSiy4iohs1L7pIwloCthcAXx/G874qaTWKG5YdNtQNyyIiRs2iTM005tieOEDbNcA15eMzgTPLxye07DOt5fHxSzPGiIiu1fy7cxJWREQUMiQYERFNUFW5eqeSsCIiopAeVkRENEISVkRENEJu4BgREU3g9LAiIqIRkrAiIqIRUiUYERGNkB5WREQ0QhJWREQ0gXsyJBjDtMj1LjHtb/UN96w6hK498durqg6hayuu9/qqQ+jKVmttVHUIXbv/mT9WHUI10sOKiIgmSFl7REQ0QxJWREQ0Qr1PYSVhRUREwYvqnbGSsCIiolDvfJWEFRERhboXXSxTdQAREVETvV0sbUjaV9J8SfdKOnaQfd4p6W5J8yR9v90x08OKiAhg5HpYkiYAJwF7AwuAOZJm2r67ZZ8pwKeAXW0/LmnddsdNDysiIgoj18PaCbjX9n22FwI/APbvt8/7gZNsPw5g++F2B03CiogIALyo80XSdElzW5bpLYdaH3iwZX1B2dZqM2AzSbMl3SBp33bxZUgwIiIAcBdVgrZnADOW4OWWBaYA04BJwLWSXmv7icGekB5WREQURm5I8CFgg5b1SWVbqwXATNsv2v4N8EuKBDaoJKyIiACKHlanSxtzgCmSNpK0PPAuYGa/fX5I0btC0toUQ4T3DXXQDAlGRATQ3ZDgkMexF0k6CrgMmACcbnuepBOBubZnltv2kXQ30AN8wvafhjpuElZERADgHo3csexZwKx+bce1PDZwTLl0ZNwMCUp6uaTvS7pP0s2Srpf09qrjioioixEcElwqxkXCkiSK8dJrbW9se3uKMdVJ/fZbKj3O8iK6iIhac686XqowLhIWsCew0PYpfQ22H7D9DUmHS5op6SrgSklrSvqhpDvKawO2ApA0UdIZku4stx1Ytu9T9tZukXS+pIll+/2SviTpFuDY8ifltimt6xERdZAeVj1sAQyVILYDDrK9O/BZ4FbbWwH/CpxV7vMZ4Enbry23XVVWtnwa2Mv2dsBcFh+P/ZPt7Wx/AXhS0jZl+/uAMwYKpPVivEee+/3w3m1ExDDY6nipwnhJWIuRdJKk2yXNKZuusP1Y+Xg34GwA21cBa0laFdiLYm4sym2PA68DpgKzJd0GvBd4VctLndvy+DTgfeXw4CHAgBM92p5hewfbO6yz0iuX9K1GRHSs7j2s8VIlOA84sG/F9pFl72hu2fTsMI8rimR36CDbW497IXA8cBVwc7vyzYiI0dY7glWCS8N46WFdBawg6YMtbSsNsu91wGEAkqYBj9p+CrgCOLJvJ0lrADcAu0ratGxbWdJmAx3U9p8prjv4FoMMB0ZEVClFFzVQ1vsfAOwu6TeSbgL+B/jkALufAGwv6Q7gixTDfACfB9aQdJek24E9bD8CHA6cU+5/PbD5EKF8j2JSk8uX/F1FRIysuies8TIkiO3fU5SyD+TMlv0eo0hu/Z//DC8lr9b2q4AdB2ifPMDr7AacYbuno6AjIkaR633D4fGTsKom6WJgE4oS+4iI2qmq59SpJKxRYjuzakRErVVVrt6pJKyIiACgp+ZVgklYEREBpIcVERENkXNYERHRCKkSjIiIRkgPKyIiGqGnt95zSSRhRUQEkCHBiIhoiN5UCUZERBOkrD0iIhohQ4IxbPc88WDVIXRljRUmVh1C11Zc7/VVh9C15393XdUhdGWzVzdvVrL1Vlqr6hAqkSHBiIhohFQJRkREI9R8RDAJKyIiChkSjIiIRkiVYERENEJv1QG0kYQVEREAmPSwIiKiARZlSDAiIpogPayIiGiEnMOKiIhGqHsPq96XNUdExKjp7WJpR9K+kuZLulfSsUPsd6AkS9qh3THTw4qICAB6RqiHJWkCcBKwN7AAmCNppu27++23CvBR4MZOjpseVkREANCrzpc2dgLutX2f7YXAD4D9B9jvc8CXgD93El8SVkREANCLOl4kTZc0t2WZ3nKo9YHW200sKNv+QtJ2wAa2L+00vgwJApJ6gDtbmg6wfX9F4UREVKKbyW9tzwBmDOd1JC0DfBU4vJvnJWEVnre9zUAbJAmQ7bpXfEZELJER/JB7CNigZX1S2dZnFWBL4JriI5ZXADMl7Wd77mAHzZDgACRNLqtbzgLuAjaQ9GVJd0m6U9Ih5X4nSrqtXB6SdEbZ/h5JN5Xtp5YnIJH0jKQvSLpd0g2SXl7du4yIWFyv1PHSxhxgiqSNJC0PvAuY2bfR9pO217Y92fZk4AZgyGQFSVh9VmxJPBeXbVOAk21vAewAbANsDewFfFnSK20fV/bMpgGPAd+U9BrgEGDXclsPcFh5zJWBG2xvDVwLvL9/IK3jwi8uenqpveGIiP56uliGYnsRcBRwGXAPcJ7teeWX/P2GG1+GBAuLDQlKmgw8YPuGsmk34BzbPcAfJf0M2JGiCyvgu8BXbd8s6Shge4oyToAVgYfL4ywELikf30xR8rmY1nHhiSttVPf7qUXEGNJB9V/HbM8CZvVrO26Qfad1cswkrME92+F+JwALbJ9Rrgv4H9ufGmDfF233JaEe8vuPiBrpzUwXY8J1wCGSJkhaB3gDcJOkv6UYIvxIy75XAgdJWhdA0pqSXjXqEUdEdMldLFXIN/zOXAzsAtxO8f/qX2z/QdIxFNcW3FQO/820fZykTwOXl6WbLwJHAg9UE3pERGdGckhwaUjCAmxP7Ld+P0XJZd+6gU+US+t+ewxyvHOBc4d6HdsXABcsSdwRESOp7tfuJGFFRAQAPelhRUREE6SHFRERjZCEFRERjeAMCUZERBOkhxUREY3QbsqlqiVhRUQEkOuwIiKiITIkGBERjZCEFRERjVD320MkYUVEBJBzWBER0RCpEoxhe7F3UdUhdOXR556qOoSubbXWRlWH0LXNXv32qkPoyi/nX9x+p5rZdot3Vx1CJXprPiiYhBUREUCKLiIioiHq3b9KwoqIiFJ6WBER0QiLVO8+VhJWREQAGRKMiIiGyJBgREQ0QsraIyKiEeqdrpKwIiKilCHBiIhohJ6a97GSsCIiAkgPKyIiGsLpYUVERBOkhxUREY2QsvaIiGiEeqcrWKbdDpJ6JN0maZ6k2yX9s6QhnydpsqRKbygjaRtJbxnG8yZLer58z3dLOqXd+42IGAsW4Y6XdiTtK2m+pHslHTvA9mPKz9g7JF0p6VXtjtnJB/HztrexvQWwN/Bm4Pg2z5kMdJWwJI10b28boOuEVfq17W2ArYCpwAEjFlWLpfCeIyKGzV38NxRJE4CTKPLFVOBQSVP77XYrsIPtrYALgP9sF19XPQfbDwPTgaNUmCDpy5LmlFnyA+WuXwReX/ZSjh5sP0nTJF0naSZwt6RlJJ0s6ReSrpA0S9JB5b7bS/qZpJslXSbplWX7NZK+JOkmSb+U9HpJywMnAoeUMRwiaffy8W2SbpW0SgfvdxHwc2BTSe8v479d0oWSVipf/8yyFza3fP23le0dvef+rylpenmsuT09z3TzvyciYon0drG0sRNwr+37bC8EfgDs37qD7attP1eu3gBManfQrr/h276vzJ7rlgE8aXtHSS8DZku6HDgW+Ljtvg/v6YPsB7AdsKXt35TJaTJFRl4XuAc4XdJywDeA/W0/IukQ4AvAP/S9D9s7lUOAx9veS9JxFNn7qDKGHwFH2p4taSLw53bvtUxKbwSOA26y/e2y/fPAEWVMlDHvBGwCXC1pU+DvO3nPA/x+ZwAzAF62wgZ1H1KOiDFkBMva1wcebFlfAOw8xP5HAD9ud9AlHZLaB9iqrxcErAZMARZ2sd9NLR/cuwHn2+4F/iDp6rL91cCWwBWSACYAv285/kXlz5spksdAZgNflfQ94CLbC4Z4X5tIuo3iHOT/2v5x2UP7PLA6MBG4rGX/88qYfyXpPmDzLt5zREQtdFPWXnZEprc0zSi/cHdF0nuAHYDd2+3bdcKStDHQAzwMCPiw7cv67TOt/9OG2O/ZTl4WmGd7l0G2v1D+7GGQ92T7i5IupTivNVvSm2z/YpDj9Z3DanUmcIDt2yUdDkxrPXz/l2PJ33NExKjqcec9rNbRoAE8BGzQsj6pbFuMpL2AfwN2t/1C/+39dXUOS9I6wCnAN22bopfxwXLIDkmbSVoZeBpoPUc02H79zQYOLM9lvZyXksJ8YB1Ju5TPX07SFm3CXSwGSZvYvtP2l4A5FL2gbqwC/L58D4f123ZwGfMmwMZlvJ2+54iIWujFHS9tzAGmSNqorCl4FzCzdQdJ2wKnAvuV9RFtddLDWrEcHlsOWAScDXy13HYaxRDcLSrG6h6hqKi7A+iRdDtFz+Rrg+zX34UU54zuphj/vIXiPNDCcmjt65JWK+P+b2DeEHFfDRxbxv4fwG6S9qDo9c6jg/HSfj4D3FjGfiOLJ+TfAjcBqwL/ZPvPkgb73URE1NJIncOyvUjSURRf3CcAp9ueJ+lEYK7tmcCXKU6vnF+e6vmt7f2GOq7cRRdwNEiaaPsZSWtRJIFdbf+h6rgGI+lM4BLbF4z0sZtWdCFUdQhdm7rGhlWH0LXHFz5ddQhd+eX8i6sOoWvbblHpZaTDctcfb1jif4CHvOqAjj9zzn3gh6P+D76O1wFdIml1YHngc3VOVhERY0mmZuqS7Wmj8TqSXksxvNnqBdtDlV7+FduHj1hQEREVymztNWX7TorZMCIigu6qBKswbhNWREQsLkOCERHRCLkfVkRENELOYUVERCNkSDAiIhqhbtfl9peEFRERAPSkhxUREU2QIcGIiGiEDAnGsNX9j6e/5SY078/p/mf+WHUIXVtvpbWqDqErTZyX79Z53686hEqkhxUREY2QsvaIiGiETM0UERGNkCHBiIhohCSsiIhohLoXeiVhRUQEkB5WREQ0RKoEIyKiEXpc7xuMJGFFRASQc1gREdEQOYcVERGNkHNYERHRCL0ZEoyIiCZIDysiIhohVYIREdEIdR8SXKbqAAAk9Ui6TdI8SbdL+mdJQ8YmabKku8rHO0j6+jBf+2OSVhrOcyMixhJ38V8V6tLDet72NgCS1gW+D6wKHN/Jk23PBeYO87U/BnwXeG6Yz4+IGBPSw+qS7YeB6cBRKkyQ9GVJcyTdIekD/Z8jaZqkS8rHEyWdIenOcv8Dy/ZvSZpb9uI+W7Z9BFgPuFrS1WXbPpKul3SLpPMlTSzbvyjp7vKY/1W2HSzprrJXeG3ZNmC8ZYzXSLpA0i8kfU+SlvbvMyKiU+lhDYPt+yRNANYF9geetL2jpJcBsyVdDoP+xj5T7v9aAElrlO3/Zvux8rhXStrK9tclHQPsYftRSWsDnwb2sv2spE8Cx0g6CXg7sLltS1q9POZxwJtsP9TSdsQg8QJsC2wB/A6YDewK/F9r8JKmUyRsJkxYnWUmrDys32FERLd63FN1CEOqZcLqZx9gK0kHleurAVOAXw6y/17Au/pWbD9ePnxnmQyWBV4JTAXu6Pfc15Xts8vOz/LA9cCTwJ+B75Q9uUvK/WcDZ0o6D7ioTbwLgZtsLwCQdBswmX4Jy/YMYAbA8i+bVO/+eUSMKZmaaRgkbQz0AA8DAj5s+7J++0zu4ngbAR8HdrT9uKQzgRUG2hW4wvahAxxjJ+CNwEHAUcCetv9J0s7AW4GbJW0/RLzTgBdamnqo6e8/IsankZyaSdK+wNeACcBptr/Yb/vLgLOA7YE/AYfYvn+oY9buHJakdYBTgG+6SPeXAR+UtFy5fTNJQ42TXQEc2XK8NSgKOJ4FnpT0cuDNLfs/DaxSPr4B2FXSpuVzVy5fbyKwmu1ZwNHA1uX2TWzfaPs44BFgg2HEGxFRC7Y7XoZSnno5ieKzdipwqKSp/XY7Anjc9qbA/wO+1C6+unzDX7EcIlsOWAScDXy13HYaxdDZLWWRwiPAAUMc6/PASWXJew/wWdsXSboV+AXwIMVQXp8ZwE8k/c72HpIOB84psz8U57SeBv5X0goUPahjym1fljSlbLsSuJ1imLGbeCMiamEEqwR3Au61fR+ApB9Q1CPc3bLP/sAJ5eMLgG9KkofIhqr7mOV41rRzWMtPWK7qELq2/IS6fGfr3HorrVV1CGPerfO+X3UIXVtu7Y2XuOr4Fau/puPPnD88cc+gr1eew9/X9j+W638H7Gz7qJZ97ir36Tuv/+tyn0cHO27z/rVGRMRS0c3UTK0VzaUZZdHYUpOEFRERQHdVgq0VzQN4iOKcfp9JZdtA+yyQtCxFRfWfhnrN2hVdRERENXrtjpc25gBTJG0kaXmKS41m9ttnJvDe8vFBwFVDnb+C9LAiIqI0UjUNthdJOoqianoCcLrteZJOBObangl8Bzhb0r3AY7RcPzuYJKyIiABG9jqs8jKgWf3ajmt5/Gfg4G6OmYQVERFAZrqIiIiGyA0cIyKiEep+e5EkrIiIADIkGBERDVHVfa46lYQVERFAelgREdEQdT+HlclvxylJ05f2vF8jqWnxQvNiblq8kJjHm0zNNH5Nb79LrTQtXmhezE2LFxLzuJKEFRERjZCEFRERjZCENX41bQy9afFC82JuWryQmMeVFF1EREQjpIcVERGNkIQVERGNkIQVERGNkIQVERGNkKmZxhFJmwGfAF5Fy/9723tWFtQQJJ3YeodSSROAs2wfVmFYg5J0M3A68H3bj1cdTyckrQO8H5jM4n8T/1BVTO2UfwfzbG9edSzdkPQ3/PXv+azKAmqgJKzx5XzgFODbQE/FsXRiA0mfsv0fkl4GnAfcWnVQQzgEeB8wR9Jc4Azgcte7FPd/geuAn9KMvwls90iaL2lD27+tOp5OSDob2AS4jZd+zwaSsLqQsvZxRNLNtrevOo5OSRLwPeBOYA9glu3/rjaq9iQtA7wN+BbFh9MZwNdsP1ZpYAOQdJvtbaqOo1uSrgW2BW4Cnu1rt71fZUENQdI9wNSaf3mpvfSwxgFJa5YPfyTpQ8DFwAt92+v2QSppu5bVrwGnArOBayVtZ/uWaiJrT9JWFL2stwAXUiTc3YCrgDomhkskvcX2rKoD6dJnqg6gS3cBrwB+X3UgTZYe1jgg6TcUww8aYLNtbzzKIQ1J0tVDbHaNz7ndDDwBfAe40PYLLdsusv2OyoIbhKSngZWBheUiit/xqpUG1gFJrwKm2P6ppJWACbafrjqugZR/09tQ9AhbvyzWskdYV0lYESOgHAY81va/Vx3LeCDp/RSznq9pexNJU4BTbL+x4tAGJGn3gdpt/2y0Y2myJKxxRNLBwE9sPy3p08B2wOds16qQQdIxQ223/dXRiqUbkuba3qHqOLpRnic8DNjI9uckbQC80vZNFYc2JEm3ATsBN9retmy70/Zrq41scE3qEdZVrsMaXz5TJqvdgL0ohq5OqTimgazSZqmrn0r6uKQNJK3Zt1QdVBsnA7sA7y7XnwFOqi6cjr1ge2HfiqRlKYa9a6nsEV5AcT4WYH3gh9VF1Ewpuhhf+spp3wrMsH2ppM9XGdBAbH+26hiG6ZDy55EtbQZqdY6wn51tbyfpVgDbj0tavuqgOvAzSf8KrChpb+BDwI8qjmkoR1L2CAFs/0rSutWG1DxJWOPLQ5JOBfYGvlRe21S7Xrakf7H9n5K+wQDfmm1/pIKw2rK9UdUxDMOL5YW4hr9cSNxbbUgdORY4guKShw8As4DTKo1oaC/YXliMwNa/R1hXSVjjyzuBfYH/sv2EpFdSzHxRN/eUP+dWGkWXyvMSxwAb2p5eFgK82vYlFYc2lK9TXOawrqQvAAcBn642pPZs90r6H4oei4H5Nb/GqWk9wlpK0cU4U56/mmL7jPLb9ETbv6k6rrFA0rnAzcDf296yTGA/r/uFuZI2B95IUdJ+pe172jylcpLeSnH+9dcUcW8EfMD2jysNbBBlFekRwD4U8V4GnFbzJFs7SVjjiKTjgR0ovvVvJmk94Hzbu1Yc2mIkzRxqe12vXemrEpR0a0vl2u22t646tsFI+g7wDdu3tbSdYPuE6qJqT9IvgLfZvrdc3wS4tAnzC5aFOJNs31F1LE2TIcHx5e0U09ncAmD7d5LqWHW3C/AgcA7FkM9AFzzX0UJJK/LS+aBNaLlItKbeBOwg6SstE7HuB5xQXUgdebovWZXuA2pbIi7pGorf67IUvfCHJf3c9tGVBtYwSVjjy0LbltT3gbpy1QEN4hUUhSGHUpRbXwqcY3tepVG1dzzwE4pJe78H7AocXmlE7T1MMU/jdyXtDHyUZnxBmCtpFsWEyAYOpph0+B0Ati+qMrgBrGb7KUn/SHHHgeMlpYfVpdpViMVSdV5ZJbh6eV3ITylmbq8V2z22f2L7vcDrgHuBayQdVXFoQ7J9BfAOiiR1DrCD7WuqjKkDsv2k7b8FHgGuAVarNqSOrAD8EdgdmEYR+4rA31JMPFw3y5ZFTu8E6lyEU2vpYY0T5YwG5wKbA08BrwaOKz9ka6csuX8rRS9rMi9Vs9WWpLcDV9m+tFxfXdIBtut8gehfzhfaPqGcD7H2w1S231d1DF06kaLQ4v9sz5G0MfCrimNqnBRdjCN1n7qmj6SzgC0prq35ge27Kg6pIwPdqqO1AKOuJL0c2LFcvcn2w1XG0wlJK1BU3W1B0dsC6n3jyVhyGRIcX26RtGP73Sr3HmAKxfmUn0t6qlyelvRUxbENZaB/T7UexZD0TooZxA+mGK66UdJB1UbVkbMpznW+CfgZMIl6F138p6RVJS0n6UpJj0h6T9VxNU16WONIWa/dHuIAAAkdSURBVAo8Bbif4qZ3fbeS2KrKuMYKSadT3F6kby6+IylmEz+8sqDakHQ7sHdfr6q8Nu+ndS7Fh5d6rpLusL2VpOWA62y/rurYBtLX+y6Hjd9GcYH5tXX/PddNrb/9xcjQS7cSf1PVsYxxH6a4seC55foVLD6vYB0t028I8E80Y+TlxfLnE5K2BP4A1Hluvr7P2rdSXPv4ZN80TdG5JKzx4YfAdrYfkHSh7QOrDmgssv0scGx5bZttP1N1TB34iaTLKKoaoZjAtwl3H54haQ2KLwgzgYnU+y7El5QjHM8DHyx7sn+uOKbGyZDgONBv5oXaFwE0laTXAmcBfbcUeRR4b12LRsrK0UkUBRe7lc3X2a57NeYBwKbAnbYvqzqeTpUzXDxpu6e8BnIV23+oOq4mSQ9rfPAgj2NknQocY/tqAEnTgBnA31QZ1GDKi8hnlZWjdbvQdkCSTqaoDPw58DlJO9n+XMVhtVXOK/khYEOKOyWvR3FpSa7J6kIS1viwdVldJ4rZovsq7fqKLlatLrQxZeW+ZAVg+5oazybS5xZJO9qeU3UgHXoDsHXZS1kJuA6ofcICzqCYkqnvy8tDwPkkYXUlCWscsD2h6hjGifskfYai5BqK8vz7KoynEzsD75F0P82oHF1ouwfA9nNqTuXCJrYPkXQoNC722kjCihg5/wB8lmJ4zRTf/mt5IWuDK0c3b5mDT8Am5XrtE20DJ0aunSSsiBFQ3rX3Itt7VB1Lh5paOfqaqgMYphP464mRmza9VOWSsCJGQHlOpVfSarafrDqeDrQOR21cWRRdsv1AJ/tJut72Lks7nk7Zvrycp/F1FL/7j9p+tOKwGicJK2LkPAPcKekKivNBANj+SHUhDWqsV46u0H6X0SPpSttvpLhVTv+26FASVsTIuYiXysP7kkBdT6yP9crRWiThcpLelYC1ywud+/4eVgXWryywhkrCilhCkvanuOX5SeX6TcA6FB+an6wytsGkcnTUfAD4GMV1VzfzUsJ6CvhmVUE1VWa6iFhCkmYD77L9YLl+G7AnxXRBZ2TYZ/TVbUYXSR+2/Y2q42i69LAiltzyfcmq9H+2HwMea8CFw41U/l6ft90raTOKG5P+2HbfpLh/V110f832N8pJeqey+P27zqouquZJDytiCUm61/amg2z7te1NRjumsa6suHs9sAYwG5hDcVHxYZUGNghJxwPTKBLWLODNFF9smnDvsdpowm0EIuruRknv798o6QMUN0eMkSfbzwHvAE62fTDFHIN1dRDwRuAPtt8HbA2sVm1IzZMhwYgldzTwQ0nvBm4p27YHXgYcUFlUY5sk7QIcBhxRttW5kKRv+HKRpFWBh4ENqg6qaZKwIpZQeQPEv5G0Jy99y7/U9lUVhjXWfRT4FHCx7XmSNgaubvOcKs2VtDrwbYpqwWeA66sNqXlyDisiGkfSwbbPb9dWR5ImA6vavqPNrtFPzmFFRBN9qsO2WpD0dkmrAdi+H/hteSPK6EJ6WBHRGJLeDLwFeCdwbsumVYGptneqJLA2JN1me5t+bbW6VqwJcg4rIprkd8BcYD+Kc0F9nqYofqmrgUaz8vnbpfSwIqJxJC3XcpFw7Uk6HXgCOKlsOhJY0/bhlQXVQDmHFRFNtJOkKyT9UtJ9kn4jqc53d/4wsJBiGPNcips3HllpRA2UHlZENI6kX1AMAd4M9PS12/5TZUHFUpcx1Ihooidt/7jqINqR9N+2PybpRwxwyxPb+1UQVmOlhxURjSPpixQzW1xEMbwGgO1bBn1SBSRtb/tmSbsPtN32z0Y7piZLwoqIxpE00KwWtr3nqAcToyYJKyJiKZF0JwPf/bjvzs5bjXJIjZaEFRGNI+nlwL8D69l+s6SpwC62v1NxaIuR9Kqhttt+YLRiGQtS1h4RTXQmcBnFrecBfklxK/pasf1A31I2TSkfPww8VmFojZSEFRFNtLbt84BeANuLaClvr5vyfmkXAKeWTZOAH1YXUTMlYUVEEz0raS3K80OSXgc8WW1IQzoS2BV4CsD2r4B1K42ogXIdVkQ00THATGATSbOBdSju6ltXL9heKAkAScsycDFGDCEJKyIax/Yt5bVNr6aouJtf87kFfybpX4EVJe0NfAj4UcUxNU6qBCOicSS9Y4DmJ4E7yztA14qkZYAjgH0oEuxlwGnOB3BXkrAionEkXQrsAvRdQDyNYl7BjYATbZ9dUWiDkrQOgO1Hqo6lqVJ0ERFNtCzwGtsH2j4QmEpxTmhn4JOVRtZChRMkPQrMB+ZLekTScVXH1kRJWBHRRBvY/mPL+sNl22NAnc5lHU1RHbij7TVtr0mRVHeVVOcbTtZShgQjonEknQxsCJxfNh0ILAA+AVxie4+qYmsl6VZgb9uP9mtfB7jc9rbVRNZMSVgR0UiSDgR2K1dnAxfWrYhB0l22t+x2WwwsZe0R0SiSJgDzbG8OXFh1PG0sHOa2GEASVkQ0iu0eSfMlbWj7t1XH08bWkp4aoF3ACqMdTNMlYUVEE60BzJN0E/BsX2Pd7uBre0LVMYwlSVgR0USfqTqAGH0puoiIRirvNTXF9k8lrQRMsP101XHF0pPrsCKicQa4Xcf65HYdY14SVkQ0UW7XMQ4lYUVEE71g+y9l4bldx/iQhBURTdT/dh3nk9t1jHkpuoiIxhnodh22v11tVLG0JWFFRONI+qjtr7Vri7ElQ4IR0UTvHaDt8NEOIkZXLhyOiMaQdCjwbmAjSTNbNq0CPFZNVDFakrAiokl+DvweWBv4Skv708AdlUQUoybnsCKikfrNdLEisGxmuhjbcg4rIhpngJkuJpGZLsa8JKyIaKLMdDEOJWFFRBNlpotxKAkrIpooM12MQym6iIjGGWimC+A05wNtTEvCiohGkrQOgO1Hqo4lRkeGBCOiMVQ4QdKjwHxgvqRHJB1XdWyx9CVhRUSTHE1RHbij7TVtrwnsDOwq6ehqQ4ulLUOCEdEYkm4F9rb9aL/2dYDLbW9bTWQxGtLDiogmWa5/soK/nMdaroJ4YhQlYUVEkywc5rYYAzIkGBGNIakHeHagTcAKttPLGsOSsCIiohEyJBgREY2QhBUREY2QhBUREY2QhBUREY3w/wFtyRoHgtJQRQAAAABJRU5ErkJggg==
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
      <td>10.198766</td>
      <td>8.431853</td>
      <td>9.961898</td>
      <td>5.313206</td>
      <td>5.998937</td>
      <td>9.077038</td>
    </tr>
    <tr>
      <th>1</th>
      <td>6.413459</td>
      <td>9.594378</td>
      <td>8.693329</td>
      <td>8.942069</td>
      <td>7.427739</td>
      <td>7.406103</td>
    </tr>
    <tr>
      <th>2</th>
      <td>8.371936</td>
      <td>7.979681</td>
      <td>7.665753</td>
      <td>7.774856</td>
      <td>6.900731</td>
      <td>9.314971</td>
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
      <th>354</th>
      <td>3.218876</td>
      <td>7.336286</td>
      <td>8.823501</td>
      <td>6.771936</td>
      <td>9.089415</td>
      <td>9.935713</td>
    </tr>
    <tr>
      <th>363</th>
      <td>3.850148</td>
      <td>10.138441</td>
      <td>7.612831</td>
      <td>8.741456</td>
      <td>8.021913</td>
      <td>7.858254</td>
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
      <th>16</th>
      <td>9.334591</td>
      <td>4.043051</td>
      <td>8.050703</td>
      <td>7.591357</td>
      <td>8.321908</td>
      <td>6.413459</td>
    </tr>
    <tr>
      <th>33</th>
      <td>9.773891</td>
      <td>3.828641</td>
      <td>10.070357</td>
      <td>5.438079</td>
      <td>8.552753</td>
      <td>6.018593</td>
    </tr>
    <tr>
      <th>156</th>
      <td>5.476464</td>
      <td>1.098612</td>
      <td>9.061840</td>
      <td>6.154858</td>
      <td>6.003887</td>
      <td>8.295549</td>
    </tr>
    <tr>
      <th>255</th>
      <td>10.663966</td>
      <td>13.543496</td>
      <td>9.245901</td>
      <td>7.640123</td>
      <td>6.726233</td>
      <td>7.018402</td>
    </tr>
    <tr>
      <th>274</th>
      <td>7.383989</td>
      <td>13.344532</td>
      <td>7.258412</td>
      <td>9.170768</td>
      <td>8.541105</td>
      <td>7.081709</td>
    </tr>
    <tr>
      <th>396</th>
      <td>6.745236</td>
      <td>12.527145</td>
      <td>5.105945</td>
      <td>9.569133</td>
      <td>6.773080</td>
      <td>5.549076</td>
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
      <th>52</th>
      <td>6.549651</td>
      <td>9.149847</td>
      <td>4.574711</td>
      <td>7.470224</td>
      <td>8.468003</td>
      <td>7.677864</td>
    </tr>
    <tr>
      <th>238</th>
      <td>10.847393</td>
      <td>8.125927</td>
      <td>4.442651</td>
      <td>7.797702</td>
      <td>7.778211</td>
      <td>6.608001</td>
    </tr>
    <tr>
      <th>239</th>
      <td>10.513715</td>
      <td>9.427063</td>
      <td>2.197225</td>
      <td>5.669881</td>
      <td>6.513230</td>
      <td>7.525101</td>
    </tr>
    <tr>
      <th>268</th>
      <td>5.552960</td>
      <td>7.607381</td>
      <td>1.098612</td>
      <td>10.070357</td>
      <td>7.931644</td>
      <td>6.350886</td>
    </tr>
    <tr>
      <th>269</th>
      <td>6.939254</td>
      <td>7.548029</td>
      <td>3.135494</td>
      <td>9.423595</td>
      <td>6.413459</td>
      <td>6.995766</td>
    </tr>
    <tr>
      <th>335</th>
      <td>9.489713</td>
      <td>6.490724</td>
      <td>4.605170</td>
      <td>7.864036</td>
      <td>7.797702</td>
      <td>7.677864</td>
    </tr>
    <tr>
      <th>383</th>
      <td>9.396903</td>
      <td>5.860786</td>
      <td>1.098612</td>
      <td>8.799812</td>
      <td>7.336286</td>
      <td>7.186144</td>
    </tr>
    <tr>
      <th>398</th>
      <td>5.484797</td>
      <td>7.293018</td>
      <td>4.234107</td>
      <td>8.499029</td>
      <td>8.052296</td>
      <td>5.700444</td>
    </tr>
    <tr>
      <th>401</th>
      <td>5.874931</td>
      <td>7.148346</td>
      <td>4.262680</td>
      <td>8.548692</td>
      <td>3.850148</td>
      <td>5.209486</td>
    </tr>
    <tr>
      <th>405</th>
      <td>9.605149</td>
      <td>6.198479</td>
      <td>3.988984</td>
      <td>7.006695</td>
      <td>8.436634</td>
      <td>6.710523</td>
    </tr>
    <tr>
      <th>406</th>
      <td>5.123964</td>
      <td>5.204007</td>
      <td>4.025352</td>
      <td>7.639642</td>
      <td>6.952729</td>
      <td>9.783577</td>
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
      <th>41</th>
      <td>7.671827</td>
      <td>7.678789</td>
      <td>10.209758</td>
      <td>2.397895</td>
      <td>6.196444</td>
      <td>8.732305</td>
    </tr>
    <tr>
      <th>44</th>
      <td>5.501258</td>
      <td>5.411646</td>
      <td>9.802174</td>
      <td>1.098612</td>
      <td>8.318254</td>
      <td>8.285261</td>
    </tr>
    <tr>
      <th>60</th>
      <td>8.523970</td>
      <td>9.962558</td>
      <td>8.402007</td>
      <td>2.890372</td>
      <td>8.393895</td>
      <td>8.425078</td>
    </tr>
    <tr>
      <th>90</th>
      <td>6.688355</td>
      <td>6.445720</td>
      <td>7.414573</td>
      <td>1.945910</td>
      <td>7.983440</td>
      <td>8.930362</td>
    </tr>
    <tr>
      <th>410</th>
      <td>9.773664</td>
      <td>5.805135</td>
      <td>8.146130</td>
      <td>2.890372</td>
      <td>8.198089</td>
      <td>8.317522</td>
    </tr>
    <tr>
      <th>414</th>
      <td>10.342130</td>
      <td>9.642707</td>
      <td>8.203851</td>
      <td>3.091042</td>
      <td>8.488588</td>
      <td>7.128496</td>
    </tr>
    <tr>
      <th>468</th>
      <td>8.034955</td>
      <td>6.357842</td>
      <td>7.118826</td>
      <td>3.610918</td>
      <td>7.496097</td>
      <td>7.643962</td>
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
      <th>54</th>
      <td>7.815611</td>
      <td>8.933137</td>
      <td>8.694335</td>
      <td>7.291656</td>
      <td>2.197225</td>
      <td>8.034631</td>
    </tr>
    <tr>
      <th>83</th>
      <td>5.645447</td>
      <td>10.307452</td>
      <td>10.012073</td>
      <td>7.347944</td>
      <td>1.098612</td>
      <td>5.669881</td>
    </tr>
    <tr>
      <th>84</th>
      <td>8.245384</td>
      <td>9.626943</td>
      <td>7.334982</td>
      <td>6.535241</td>
      <td>3.135494</td>
      <td>7.886833</td>
    </tr>
    <tr>
      <th>207</th>
      <td>10.123787</td>
      <td>5.872118</td>
      <td>7.314553</td>
      <td>7.970049</td>
      <td>2.397895</td>
      <td>8.678972</td>
    </tr>
    <tr>
      <th>210</th>
      <td>8.732627</td>
      <td>9.627536</td>
      <td>9.626943</td>
      <td>6.973543</td>
      <td>1.098612</td>
      <td>7.378384</td>
    </tr>
    <tr>
      <th>226</th>
      <td>9.126198</td>
      <td>9.305832</td>
      <td>6.196444</td>
      <td>7.550661</td>
      <td>2.890372</td>
      <td>7.639642</td>
    </tr>
    <tr>
      <th>256</th>
      <td>7.903966</td>
      <td>7.850883</td>
      <td>9.946260</td>
      <td>7.311886</td>
      <td>1.945910</td>
      <td>4.762174</td>
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
      <th>107</th>
      <td>7.037906</td>
      <td>7.958926</td>
      <td>7.057898</td>
      <td>7.759614</td>
      <td>9.018938</td>
      <td>2.708050</td>
    </tr>
    <tr>
      <th>125</th>
      <td>7.703459</td>
      <td>9.256365</td>
      <td>6.327937</td>
      <td>7.661056</td>
      <td>8.034955</td>
      <td>2.197225</td>
    </tr>
    <tr>
      <th>193</th>
      <td>8.304495</td>
      <td>9.894245</td>
      <td>9.772581</td>
      <td>7.266129</td>
      <td>5.777652</td>
      <td>3.218876</td>
    </tr>
    <tr>
      <th>230</th>
      <td>6.978214</td>
      <td>6.542472</td>
      <td>8.597297</td>
      <td>5.934894</td>
      <td>4.787492</td>
      <td>2.890372</td>
    </tr>
    <tr>
      <th>234</th>
      <td>9.384966</td>
      <td>8.009363</td>
      <td>10.489662</td>
      <td>8.544225</td>
      <td>7.962067</td>
      <td>3.091042</td>
    </tr>
    <tr>
      <th>425</th>
      <td>9.238928</td>
      <td>9.410666</td>
      <td>7.401231</td>
      <td>7.603399</td>
      <td>7.966933</td>
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
<pre>[[354, 363],
 [16, 33, 156, 255, 274, 396],
 [52, 238, 239, 268, 269, 335, 383, 398, 401, 405, 406],
 [41, 44, 60, 90, 410, 414, 468],
 [54, 83, 84, 207, 210, 226, 256],
 [107, 125, 193, 230, 234, 425]]</pre>
</div>

</div>

</div>

</div>

</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell  jp-mod-noInput ">

<div class="jp-Cell-outputWrapper">

<div class="jp-OutputArea jp-Cell-outputArea">

<div class="jp-OutputArea-child">



<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain">
<pre>[]</pre>
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
<img src="data:image/png;base64,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PXo0I0eOZN999+Uvf/kLhxxyCAMGDGDPPfdk1qxZQOVBsyeddBL9+/dnwIAB/PznPwfg9ttvZ6+99mLw4MF8+tOfXv5A2j59+nD++eczePBgxo8fz+DBg5fve+7cue+YlyTJM0iSpA4ze/bsFQaSBx98kFmzZrHRRhtx5plnsttuuzFp0iTuuusuTjjhBGbOnMnXvvY1NthgAx5+uHK26uWXX+bFF1/k0ksvZerUqfTq1YtvfOMbXH755Vx00UUAbLzxxjz44IMATJ06lZkzZzJo0CCuueYaTjrppPofuCStZvo+NqfRJay2PIMkSWqY008/nYEDB7L77rsDMGrUKDbaaCMA7r33Xo4//ngARo4cyUsvvcRf//pXpk6dyumnn758GxtuuCF/+MMfePTRRxk+fDiDBg3iuuuu4+mnn17e5sgjj1w+ffLJJ3PNNdewZMkSJk6cyDHHHNMRhypJWkN4BkmS1GF23XXX5ZfEAUyYMIEXX3yRoUOHAtCrV6/3tN3MZNSoUdxwww0trq/e7uGHH87FF1/MyJEjGTJkCBtvvPF72qckqXPyDJIkqcOMHDmSN998k+9973vLl73++usttt177725/vrrAZg2bRqbbLIJ66+/PqNGjWLChAnL27388svsueee3HfffcybNw+A1157jSeeeKLF7a6zzjrsv//+fOELX/DyOknSuxiQJEkdJiKYNGkS99xzD9tttx3Dhg3jxBNP5Bvf+Ma72o4bN44ZM2YwYMAAxo4dy3XXXQfAhRdeyMsvv0y/fv0YOHAgd999N7179+baa6/l6KOPZsCAAey111489thjrdZx7LHH0q1bN/bbb7+6Haskac3kJXaS1IWtbFjuethiiy248cYbW1w3ZsyY5dMbbbQRkyZNeleb9dZbb3lYqjZy5EgeeOCBdy1vamp617J7772Xk046ySG/JUnvYkDq4k6/cmSjS5CkDnXooYfy5JNPctdddzW6FEnSasiAJEnqUn75y182ugRJ0mrMe5AkSZIkqTAgSZIkSVJhQJIkSZKkwoAkSZIkSYWDNEiSOlT37t3p37//8vlJkybRp0+fxhUkSVIVA5IkdWFzdu7brtvr+9iclbZZd911mTlzZovrMpPMpFs3L3CQJDWG/wNJkhqqqamJnXbaiRNOOIF+/frxzDPPcN5559GvXz/69+/PxIkTAbjooosYNGgQgwYNYsstt+Skk04C4Mc//jHDhg1j0KBBfP7zn2fJkiVA5YGyF1xwAQMHDmTPPffk+eefb9gxSpLWHAYkSVKHeuONN5YHnUMPPRSAuXPnctpppzF79mymT5/OzJkzeeihh5g6dSrnnXcezz33HJdccgkzZ85k2rRpbLTRRpxxxhnMmTOHiRMnct999zFz5ky6d+/O9ddfD8Brr73GnnvuyUMPPcRHPvIRvv/97zfysCVJawgvsZMkdajml9g1NTWx7bbbsueeewJw7733cvTRR9O9e3c222wzPvrRj/LAAw8wevRoMpPjjjuOc845hyFDhnDFFVcwY8YMdt99d6ASvjbddFMAevbsyUEHHQTAkCFDuOOOOzr4SCVJayIDkiSp4Xr16lVTu3HjxrHVVlstv7wuMznxxBP5+te//q62a621FhEBVAaGWLx4cfsVLEnqtLzETpK0Wtl7772ZOHEiS5YsYcGCBfzmN79h2LBh/OpXv2Lq1Kl85zvfWd5233335aabbuKFF14A4C9/+QtPP/10o0qXJHUCnkGSJK1WDj30UH7/+98zcOBAIoJvfvObbL755lx++eU8++yzDBs2DIDRo0dzySWXcOmll7LffvuxdOlS1lprLSZMmMC2227b4KOQJK2pIjMbXUO7Gjp0aE6fPr3RZUirZtwGq9D21frVoU5vzpw59O3bvkN7a/VW75/5ZUceVHPbcyfeUrc6JGlVRcSMzBzafLmX2EmSJElSYUCSJEmSpMJ7kKTVgZfNSZIkrRY8gyRJkiRJhQFJkiRJkgoDkiRJkiQVBiRJkiRJKhykQZK6sAmn3tWu2zv9ypErbdO9e3f69+/PokWL6NGjByeccAL/9E//RLdurf/Nrqmpid/97nccc8wx7VnuKpk5cyZ//vOfOeCAA1bpfU1NTfTt25eddtqJt956i4985CP8+7//+wqPV5LUOH46S5I61LrrrsvMmTOZPXs2d9xxB//1X//FxRdfvML3NDU18ZOf/GSV9rN48eK2lPkuM2fOZMqUKe/pvR/60IeYOXMms2bN4tFHH2XSpEntWtsy7X3MktQVGZAkSQ2z6aabctVVV3HFFVeQmSxZsoTzzjuP3XffnQEDBvAf//EfAIwdO5bf/va3DBo0iG9/+9uttps2bRp77703o0ePZpdddmHp0qWcdtpp7LzzzowaNYoDDjiAm266CYAZM2bw0Y9+lCFDhrD//vvz3HPPATBixAjOP/98hg0bxo477shvf/tb3nrrLS666CImTpzIoEGDmDhxIvfccw+DBg1i0KBB7Lbbbvztb39b6fH26NGDD3/4w8ybN4/vf//77L777gwcOJDDDz+c119/HYAxY8Zw6qmnMnToUHbccUduueUWgJqPWZLUNl5iJ0lqqO23354lS5bwwgsvcPPNN7PBBhvwwAMP8Pe//53hw4ez3377MX78eL71rW8tDwtXXXVVi+0AHnzwQR555BG22247brrpJpqamnj00Ud54YUX6Nu3L5/5zGdYtGgRZ555JjfffDO9e/dm4sSJXHDBBVx99dVA5UzM/fffz5QpU7j44ouZOnUql1xyCdOnT+eKK64A4JOf/CQTJkxg+PDhLFy4kHXWWWelx/r6669z5513cskllzBs2DA+97nPAXDhhRfywx/+kDPPPBOonDG7//77efLJJ9lnn32YN28eP/rRj2o6ZklS2xiQJEmrjdtvv51Zs2YtP8vz6quvMnfuXHr27Flzu2HDhi0PCvfeey+f/vSn6datG5tvvjn77LMPAI8//jiPPPIIo0aNAipnZ7bYYovl2z/ssMMAGDJkCE1NTS3WOnz4cM455xyOPfZYDjvsMLbaaqtWj+vJJ59k0KBBRAQHH3wwn/jEJ7jnnnu48MILeeWVV1i4cCH777//8vZHHHEE3bp1Y4cddmD77bfnscceq/mYJUltY0CSJDXUU089Rffu3dl0003JTL773e++IyxA5TKyaitq16tXr5XuMzPZdddd+f3vf9/i+rXXXhuoDCjR2n09Y8eO5cADD2TKlCkMHz6c2267jZ133rnFtsvuQao2ZswYJk2axMCBA7n22mvfcYwR8Y62EdHmY5Yk1cZ7kCRJDbNgwQJOPfVUzjjjDCKC/fffn+9973ssWrQIgCeeeILXXnuN97///e+4x6e1ds0NHz6cn//85yxdupTnn39+eQjZaaedWLBgwfKAtGjRImbPnr3CWpvX8OSTT9K/f3/OP/98dt99dx577LFVOva//e1vbLHFFixatIjrr7/+Het+9rOfsXTpUp588kmeeuopdtppp5qPWZLUNp5BkqQurJZhudvbG2+8waBBg5YP83388cdzzjnnAHDyySfT1NTE4MGDyUx69+7NpEmTGDBgAN27d2fgwIGMGTOGs88+u8V2zR1++OHceeed7LLLLmy99dYMHjyYDTbYgJ49e3LTTTdx1lln8eqrr7J48WK++MUvsuuuu7Za9z777MP48eMZNGgQX/7yl7n33nu5++676datG7vuuiuf+MQnVun78LWvfY099tiD3r17s8cee7wjfG2zzTYMGzaMv/71r1x55ZWss846rX5vJEntKzKz0TW0q6FDh+b06dMbXYYkrZbmzJlD3759G11Gh1q4cCHrrbceL730EsOGDeO+++5j8803b3RZrRozZgwHHXQQn/rUp9ple/X+mV925EE1tz134i11q0OSVlVEzMjMoc2XN+QMUkRsBEwE+gBNwBGZ+XIL7b4JHEjlUsA7gLOzsyU6SVJdHXTQQbzyyiu89dZbfOUrX1mtw5EkqfEadYndWODOzBwfEWPL/PnVDSLiw8BwYEBZdC/wUWBaB9YpSVrDNR/goV4efvhhjj/++HcsW3vttfnjH/+4Stu59tpr27EqSdKqalRAOhgYUaavoxJ6zm/WJoF1gJ5AAGsBz3dMeZIkrZr+/fu/a6Q6SdKap1Gj2G2Wmc+V6f8FNmveIDN/D9wNPFdet2XmnI4rUZIkSVJXU7czSBExFWjpQu8LqmcyMyPiXfcVRcQ/AH2BZU/euyMi9s7M37bQ9hTgFKiM/CNJkiRJ70XdAlJmfqy1dRHxfERskZnPRcQW8P/bu/vYquo7juPvrwUtMtZBaDexZsoi8lDaCkVtyhyMAY4RmUwwKkacRjEw/lBxbpqggIs4qQwxajeJy+JDEAWmDkGUGsUhlMmDIIIPVZkKyJBakNKW7/64P0uFFlosnNtzP6/khHPPPed3vufcT8j9nXP6u2xvYLVLgBXuXhm2WQQUAod1kNy9BCiBxCh2LVG/iIiIHJ1GphORuInqEbt/AleH+auBhQ2s8zHwMzNrY2ZtSQzQoEfsRERaubS0NPLz8+nVqxd5eXnMmDGDAwcOHHGb8vJycnJyACgrK2PixInHtO+ZM2eyd+/eY9pWRERSQ1SDNNwDzDWza4GPgNEAZlYAjHP364B5wM+B9SQGbHjR3Z+LqF4RkVhqzm/YNEVT7ia0a9eubjCD7du3c8UVV1BRUcFdd93VpH0UFBRQUHDYz1Y0ycyZMxkzZgynnnrqMW0vIiLxF8kdJHff6e6D3P1sd/+Fu/8vLC8LnSPcvdbdb3D3Hu7e091viqJWERE5frKysigpKWH27Nm4O7W1tUyaNIl+/fqRm5vLI488ctg2paWlDB+e6NhVVlZyzTXX0Lt3b3Jzc3nmmWcAuPHGGykoKKBXr15MnjwZgFmzZvHpp58ycOBABg4cCMCSJUsoLCykT58+jBo1isrKSgBuu+02evbsSW5uLrfccgsATz/9NDk5OeTl5XHhhRcCNFpvaWkpAwYM4NJLL6V79+5ceeWV6Gf8RERah6juIImIiADQtWtXamtr2b59OwsXLiQjI4NVq1ZRVVVFUVERQ4YMwcwa3Hbq1KlkZGSwfv16AHbtSvzm+N13302nTp2ora1l0KBBrFu3jokTJ1JcXMyyZcvo3LkzX3zxBdOmTWPp0qW0b9+e6dOnU1xczPjx45k/fz6bNm3CzPjyyy8BmDJlCosXL+b000+vW/boo482WC/AW2+9xYYNG+jSpQtFRUUsX76c/v37H+/TKSIi35E6SCIikjSWLFnCunXrmDdvHgC7d+9my5YtdOvWrcH1ly5dylNPPVX3umPHjgDMnTuXkpISampq+Oyzz9i4cSO5ubnf2nbFihVs3LiRoqIiAPbv309hYSEZGRmkp6dz7bXXMnz48Lq7VUVFRYwdO5bRo0czcuTII9Z78sknc95555GdnRiINT8/n/LycnWQRERaAXWQREQkUh988AFpaWlkZWXh7jzwwAMMHTr0W+uUl5c3ub0PP/yQ++67j1WrVtGxY0fGjh3Lvn37DlvP3Rk8eDBPPvnkYe+tXLmSl19+mXnz5jF79mxeeeUVHn74Yd58801eeOEF+vbty+rVqxutt7S0lFNOOaXudVpaGjU1NU0+BhERiU5Uo9iJiIiwY8cOxo0bx4QJEzAzhg4dykMPPUR1dTUAmzdvZs+ePY1uP3jwYB588MG617t27aKiooL27duTkZHBtm3bWLRoUd37HTp04KuvvgLgggsuYPny5bz33nsA7Nmzh82bN1NZWcnu3bsZNmwY999/P2vXrgXg/fff5/zzz2fKlClkZmbyySefNLteERFJfrqDJCIiJ9TXX39Nfn4+1dXVtGnThquuuoqbbkqMw3PddddRXl5Onz59cHcyMzNZsGBBo23dcccdjB8/npycHNLS0pg8eTIjR47k3HPPpXv37pxxxhl1j9ABXH/99Vx00UV06dKFZcuW8dhjj3H55ZdTVVUFwLRp0+jQoQMjRoxg3759uDvFxcUATJo0iS1btuDuDBo0iLy8PHJzc5tVr4iIJD+L26g6BQUFXlZWFnUZIiJJ6Z133qFHjx5RlyEnkD5zEZGGmdlqdz/sdyP0iJ2IiIiIiEigDpKIiIiIiEigDpKIiIiIiEigDpKISIqJ29+eSuP0WYuINJ86SCIiKSQ9PZ2dO3fqi3MKcHd27txJenp61KWIiLQqGuZbRCSFZGdns3XrVnbs2BF1KXICpKenk52dHXUZIiKtijpIIiIppG3btpx11llRlyEiIpK09IidiIiIiIhIoA6SiIiIiIhIoA6SiIiIiIhIYHEbycjMdgAfRV1HEugMfBF1ERI55UBAOZAE5UBAOZCDlAX4sbtnHrowdh0kSTCzMncviLoOiZZyIKAcSIJyIKAcyEHKQuP0iJ2IiIiIiEigDpKIiIiIiEigDlJ8lURdgCQF5UBAOZAE5UBAOZCDlIVG6G+QREREREREAt1BEhERERERCdRBOo7MrNbM1pjZBjNba2Y3m9lJ4b0CM5sVUV1vtFA7o8KxHTAzjYLSiBTIwZ/NbJOZrTOz+Wb2g5ZoN45SIAtTQw7WmNkSM+vSEu3GTdxzUK+9m83MzaxzS7YbF3HPgZndaWb/Dce4xsyGtUS7cRP3HIS2fhe+J2wws3tbqt3jSY/YHUdmVunu3wvzWcATwHJ3nxxtZS3DzHoAB4BHgFvcvSzikpJSCuRgCPCKu9eY2XQAd/99xGUlpRTIwvfdvSLMTwR6uvu4iMtKOnHPAYCZnQH8DegO9HX3VP+tlcPEPQdmdidQ6e73RV1LMkuBHAwEbgd+5e5VZpbl7tujrutodAfpBAlhuB6YYAkDzOx5qLvK8ncze83MPjKzkWZ2r5mtN7MXzaxtWK+vmb1qZqvNbLGZnRaWl5rZdDNbaWabzeynYXmvsGxNuKp7dlheGf61cPX/7bCvy8LyAaHNeaHH/7iZWQPH9I67v3sizl9cxDQHS9y9JrxcAWQf37MYDzHNQkW9l+0BXYE7ijjmILgfuBVloElinANphpjm4EbgHnevqneMyc/dNR2nicSVk0OXfQn8EBgAPB+W3Qm8DrQF8oC9wC/De/OBX4f33gAyw/LLgDlhvhSYEeaHAUvD/APAlWH+ZKBd/bqA3wAvAWmhpo+B00Jtu0l80T0J+DfQ/wjHWQoURH2+k3VKlRyEtp4DxkR9zpN1SoUsAHcDnwBvf1ObptTKATAC+EuYLwc6R33Ok3FKgRzcGT7/dcAcoGPU5zwZpxTIwRrgLuBN4FWgX9TnvClTGyRZLHL3ajNbTyKEL4bl64EzgXOAHOCl0EFPAz6rt/2z4d/VYX1IhPV2M8sGnnX3LYfssz/wpLvXAtvM7FWgH1ABrHT3rQBmtia0+XqLHKkcSavNgZndDtQAjzf7qKUhrTIL7n572McfgAlALB4TiVCryoGZnQr8ERjynY5aDtWqchA8BEwlcRdxKjAD+O0xHLsc1Bpz0AboBFwQtptrZl099J6SlR6xO4HMrCtQCzR0e/GbW48HgOp6wTlAIlwGbHD3/DD1dvchh24f2m8T2noCuBj4GviXmf28GeVW1Zuva1O+uzjmwMzGAsNJXIVK6v/0kkkcs1DPx+7z6wAAAb5JREFU4ySuPMpRxCwHPwHOAtaaWTmJq8v/MbMfNWMfKSlmOcDdt7l7baj5r8B5zWg/ZcUtB8BWEh0vd/eVodakH7hFHaQTxMwygYeB2cf4BfJdINPMCkN7bc2s11H22RX4wN1nAQuB3ENWeQ24zMzSQn0XAiuPoTZpojjmwMwuIvG3Bhe7+96mH0pqi2kWzq73cgSwqanbpqq45cDd17t7lruf6e5nkvhy1MfdP2/WUaWYuOUgtH9avZeXkHjsVo4gjjkAFgADw766kXiML+kHbdFdgeOrXbjl2JbEo0f/AIqPpSF3329mlwKzzCyDxGc3E9hwhM1GA1eZWTXwOfCnQ96fDxQCa0ncAr/V3T83s+5NqcnMLiHx7Gom8IKZrXH3oc05rhQR6xwAs4FTOHhLf4Vr5LLGxD0L95jZOSSuEH4EKAcNi3sOpGninoN7zSw/bFsO3NDU40kxcc/BHGCOmb0N7Aeubg1PmmiYbxERERERkUCP2ImIiIiIiATqIImIiIiIiATqIImIiIiIiATqIImIiIiIiATqIImIiIiIiATqIImIiIiIiATqIImIiIiIiATqIImIiIiIiAT/B6VrFHZ1yEROAAAAAElFTkSuQmCC
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
      <td>-0.8287</td>
      <td>0.5505</td>
      <td>-3.0821</td>
      <td>-1.8707</td>
      <td>1.8684</td>
      <td>0.1746</td>
    </tr>
    <tr>
      <th>1</th>
      <td>1.4913</td>
      <td>-0.6265</td>
      <td>0.7519</td>
      <td>-0.9151</td>
      <td>-1.6855</td>
      <td>0.7045</td>
    </tr>
    <tr>
      <th>2</th>
      <td>0.6389</td>
      <td>1.1356</td>
      <td>0.4291</td>
      <td>-1.3060</td>
      <td>1.1482</td>
      <td>-0.1104</td>
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
      <td>-0.8287</td>
      <td>0.5505</td>
    </tr>
    <tr>
      <th>1</th>
      <td>1.4913</td>
      <td>-0.6265</td>
    </tr>
    <tr>
      <th>2</th>
      <td>0.6389</td>
      <td>1.1356</td>
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
<pre>&lt;matplotlib.axes._subplots.AxesSubplot at 0x7f2b81dc5090&gt;</pre>
</div>

</div>

<div class="jp-OutputArea-child">



<div class="jp-RenderedImage jp-OutputArea-output ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA5YAAAH2CAYAAAALYBMNAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADh0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uMy4yLjIsIGh0dHA6Ly9tYXRwbG90bGliLm9yZy+WH4yJAAAgAElEQVR4nOzdeXhU5dk/8O9NIEASwmLYIaCyqFA3QBYRwZXXViUqVot71bpi0VoL2koriku1Vq2+FuvWUjcQfX/F3YKKS5SgoogLCkgkAmHNBgnJ8/vjnpM5mZyZzMyZmXNm8v1cV67JnDNz5pkzz5l57mcVYwyIiIiIiIiI4tXG6wQQERERERFRemNgSURERERERK4wsCQiIiIiIiJXGFgSERERERGRKwwsiYiIiIiIyBUGlkREREREROQKA0siIg+JyAUiYmx/FSLyqYhcJSJtQx7bTkSuEJF3RWSHiOwRkbUi8qiIHJ7g9AxMxPH8QEQeF5F1tvsDRWS2iOzn8Nh1IvKvlCaw6esbEZkdx/MmBp47MfGpanyNJucxwuN6icj/ici2QJp+nYS0XCAiFyX6uOkimdepiBwauD66OeyLK38SUevQtuWHEBFRCkwFUAogP/D//QB6APgDAIhILoCXAYwC8L8AbgNQCWAQgHMAvAmga8pTnR5uAfBX2/2BAG4GsAzAd14kKIKx0HwQqxWB536R2OTE5Q8AjgZwAYAyAOuS8BoXQMswjybh2OlgMfTzLkvCsQ+FXh//ArAtZF+8+ZOIWgEGlkRE/vCJMWZN4P/XRGQQgGsQCCyhgdFoABONMe/bnvcWgH+ISFHqkppejDHfep2GlohIe2PMHmPMB/E83xizC0Bcz02CAwF8aoxZ5HVCYiEi7QDsNcYYj16/vTFmTzSPNcZsAbAlyUlyel2/5DEi8iF2hSUi8qePAOSLSA8R6Q3gfADzQoLKRi0V4gPdGEtFZJyIfCQiuwPdPq9uKSEicpaI/FdEtohIpYh8LCLnOzzOiMgcEZke6KJbISJvicgwh8eeJiIfiEh1oFvvcyJS2EI6rgs8Ptu2bWHgdY+zbbtERPaKSL7tva8L/D8RwJLAQ1+3dUGe6PCeV4tIlYgsF5HxLZ2nwPMmi8j7IlIjIjtF5AURGRrymKUiskxETg6cyz0ArrCdw9khjz9bRL4MfGaficgpgWMstT2mWVdY2+scJyIrAufu89BKCBEZJCL/DHxmNSLynYg8JCIxtYAHuhgbABMBHGU7twMD+/cVkfmBfLRHRD6JJy2B9300gCNtr7E0sG92IA2haXPqDm1Eu5bfKSIbAewB0CWwP+b8aaUtcM5PDZzrPYHP7syQx80OvP5wEXlVRCoBPBvY11tEnhSR8sDzV4rIOSHPd+wKKyKXinal3x14/j8kpEuriLQVkRtE5IvA47aIyCsicoCIXADgscBDv3H4DJ3yZyx5vqW8OEREFonI5kDavg+cezaEEKUBBpZERP60L4B6aHfXSdAeJv/n8pj5AJ4B8ASAKQCWArgvUJiMZD8ACwBMCzzv/wF4REQuc3jsOQB+Cm1tvRBAIYAX7QXDwPMWQrttngHgVwCGA3hLRDpFSMcSAB0BjAkcR6BBTA2AY2yPOwZASaAVL9QKAFcG/p8O7do3NrDdchSA6wD8HsDPAWQB+I+IdImQNojIZGgXxcrA8y4PvK9lItI35OFDANwH7fJ8IrQrs9MxjwcwH8CXAE4D8GcA9waeH439oa3d9wSeXwbgOdEWcUsfABsA/DqQlj8BOBbAS1G+hqUMei5XAvgYwXNbJiL9ARQDOATADACnQM/5QhE5Jca0XBE4/krba1wRY1otN0LP5aUAigDsdpE/LYOgn+3d0HO+BsDTIjLJ4bEvQnsdnALgL6Jd3t8C8D8AZkGvt88A/FNELo30oiJyO4C/AXgjcLzrAUwG8LKIZNke+jSAW6HndAqASwLvtTc0/84JPG4qbJ9hmNeMJc9HkxcXA+gbOM6JAH4HDfhZXiVKB8YY/vGPf/zjn0d/0LFiBsBQaPDYFVqQrQfwQuAxN1iPcfE6jweOcVbI9tcBrAcgIekZGOY4bQLpnAft7mjfZwB8A6CdbdsZge3jAvfzAOwE8GjIc/cFUAvg1xHeQxvomK+bA/cPBdAALai+b3tcGYDbQ977Otv9iYE0HefwGusAbAfQ1bZtZODxv2jhHC8PvP+2Ie+rDsA9tm1LA+k+1OEYBsBs2/33AHxufT6BbSMCj1vq8J4mhrxOHYDBtm09AnlrVoT30RbA+MDxDgt3HiM8f5k9bYFt/4B23dzHIf99EkdalgJY5vD42QBMmPxvzwMDA8dcEXJu486ftnQZAGNs27KgFQPvhKYTwDUhz78q9HMMbH8DwGYAWU7XaeD91AP4Q8jzjgw8bkrg/jGB+9MjvAfr2IOiyJ+x5PmIeRFAQeD4p7SUx/jHP/758481QERE/vAltOC1DcCD0FaqRM96WQ9tibF7GtqqGNq60EhEBovIUyLyQyCNdQAuhgbDoV43xtTZ7n8WuLW6EY6FtpzOD3TJaxtozdwAPQcTwqXDGNMAbc2xWiePgbZaPQdgpIh0EpGDAPRCsLtrPN43xmyP8B6aCbQ0HQ7gGWPMXlua1wJ4F9p1026dMeaTSIkItDKNBLDQGNPYvdMYUwJgbTRvBMA3xphvbM/dDA1QGt+LiGSLyKxAl80a6Of7TmC302ccj8nQFrKdIZ/7qwAOkWC35VSkxe4F+7mFi/xps8HYxiIaY+qhefQIEQktd4V2YZ8A4AdjzNKQ7f8C0B3AQWFe83hoxUtouosBVNjSfQI0eJsXxfuIKI4831Je3AqdTOt20e7sg92mkYhSi33WiYj8oQg622IFgPXGmN22fRsCtwMAfOXiNbaHBH0AsClw2xcOsz2KSB60Vaka2i3tW2jLzeVwDnxDZ5G0JiPpELjtEbh9I1wawyU+YAmAu0SkI7SL8BLoeNTd0C6sVmvJshaOE0mT92CM2aO9bhvfg5OuAATOXQZ/hH52dtHM5lkAoB208B1qk8M2J6GfB6Cfif29zAVwNbTb6XvQPNgPwPOI/J5j0QPAeYE/J/sA2JWitNiFfg5u8yfg/NlsApANDQ7t+0Nfv5vDNkDzkLXfiZXuNWH272O73WaMqQnzuFjEmucj5kVjjAl0/Z4NzQf7iMhaAHcZYx5KQHqJKMkYWBIR+cPnJjgrbKil0NbGkwG85uI1uopIu5Dgsmfg9ocwzxkLLSAeZYxpDNZcTKaxNXB7AYBVDvsrWnj+EmgBfULg7+/GmL0i8g60BXNfAB8aY6riTF+8tkNbgno57OuF5oXqaGYeLYcGyT0c9vUE8H0sCYzgLABPGmOssXVWhUIibYW2PN4RZv/GBKVld+A52caYWtv2fcI8PvRzcJs/geA1FbqtFs1ncg19/W1wbpntZdvvxEr3CXAOfq395QC6iUjHBASXseb5FhljvgNwXmD89CHQrsEPisg6Y8zLbhJLRMnHrrBERD5njNkIHSN2qYiMdXqMiEyJ4lBZAE4P2XYWNEAJF1jmBG4bg1HRGTpPjeL1nFitUIOMMcsd/lpqkf0cWji/HoA10QkA/Bc6ycvRaLkbrNWK2jGud+AgEMiWAJhqnyhFRAYAGAetHIj1mPXQMWynBwra1jFHQAPoRMmB7fMNuDCBxweAVwAcDGBVmM/d+kyiTcseOH9+6wO3w60NgUmXxkWZTrf5EwD6i8gY2+tnQSfC+TDQnTuStwD0E5EjQ7b/AtpyHW6d0teh43YLw6Tb6jr9GrSV8eIIaYjq+khGnrcd2wS6il8b2DQ80uOJyB/YYklElB5+DZ298k0R+V9oV71K6Iyt06Bj8V5o4RgVAO4UkQLohBtnAzgOwAUh48zs3oN2UfybiNwMDeZugrZ8dI71TRhjdonI9YHjdQfwMnSylL7QoHCpMebfEZ5vLS0xFcBHJjjz6xIAdwX+/28LyfgawF4AF4nINmhB+itjTDStUZH8Hjqr5X9E5EHoRDB/hL6/u+M85s3QYGCRiPwd2j12NrSrYUtBSrReAXC+iHwG7Up5GqIPxKL1BwAfAnhbRB6ATpLUFRow7GeMsbpVR5uWLwBcISI/h3bPrggEfVZ+mhfIr+0B/BZ6rbTIbf4M2ATgmcDrb4F2Gx8SuG3J49AZlZ8XkRuh3dOnQcdQ/ipQ2eCU7m9F5A4ADwSW+ngL2nrbP/DcR4wxS4wxS0RkIYB7AjP1/hfa3XoCgMWBsZ1W8HqliDwBDfRXhrQAWxKW50XkYOissc9AP/ssaMvxXtiuaRHZC+AJY8wvYzk+ESUfWyyJiNKAMaYS2iJ3PXS5jaehweXN0Faa0IkynOyCtlCeD13mYBJ0VsonIrzuFuj4zyzokiNzATwCnUwk3vfyMHQ5hKEA/gmd1GU2tLIz4oQ2AVaLpD2A/BjaNW8PAMe1Pm2vvxXaxe4QaAH8I+hMq64YY16BLrXSBbom4f8CWA1gfKDVOZ5jvg4NLA6ETvRyA3QplB+hhfdEuBq6lM2t0EJ9J2ilQ8IYY76HVn58CuA2aAvbQ9B8a/8co03LHdAlWh6Bfn4PB15nB4CfQYPuZ6H59X7EMJlTAvLnmsD7+A10bOhgAGcbY1pMQ6AV8GhoZcLt0Ov0EADnGmP+7vQU23NnQZdNmQB97y9C88t2aEWS5azA+5kCPdePAhiGwFhJY8yngf0nQ8cqfwRdBsYpvYnM8z9Ce09cG0jXU4HX/VlgwipLVuCPiHzGml6eiIgymIg8Dl1eo5/XaSF3RKQfNHi51Rhzi9fpoaBAa3pbY8z4JL/OdGjrXqdApRMRkefYFZaIiMinArPf3gNtnS6Hdn3+LXSW3kc8TBp5ILDEx3hor4NVDCqJyE8YWBIREflXPXSGzQegM5tWQWdXnWqMiWbJEsosg6FdXD+Djj8kIvINdoUlIiIiIiIiVzh5DxEREREREbnCwJKIiIiIiIhc4RhLAgAUFBSYgQMHep0MIiIiIiLyqZKSknJjTHenfQwsCQAwcOBALF++3OtkEBERERGRT4nI+nD72BWWiIiIiIiIXGFgSURERERERK4wsCQiIiIiIiJXGFgSERERERGRKwwsiYiIiIiIyBUGlkREREREROQKA0siIiIiIiJyhYElERERERERucLAkoiIiIiIiFxhYElERERERESuMLAkIiIiIiIiVxhYEhERERERkSsMLImIiIiIiMgVBpZE1GpVVQGbN+stEREREcWvrdcJICJKtfJyYNEi4IMPgtvGjAGKioCCAu/SRURERJSuGFgSUatSXg7MmQNUVgJ9+gBZWUB9PVBcDKxaBdx0E4NLIiIiolixKywRtSqLFmlQ2a+fBpWA3vbrp9sXLfI2fURERETpiIElEbUaVVXa/bV3b+f9vXvr/urq1KaLiIiIKN0xsCSiVsOapMdqqQxlba+sTE16iIiIiDIFA0siajVyc/W2vt55v7U9Ly816SEiIiLKFAwsiajVyM3V2V/Lypz3l5Xp/pyc1KaLiIiIKN0xsCSiVqWoSFskS0uDLZT19Xo/L0/3ExEREVFsuNwIEbUqBQW6pEjoOpZjxwJTpnCpESIiIqJ4MLAkolanoAC45BJg2jSdqCcvj91fiYiIiNxgYElErVZODgNKIiIiokTgGEsiIiIiIiJyhYElERERERERucLAkoiIiIiIiFxhYElERERERESuMLAkIiIiIiIiVxhYEhERERERkSsMLImIiIiIiMgVBpZERERERETkCgNLIiIiIiIicoWBJREREREREbnCwJKIiIiIiIhcYWBJRERERERErjCwJCIiIiIiIlcYWBIREREREZErDCyJiIiIiIjIFQaWRERERERE5AoDSyIiIiIiInKFgSURERERERG5wsCSiIiIiIiIXGFgSURERERERK4wsCQiIiIiIiJXGFgSERERERGRKwwsiYiIiIiIyBUGlkREREREROQKA0siIiIiIiJyhYElERERERERucLAkoiIiIiIiFxhYElERERERESuMLAkIiIiIiIiVxhYEhERERERkSsMLImIiIiIiMgVBpYZTES6iMgCEflSRFaLyFiv00RERERERJmnrdcJoKT6K4BXjDFniEg2gByvE0RERERERJmHgWWGEpHOACYAuAAAjDG1AGq9TBMREREREWUmdoXNXPsC2ALgMRH5WEQeEZFcrxNFRERERESZh4Fl5moL4HAADxljDgNQBeB39geIyKUislxElm/ZssWLNBIRERERUQZgYJm5SgGUGmOKA/cXQAPNRsaYvxtjRhpjRnbv3j3lCSQiIiIioszAwDJDGWN+BLBBRIYGNh0L4AsPk0RERERERBmKk/dktqsBzA/MCPsdgAs9Tg8REREREWUgBpYZzBjzCYCRXqeDiIiIiIgyG7vCEhERERERkSsMLImIiIiIiMgVBpZERERERETkCgNLIiIiIiIicoWBJREREREREbnCwJKIiIiIiIhcYWBJRERERERErjCwJCIiIiIiIlcYWBIREREREZErDCyJiIiIiIjIFQaWRERERERE5AoDSyIiIiIiInKFgSURERERERG5wsCSiIiIiIiIXGFgSURERERERK4wsCQiIiIiIiJXGFgSERERERGRKwwsiYiIiIiIyBUGlkREREREROQKA0siIiIiIiJyhYElERERERERucLAkoiIiIiIiFxhYElERERERESuMLAkIiIiIiIiVxhYEhERESVBVRWwebPeEhFlurZeJ4CIiIgok5SXA4sWAR98ENw2ZgxQVAQUFHiXLiKiZGJgSURERJQg5eXAnDlAZSXQpw+QlQXU1wPFxcCqVcBNNzG4JKLMxK6wRERERAmyaJEGlf36aVAJ6G2/frp90SJv00dElCwMLImIiIgSoKpKu7/27u28v3dv3V9dndp0ERGlAgNLIiIiogSwJumxWipDWdsrK1OTHiKiVGJgSURERJQAubl6W1/vvN/anpeXmvQQEaUSA0siIiKiBMjN1dlfy8qc95eV6f6cnNSmi4goFRhYEhERESVIUZG2SJaWBlso6+v1fl6e7iciykRcboSIiIgoQQoKdEmR0HUsx44FpkzhUiNElLkYWBIRERElUEEBcMklwLRpOlFPXh67vxJR5mNgSURERJQEOTkMKImo9eAYSyIiIiIiInKF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FxGlDgNLIiJKOac1+N5++x8AgJ/+9Kfo3r07unTpgl27duG4446L+fiLFmnACgBWw2ZWFtC37xCUlr6Mv/3tU9x22xFhn//Pf/4THTp0wJIlS5Bja/r58ssvmz3W6j7rZPDgwXjllVdQWFiIAw88sMV0Z2VlYeLEiY3rYa5cuRIjRozAnDlzsHjx4sbH7bfffrj66qtx9dVXY/fu3TjxxBNx55134rrrrkOPHj0wePBgfP311xgzZgxbGjNQQYG2AIZeQ2PHAlOmpL5lkBMKUSazV4BaXdHJGcdYEhFRSlld5oqLtSDat289vvjiN1izZhkGDjwJQ4ceiTZt2mDatGn48MMPHZflABB2jKFVyO3Ro/m+n/zkFwCAxx+fhR07apvtt1rmsrKyICJNWiaNMZgzZ06z51iB2zar763NueeeCwCYNWsW6h0GxVndYAGg3GEg2gEHHICOHTs2Hnvnzp3NuuV26NChMWi1uuied955aGhowMyZM5sdM/R1KT0VFGgL4P33A3Pn6u3FF3vT3dSqxAnX6G1t51BdSiccMxw7tlgSEVHKrFixAqtX/wvffgvk5lbg88+/wpdfvoCdO9dj//1PwLhx/27sMnfrrbfi3XffxZlnnokzzzwTY8aMQXZ2NtavX4+XXnoJI0aMwOOPP97sNSIVcvv2PQJHHnkD3n33DowZczimTfs5evXqhbVr12LBggX48MMP0aVLF5xxxhlYuHAhjjnmGJx33nmoq6vDCy+8gOrq6mbH3GeffTBo0CA8PX8+9h84ED379EFubi5OPvlkjBo1CrNnz8bs2bNx6KGHYurUqejTpw/KyspQUlKCl156CbW1GuBecsklKC0txQknnIABAwagpqYGzzzzDCoqKnDeeecB0El7Lr30Upx++ukYOnQo8vLyUFJSgkceeQSjR4/G0KFDAaBxiZEHHngAK1aswM9+9jMUFBSgtLQU77//PtasWRPVWqDkfzk53rcC2icUcrruvJxQiCgeHDMcHwaWRESUMk899RSApyDSBtnZecjP74eBA4/G8OFnY9CgyaivD3aZ69y5M959913cfffdePbZZ/Hiiy+ibdu26NevH8aPH4+LL77Y8TVamjVz0qTb0bbtIdiz5wHceeedaGhoQP/+/XHSSSc1dns966yzUFFRgb/85S/4zW9+g65du+Lkk0/G7bff3jih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
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
Cluster Center: [[-0.87280724 -0.69164936]
 [ 1.05859446  0.83887501]]
Sample predictions: [0 1 1]
Silhouette score is: 0.34381530000699684 

Number of clusters: 3
Cluster Center: [[-1.48202701  0.88470993]
 [ 1.34653902  0.59950703]
 [-0.28518675 -1.39068133]]
Sample predictions: [0 1 1]
Silhouette score is: 0.37402458569811653 

Number of clusters: 4
Cluster Center: [[-1.38177145 -0.28928555]
 [ 1.36300869  0.56912663]
 [ 0.07926249 -1.68565466]
 [-0.86396049  1.58239513]]
Sample predictions: [0 1 1]
Silhouette score is: 0.3423918950829098 

Number of clusters: 5
Cluster Center: [[-0.51714593 -0.80755815]
 [ 1.41507697  0.49263515]
 [ 0.05760667 -1.93252329]
 [-0.51031952  1.50011111]
 [-2.06899423  0.19292207]]
Sample predictions: [0 1 1]
Silhouette score is: 0.2789704564525373 

Number of clusters: 6
Cluster Center: [[-0.32639902 -0.81280779]
 [ 0.72409947  1.16296883]
 [-0.0758322  -2.20922097]
 [-1.29757308  1.69437873]
 [-1.92180945  0.15926712]
 [ 1.70192746 -0.00657148]]
Sample predictions: [1 5 1]
Silhouette score is: 0.28222890050841776 

Scores: {2: 0.34381530000699684, 3: 0.37402458569811653, 4: 0.3423918950829098, 5: 0.2789704564525373, 6: 0.28222890050841776}
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
<pre>Cluster Center: [[-0.87280724 -0.69164936]
 [ 1.05859446  0.83887501]]
Sample predictions: [0 1 1]
Silhouette score is: 0.34381530000699684 

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
<img src="data:image/png;base64,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kWbR29vLihUr6OnpibspDWno0KGMGTOGtra2oh+j4EdEREREJAYrVqygvb2d8ePHY2ZxN6ehuDuvvPIKK1asYMKECUU/TsPeRERERERi0NPTw5577qnApwxmxp577lly1kzBj4iIiIhITBT4lK+cY6fgR0RERESkRa1Zs4YzzjiDAw44gKlTp3Lcccfx7LPP8uKLL3LYYYeVtc8bb7yRVatWVdQud+fCCy/kwAMP5J3vfCePPfZYRftLUfAjIiIiItKC3J2TTz6Zo446iueff57Fixdz+eWXs3bt2or2W07ws3Xr1n6/33PPPTz33HM899xzXHfddXzyk5+sqE0pCn5ERERERBpB12qYdSlMOz387Fpd0e5++9vf0tbWxgUXXLD9tilTpnDkkUf22+7GG2/kU5/61PbfTzjhBB544AG2bdvGjBkzOOyww5g8eTJXXnklCxcupLOzk7POOovDDz+cN954g8WLF/PBD36QqVOncuyxx7J6dWj3UUcdxUUXXURHRwff+c53+j3nHXfcwbnnnouZccQRR7Bhw4btj6uEqr2JiIiIiCRd12qYcjJs3gK9W2HJcpj3c3j8Nhg7uqxdLlu2jKlTp5bdpCVLlrBy5UqWLVsGwIYNGxgxYgTf+973uOKKK+jo6KC3t5dZs2Zxxx13MGrUKG655RYuvvhifvjDHwLw1ltv0dnZOWDfK1euZOzYsdt/HzNmDCtXrmT06PJea4qCHxERERGRpJtz/Y7AB8LPzVvC7Vd/MZYm7b///rzwwgvMmjWL448/nmOOOWbANs888wzLli3j6KOPBmDbtm39ApjTTz+9bu0FBT8iIiIiIsm3aOmOwCeldys8srTsXU6aNImFCxcW3G7IkCH09fVt/z1VXnr33Xfn8ccf59577+Waa65hwYIF2zM6Ke7OpEmTeOihh7Lue9ddd816+3777UdXV9f231esWMF+++1XsK2FaM6PiIiIiEjSTZ8MbRl5i7YhMG1y2bv88Ic/zJtvvsl11123/bYnnniCBx98sN9248ePZ8mSJfT19dHV1cUjjzwCwPr16+nr6+OUU07h0ksv3V6Rrb29ne7ubgAOOeQQ1q1btz346e3t5cknnyzYtpNOOokf//jHuDsPP/www4cPr3jIGyjzIyIiIiKSfLPPD3N8UkPf2obAsF3C7WUyM2677TYuuugivvnNbzJ06FDGjx/PVVdd1W+797///UyYMIFDDz2UiRMn8u53vxsI83LOO++87Vmhyy+/HIAZM2ZwwQUXsPPOO/PQQw+xcOFCLrzwQjZu3MjWrVu56KKLmDRpUt62HXfccdx9990ceOCB7LLLLtxwww1lv85+r9ndq7Kjeujo6PBsE6JEmlZXD8x5CRZ1w/R2mD0Oxg6Nu1UiIiJSBcuXL2fixInFP6BrdZjj88jSkPGZfX7ZxQ6aRbZjaGaL3b0j2/bK/IgkVVcPTOmEzVuhF1jSDfNehsc7FACJiIi0orGjYytu0Cw050ckqea8tCPwgbkWRqMAACAASURBVPBz87Zwu4iIiIiUTMGPSFIt6t4R+KT0OjzSHUtzRERERBqdgh+RpJreDm0Zt7UZTGuPpTkiIiIijU7Bj0hSzR4Hw4bsCIDaDIYNDreLiIiISMkU/Igk1dihobjBzH1DtmfmaBU7EBEREamAgh+RJBs7FK4+GBZNDT8V+IiIiEgVrVmzhjPOOIMDDjiAqVOnctxxx/Hss8/y4osvcthhh5W1zxtvvJFVq1ZV1K6nn36a9773vey0005cccUVFe0rnYIfEREREZEW5O6cfPLJHHXUUTz//PMsXryYyy+/nLVr11a033KCn61bt/b7fY899uC73/0un/3sZytqSyYFPyIiIiIijaCrB2Y9C9MWh59dPRXt7re//S1tbW1ccMEF22+bMmUKRx55ZL/tbrzxRj71qU9t//2EE07ggQceYNu2bcyYMYPDDjuMyZMnc+WVV7Jw4UI6Ozs566yzOPzww3njjTdYvHgxH/zgB5k6dSrHHnssq1evBuCoo47ioosuoqOjg+985zv9nnOvvfbiPe95D21tmdWfKqNFTkVEREREkq4Gi58vW7aMqVOnlt2kJUuWsHLlSpYtWwbAhg0bGDFiBN/73ve44oor6OjooLe3l1mzZnHHHXcwatQobrnlFi6++GJ++MMfAvDWW2/R2dlZdhtKpeBHRERERCTp8i1+fvXBsTRp//3354UXXmDWrFkcf/zxHHPMMQO2eeaZZ1i2bBlHH300ANu2bWP06NHb7z/99NPr1l5Q8CMiIiIiknw1WPx80qRJLFy4sOB2Q4YMoa+vb/vvPT1huN3uu+/O448/zr333ss111zDggULtmd0UtydSZMm8dBDD2Xd96677lp2+8uhOT8iIiIiIklXg8XPP/zhD/Pmm29y3XXXbb/tiSee4MEHH+y33fjx41myZAl9fX10dXXxyCOPALB+/Xr6+vo45ZRTuPTSS3nssccAaG9vp7s7BGWHHHII69at2x789Pb28uSTT5bd5kop8yMiIiIiknSzx4U5Pqmhb1VY/NzMuO2227jooov45je/ydChQxk/fjxXXXVVv+3e//73M2HCBA499FAmTpzIu9/9bgBWrlzJeeedtz0rdPnllwMwY8YMLrjgAnbeeWceeughFi5cyIUXXsjGjRvZunUrF110EZMmTcrbtjVr1tDR0cGmTZsYNGgQV111FU899RS77bZb2a8XwNy9oh3UU0dHh9dzQpSIiIiISK0sX76ciRMnFv+Arp4wx+eR7pDxmT2u5dcAzHYMzWyxu3dk216ZHxERERGRRpBa/FzKpjk/IiIiIiLSEhT8iIiIiIhIS1DwIyIiIiISk0aaf5805Rw7BT8iIiIiIjEYOnQor7zyigKgMrg7r7zyCkOHllbwQQUPRERERERiMGbMGFasWMG6devibkpDGjp0KGPGjCnpMQp+RERERERi0NbWxoQJE+JuRkvRsDcREREREWkJCn5ERERERKQlKPgREREREZGWoOBHRERERERagoIfERERERFpCQp+RERERESkJSj4ERERERGRlqDgR0REREREWoKCHxERERERaQkKfkREREREpCUo+BERERERkZag4EdERERERFqCgh8REREREWkJCn5ERERERKQlKPgREREREZGWoOBHRERERERagoIfERERERFpCQp+RERERESkJcQa/JjZCDNbaGZPm9lyM3tvnO0REREREZHmNSTm5/8O8Et3/5iZvQ3YJeb2iIiIiIhIk4ot+DGz4cBfATMA3P0t4K242iMiIiIiIs0tzmFvE4B1wA1m9kcz+x8z2zXG9oiIiIiISBOLM/gZArwb+G93fxfwOvDvmRuZ2SfMrNPMOtetW1fvNoqIiIiISJOIM/hZAaxw90XR7wsJwVA/7n6du3e4e8eoUaPq2kAREREREWkesQU/7r4G6DKzQ6Kb/hp4Kq72iIiIiIhIc4u72tssYF5U6e0F4LyY2yMiIiIiIk0q1uDH3ZcAHXG2QUREREREWkOsi5yKiIiIiIjUi4IfERERERFpCQp+RERERESkJSj4ERERERGRlqDgR0REREREWoKCHxERERERaQkKfkREREREpCUo+BERERERkZag4EdERERERFqCgh8REREREWkJCn5ERERERKQlKPgREREREZGWoOBHRERERERagoIfERERERFpCQp+RERERESkJSj4ERERERGRlqDgR0REREREWoKCHxERERERaQkKfkREREREpCUo+BERERERkZag4EdERERERFqCgh8REREREWkJCn5ERERERKQlKPgREREREZGWoOBHRERERERagoIfERERERFpCQp+REREWlFXD8x6FqYtDj+7euJukYhIzQ2JuwEiIiJSZ109MKUTNm+FXmBJN8x7GR7vgLFD426diEjNKPMjIiLSaua8tCPwgfBz87Zwu4hIE1PwIyIi0moWde8IfFJ6HR7pjqU5IiL1ouBHRESk1Uxvh7aM29oMprXH0hwRkXpR8CMiItJqZo+DYUN2BEBtBsMGh9tFRJqYgh8REZFWM3ZoKG4wc9+Q7Zk5WsUORKQlqNqbiIhIKxo7FK4+OO5WiIjUlTI/IiIiIiLSEhT8iIiIiIhIS1DwIyIiIiIiLUHBj4iIiIiItAQFPyIiIiIi0hIU/IiIiIiISEtQ8CMiIiIiIi1BwY+IiIiIiLQEBT8iIiIiItISFPyIiIiIiEhLUPAjIiIiIiItQcGPiIiIiIi0BAU/IiIiIiLSEhT8iIiIiIhIS1DwIyIiIiIiLUHBj4jEp6sHZj0L0xaHn109cbdIREREmtiQuBsgIi2qqwemdMLmrdALLOmGeS/D4x0wdmjcrRMREZEmpMyPiMRjzks7Ah8IPzdvC7fLQMqSiYiIVEyZHxGJx6LuHYFPSq/DI92xNCfRlCUTERGpCmV+RCQe09uhLeO2NoNp7bE0J9GUJRMREakKBT8iUrxqDr2aPQ6GDdkRALUZDBscbpf+lCUTERGpCg17E5HiVHvo1dih4bFzXgqd+GntIfDRMK6BpreH450eAClLJiIiUjIFPyJSnHxDr64+uLx9jh1a/mNbyexxIdBMHX9lyURERMoS+7A3MxtsZn80s5/H3RYRyUNDr+KTypLN3Ddke2aOVrEDERGRMiQh8/MvwHJgt7gbIiJ5aOhVvJQlExERqVismR8zGwMcD/xPnO0QkSKoQIGIiIg0uLiHvV0FzAb6Ym6HiBSioVciIiLS4GIb9mZmJwAvu/tiMzsqz3afAD4BMG6c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
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
      <td>5495.0</td>
      <td>4047.0</td>
      <td>6296.0</td>
      <td>1515.0</td>
      <td>4898.0</td>
      <td>1253.0</td>
    </tr>
    <tr>
      <th>Segment 1</th>
      <td>2232.0</td>
      <td>2971.0</td>
      <td>2339.0</td>
      <td>2558.0</td>
      <td>718.0</td>
      <td>2006.0</td>
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
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
      <td>509.000000</td>
    </tr>
    <tr>
      <th>mean</th>
      <td>8267.895874</td>
      <td>12131.147348</td>
      <td>8660.746562</td>
      <td>4514.172888</td>
      <td>5708.933202</td>
      <td>3597.620825</td>
    </tr>
    <tr>
      <th>std</th>
      <td>11421.044155</td>
      <td>47228.516675</td>
      <td>10598.063967</td>
      <td>6679.375003</td>
      <td>8782.276737</td>
      <td>5769.794855</td>
    </tr>
    <tr>
      <th>min</th>
      <td>25.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
      <td>3.000000</td>
    </tr>
    <tr>
      <th>25%</th>
      <td>1498.000000</td>
      <td>1375.000000</td>
      <td>1795.000000</td>
      <td>797.000000</td>
      <td>727.000000</td>
      <td>609.000000</td>
    </tr>
    <tr>
      <th>50%</th>
      <td>3613.000000</td>
      <td>3843.000000</td>
      <td>4692.000000</td>
      <td>1981.000000</td>
      <td>2157.000000</td>
      <td>1721.000000</td>
    </tr>
    <tr>
      <th>75%</th>
      <td>11009.000000</td>
      <td>10868.000000</td>
      <td>11442.000000</td>
      <td>5249.000000</td>
      <td>7005.000000</td>
      <td>4469.000000</td>
    </tr>
    <tr>
      <th>max</th>
      <td>92780.000000</td>
      <td>761843.000000</td>
      <td>92780.000000</td>
      <td>67298.000000</td>
      <td>76237.000000</td>
      <td>83861.000000</td>
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
<pre>Sample point 0 predicted to be in Cluster 0
Sample point 1 predicted to be in Cluster 1
Sample point 2 predicted to be in Cluster 1
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
</body>







</html>