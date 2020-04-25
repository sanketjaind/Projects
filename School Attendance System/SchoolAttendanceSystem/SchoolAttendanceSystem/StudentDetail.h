#pragma once


// StudentDetail dialog

class StudentDetail : public CDialogEx
{
	DECLARE_DYNAMIC(StudentDetail)

public:
	StudentDetail(CWnd* pParent = NULL);   // standard constructor
	virtual ~StudentDetail();

// Dialog Data
	enum { IDD = IDD_DIALOG3 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
};
