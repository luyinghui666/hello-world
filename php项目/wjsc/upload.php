<?php
	//�ж��Ƿ��д����
	//var_dump($_FILES);
	if($_FILES['file']['error']){
		switch($_FILES['file']['error']){
			case 1:
			$str='�ϴ����ļ�������php.ini��upload_max_filesizeѡ�����Ƶ�ֵ';
			break;
			case 2:
			$str='�ϴ��ļ��Ĵ�С������HTML����MAX_FILE_SIZEѡ��ָ����ֵ';
			break;
			case 3:
			$str='�ļ�ֻ�в��ֱ��ϴ�';
			break;
			case 4:
			$str='û���ļ����ϴ�';
			break;
			case 6:
			$str='�Ҳ�����ʱ�ļ���';
			break;
			case 7:
			$str='�ļ�д��ʧ��';
			break;
		}
		echo $str;
		exit;
	}
	//�ж���׼����ļ��Ĵ�С
	if($_FILES['file']['size']>(pow(1024,2)*2)){  //2M���ش�С
		exit('�ļ���С������׼��Ĵ�С');
	}
		
		//�ж���׼���mime����  �ļ���׺
		$allowMime=['image/png','image/jpeg','image/gif','image/wbmp'];
		$allowSubFix=['png','jpeg','gif','wbmp','jpg'];
		
		$info=pathinfo($_FILES['file']['name']);
		$subFix=$info['extension'];  //��׺
		
		if(!in_array($subFix,$allowSubFix)){
			exit('��׼����ļ���׺');
		}
		if(!in_array($_FILES['file']['type'],$allowMime)){
			exit('��׼���Mime����');
			
		}
		
		
		//ƴ���ϴ�·��
		$path='upload/';
		if(!file_exists($path)){
			mkdir($path);
		}
		
		//�ļ������
		$name=uniqid().'.'.$subFix;
		//�ж��Ƿ��ϴ��ļ�
		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			if(move_uploaded_file($_FILES['file']['tmp_name'],$path.$name)){
				echo'�ϴ��ɹ�';
			}else{
				echo'�ļ��ƶ�ʧ��';
			}
		}else{
			echo'�����ϴ��ļ�';
			exit;
		}