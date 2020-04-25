// AddSubject.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "AddSubject.h"
#include "afxdialogex.h"
#include "inc.h"

// AddSubject dialog

IMPLEMENT_DYNAMIC(AddSubject, CDialog)

AddSubject::AddSubject(CWnd* pParent /*=NULL*/)
	: CDialog(AddSubject::IDD, pParent)
	, subject1(_T(""))
	, scode1(_T(""))
	, credit(_T(""))
{

}

AddSubject::~AddSubject()
{
}

void AddSubject::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT1, subject1);
	DDX_Text(pDX, IDC_EDIT2, scode1);
	DDX_Text(pDX, IDC_EDIT3, credit);
}


BEGIN_MESSAGE_MAP(AddSubject, CDialog)
	ON_BN_CLICKED(IDOK, &AddSubject::OnBnClickedOk)
	ON_EN_CHANGE(IDC_EDIT1, &AddSubject::OnEnChangeEdit1)
END_MESSAGE_MAP()


// AddSubject message handlers



void AddSubject::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	static int i = 0;
	UpdateData(true);
	subject = subject1;
	subjectname = scode1;
	subjectcode = credit;
	CString abc;
	abc = "DATA SUCCESFULLY INSERTED";
	MessageBox(abc, NULL, MB_OK);
	UpdateData(false);
	CDialog::OnOK();
}


void AddSubject::OnEnChangeEdit1()
{
	// TODO:  If this is a RICHEDIT control, the control will not
	// send this notification unless you override the CDialog::OnInitDialog()
	// function and call CRichEditCtrl().SetEventMask()
	// with the ENM_CHANGE flag ORed into the mask.

	// TODO:  Add your control notification handler code here
}
