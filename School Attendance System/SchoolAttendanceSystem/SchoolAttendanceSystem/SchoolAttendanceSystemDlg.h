
// SchoolAttendanceSystemDlg.h : header file
//

#pragma once
#include "inc.h"
#include "StaffMenu.h"
#include "AdminPanel.h"
#include "CheckAttendance.h"

// CSchoolAttendanceSystemDlg dialog
class CSchoolAttendanceSystemDlg : public CDialogEx, public inc
{
// Construction
public:
	CSchoolAttendanceSystemDlg(CWnd* pParent = NULL);	// standard constructor
	StaffMenu StaffMenu;
	AdminPanel admin;
	CheckAttendance Check;
// Dialog Data
	enum { IDD = IDD_SCHOOLATTENDANCESYSTEM_DIALOG };

	protected:
	virtual void DoDataExchange(CDataExchange* pDX);	// DDX/DDV support


// Implementation
protected:
	HICON m_hIcon;

	// Generated message map functions
	virtual BOOL OnInitDialog();
	afx_msg void OnSysCommand(UINT nID, LPARAM lParam);
	afx_msg void OnPaint();
	afx_msg HCURSOR OnQueryDragIcon();
	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedRadio1();
	afx_msg void OnBnClickedOk();
	afx_msg void OnBnClickedRadio2();
	afx_msg void OnBnClickedRadio3();
	afx_msg void OnEnChangeEdit1();
	CString username;
	CString pass;
	afx_msg void OnEnChangeEdit2();
};
