#pragma once
#include "inc.h"


// MangeAttendance dialog

class MangeAttendance : public CDialog, public inc
{
	DECLARE_DYNAMIC(MangeAttendance)

public:
	MangeAttendance(CWnd* pParent = NULL);   // standard constructor
	virtual ~MangeAttendance();

// Dialog Data
	enum { IDD = IDD_DIALOG5 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	CString abrollno;
	CString absubject;
	afx_msg void OnBnClickedOk();
	CString absentdate;
	CString type;
};
