<?php
return array(
	#��� Classes/Settings.php
	'GROUP_EXISTS'=>'����� � ����� ���������� ������ ��� ����!',
	'OPTION_EXISTS'=>'� ��� ���� ��� ���� ������������ � ����� ��������� ��\'��!',
	'make_o_def_c'=>'�� ����� ������ ���������� ������� ������������ ����� &quot;%s&quot; �������������� �� ������������?',
	'olist'=>'������ �����������',
	'addg'=>'������ �����',
	'addo'=>'������ ������������',
	'options'=>function($n){ return$n.Ukrainian::Plural($n,array(' ������������',' ������������',' �����������')); },
	'up'=>'���������� �����',
	'down'=>'���������� ����',
	'reset_def_gr'=>'������� ������� ��������� ����� �������������� �� ������������',
	'make_def_gr'=>'������� ������� ��������� ����� �������������� �� ������������',
	'ops_wo_g_d'=>'�������� �� &quot;�����&quot; �������, ��� ���� �������� ���� ������, ������� ����� ������������ ���.',
	'find'=>'������',
	'ays_to_rg'=>'�� ����� ������ ������� ������������ ��� ����� &quot;%s&quot;?',
	'group'=>'�����',
	'reset_opt'=>'��������� �������� �� ������������',
	'default_opt'=>'������� ������� �������� ��������� �� ������������',
	'ex_with_ex'=>'��� ������� �����������',
	'ex_ignore'=>'����������',
	'ex_update'=>'������� �������� (���, ���� ��������)',
	'ex_full'=>'������� ��������',
	'ex_delete'=>'��������',
	'do_export'=>'������������',
	'select_file_im'=>'������� ���� � ��������������',
	'do_import'=>'�����������',
	'deleting_g'=>'�� ����� ������ �������� ����� ����������� &quot;%s&quot;?',
	'deleting_o'=>'�� ����� ������ �������� ������������ &quot;%s&quot;?',
	'pos'=>'�������',
	'pos_'=>'������� �������� ��� ��������� � �����',
	'keyw_g'=>'������� �����',
	'priv_name'=>'�������� ��\'�',
	'prot_g'=>'�������� �����?',
	'beg_subg'=>'��������� ������� �����������',
	'prot_o'=>'�������� ������������?',
	'multilang'=>'������������ �����������?',
	'multilang_'=>'��� ��������� �����, ������������ ���� ������������ � ����� ������� ���.',
	'eval_load'=>'������� ����� ������������',
	'inc_vars'=>'������ �����: %s',
	'op_example'=>'������� ������������',
	'eval_save'=>'������� ��� ����������',
	'edit_control'=>'���������� ���������',
	'evals'=>'������� �������',
	'error'=>'�������',
	'import_result'=>function($gd=0,$od=0,$ag=0,$ug=0,$ao=0,$uo=0)
	{
		$s=rtrim(($gd>0 ? $gd.Ukrainian::Plural($gd,array(' �����',' �����',' ����')).' ��������, ' : '')
			.($od>0 ? $od.Ukrainian::Plural($od,array(' ������������',' ������������',' �����������')).' ��������, ' : '')
			.($ag>0 ? $ag.Ukrainian::Plural($ag,array(' �����',' �����',' ����')).' ������, ' : '')
			.($ug>0 ? $ug.Ukrainian::Plural($ug,array(' �����',' �����',' ����')).' ��������, ' : '')
			.($ao>0 ? $ao.Ukrainian::Plural($ao,array(' ������������',' ������������',' �����������')).' ������, ' : '')
			.($uo>0 ? $uo.Ukrainian::Plural($uo,array(' ������������',' ������������',' �����������')).' ��������' : ''),', ');
		return$s ? $s : 'ͳ���� �� �����������';
	},
);