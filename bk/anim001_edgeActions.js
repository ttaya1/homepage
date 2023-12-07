
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTimelineAction(compId,symbolName,"Default Timeline","complete",function(sym,e){window.open("http://ksd-grp.jp/ksd/index.html","_self");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_SKIP}","click",function(sym,e){window.open("http://ksd-grp.jp/ksd/index.html","_self");});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-16666813");