// StaffMenu.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "StaffMenu.h"
#include "afxdialogex.h"
#include "AddStudent.h"
#include "MangeAttendance.h"
#include "studentInfo.h"
#include "inc.h"

// StaffMenu dialog

IMPLEMENT_DYNAMIC(StaffMenu, CDialog)

StaffMenu::StaffMenu(CWnd* pParent /*=NULL*/)
	: CDialog(StaffMenu::IDD, pParent)
{

}

StaffMenu::~StaffMenu()
{
}

void StaffMenu::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(StaffMenu, CDialog)
	ON_BN_CLICKED(IDC_BUTTON1, &StaffMenu::OnBnClickedButton1)
	ON_BN_CLICKED(IDC_BUTTON2, &StaffMenu::OnBnClickedButton2)
END_MESSAGE_MAP()


// StaffMenu message handlers


void StaffMenu::OnBnClickedButton1()
{
	// TODO: Add your control notification handler code here
	//studentInfo AddStudent;
	//AddStudent.DoModal();
	AddStudent.Create(IDD_DIALOG8);
	AddStudent.ShowWindow(SW_SHOW);
}


void StaffMenu::OnBnClickedButton2()
{
	// TODO: Add your control notification handler code here
	//MangeAttendance MangeAttendance;
	//MangeAttendance.DoModal();
	MangeAttendance.Create(IDD_DIALOG5);
	MangeAttendance.ShowWindow(SW_SHOW);
}
