<table border="1">
  <th>Web Scraping Mencari Informasi PDF
  <tr><td>
  <div id="cse" style="width: 80%;">Tunggu Sebentar....</div>
  <tr><td>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'id'});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var orderByOptions = {};
//    orderByOptions['keys'] = [{label: 'Relevance', key: ''},{label: 'Date', key: 'date'}];
// Dikembangkan Oleh http://takengonscript.blogspot.com
    customSearchOptions['enableOrderBy'] = true;
    customSearchOptions['orderByOptions'] = orderByOptions;  var customSearchControl = new google.search.CustomSearchControl(
      '005544282457005383017:xqqyhi-aurc', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.LARGE_RESULTSET);
    customSearchControl.draw('cse');
customSearchControl.setSearchStartingCallback(
this,
function(control, searcher, query) {
searcher.setQueryAddition("filetype:pdf OR filetype:PDF");
}
);
  }, true);
</script>
</table>