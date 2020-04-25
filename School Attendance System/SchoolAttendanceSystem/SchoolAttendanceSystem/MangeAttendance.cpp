// MangeAttendance.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "MangeAttendance.h"
#include "afxdialogex.h"
#include "inc.h"

// MangeAttendance dialog

IMPLEMENT_DYNAMIC(MangeAttendance, CDialog)

MangeAttendance::MangeAttendance(CWnd* pParent /*=NULL*/)
	: CDialog(MangeAttendance::IDD, pParent)
	, abrollno(_T(""))
	, absubject(_T(""))
	, absentdate(_T(""))
	, type(_T(""))
{

}

MangeAttendance::~MangeAttendance()
{
}

void MangeAttendance::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT6, abrollno);
	DDX_Text(pDX, IDC_EDIT7, absubject);
	DDX_DateTimeCtrl(pDX, IDC_DATETIMEPICKER1, absentdate);
	DDX_Text(pDX, IDC_EDIT8, type);
}


BEGIN_MESSAGE_MAP(MangeAttendance, CDialog)
	ON_BN_CLICKED(IDOK, &MangeAttendance::OnBnClickedOk)
END_MESSAGE_MAP()


// MangeAttendance message handlers


void MangeAttendance::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	UpdateData(true);
	static int i = 0;
	abdate[i] = absentdate;
	absrollno[i] = abrollno;
	absub[i] = absubject;
	abtype[i] = type;
	i++;
	UpdateData(false);
	CString abc;
	abc = "DATA SUCCESFULLY INSERTED";
	MessageBox(abc, NULL, MB_OK);
	//CDialog::OnOK();
}
