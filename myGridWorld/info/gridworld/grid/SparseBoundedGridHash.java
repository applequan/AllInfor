/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2002-2006 College Entrance Examination Board 
 * (http://www.collegeboard.com).
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author DengQuanWen
 */
package info.gridworld.grid;
import info.gridworld.grid.SparseBoundedGrid.OccupantInCol;

import java.util.*;
/**
 * A <code>SpraseBoundedGridHash</code>  uses a HashTree to implement “sparse array” <br />
 * The implementation of this class is testable on the AP CS AB exam.
 */
public class SparseBoundedGridHash<E> extends AbstractGrid<E>
{
	
	 private Map<Location, E> occupantMap;
	 private int rown;
	private int coln;
	
	/* public SparseBoundedGridHash()
	    {
	        occupantMap = new HashMap<Location, E>();
	        rown=coln=0;
	    }*/
	  public SparseBoundedGridHash(int rows, int cols)
	    {
	        if (rows <= 0)
	            throw new IllegalArgumentException("rows <= 0");
	        if (cols <= 0)
	            throw new IllegalArgumentException("cols <= 0");
	        
	        occupantMap = new HashMap<Location, E>();
	        rown=rows;
	        coln=cols;
	    }
	  public int getNumRows()
	    {
	        return rown;
	    }

	    public int getNumCols()
	    {
	        // Note: according to the constructor precondition, numRows() > 0, so
	        // theGrid[0] is non-null.
	        return coln;
	    }

	    public boolean isValid(Location loc)
	    {
	    	return 0 <= loc.getRow() && loc.getRow() < getNumRows()
	        && 0 <= loc.getCol() && loc.getCol() < getNumCols();

	    }
	    public ArrayList<Location> getOccupiedLocations()
	    {
	        ArrayList<Location> a = new ArrayList<Location>();
	        for (Location loc : occupantMap.keySet())
	            a.add(loc);
	        return a;
	    }
	    public E get(Location loc)
	    {
	        if (loc == null)
	            throw new NullPointerException("loc == null");
	        return occupantMap.get(loc);
	    }

	    public E put(Location loc, E obj)
	    {
	        if (loc == null)
	            throw new NullPointerException("loc == null");
	        if (obj == null)
	            throw new NullPointerException("obj == null");
	        if(isValid(loc))
	        return occupantMap.put(loc, obj);
	        return null;
	    }

	    public E remove(Location loc)
	    {
	        if (loc == null)
	            throw new NullPointerException("loc == null");
	        return occupantMap.remove(loc);
	    }
	}