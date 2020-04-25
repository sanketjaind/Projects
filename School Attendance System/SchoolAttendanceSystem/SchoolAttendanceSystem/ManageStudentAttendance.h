#pragma once


// ManageStudentAttendance dialog

class ManageStudentAttendance : public CDialog
{
	DECLARE_DYNAMIC(ManageStudentAttendance)

public:
	ManageStudentAttendance(CWnd* pParent = NULL);   // standard constructor
	virtual ~ManageStudentAttendance();

// Dialog Data
	enum { IDD = IDD_DIALOG5 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedOk();
};
