#pragma once


// StudentAttendance dialog

class StudentAttendance : public CDialog
{
	DECLARE_DYNAMIC(StudentAttendance)

public:
	StudentAttendance(CWnd* pParent = NULL);   // standard constructor
	virtual ~StudentAttendance();

// Dialog Data
	enum { IDD = IDD_DIALOG6 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
};
