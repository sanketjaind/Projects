#pragma once
#include "inc.h"


// IncorrectPass dialog

class IncorrectPass : public CDialog, public inc
{
	DECLARE_DYNAMIC(IncorrectPass)

public:
	IncorrectPass(CWnd* pParent = NULL);   // standard constructor
	virtual ~IncorrectPass();

// Dialog Data
	enum { IDD = IDD_DIALOG6 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
};
