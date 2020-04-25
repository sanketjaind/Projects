#pragma once
#include "inc.h"

// AddSubject dialog

class AddSubject : public CDialog, public inc
{
	DECLARE_DYNAMIC(AddSubject)

public:
	AddSubject(CWnd* pParent = NULL);   // standard constructor
	virtual ~AddSubject();

// Dialog Data
	enum { IDD = IDD_DIALOG7 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedOk();
	afx_msg void OnEnChangeEdit1();
	CString subject1;
	CString scode1;
	CString credit;
};
