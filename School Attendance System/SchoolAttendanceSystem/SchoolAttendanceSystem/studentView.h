#pragma once


// studentView dialog

class studentView : public CDialog
{
	DECLARE_DYNAMIC(studentView)

public:
	studentView(CWnd* pParent = NULL);   // standard constructor
	virtual ~studentView();

// Dialog Data
	enum { IDD = IDD_STUDENTVIEW };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedButton1();
	afx_msg void OnBnClickedOk();
};
