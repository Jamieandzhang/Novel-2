<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\ChapterModel;

class ChapterController extends Controller{
	//跳转到添加章节的页面
	public function toAddPage(){

		/*将branch的id保存到session中
		 *缺点：session污染
		 */
		$_SESSION['branch_id']=$_GET['branch_id'];
		$this->display();
	}
	/* 增加新的章节，需要前台传来：
	 * 1.该branch的id
	 * 2.该章节的名称
	 * 3.该章节的内容
	 */
	public function addChapter(){
		$data['branch_id'] = $_SESSION['branch_id'];
// 		echo $data['branch_id'];
		if ('' != str_replace ( " ", "", $_POST['chapterNum'])) {
			$data['number']=$_POST['chapterNum'];
		}
		if ('' != str_replace ( " ", "", $_POST['chapterName'])) {
			$data['name'] = $_POST['chapterName'];
		}
		if ('' != str_replace ( " ", "", $_POST['txt'])) {
			$data['txt'] = $_POST['txt'];
		}
		
		if (4 == count ( $data )){
			$chapter = new ChapterModel();
			$chapter->add($data);
			echo "恭喜你保存成功！！！";
		}else {
			echo '有未填写的字段，请填写完整！！！';
		}
	}
}