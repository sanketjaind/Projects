// AdminPanel.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "AdminPanel.h"
#include "afxdialogex.h"
#include "AddStaff.h"
#include "AddSubject.h"
#include "inc.h"


// AdminPanel dialog

IMPLEMENT_DYNAMIC(AdminPanel, CDialogEx)

AdminPanel::AdminPanel(CWnd* pParent /*=NULL*/)
	: CDialogEx(AdminPanel::IDD, pParent)
{

}

AdminPanel::~AdminPanel()
{
}

void AdminPanel::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(AdminPanel, CDialogEx)
	ON_BN_CLICKED(IDOK, &AdminPanel::OnBnClickedOk)
	ON_BN_CLICKED(IDOK2, &AdminPanel::OnBnClickedOk2)
END_MESSAGE_MAP()


// AdminPanel message handlers


void AdminPanel::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	//AddStaff AddStaff;
	//AddStaff.DoModal();
	AddStaff.Create(IDD_DIALOG4);
	AddStaff.ShowWindow(SW_SHOW);
}


void AdminPanel::OnBnClickedOk2()
{
	//AddSubject AddSubject;
	//AddSubject.DoModal();
	AddSubject.Create(IDD_DIALOG7);
	AddSubject.ShowWindow(SW_SHOW);
}
