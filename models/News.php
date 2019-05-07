<?php


class News
{
        const SHOW_BY_DEFAULT = 3;
      
	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$newsItem = $result->fetch();
			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
       public static function getNewsCount($type) {
           $db = Db::getConnection();
	   $sql = 'SELECT count(*) AS count FROM news';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        

        // Выполнение коменды
        $result->execute();
        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
       }
       public static function getNewsList($page = 1) {
            $limit = self::SHOW_BY_DEFAULT;
             // Смещение (для запроса)
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
		$db = Db::getConnection();
                // Текст запроса к БД
		$sql='SELECT id, title, date, author_name, short_content_big, preview FROM news ORDER BY id ASC LIMIT :limit OFFSET :offset';
                // Используется подготовленный запрос
                $result = $db->prepare($sql);
                $result->bindParam(':limit', $limit, PDO::PARAM_INT);
                $result->bindParam(':offset', $offset, PDO::PARAM_INT);
                // Выполнение коменды
                $result->execute();
                // Получение и возврат результатов
                $i = 0;
                $newsList = array();
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['author_name'] = $row['author_name'];
			$newsList[$i]['short_content_big'] = $row['short_content_big'];
                        $newsList[$i]['preview'] = $row['preview'];
			$i++;
		}

		return $newsList;
	
}
public static function getNewsListMine() {
		$db = Db::getConnection();
		$newsListMine = array();
		$result = $db->query('SELECT id, title, date, short_content, preview FROM news ORDER BY id ASC LIMIT 3');
		$i = 0;
		while($row = $result->fetch()) {
			$newsListMine[$i]['id'] = $row['id'];
			$newsListMine[$i]['title'] = $row['title'];
			$newsListMine[$i]['date'] = $row['date'];
			$newsListMine[$i]['short_content'] = $row['short_content'];
                        $newsListMine[$i]['preview'] = $row['preview'];
			$i++;
		}

		return $newsListMine;
	
}


}