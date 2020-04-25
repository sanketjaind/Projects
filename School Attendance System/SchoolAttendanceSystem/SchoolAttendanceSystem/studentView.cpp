// studentView.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "studentView.h"
#include "afxdialogex.h"




// studentView dialog

IMPLEMENT_DYNAMIC(studentView, CDialog)

studentView::studentView(CWnd* pParent /*=NULL*/)
	: CDialog(studentView::IDD, pParent)
{

}

studentView::~studentView()
{
}

void studentView::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(studentView, CDialog)
	ON_BN_CLICKED(IDC_BUTTON1, &studentView::OnBnClickedButton1)
	ON_BN_CLICKED(IDOK, &studentView::OnBnClickedOk)
END_MESSAGE_MAP()


// studentView message handlers


void studentView::OnBnClickedButton1()
{
	// TODO: Add your control notification handler code here
	StudentAttendance Attendance;
	Attendance.DoModal();
}


void studentView::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	CDialog::OnOK();
	
}
