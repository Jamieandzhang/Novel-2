<?php
namespace Home\Model;

use Think\Model;

class ChapterModel extends Model{
	public function showChapters($branch_id){
		$where ['branch_id'] = $branch_id;
		$chapter = new Model ('chapter');
		return $chapter->where($where)->select();
	}
	public function showChapterById($chapterId){
		$where['id'] = $chapterId;
		$chapter = new Model('chapter');
		return $chapter->where($where)->select();
	}
}