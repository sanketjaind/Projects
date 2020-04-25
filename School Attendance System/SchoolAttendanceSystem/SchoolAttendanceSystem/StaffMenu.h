#pragma once
#include "inc.h"
#include "studentInfo.h"
#include "MangeAttendance.h"
// StaffMenu dialog

class StaffMenu : public CDialog, public inc
{
	DECLARE_DYNAMIC(StaffMenu)

public:
	StaffMenu(CWnd* pParent = NULL);   // standard constructor
	virtual ~StaffMenu();
	studentInfo AddStudent;
	MangeAttendance MangeAttendance;

// Dialog Data
	enum { IDD = IDD_DIALOG1 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedButton1();
	afx_msg void OnBnClickedButton2();
};
