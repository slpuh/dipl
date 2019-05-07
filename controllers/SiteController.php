<?php

class SiteController
{
public function actionIndex()
    {
    $newsListMain = array();
    $newsListMine = News::getNewsListMine();             
    require_once(ROOT . '/views/site/index.php');
    return true;
    }
public function actionContact() {
                
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
    
            $errors = false;
                        
            // ��������� �����
            if (!User::checkEmail($userEmail)) {
                $errors[] = '������������ email';
            }
            
            if ($errors == false) {
                $adminEmail = 'vpooh95@gmail.com';
                $message = "�����: {$userText}. �� {$userEmail}";
                $subject = '���� ������';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    }
}


