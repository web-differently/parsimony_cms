<?php
\app::$request->page->addJSFile(BASE_PATH . 'lib/HTML5editor/HTML5editor.js');
\app::$request->page->addCSSFile(BASE_PATH . 'lib/HTML5editor/HTML5editor.css');
\app::$request->page->addJSFile(BASE_PATH . 'fields/field_wysiwyg/script.js');
?>
<div class="parsieditinline fieldwysiwyg" contenteditable="true" spellcheck="false" data-click="fieldwysiwyg" data-wysiwygplugins="<?php echo str_replace(',','","',$this->wysiwygModules); ?>" data-module="<?php echo $this->module; ?>" data-entity="<?php echo $this->entity; ?>" data-property="<?php echo $this->name; ?>" data-id="<?php echo $row->{$idName}; ?>"><?php echo $this; ?></div>