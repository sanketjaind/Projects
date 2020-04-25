
// SchoolAttendanceSystemDlg.cpp : implementation file
//
#define TRUE 1
#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "SchoolAttendanceSystemDlg.h"
#include "ManageStudentAttendance.h"
#include "afxdialogex.h"
#include "AdminPanel.h"
#include "string.h"
#include "staffMenu.h"
#include "CheckAttendance.h"
#include "IncorrectPass.h"
#include "inc.h"

#ifdef _DEBUG
#define new DEBUG_NEW
#endif


// CAboutDlg dialog used for App About

class CAboutDlg : public CDialogEx
{
public:
	CAboutDlg();

// Dialog Data
	enum { IDD = IDD_ABOUTBOX };

	protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

// Implementation
protected:
	DECLARE_MESSAGE_MAP()
};

CAboutDlg::CAboutDlg() : CDialogEx(CAboutDlg::IDD)
{
}

void CAboutDlg::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
}

BEGIN_MESSAGE_MAP(CAboutDlg, CDialogEx)
END_MESSAGE_MAP()


// CSchoolAttendanceSystemDlg dialog



CSchoolAttendanceSystemDlg::CSchoolAttendanceSystemDlg(CWnd* pParent /*=NULL*/)
	: CDialogEx(CSchoolAttendanceSystemDlg::IDD, pParent)
	, username(_T(""))
	, pass(_T(""))
{
	m_hIcon = AfxGetApp()->LoadIcon(IDR_MAINFRAME);
}

void CSchoolAttendanceSystemDlg::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
	DDX_Text(pDX, IDC_EDIT1, username);
	DDV_MaxChars(pDX, username, 30);
	DDX_Text(pDX, IDC_EDIT2, pass);
	DDV_MaxChars(pDX, pass, 15);
}

BEGIN_MESSAGE_MAP(CSchoolAttendanceSystemDlg, CDialogEx)
	ON_WM_SYSCOMMAND()
	ON_WM_PAINT()
	ON_WM_QUERYDRAGICON()
	ON_BN_CLICKED(IDC_RADIO1, &CSchoolAttendanceSystemDlg::OnBnClickedRadio1)
	ON_BN_CLICKED(IDOK, &CSchoolAttendanceSystemDlg::OnBnClickedOk)
	ON_BN_CLICKED(IDC_RADIO2, &CSchoolAttendanceSystemDlg::OnBnClickedRadio2)
	ON_BN_CLICKED(IDC_RADIO3, &CSchoolAttendanceSystemDlg::OnBnClickedRadio3)
	ON_EN_CHANGE(IDC_EDIT1, &CSchoolAttendanceSystemDlg::OnEnChangeEdit1)
	ON_EN_CHANGE(IDC_EDIT2, &CSchoolAttendanceSystemDlg::OnEnChangeEdit2)
END_MESSAGE_MAP()


// CSchoolAttendanceSystemDlg message handlers

BOOL CSchoolAttendanceSystemDlg::OnInitDialog()
{
	CDialogEx::OnInitDialog();

	// Add "About..." menu item to system menu.

	// IDM_ABOUTBOX must be in the system command range.
	ASSERT((IDM_ABOUTBOX & 0xFFF0) == IDM_ABOUTBOX);
	ASSERT(IDM_ABOUTBOX < 0xF000);

	CMenu* pSysMenu = GetSystemMenu(FALSE);
	if (pSysMenu != NULL)
	{
		BOOL bNameValid;
		CString strAboutMenu;
		bNameValid = strAboutMenu.LoadString(IDS_ABOUTBOX);
		ASSERT(bNameValid);
		if (!strAboutMenu.IsEmpty())
		{
			pSysMenu->AppendMenu(MF_SEPARATOR);
			pSysMenu->AppendMenu(MF_STRING, IDM_ABOUTBOX, strAboutMenu);
		}
	}

	// Set the icon for this dialog.  The framework does this automatically
	//  when the application's main window is not a dialog
	SetIcon(m_hIcon, TRUE);			// Set big icon
	SetIcon(m_hIcon, FALSE);		// Set small icon

	// TODO: Add extra initialization here

	return TRUE;  // return TRUE  unless you set the focus to a control
}

void CSchoolAttendanceSystemDlg::OnSysCommand(UINT nID, LPARAM lParam)
{
	if ((nID & 0xFFF0) == IDM_ABOUTBOX)
	{
		CAboutDlg dlgAbout;
		dlgAbout.DoModal();
	}
	else
	{
		CDialogEx::OnSysCommand(nID, lParam);
	}
}

// If you add a minimize button to your dialog, you will need the code below
//  to draw the icon.  For MFC applications using the document/view model,
//  this is automatically done for you by the framework.

void CSchoolAttendanceSystemDlg::OnPaint()
{
	if (IsIconic())
	{
		CPaintDC dc(this); // device context for painting

		SendMessage(WM_ICONERASEBKGND, reinterpret_cast<WPARAM>(dc.GetSafeHdc()), 0);

		// Center icon in client rectangle
		int cxIcon = GetSystemMetrics(SM_CXICON);
		int cyIcon = GetSystemMetrics(SM_CYICON);
		CRect rect;
		GetClientRect(&rect);
		int x = (rect.Width() - cxIcon + 1) / 2;
		int y = (rect.Height() - cyIcon + 1) / 2;

		// Draw the icon
		dc.DrawIcon(x, y, m_hIcon);
	}
	else
	{
		CDialogEx::OnPaint();
	}
}

