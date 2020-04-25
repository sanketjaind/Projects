#pragma once
#include "afxwin.h"
#include "inc.h"


// AddStaff dialog

class AddStaff : public CDialogEx, public inc
{
	DECLARE_DYNAMIC(AddStaff)

public:
	AddStaff(CWnd* pParent = NULL);   // standard constructor
	virtual ~AddStaff();

// Dialog Data
	enum { IDD = IDD_DIALOG4 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedOk();
	CString name;
	CString depart;
	CString subject;
	CString scode;
	CString user1;
	CString pass1;
	CEdit esubject;
};


