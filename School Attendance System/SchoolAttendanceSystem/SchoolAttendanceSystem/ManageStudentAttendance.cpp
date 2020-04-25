// ManageStudentAttendance.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "ManageStudentAttendance.h"
#include "afxdialogex.h"


// ManageStudentAttendance dialog

IMPLEMENT_DYNAMIC(ManageStudentAttendance, CDialog)

ManageStudentAttendance::ManageStudentAttendance(CWnd* pParent /*=NULL*/)
	: CDialog(ManageStudentAttendance::IDD, pParent)
{

}

ManageStudentAttendance::~ManageStudentAttendance()
{
}

void ManageStudentAttendance::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(ManageStudentAttendance, CDialog)
	ON_BN_CLICKED(IDOK, &ManageStudentAttendance::OnBnClickedOk)
END_MESSAGE_MAP()


// ManageStudentAttendance message handlers


void ManageStudentAttendance::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	CDialog::OnOK();
}
