#pragma once
#include "inc.h"

// ViewAttendance dialog

class ViewAttendance : public CDialog, public inc
{
	DECLARE_DYNAMIC(ViewAttendance)

public:
	ViewAttendance(CWnd* pParent = NULL);   // standard constructor
	virtual ~ViewAttendance();

// Dialog Data
	enum { IDD = IDD_DIALOG6 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
};
