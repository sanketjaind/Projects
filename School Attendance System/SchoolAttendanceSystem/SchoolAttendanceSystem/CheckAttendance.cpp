// CheckAttendance.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "CheckAttendance.h"
#include "afxdialogex.h"
#include "inc.h"

// CheckAttendance dialog

IMPLEMENT_DYNAMIC(CheckAttendance, CDialogEx)

CheckAttendance::CheckAttendance(CWnd* pParent /*=NULL*/)
	: CDialogEx(CheckAttendance::IDD, pParent)
{

}

CheckAttendance::~CheckAttendance()
{
}


void CheckAttendance::assign(){
	tempuser = "12bce081";
	t1 = "17/11/14";
	t2 = "2ce309";
	t3 = "L";
	
}


void CheckAttendance::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
	DDX_Control(pDX, IDC_LIST1, adddate);
	DDX_Control(pDX, IDC_LIST2, addsubject);
	DDX_Control(pDX, IDC_LIST3, addtype);
}


BEGIN_MESSAGE_MAP(CheckAttendance, CDialogEx)
	ON_BN_CLICKED(IDOK, &CheckAttendance::OnBnClickedOk)
END_MESSAGE_MAP()


// CheckAttendance message handlers



void CheckAttendance::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	
	SetDlgItemText(IDC_EDIT1, tempuser);
	int i = 0;
	for (i = 0; i < 20; i++){
		if (tempuser == absrollno[i]){
			adddate.AddString(abdate[i]);
			addsubject.AddString(absub[i]);
			addtype.AddString(abtype[i]);
		}
	}
	
}
