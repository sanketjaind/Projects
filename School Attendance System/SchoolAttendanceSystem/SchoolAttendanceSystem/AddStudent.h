#pragma once


// AddStudent dialog
#include "inc.h"

class AddStudent : public CDialog, public inc
{
	DECLARE_DYNAMIC(AddStudent)

public:
	AddStudent(CWnd* pParent = NULL);   // standard constructor
	virtual ~AddStudent();

// Dialog Data
	enum { IDD = IDD_STUDENTDETAIL_DIALOG };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	CString rollno;
	CString sname;
	CString susername;
	CString spass;
	afx_msg void OnBnClickedOk();
	CString dob;
	CString sbranch;
	CString sbranch1;
};
