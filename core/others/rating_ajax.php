<?php
/*
	Copyright � Eleanor CMS
	URL: http://eleanor-cms.ru, http://eleanor-cms.su, http://eleanor-cms.com, http://eleanor-cms.net, http://eleanor.su
	E-mail: support@eleanor-cms.ru, support@eleanor.su
	Developing: Alexander Sunvas*
	Interface: Rumin Sergey
	=====
	*Pseudonym
*/

class Rating_Ajax extends Rating
{
	{
		$can=$this->allow and (!$this->once and (int)$this->tremark or $this->uid);
		$T=new TimeCheck($this->mid,false,$this->uid);
		if($can)
			$can=!$T->Check($contid);
		if(!isset($data['total'],$data['average'],$data['sum']))
		{
			if(!list($data['total'],$data['average'],$data['sum'])=$R->fetch_row())
			{
				return false;
			}

		if($can and in_array($mark,$this->marks))
		{
			$data['sum']+=$mark;

			Eleanor::$Db->Update(
				$this->table,
				array(
					$this->f_total=>$data['total'],
					$this->f_average=>$data['average'],
					$this->f_sum=>$data['sum'],
				),
				'`'.$this->f_id.'`='.Eleanor::$Db->Escape($contid)
			);
			$T->Add($contid,$mark,$this->once,$this->tremark);
			$data['can']=false;
			$data['marks']=$this->marks;
			Result(Eleanor::$Template->Rating($data));
			return true;
		}
		Error();
	}
}