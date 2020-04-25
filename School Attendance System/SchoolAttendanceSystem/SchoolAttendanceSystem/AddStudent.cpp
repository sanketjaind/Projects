// AddStudent.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "AddStudent.h"
#include "afxdialogex.h"
#include "AdminPanel.h"
#include "inc.h"


// AddStudent dialog

IMPLEMENT_DYNAMIC(AddStudent, CDialog)

AddStudent::AddStudent(CWnd* pParent /*=NULL*/)
	: CDialog(AddStudent::IDD, pParent)
	, rollno(_T(""))
	, sname(_T(""))
	, susername(_T(""))
	, spass(_T(""))
	, dob(_T(""))
	, sbranch1(_T(""))
{

}


AddStudent::~AddStudent()
{
}



void AddStudent::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT2, rollno);
	DDX_Text(pDX, IDC_EDIT3, sname);
	DDX_Text(pDX, IDC_EDIT5, susername);
	DDX_Text(pDX, IDC_EDIT6, spass);
	DDX_DateTimeCtrl(pDX, IDC_DATETIMEPICKER1, dob);
//	DDX_CBString(pDX, IDC_COMBO1, sbranch);
	DDX_Text(pDX, IDC_EDIT4, sbranch1);
}


BEGIN_MESSAGE_MAP(AddStudent, CDialog)
	ON_BN_CLICKED(IDOK, &AddStudent::OnBnClickedOk)
END_MESSAGE_MAP()


// AddStudent message handlers


void AddStudent::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	int i = 0;
}
