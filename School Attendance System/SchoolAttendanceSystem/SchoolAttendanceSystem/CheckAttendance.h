#pragma once
#include "inc.h"
#include "afxwin.h"


// CheckAttendance dialog

class CheckAttendance : public CDialogEx, public inc
{
	DECLARE_DYNAMIC(CheckAttendance)

public:
	CheckAttendance(CWnd* pParent = NULL);   // standard constructor
	virtual ~CheckAttendance();


// Dialog Data
	enum { IDD = IDD_STUDENTVIEW };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:


	afx_msg void OnBnClickedOk();
	afx_msg void assign();
	CListBox adddate;
	CListBox addsubject;
	CListBox addtype;
};
