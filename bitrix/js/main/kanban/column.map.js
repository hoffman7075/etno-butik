{"version":3,"file":"column.min.js","sources":["column.js"],"names":["BX","namespace","Kanban","Column","options","Utils","isValidId","id","Error","this","name","color","data","Object","create","total","isTotalFrozen","canEdit","canSort","canRemove","canAddItem","droppable","setOptions","items","grid","page","layout","container","dragTarget","title","subTitle","subTitleAddButton","titleArrow","editForm","fillColorButton","titleTextBox","addColumnButton","editButton","removeButton","rectArea","dragColumnOffset","dragColumnIndex","dragTargetColumn","confirmDialog","textBoxTimeout","colorChanged","pagination","Pagination","DEFAULT_COLOR","prototype","getId","setName","setTotal","setColor","setData","boolOptions","forEach","boolOption","type","isBoolean","isValidColor","toLowerCase","getColor","setGrid","onCustomEvent","getGrid","getPagination","addItem","item","beforeItem","Item","setColumnId","index","util","array_search","splice","push","isCountable","incrementTotal","isRendered","render","getItems","getItemsCount","reduce","count","isVisible","getFirstItem","onlyVisible","i","length","getLastItem","getNextItemSibling","currentItem","getItem","itemIndex","getPreviousItemSibling","removeItem","itemToRemove","found","filter","decrementTotal","removeItems","cleanNode","isNotEmptyString","getName","getData","isPlainObject","getGridData","isEditable","canEditColumns","isSortable","canSortColumns","isRemovable","canRemoveColumns","canAddItems","getTotal","value","isNumber","Math","max","freezeTotal","unfreezeTotal","refreshTotal","renderTitle","hasLoading","getIndex","getColumnIndex","getTitleContainer","appendChild","canAddColumns","getAddColumnButton","getSubTitle","subTitleContent","renderSubTitle","isEmptyColumn","document","createDocumentFragment","renderLayout","columnContainer","getContainer","classList","isDroppable","adjust","adjustEmptyStub","titleBody","getDefaultTitleLayout","isDark","isDarkColor","nameInner","textContent","style","backgroundColor","background","customButtons","getCustomTitleButtons","isDomNode","isArray","attrs","className","children","info","getColumnTitle","getTotalItem","getEditButton","concat","getEditForm","events","click","switchToEditMode","bind","getRemoveButton","handleRemoveButtonClick","getTitleTextBox","getFillColorButton","placeholder","getMessage","blur","handleTextBoxBlur","keydown","handleTextBoxKeyDown","showColorPicker","disableDragging","add","focusTextBox","applyEditMode","trim","titleChanged","enableDragging","remove","event","setTimeout","stopTextBoxBlur","clearTimeout","focus","keyCode","showRemoveConfirmDialog","getColorPicker","open","colorPicker","ColorPicker","bindElement","onColorSelected","popupOptions","onPopupClose","substr","getConfirmDialog","PopupWindow","getRandomString","titleBar","content","width","autoHide","overlay","closeByEsc","closeIcon","draggable","restrict","buttons","PopupWindowButton","text","handleConfirmButtonClick","PopupWindowButtonLink","popupWindow","close","destroy","getButton","contains","addClassName","promise","getEventPromise","result","removeColumn","removeClassName","error","setContent","display","fulfill","show","handleAddColumnButtonClick","newColumn","addColumn","targetId","getNextColumnSibling","handleAddItemButtonClick","DraftItem","addToColumn","getHeader","getBody","makeDraggable","makeDroppable","header","body","data-id","data-type","wheel","delegate","blockPageScroll","getItemsContainer","getDragTarget","bodyContainer","scrollHeight","offsetHeight","mouseScroll","deltaY","detail","wheelDelta","scrollTop","preventDefault","clientHeight","onbxdragstart","onColumnDragStart","onbxdrag","onColumnDrag","onbxdragstop","onColumnDragStop","columnBody","onbxdestdraghover","onDragEnter","onbxdestdraghout","onDragLeave","onbxdestdragfinish","onDragDrop","onbxdestdragstop","onItemDragEnd","jsDD","registerDest","disableDropping","unregisterObject","registerObject","disableDest","enableDropping","enableDest","isDraggable","itemNode","x","y","draggableItem","getItemByElement","showDragTarget","getBodyContainer","hideDragTarget","DragEvent","setItem","setTargetColumn","isActionAllowed","success","moveItem","start_x","getRectArea","left","transform","columns","getColumns","columnWidth","columnIndex","column","columnRectArea","columnMiddle","middle","transition","resetRectArea","moveBackRight","moveBackLeft","moveColumn","removeProperty","pos","height","DraftColumn","apply","arguments","asyncEventStarted","addCustomEvent","onAddedToGrid","lastColorIndex","__proto__","constructor","disabled","targetColumn","getNextColor","defaultColors","getDefaultColors","timer","loadingInProgress","topButton","bottomButton","loader","init","getColumn","getTopButton","getBottomButton","getLoader","throttle","window","isTopVisible","isBottomVisible","top","offsetTop","showLoader","loadItems","onPromiseFulfilled","onPromiseRejected","hideLoader","processPromiseResult","reason","setRenderStatus","getPage","mouseenter","scrollUp","mouseleave","stopScroll","scrollDown","html","getDragMode","DragMode","ITEM","setInterval","refreshDestArea","clearInterval"],"mappings":"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"}