// The system calls this function to obtain the cursor to display while the user drags
//  the minimized window.
HCURSOR CSchoolAttendanceSystemDlg::OnQueryDragIcon()
{
	return static_cast<HCURSOR>(m_hIcon);
}


void CSchoolAttendanceSystemDlg::OnBnClickedRadio1()
{
	// TODO: Add your control notification handler code here
	char user[10] = "admin";
	char password[10] = "admin";
	UpdateData(true);
	if (username == user && pass == password)
	{
		//AdminPanel admin;
		//admin.DoModal();
		admin.Create(IDD_DIALOG2);
		admin.ShowWindow(SW_SHOW);
	}
	else
	{
		IncorrectPass ip;
		ip.DoModal();
	}
}


void CSchoolAttendanceSystemDlg::OnBnClickedOk()
{
	// TODO: Add your control notification handler code here
	char user[30] = "admin";
	char password[15] = "admin";
	//string  enterusername = pass;
	CDialogEx::OnOK();
}


void CSchoolAttendanceSystemDlg::OnBnClickedRadio2()
{
	// TODO: Add your control notification handler code here
	int flag = 0;
	int i = 0;
	staffuser = "abc";
	staffpass = "abc";
	UpdateData(true);
	for (int i = 0; i < 20; i++){
		if (staffuser[i] == username && staffpass[i] == pass)
			flag = 1;
	}
	
	if(flag == 1){
		//StaffMenu StaffMenu;
		//StaffMenu.DoModal();
		//CDialogEx::OnOK();
		StaffMenu.Create(IDD_DIALOG1);
		StaffMenu.ShowWindow(SW_SHOW);
		}
	else{
		CString abc;
		abc = "INCORRECT PASSWORD TRY AGAIN";
		MessageBox(abc, NULL, MB_OK);
	}

	/*UpdateData(true);

	if (staffuser == username && staffpass == pass){
		StaffMenu.Create(IDD_DIALOG1);
		StaffMenu.ShowWindow(SW_SHOW);
	}
	else{
		CString abc;
		abc = "INCORRECT PASSWORD TRY AGAIN";
		MessageBox(abc, NULL, MB_OK);
	}

	/*if (staffuser == username && staffpass == pass){
		//StaffMenu.Create(IDD_DIALOG1);
		//StaffMenu.ShowWindow(SW_SHOW);
		StaffMenu st;
		st.DoModel();
	}
	else{
		CString abc;
		abc = "INCORRECT PASSWORD TRY AGAIN";
		MessageBox(abc, NULL, MB_OK);
	}*/
	
	
	
	UpdateData(false);
	
}


void CSchoolAttendanceSystemDlg::OnBnClickedRadio3()
{
	// TODO: Add your control notification handler code here
	//studentuser = "12bce081";
	//studentpass = "12bce081";
	
	
	tempuser = username;
	int flag = 0;
	UpdateData(true);
	for (int i = 0; i < 20; i++){
		if (studentuser[i] == username && studentpass[i] == pass)
			flag = 1;
	}

	if (flag == 1){
		//CheckAttendance Check;
		//Check.DoModal();
		//CDialog::OnOK();
		Check.Create(IDD_STUDENTVIEW);
		Check.ShowWindow(SW_SHOW);
	}
	else{
		CString abc;
		abc = "INCORRECT PASSWORD TRY AGAIN";
		MessageBox(abc, NULL, MB_OK);
	}
	tempuser = username;
	UpdateData(false);

	/*if (studentuser == username && studentpass == pass){
	Check.Create(IDD_STUDENTVIEW);
	Check.ShowWindow(SW_SHOW);
	}
	else{
	CString abc;
	abc = "INCORRECT PASSWORD TRY AGAIN";
	MessageBox(abc, NULL, MB_OK);
	}*/

	/*UpdateData(true);

	if (studentuser == username && studentpass == pass){
		Check.Create(IDD_STUDENTVIEW);
		Check.ShowWindow(SW_SHOW);
	}
	else{
		CString abc;
		abc = "INCORRECT PASSWORD TRY AGAIN";
		MessageBox(abc, NULL, MB_OK);
	}

	
	

	UpdateData(false);*/
   
}


void CSchoolAttendanceSystemDlg::OnEnChangeEdit1()
{
	// TODO:  If this is a RICHEDIT control, the control will not
	// send this notification unless you override the CDialogEx::OnInitDialog()
	// function and call CRichEditCtrl().SetEventMask()
	// with the ENM_CHANGE flag ORed into the mask.

	// TODO:  Add your control notification handler code here
}

void CSchoolAttendanceSystemDlg::OnEnChangeEdit2()
{
	// TODO:  If this is a RICHEDIT control, the control will not
	// send this notification unless you override the CDialogEx::OnInitDialog()
	// function and call CRichEditCtrl().SetEventMask()
	// with the ENM_CHANGE flag ORed into the mask.

	// TODO:  Add your control notification handler code here
}
