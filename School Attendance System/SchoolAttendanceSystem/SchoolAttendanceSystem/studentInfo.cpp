// studentInfo.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "studentInfo.h"
#include "afxdialogex.h"
#include "inc.h"


// studentInfo dialog

IMPLEMENT_DYNAMIC(studentInfo, CDialog)

studentInfo::studentInfo(CWnd* pParent /*=NULL*/)
	: CDialog(studentInfo::IDD, pParent)
	, sdob(_T(""))
	, srollno(_T(""))
	, sname(_T(""))
	, sbranch(_T(""))
	, suser(_T(""))
	, spassword(_T(""))
{

}

studentInfo::~studentInfo()
{
}

void studentInfo::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
	DDX_DateTimeCtrl(pDX, IDC_DATETIMEPICKER1, sdob);
	DDX_Text(pDX, IDC_EDIT2, srollno);
	DDX_Text(pDX, IDC_EDIT3, sname);
	DDX_Text(pDX, IDC_EDIT1, sbranch);
	DDX_Text(pDX, IDC_EDIT5, suser);
	DDX_Text(pDX, IDC_EDIT6, spassword);
}


BEGIN_MESSAGE_MAP(studentInfo, CDialog)
	ON_BN_CLICKED(IDOK3, &studentInfo::OnBnClickedOk3)
END_MESSAGE_MAP()


// studentInfo message handlers



void studentInfo::OnBnClickedOk3()
{
	// TODO: Add your control notification handler code here
	static int i = 0;
	UpdateData(true);
	studentrollno[i] = srollno;
	studentname[i] = sname;
	studentbranch[i] = sbranch;
	studentdob[i] = sdob;
	studentuser[i] = suser;
	studentpass[i] = spassword;
	i++;
	UpdateData(false);
	CString abc;
	abc = "DATA SUCCESFULLY INSERTED";
	MessageBox(abc, NULL, MB_OK);
}
