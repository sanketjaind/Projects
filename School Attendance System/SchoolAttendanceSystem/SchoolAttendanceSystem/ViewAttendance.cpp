// ViewAttendance.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "ViewAttendance.h"
#include "afxdialogex.h"
#include "inc.h"

// ViewAttendance dialog

IMPLEMENT_DYNAMIC(ViewAttendance, CDialog)

ViewAttendance::ViewAttendance(CWnd* pParent /*=NULL*/)
	: CDialog(ViewAttendance::IDD, pParent)
{

}

ViewAttendance::~ViewAttendance()
{
}

void ViewAttendance::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(ViewAttendance, CDialog)
END_MESSAGE_MAP()


// ViewAttendance message handlers
