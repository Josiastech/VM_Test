(function($){
  $(document).ready(function(){
    var menu_element = Drupal.settings.single_page.menu_element;
    var basePath = Drupal.settings.basePath;
    var pathPrefix = Drupal.settings.pathPrefix;
    $(menu_element+" a").each(function(index) {
      var anchor = $(this).text();
      this.href = basePath + pathPrefix + "#single_page_anchor_" + index;
    });
  });
})(jQuery);
