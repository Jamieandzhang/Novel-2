<?php
namespace Home\Controller;

use Think\Controller;

class SearchController extends Controller{
	/*跳转到展示搜索结果的页面，并把kWord保存到Session中，方便候用*/
	public function toSearchResultPage(){
		if ('' != str_replace ( " ", "", $_GET['kWord'])) {
			$_SESSION['search']['kWord'] = $_GET['kWord'];
		}
		$this->display('searchResultPage');
	}
	/*搜索结果包括以下几方面：
	 * 1.novel 的 name中包含此关键字
	 * 2.novel 的type中包含次关键字
	 * 3.author的name中包含此关键字
	 */
}