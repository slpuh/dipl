<?php


class Blog
{
        const SHOW_BY_DEFAULT = 3;
	public static function getBlogItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM blog WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$blogItem = $result->fetch();
			return $blogItem;
		}

	}

		public static function getBlogList($page = 1) {
                $limit = self::SHOW_BY_DEFAULT;
                // Смещение (для запроса)
                $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
		$db = Db::getConnection();
                $sql='SELECT id, title, date, author_name, short_content, preview FROM blog ORDER BY id ASC LIMIT :limit OFFSET :offset';
                // Используется подготовленный запрос
                $result = $db->prepare($sql);
                $result->bindParam(':limit', $limit, PDO::PARAM_INT);
                $result->bindParam(':offset', $offset, PDO::PARAM_INT);
                // Выполнение коменды
                $result->execute();
                $i = 0;
		$blogList = array();				
		while($row = $result->fetch()) {
			$blogList[$i]['id'] = $row['id'];
			$blogList[$i]['title'] = $row['title'];
			$blogList[$i]['date'] = $row['date'];
			$blogList[$i]['author_name'] = $row['author_name'];
			$blogList[$i]['short_content'] = $row['short_content'];
                        $blogList[$i]['preview'] = $row['preview'];
			$i++;
		}

		return $blogList;
	
}

}