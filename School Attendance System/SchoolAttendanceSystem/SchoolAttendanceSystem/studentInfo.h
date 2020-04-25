#pragma once
#include "inc.h"


// studentInfo dialog

class studentInfo : public CDialog, public inc
{
	DECLARE_DYNAMIC(studentInfo)

public:
	studentInfo(CWnd* pParent = NULL);   // standard constructor
	virtual ~studentInfo();

// Dialog Data
	enum { IDD = IDD_DIALOG8 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	CString sdob;
	afx_msg void OnBnClickedOk3();
	CString srollno;
	CString sname;
	CString sbranch;
	CString suser;
	CString spassword;
};
