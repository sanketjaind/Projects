// AddStaff.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "AddStaff.h"
#include "afxdialogex.h"
#include "inc.h"

// AddStaff dialog

IMPLEMENT_DYNAMIC(AddStaff, CDialogEx)

AddStaff::AddStaff(CWnd* pParent /*=NULL*/)
	: CDialogEx(AddStaff::IDD, pParent)
	, name(_T(""))
	, depart(_T(""))
	, subject(_T(""))
	, scode(_T(""))
	, user1(_T(""))
	, pass1(_T(""))
{

}

AddStaff::~AddStaff()
{
}

void AddStaff::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT1, name);
	DDX_Text(pDX, IDC_EDIT3, depart);
	DDX_Text(pDX, IDC_EDIT4, subject);
	DDX_Text(pDX, IDC_EDIT6, scode);
	DDX_Text(pDX, IDC_EDIT5, user1);
	DDX_Text(pDX, IDC_EDIT2, pass1);
	DDX_Control(pDX, IDC_EDIT4, esubject);
}


BEGIN_MESSAGE_MAP(AddStaff, CDialogEx)
	ON_BN_CLICKED(IDOK, &AddStaff::OnBnClickedOk)
END_MESSAGE_MAP()


// AddStaff message handlers



void AddStaff::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	
	//UpdateData(true);
	//CString abc;
	//abc = user1;
	//staffname[1] = user1;
	//SetDlgItemText(IDC_EDIT1, abc);
	//MessageBox(abc  , NULL, MB_OK);
    
	//inc::staffname[0] = user1;
	//abc = inc::staffname[0];
	//MessageBox(abc, NULL, MB_OK);
	//static CString abc;

	UpdateData(true);
	static int i = 0;
	staffname = name;
	staffdep = depart;
	staffsub = subject;
	staffsubcode = scode;
	staffuser = user1;
	staffpass = pass1;
	UpdateData(false);
	CString abc;
	abc = "DATA SUCCESFULLY INSERTED";
	MessageBox(abc, NULL, MB_OK);
	//CDialogEx::OnOK();
}
// AddStaff.cpp : implementation file
//