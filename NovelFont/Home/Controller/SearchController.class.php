<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\BranchModel;

class SearchController extends Controller{
	/*跳转到展示搜索结果的页面，并把kWconditionord保存到Session中，方便候用*/
	public function toSearchResultPage(){
		if ('' != str_replace ( " ", "", $_GET['kWord'])) {
			$_SESSION['search']['kWord'] = $_GET['kWord'];
			$_SESSION['search']['type'] = $_GET['searchType'];
			$this->display('searchResultPage');
		}else {
			echo "请填写搜索关键字";
		}
	}
	
	public function search(){
		/*搜索结果包括以下几方面：
		 * 1.novel 的 name中包含此关键字
		 * 2.novel 的type中包含次关键字
		 * 3.author的name中包含此关键字
		 */
		$kWord = $_SESSION['search']['kWord'];
		//1
		if ('novelName'==$_SESSION['search']['type']){
			$branchModel = new BranchModel();
			$res = $branchModel->findByName($kWord);
			$this->ajaxReturn($res);
		//2
		}elseif ('novelType'==$_SESSION['search']['type']){
			$branchModel = new BranchModel();
			$res = $branchModel->findByType($kWord);
			$this->ajaxReturn($res);
		//3
		}else{
			$branchModel = new BranchModel();
			$res = $branchModel->findByAuthor($kWord);
			$this->ajaxReturn($res);
		}
	}
}