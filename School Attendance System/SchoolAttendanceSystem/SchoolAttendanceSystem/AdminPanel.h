#pragma once
#include "inc.h"
#include "AddStaff.h"
#include "AddSubject.h"
// AdminPanel dialog

class AdminPanel : public CDialogEx, public inc
{
	DECLARE_DYNAMIC(AdminPanel)

public:
	
	AddStaff AddStaff;
	AddSubject AddSubject;
	AdminPanel(CWnd* pParent = NULL);   // standard constructor
	virtual ~AdminPanel();

// Dialog Data
	enum { IDD = IDD_DIALOG2 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedOk();
	afx_msg void OnBnClickedOk2();
};
